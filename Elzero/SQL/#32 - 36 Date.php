/*

CURTIME()
CURRENT_TIME()
CURRENT_TIME
HH:MM:SS

CURDATE()
CURRENT_DATE()
CURRENT_DATE
YYYY-MM-DD

NOW()
CURRENT_TIMESTAMP()
CURRENT_TIMESTAMP
YYYY-MM-DD HH:MM:SS

-------------------------------------- #33

DAYNAME(Date)
DAYOFMONTH(Date) => == DAY()
DAYOFWEEK(Date)
DAYOFYEAR(Date)

-------------------------------------- #34

MONTH(Date)
MONTHNAME(Date)
HOUR(Date)
MINUTE(Date)

-------------------------------------- #35

DATEDIFF( Date , Date ) difference between dates


-------------------------------------- #36

LAST_DAY(Date) => last day in the month


DATE_ADD(Date, INTERVAL- Expression TimeUnit) =>
Ex.. SELECT theDate, DATE_ADD(theDate , INTERVAL 10 DAY) FROM nums

Ex.. SELECTtheDate, DATE_ADD(theDate , INTERVAL 10 MONTH) FROM nums



DATE_SUB(Date, INTERVAL- Expression TimeUnit)
Ex.. SELECT theDate , DATE_SUB(theDate , INTERVAL 2 MONTH) FROM nums


*/