<?php

exec("docker ps | grep " . $application . " | awk '{print $1}'", $runningProcess, $returnValue);
foreach ($runningProcess as $processToRestart) {
    echo 'Restarting container';
    exec('docker restart ' . $processToRestart, $output);
}

if (0 == count($runningProcess)) {
    echo 'No process found';
    $result = exec('docker rm ' . $application);

    $cmd = 'docker run -d';

    if ($port) {
        $cmd = '-p "' . $port . ':80" ';
    }

    $cmd .= '-v "' . $workspace . ':/workspace" ' .
        '-v "' . $baseLogFolder . ':/var/log/nginx" ' .
        '-v "' . getcwd() . '/' . $application . ':/etc/nginx/conf.d" ';

    if ($databaseLink) {
        $cmd .= '--link ' . $databaseLink . ':mysql ';
    }
    $cmd .= '-e "VIRTUAL_HOST=' . $host . '" ' .
        '--name ' . $application .
        ' docker-registry.mycoachfootball.com:5000/global/nginx';

    echo 'Running ' . $cmd;
    $ran = exec($cmd, $result, $returned);


}

