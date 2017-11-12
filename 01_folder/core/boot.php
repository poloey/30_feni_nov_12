<?php
require 'core/Db.php';
require 'core/Query.php';
require 'config.php';
$query = new Query(Db::connect($config));
