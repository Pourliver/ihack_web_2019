DROP TABLE IF EXISTS users;

CREATE TABLE users(
  id       INTEGER PRIMARY KEY AUTOINCREMENT,
  username TEXT NOT NULL,
  password TEXT NOT NULL,
  enabled  INTEGER DEFAULT 1
);

INSERT INTO users(username, password) VALUES('admin', 'FLAG{MOM_LOOK_IM_GETTING_A_FLAG}');
INSERT INTO users(username, password) VALUES('guest', 'PASSW0RD!');
INSERT INTO users(username, password) VALUES('corp', 'OJF@_(H$*T@)_ÇF(Y#F');
INSERT INTO users(username, password) VALUES('freud', 'FREDOU12B');
INSERT INTO users(username, password, enabled) VALUES('Dum', 'B)(GBSIFHO:O#@)CHOWEG', 0);
