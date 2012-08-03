CREATE TABLE `camp` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `master_id` int(11) not null default 0,
  `x` int(11),
  `y` int(11),
  `name` varchar(256) default NULL,
  `memo` text,
  `status` int(2) not null default 0,
  `created` datetime,
  `updated` datetime,
  PRIMARY KEY  (`id`),
  KEY `master_id` (`master_id`),
  KEY `map` (`x`,`y`),
  KEY `status` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;
