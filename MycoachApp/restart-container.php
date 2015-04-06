<?php

exec("docker ps | grep mycoachfootball_web | awk '{print $1}'",$runningProcess, $returnValue);
foreach($runningProcess as $processToRestart){
    echo 'Restarting container';
    exec('docker restart '.$processToRestart,$output);
}

if(0 == count($runningProcess)){
    echo 'No process found';
    $result = exec('docker rm mycoachfootball_web');


    $workspace = $argv[1];
    $baseLogFolder = $argv[2];

    $cmd='docker run -d -p "1234:80" ' .
        '-v "'.$workspace.':/var/www/html" ' .
        '-v "'.$baseLogFolder.':/var/log/nginx" ' .
        '-v "'.getcwd().'/host:/etc/nginx/sites-enabled" ' .
        '--link mycoachfootball_db:mysql ' .
        '--name mycoachfootball_web ' .
        'docker-registry.mycoachfootball.com:5000/global/nginx';

    echo $cmd;
    $ran = exec($cmd, $result, $returned);
    var_dump($result);
    var_dump($returned);



}