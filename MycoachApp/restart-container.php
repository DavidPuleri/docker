<?php

exec("docker ps | grep ".$application." | awk '{print $1}'",$runningProcess, $returnValue);
foreach($runningProcess as $processToRestart){
    echo 'Restarting container';
    exec('docker restart '.$processToRestart,$output);
}

if(0 == count($runningProcess)){
    echo 'No process found';
    $result = exec('docker rm '.$application);


    $workspace = $argv[1];
    $baseLogFolder = $argv[2];
    $env = $argv[3];

    $cmd='docker run -d -p "1234:80" ' .
        '-v "'.$workspace.':/workspace" ' .
        '-v "'.$baseLogFolder.':/var/log/nginx" ' .
        '-v "'.getcwd().'/host:/etc/nginx/conf.d" ' .
        '--link '.$databaseLink.':mysql ' .
        '--name ' . $application .
        'docker-registry.mycoachfootball.com:5000/global/nginx';

    echo 'Running '.$cmd;
    $ran = exec($cmd, $result, $returned);



}


exec('sh update-config.sh '.$workspace.' '.$env);


