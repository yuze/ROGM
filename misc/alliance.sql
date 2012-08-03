CREATE TABLE `alliance` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(256) default NULL,
  `master_id` int(11) not null default 0,
  `memo` text,
  `status` int(2) not null default 0,
  `created` datetime,
  `updated` datetime,
  PRIMARY KEY  (`id`),
  KEY `master_id` (`master_id`),
  KEY `status` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;
