# db_connection summary

```txt
db connection summary
```

## mysql commands

```bash
mysql --version
# mysql  Ver 8.0.34 for Linux on x86_64 (MySQL Community Server - GPL)

service mysql status
 # * MySQL is stopped.

sudo service mysql start
 # * Starting MySQL database server mysqld [ OK ]

  mysql -u root -p
```

## create database

```sql
CREATE DATABASE chain_gang;

GRANT ALL PRIVILEGES ON chang_gang.*
TO 'webuser'@'localhost'
IDENTIFIED BY 'secretpassword'

USE chain_gang;

SHOW DATABASES;
```

```sql
# mysql 8
 CREATE USER 'webuser'@'localhost' IDENTIFIED BY 'secretpassword';
  GRANT ALL PRIVILEGES ON chang_gang.* TO 'webuser'@'localhost';
```

## create tables

```sql
 SHOW TABLES;

DROP TABLE IF EXISTS `admins`;

DROP TABLE IF EXISTS `bicycles`;
CREATE TABLE `bicycles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `year` int(4) NOT NULL,
  `category` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `price` decimal(9,2) NOT NULL,
  `weight_kg` decimal(9,5) NOT NULL,
  `condition_id` tinyint(3) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

```

```bash
 SHOW FIELDS FROM bicycles;

+--------------+--------------+------+-----+---------+----------------+
| Field        | Type         | Null | Key | Default | Extra          |
+--------------+--------------+------+-----+---------+----------------+
| id           | int          | NO   | PRI | NULL    | auto_increment |
| brand        | varchar(255) | NO   |     | NULL    |                |
| model        | varchar(255) | NO   |     | NULL    |                |
| year         | int          | NO   |     | NULL    |                |
| category     | varchar(255) | NO   |     | NULL    |                |
| gender       | varchar(255) | NO   |     | NULL    |                |
| color        | varchar(255) | NO   |     | NULL    |                |
| price        | decimal(9,2) | NO   |     | NULL    |                |
| weight_kg    | decimal(9,5) | NO   |     | NULL    |                |
| condition_id | tinyint      | NO   |     | NULL    |                |
| description  | text         | NO   |     | NULL    |                |
+--------------+--------------+------+-----+---------+----------------+
```

## insert data

```bash
mysql> INSERT INTO `bicycles` 
       VALUES 
(1,'Trek','Emonda',2017,'Hybrid','Unisex','black',1495.00,1.50000,5,''),
(2,'Cannondale','Synapse',2016,'Road','Unisex','matte black',1999.00,1.00000,5,'');
```

```bash
mysql> SELECT * FROM bicycles;
+----+------------+---------+------+----------+--------+-------------+---------+-----------+--------------+-------------+
| id | brand      | model   | year | category | gender | color       | price   | weight_kg | condition_id | description |
+----+------------+---------+------+----------+--------+-------------+---------+-----------+--------------+-------------+
|  1 | Trek       | Emonda  | 2017 | Hybrid   | Unisex | black       | 1495.00 |   1.50000 |            5 |
|
|  2 | Cannondale | Synapse | 2016 | Road     | Unisex | matte black | 1999.00 |   1.00000 |            5 |
|
+----+------------+---------+------+----------+--------+-------------+---------+-----------+--------------+-------------+
2 rows in set (0.00 sec)
```

## php db_connect

```php
// initialize.php
$database = db_connect()

// database_functions.php

// connect to database
function db_connect() {
    $connection = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    
    // check if connection is successful
    confirm_db_connect($connection);
    return $connection;
}

// database connection error handling
function confirm_db_connect($connection) {
    if($connection->connect_errno) {
        $msg = "Database connection failded: ";
        $msg .= $connection->connect_error;
        $msg .= "(" . $connection->connect_errno . ")";
        exit($msg);
    }
}

```