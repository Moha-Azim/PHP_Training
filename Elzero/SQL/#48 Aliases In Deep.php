<?php

/*

  Aliases In Deep


SELECT
  users.lang_id
FROM
  `users`, `langs`
WHERE
  users.lang_id = langs.lang_id;

SELECT
  users.user_id
FROM
  `users`, `langs`
WHERE
  users.lang_id = langs.lang_id;

SELECT
  users.user_id,
  users.user_name,
  langs.lang_name
FROM
  `users`, `langs`
WHERE
  users.lang_id = langs.lang_id;

SELECT
  u.user_id User_Id,
  u.user_name Username,
  l.lang_name Fav_Lang
FROM
  `users` u,
  `langs` l
WHERE
  u.lang_id = l.lang_id;

SELECT
  u.user_id,
  u.user_name,
  l.lang_name
FROM
  `users` u,
  `langs` l
WHERE
  u.lang_id = l.lang_id;

*/