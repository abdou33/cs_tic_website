# cs_tic_website

data structure:

mysql> select * from events;
+------------+---------------+----------------------------------------------------------------------------------------------+----------+
| date       | title         | bodytext                                                                                     | time     |
+------------+---------------+----------------------------------------------------------------------------------------------+----------+
| 2008-11-11 | title event 1 | sdgreh et he5 gerh 5ehwesrg te4r                                                             | 08:00:00 |
| 2022-11-02 | title event 5 | uhduihfod sedg ihbohuioheouahfgsj hiuhu fiheiuoah iheiuy hye hehfuohe uihui hiuh iuhiu hfukj | 08:00:00 |
+------------+---------------+----------------------------------------------------------------------------------------------+----------+

2 rows in set (0.00 sec)


mysql> select * from news;
+------------+--------------+---------------------------------------------------------------------------------------+
| date       | title        | bodytext                                                                              |
+------------+--------------+---------------------------------------------------------------------------------------+
| 2018-10-02 | title news 1 | sdgreh et he5r re erg regre gergre gerh 5ehwesrg te4r                                 |
| 2018-10-09 | title news 2 | sdgreh et e gerh 5ehwesrg te4r                                                        |
| 2020-11-02 | title news 3 | uhduihfoihbohuioheouahfgsj hiuhu fiheiuoah iheiuy hye hehfuohe uihui hiuh iuhiu hfukj |
+------------+--------------+---------------------------------------------------------------------------------------+
3 rows in set (0.00 sec)

sql queries:

CREATE DATABASE cs_club;
USE cs_club;
CREATE TABLE `events` (
  `date` date DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `bodytext` varchar(500) DEFAULT NULL,
  `time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `news` (
  `date` date DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `bodytext` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;