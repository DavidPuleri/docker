#!/usr/bin/php
<?php

if(!isset($argv[1])) { echo "Please specify a workspace\n"; die(); }
if(!isset($argv[2])) { echo "Please specify a base log folder\n"; die(); }


$workspace = $argv[1];
$baseLogFolder = $argv[2];
$host = $argv[3];
$env = 'prod';
$application = 'mycoachfootball_website';
$databaseLink = null;
$port = null;
if(!$host) {
    $host = 'www.mycoachfootball.com';
}


include './restart-container.php';
