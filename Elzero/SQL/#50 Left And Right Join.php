<?php

/*
  Left And Right Join


SELECT
  u.user_id,
  u.user_name,
  l.lang_name
FROM
  `users` u
INNER JOIN
  `langs` l
ON
  u.lang_id = l.lang_id;

SELECT
  u.user_id,
  u.user_name,
  l.lang_name
FROM
  `users` u
LEFT JOIN
  `langs` l
ON
  u.lang_id = l.lang_id;

SELECT
  u.user_id,
  u.user_name,
  l.lang_name
FROM
  `users` u
RIGHT JOIN
  `langs` l
ON
  u.lang_id = l.lang_id;

SELECT
  l.lang_name,
  COUNT(l.lang_id) How_Much_Used
FROM
  `users` u
INNER JOIN
  `langs` l
ON
  u.lang_id = l.lang_id;
GROUP BY
  l.lang_id

*/