#!/usr/bin/php
<?php

if(!isset($argv[1])) { echo "Please specify a workspace\n"; die(); }
if(!isset($argv[2])) { echo "Please specify a base log folder\n"; die(); }


$workspace = $argv[1];
$baseLogFolder = $argv[2];
$env = 'qa';
$application = 'mycoachfootball_web';
$databaseLink = 'mycoachfootball_db';
$port = "1234";
$host = 'app.mycoachfootball.com';

include './restart-container.php';
