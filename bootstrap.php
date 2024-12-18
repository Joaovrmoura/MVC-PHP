<?php

$config = require "config.php";
require "database/Connection.php";
require "database/migrations/CreateUser.php";
require "database/migrations/CreatePostsTable.php";

$pdo = connection::make($config['database']);


CreateUserTable::creatUserTable($pdo);
CreatePostsTable::createPostsTable($pdo);


