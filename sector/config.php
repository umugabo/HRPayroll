<?php
//We start sessions
session_start();

/******************************************************
------------------Required Configuration---------------
Please edit the following variables so the members area
can work correctly.
******************************************************/

//We log to the DataBase
mysql_connect('localhost', 'root', '');
mysql_select_db('dbtest');


$url_home = 'index.php';

//Design Name
$design = 'default';
?>