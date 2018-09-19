-- --------------------------------------------------------
-- 主机:                           192.168.1.180
-- 服务器版本:                        5.5.50-MariaDB - MariaDB Server
-- 服务器操作系统:                      Linux
-- HeidiSQL 版本:                  9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 导出 docker 的数据库结构
CREATE DATABASE IF NOT EXISTS `docker` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `docker`;


-- 导出  表 docker.dkcreated 结构
CREATE TABLE IF NOT EXISTS `dkcreated` (
  `Id` tinyint(10) unsigned NOT NULL,
  `date` varchar(50) NOT NULL,
  `host` varchar(50) NOT NULL DEFAULT '0',
  `hports` varchar(50) NOT NULL DEFAULT '0',
  `project` varchar(50) NOT NULL DEFAULT '0',
  `progdir` varchar(50) NOT NULL DEFAULT '0',
  `logdir` varchar(50) NOT NULL DEFAULT '0',
  `cname` varchar(50) NOT NULL DEFAULT '0',
  `image` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 正在导出表  docker.dkcreated 的数据：~5 rows (大约)
/*!40000 ALTER TABLE `dkcreated` DISABLE KEYS */;
INSERT INTO `dkcreated` (`Id`, `date`, `host`, `hports`, `project`, `progdir`, `logdir`, `cname`, `image`) VALUES
	(4, '20161222 18:54:01', '192.168.100.21', '10007-10008-10009-', 'food', '/mnt/sdc/docker/food/running/apache-tomcat-food', '/mnt/sdc/docker/food/logs4', 'food4', 'centos:tomcat'),
	(5, '20161223 10:57:20', '192.168.1.180', '10004-10005-10006-', 'food', '/mnt/docker/food/running/apache-tomcat-food', '/mnt/docker/food/logs5', 'food5', 'centos:tomcat'),
	(6, '20170104 15:24:16', '192.168.1.180', '10007-10008-10009-', 'food', '/mnt/docker/food/running/apache-tomcat-food', '/mnt/docker/food/logs6', 'food6', 'centos:tomcat'),
	(7, '20170104 15:46:33', '192.168.1.180', '10010-10011-10012-', 'food', '/mnt/docker/food/running/apache-tomcat-food', '/mnt/docker/food/logs7', 'food7', 'centos:tomcat'),
	(8, '20170104 16:03:07', '192.168.100.21', '10010-10011-10012-', 'food', '/mnt/sdc/docker/food/running/apache-tomcat-food', '/mnt/sdc/docker/food/logs8', 'food8', 'centos:tomcat');
/*!40000 ALTER TABLE `dkcreated` ENABLE KEYS */;


-- 导出  表 docker.dkprojstatus 结构
CREATE TABLE IF NOT EXISTS `dkprojstatus` (
  `cid` varchar(50) DEFAULT NULL,
  `pid` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 正在导出表  docker.dkprojstatus 的数据：~1 rows (大约)
/*!40000 ALTER TABLE `dkprojstatus` DISABLE KEYS */;
INSERT INTO `dkprojstatus` (`cid`, `pid`) VALUES
	('', NULL);
/*!40000 ALTER TABLE `dkprojstatus` ENABLE KEYS */;


-- 导出  表 docker.dockercontainers 结构
CREATE TABLE IF NOT EXISTS `dockercontainers` (
  `ip` varchar(50) DEFAULT NULL,
  `cid` varchar(50) DEFAULT NULL,
  `cname` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `cmd` varchar(50) DEFAULT NULL,
  `createtime` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `ports` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 正在导出表  docker.dockercontainers 的数据：~5 rows (大约)
/*!40000 ALTER TABLE `dockercontainers` DISABLE KEYS */;
INSERT INTO `dockercontainers` (`ip`, `cid`, `cname`, `image`, `cmd`, `createtime`, `status`, `ports`) VALUES
	('', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	('192.168.100.21', '34c90c9ca3b8', 'food4', 'centos:tomcat', '"/usr/sbin/init"', '2016-12-22 18:54:00 +0800 CST', 'Up 7 days', '22/tcp 80/tcp 443/tcp 0.0.0.0:10007->8030/tcp 0.0.0.0:10008->8031/tcp 0.0.0.0:10009->8032/tcp'),
	('192.168.1.180', '22c8103e681c', 'food7', 'centos:tomcat', '"/usr/sbin/init"', '2017-01-04 15:46:30 +0800 CST', 'Up 7 days', '22/tcp 80/tcp 443/tcp 0.0.0.0:10010->8030/tcp 0.0.0.0:10011->8031/tcp 0.0.0.0:10012->8032/tcp'),
	('192.168.1.180', 'e243b880ce8a', 'food6', 'centos:tomcat', '"/usr/sbin/init"', '2017-01-04 15:24:14 +0800 CST', 'Up 7 days', '22/tcp 80/tcp 443/tcp 0.0.0.0:10007->8030/tcp 0.0.0.0:10008->8031/tcp 0.0.0.0:10009->8032/tcp'),
	('192.168.1.180', 'a3bf8b502010', 'food5', 'centos:tomcat', '"/usr/sbin/init"', '2016-12-23 10:57:18 +0800 CST', 'Up 7 days', '22/tcp 80/tcp 443/tcp 0.0.0.0:10004->8030/tcp 0.0.0.0:10005->8031/tcp 0.0.0.0:10006->8032/tcp');
/*!40000 ALTER TABLE `dockercontainers` ENABLE KEYS */;


-- 导出  表 docker.dockerhost 结构
CREATE TABLE IF NOT EXISTS `dockerhost` (
  `ip` varchar(50) DEFAULT NULL,
  `ports` varchar(2000) DEFAULT NULL,
  `hostdir` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 正在导出表  docker.dockerhost 的数据：~2 rows (大约)
/*!40000 ALTER TABLE `dockerhost` DISABLE KEYS */;
INSERT INTO `dockerhost` (`ip`, `ports`, `hostdir`) VALUES
	('192.168.100.21', '10000-10001-10002-10003-10004-10005-10006-10007-10008-10009-10010-10011-10012-', '/mnt/sdc/docker'),
	('192.168.1.180', '10000-10001-10002-10003-10004-10005-10006-10007-10008-10009-10010-10011-10012-', '/mnt/docker');
/*!40000 ALTER TABLE `dockerhost` ENABLE KEYS */;


-- 导出  表 docker.dockerimage 结构
CREATE TABLE IF NOT EXISTS `dockerimage` (
  `imagename` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `filename` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 正在导出表  docker.dockerimage 的数据：~1 rows (大约)
/*!40000 ALTER TABLE `dockerimage` DISABLE KEYS */;
INSERT INTO `dockerimage` (`imagename`, `location`, `filename`) VALUES
	('centos:tomcat', '192.168.1.180:/mnt/docker/images', 'tomcat.tar');
/*!40000 ALTER TABLE `dockerimage` ENABLE KEYS */;


-- 导出  表 docker.dockerproject 结构
CREATE TABLE IF NOT EXISTS `dockerproject` (
  `projname` varchar(50) DEFAULT NULL,
  `projdir` varchar(100) DEFAULT NULL,
  `ports` varchar(50) DEFAULT NULL,
  `progdir` varchar(50) DEFAULT NULL,
  `logdir` varchar(50) DEFAULT NULL,
  `startscript` varchar(100) DEFAULT NULL,
  `stopscript` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `dstwebapp` varchar(50) DEFAULT NULL,
  `svnprojname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 正在导出表  docker.dockerproject 的数据：~1 rows (大约)
/*!40000 ALTER TABLE `dockerproject` DISABLE KEYS */;
INSERT INTO `dockerproject` (`projname`, `projdir`, `ports`, `progdir`, `logdir`, `startscript`, `stopscript`, `location`, `dstwebapp`, `svnprojname`) VALUES
	('food', '/apache-tomcat-food', '8030-8031-8032', '/usr/local/apache-tomcat-food', '/usr/local/apache-tomcat-food/logs', '/bin/startup.sh', '/bin/shutdown.sh', '192.168.1.180:/root/repo/xhy-food/trunk/xhy-food/target/food', '/webapps/food', 'xhy-food');
/*!40000 ALTER TABLE `dockerproject` ENABLE KEYS */;


-- 导出  表 docker.svnproject 结构
CREATE TABLE IF NOT EXISTS `svnproject` (
  `projname` varchar(50) DEFAULT NULL,
  `repodir` varchar(50) DEFAULT NULL,
  `mvndir` varchar(50) DEFAULT NULL,
  `dstlocation` varchar(50) DEFAULT NULL,
  `url` varchar(50) DEFAULT NULL,
  `dkprojname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 正在导出表  docker.svnproject 的数据：~1 rows (大约)
/*!40000 ALTER TABLE `svnproject` DISABLE KEYS */;
INSERT INTO `svnproject` (`projname`, `repodir`, `mvndir`, `dstlocation`, `url`, `dkprojname`) VALUES
	('xhy-food', '/root/repo', '/root/repo/xhy-food/trunk/xhy-food', '/root/repo/xhy-food/trunk/xhy-food/target/food', 'svn://192.168.1.179/repo/xhy-food', 'food');
/*!40000 ALTER TABLE `svnproject` ENABLE KEYS */;


-- 导出  表 docker.users 结构
CREATE TABLE IF NOT EXISTS `users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- 正在导出表  docker.users 的数据：~1 rows (大约)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`Id`, `name`, `password`) VALUES
	(1, 'yanght', 'yanght');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
