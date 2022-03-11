<?php

/*

  If Condition
  IF(Condition, True, False)


SELECT id, name, IF(number < 24, 'Hard Luck', 'Congratz') AS result FROM `try`;

SELECT id, name, IF(number < 24, CONCAT('Hard Luck', number), CONCAT('Congratz', number)) AS result FROM `try`;

UPDATE `try` SET `number` = IF(number < 1, number + 10, number)

*/