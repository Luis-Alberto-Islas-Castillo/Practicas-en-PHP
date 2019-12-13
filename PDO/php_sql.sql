CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `email` varchar(19) NOT NULL,
  `pasword` varchar(8) NOT NULL,
  `status_id` int(11) NOT NULL,
  `user_type_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user` (`id`, `email`, `pasword`, `status_id`, `user_type_id`) VALUES
	(1, 'luis@correo.com', '12345678', 1, 2),
	(2, 'angel@correo.com', '234567', 1, 1),
	(3, 'ana@correo.com', '567890', 2, 1);
