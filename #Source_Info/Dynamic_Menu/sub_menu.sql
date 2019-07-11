CREATE TABLE IF NOT EXISTS `sub_menu` (
  `s_menu_id` int(2) NOT NULL AUTO_INCREMENT,
  `m_menu_id` int(2) NOT NULL,
  `s_menu_name` varchar(20) NOT NULL,
  `s_menu_link` varchar(50) NOT NULL,
  PRIMARY KEY (`s_menu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;