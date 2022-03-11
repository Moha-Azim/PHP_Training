<?php

/*
  Simulation Of Join


CREATE TABLE (
  user_id INT NOT NULL AUTO_INCREMENT,
  user_name varchar(255),
  lang_id INT NOT NULL,
  PRIMARY KEY (user_id),
  FOREIGN KEY (lang_id) REFERENCES langs(lang_id)
) ENGINE = INNODB;

SELECT * FROM `users`, `langs`;

SELECT * FROM `users`, `langs` WHERE users.lang_id = langs.lang_id;
*/