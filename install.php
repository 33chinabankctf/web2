<?php
require_once('config.php');
$db = new Data_db();
$sql =<<<EOF
      CREATE TABLE users
      (id INT PRIMARY KEY     NOT NULL,
      user           CHAR(100)   NOT NULL,
      pass           CHAR(100)   NOT NULL);
EOF;

$ret = $db->exec($sql);

$sql =<<<EOF
      CREATE TABLE admin
      (id INT PRIMARY KEY     NOT NULL,
      code           CHAR(100)   NOT NULL);
EOF;

$ret = $db->exec($sql);

$sql =<<<EOF
      CREATE TABLE file
      (userid INT NOT NULL,
       email  CHAR(100) NOT NULL,
       commentsize   INT   NOT NULL);
EOF;

$ret = $db->exec($sql);



$sql =<<<EOF
      INSERT INTO admin (id,code)
      VALUES (1,'!@#a_');
EOF;

$ret = $db->exec($sql);


$sql = "insert into users(id,user,pass) values(1,'test','test')";
$ret = $db->exec($sql);
$sql =  "insert into file(userid,email,commentsize) values(1,'admin@wupco.cn','200')";
$ret = $db->exec($sql);
$db->close();
?>