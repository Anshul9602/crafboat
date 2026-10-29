-- Run once in phpMyAdmin (demo DB) if video/menu columns are missing.
-- Do NOT run this from a normal page request — shared hosts often kill the connection on ALTER.

ALTER TABLE `oc_collection`
  ADD COLUMN `video` varchar(255) NOT NULL DEFAULT '' AFTER `image`;

ALTER TABLE `oc_collection`
  ADD COLUMN `menu` tinyint(1) NOT NULL DEFAULT 1 AFTER `status`;
