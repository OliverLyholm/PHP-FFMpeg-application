<?php

require 'vendor/autoload.php';


$audioFiles = glob(__DIR__ . "/assets/*");
$resultsFolder = __DIR__ . "/results/";
$ffmpeg = FFMpeg\FFMpeg::create();

foreach($audioFiles as $audioFile){

    $audio = $ffmpeg->open($audioFile);

    $fileName = pathinfo($audioFile, PATHINFO_FILENAME);

$waveform = $audio->waveform(640, 120, array('#00FF00'));
$waveform->save($resultsFolder . $fileName . '.png');

}