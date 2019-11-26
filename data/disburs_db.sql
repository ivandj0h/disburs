-- 1  create database  disburs_db.sql
CREATE DATABASE IF NOT EXISTS `disburs_db` ;
USE `disburs_db`;

-- 2 create table disburs_tbl.disburs_db
CREATE TABLE IF NOT EXISTS `disburs_tbl` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `time_served` char(50) DEFAULT NULL,
    `id_disburs` char(50) DEFAULT NULL,
    `receipt` varchar(250) DEFAULT NULL,
    `status_disburs` varchar(250) DEFAULT NULL,
    `response` text,
    `request` text,
    `api` varchar(200) DEFAULT NULL,
    `created_at` datetime DEFAULT NULL,
    `updated_at` datetime DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 3 insert data into disburs_tbl.disburs_db
INSERT INTO `disburs_tbl` (`id`, `time_served`, `id_disburs`, `receipt`, `status_disburs`, `response`, `request`, `api`, `created_at`, `updated_at`) VALUES
	(1, '2019-10-04 01:08:46', '5468354577', 'https://flip-receipt.oss-ap-southeast-5.aliyuncs.com/debit_receipt/126316_3d07f9fef9612c7275b3c36f7e1e5762.jpg', 'PENDING', '{"id":5468354577,"amount":10000,"status":"PENDING","timestamp":"2019-10-04 00:59:46","bank_code":"bni","account_number":"1234567890","beneficiary_name":"PT FLIP","remark":"sample remark","receipt":"https://flip-receipt.oss-ap-southeast-5.aliyuncs.com/debit_receipt/126316_3d07f9fef9612c7275b3c36f7e1e5762.jpg","time_served":"2019-10-04 01:08:46","fee":4000}', '{"account_number":"1234567890","bank_code":"bni","amount":"10000","remark":"bsample remarkni"}', 'https://nextar.flip.id/disburse', '2019-10-04 01:08:57', '2019-10-04 01:09:45');

