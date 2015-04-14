#!/usr/bin/php
<?php

if(!isset($argv[1])) { echo "Please specify a workspace\n"; die(); }
if(!isset($argv[2])) { echo "Please specify a base log folder\n"; die(); }


$workspace = $argv[1];
$baseLogFolder = $argv[2];
$env = 'prod';
$application = 'estrosi2015_web';
$databaseLink = 'estrosi2015_db';
$port = "55556";
$host = 'www.estrosi2015.com';

include './restart-container.php';
