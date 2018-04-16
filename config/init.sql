create database dotinstall_sns_php;

grant all on dotinstall_sns_php.* to dbuser@localhost identified by 'mu4u';

use dotinstall_sns_php

create table users (
  id int   not null auto_increment PRIMARY KEY ,
  email VARCHAR (255) unique,
  password VARCHAR (255),
  created datetime,
  modified datetime

);

desc users;