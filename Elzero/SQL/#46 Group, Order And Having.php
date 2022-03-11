/*
Group By, Order By And Having
*/

SELECT * FROM `contribution` ORDER BY `name`;

SELECT * FROM `contribution` ORDER BY `name`, `points`;

SELECT * FROM `contribution` GROUP BY `name`;

SELECT name, points FROM `contribution` GROUP BY `name`;

SELECT name, SUM(points) FROM `contribution` GROUP BY `name`;

SELECT name, SUM(points) FROM `contribution` GROUP BY `name` ORDER BY points; ///////// important

SELECT name, SUM(points) FROM `contribution` GROUP BY `name` ORDER BY points DESC; ///////// important

SELECT status FROM `orders` ORDER BY status;

SELECT status, COUNT(status) How_Much FROM `orders` GROUP BY status ORDER BY status; //////// important

SELECT status, COUNT(status) How_Much FROM `orders` GROUP BY status HAVING How_Much > 1; //////////// important