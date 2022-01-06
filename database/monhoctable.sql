create database 1951060937_university;
use 1951060937_university;
CREATE TABLE `monhoc` (
  `mamh` int NOT NULL AUTO_INCREMENT,
  `ten_mh` varchar(255) NOT NULL,
  `sotinchi` int NOT NULL DEFAULT '0',
  `sotiet_bt` int NOT NULL DEFAULT '0',
  `sotiet_lt` int NOT NULL DEFAULT '0',
  `sotiet_thtn` int NOT NULL DEFAULT '0',
  `sogio_tuhoc` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`mamh`)
);

INSERT INTO `monhoc` (ten_mh, sotinchi, sotiet_bt, sotiet_lt, sotiet_thtn, sogio_tuhoc)
VALUES ('vatlydaicuong', '3', '10', '10', '2', '10');
