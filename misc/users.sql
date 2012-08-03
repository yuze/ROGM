CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(64) default NULL,
  `password` varchar(64) default NULL,
  `status` int(2) NOT NULL default '0',
  `last_login` datetime default NULL,
  `created` datetime default NULL,
  `updated` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=200 DEFAULT CHARSET=utf8;
