CREATE TABLE IF NOT EXISTS `kwf_queue` (
  `id` int(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `payload` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `result` text NOT NULL,
  `log` text NOT NULL,
  `started` datetime NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `kwf_queue`
  ADD PRIMARY KEY (`id`), ADD KEY `status` (`status`);

ALTER TABLE `kwf_queue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
