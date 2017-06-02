/*
SQLyog Enterprise - MySQL GUI
MySQL - 5.5.44 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `question` (
	`id` double ,
	`choice` varchar (33),
	`votes` double ,
	`favorita` varchar (33)
); 
insert into `question` (`id`, `choice`, `votes`, `favorita`) values('1','Swift','2048','0');
insert into `question` (`id`, `choice`, `votes`, `favorita`) values('2','Python','1024','0');
insert into `question` (`id`, `choice`, `votes`, `favorita`) values('3','Objective-C','512','0');
insert into `question` (`id`, `choice`, `votes`, `favorita`) values('4','Ruby','256','0');
