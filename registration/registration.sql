CREATE TABLE IF NOT EXISTS `user` (
  `userid` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
)  ;
