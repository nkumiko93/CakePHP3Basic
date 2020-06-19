-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 16, 2020 at 08:32 AM
-- Server version: 5.7.26
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `caketest`
--

-- --------------------------------------------------------

--
-- Table structure for table `Samples`
--

CREATE TABLE `Samples` (
  `id` int(11) NOT NULL,
  `data1` int(11) NOT NULL,
  `data2` REAL,
  `data3` TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Samples`
--
ALTER TABLE `Samples`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Samples`
--
ALTER TABLE `Samples`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
