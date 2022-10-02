<?php
error_reporting(0);

// Video Title [Default]
$default_Title = "Crazy by beauz and jvna (AMV)";

// Video URL Default [360p]
$vidSourceDefault = "$GetDomainURL"."/Index_Resources/indexer/GD-Video%20Stream/drive.php?id=66399daeddbfb074954f7bbfe0476ba01ba1a6b13c26cb65fa6f79797177dc4a&stream=360p"."#/"."$default_Title";
$vidSource1 = "$vidSourceDefault";

// Video URL 480p
$vidSource2 = "$GetDomainURL"."/Index_Resources/indexer/GD-Video%20Stream/drive.php?id=66399daeddbfb074954f7bbfe0476ba01ba1a6b13c26cb65fa6f79797177dc4a&stream=480p"."#/"."$default_Title";

// Video URL 720p
$vidSource3 = "$GetDomainURL"."/Index_Resources/indexer/GD-Video%20Stream/drive.php?id=66399daeddbfb074954f7bbfe0476ba01ba1a6b13c26cb65fa6f79797177dc4a&stream=720p"."#/"."$default_Title";

// Video URL 1080p
$vidSource4 = "$GetDomainURL"."/Index_Resources/indexer/GD-Video%20Stream/drive.php?id=66399daeddbfb074954f7bbfe0476ba01ba1a6b13c26cb65fa6f79797177dc4a&stream=1080p"."#/"."$default_Title";

$vidSource = $_GET['vidSource'];
!isset($vidSource) && $vidSource = "$vidSourceDefault";
$DownloadURL= "$vidSource";
 

$vidPoster = $_GET['vidPoster'];
$vidPosterDefault = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvEuHFiwtOmcUBn2gJ2-hO3afqAEzeFh8Q-g&usqp=CAU#/Crazy-song by beauz and jvna (AMV) poster.jpeg";
!isset($vidPoster) && $vidPoster = "$vidPosterDefault";


$preload = $_GET['preload'];
$default_preload = "metadata";
!isset($preload) && $preload = "$default_preload";

if($preload === auto)
{
     $preload_autoSet = "selected";
}else {
$preload_autoSet = "";
}

if($preload === metadata)
{
     $preload_metadataSet = "selected";
}else {
$preload_metadataSet = "";
}

if($preload === none)
{
     $preload_noneSet = "selected";
}else {
$preload_noneSet = "";
}


$controls = $_GET['controls'];
$default_controls = "controls";
!isset($controls) && $controls = "$default_controls";

if($controls === controls)
{
     $controls_YesSet = "selected";
}else {
$controls_YesSet = "";
}

if($controls === nocontrols)
{
     $controls_NoSet = "selected";
}else {
$controls_NoSet = "";
}


$autoplay = $_GET['autoplay'];
!isset($autoplay) && $autoplay = "yes";
if($autoplay === yes)
{
    $checked1 = "checked";
     $autoplaySet = "autoplay";
}else if($autoplay === no){
$checked1 = "";
$autoplaySet = "";
}


$download = $_GET['download'];
!isset($download) && $download = "yes";
if($download === yes)
{
    $checked2 = "checked";
    $downloadSet = "download";
}else if($download === no){
$checked2 = "";
$downloadSet = "nodownload";
$Download_disabled = "alert('Download disabled!'); return false; ";
}


$muted = $_GET['muted'];
!isset($muted) && $muted = "no";
if($muted === yes)
{
    $checked3 = "checked";
    $mutedSet = "muted";
}else if($muted === no){
$checked3 = "";
$mutedSet = "";
}


$fullscreen = $_GET['fullscreen'];
!isset($fullscreen) && $fullscreen = "yes";
if($fullscreen === yes)
{
    $checked4 = "checked";
    $fullscreenSet = "fullscreen";
}else if($fullscreen === no){
$checked4 = "";
$fullscreenSet = "nofullscreen";
}


$loop = $_GET['loop'];
!isset($loop) && $loop = "no";
if($loop === yes)
{
    $checked5 = "checked";
    $loopSet = "loop";
}else if($loop === no){
$checked5 = "";
$loopSet = "";
}

// Note: Only works in index.php
$error_elerts = $_GET['error_elerts'];
!isset($error_elerts) && $error_elerts = "no";
if($error_elerts === yes)
{
$checked6 = "checked";
 $error_elertsSet = "include/error-elerts.js";
}else if($error_elerts === no){
$checked6 = "";
}


$width = $_GET['width'];
$default_width = "100%";
!isset($width) && $width = "$default_width";

$height = $_GET['height'];
$default_height = "auto";
!isset($height) && $height = "$default_height";


$Title = $_GET['Title'];
!isset($Title) && $Title = "$default_Title";

$vidSource360p = $_GET['vidSource360p'];
!isset($vidSource360p) && $vidSource360p = "$vidSource1";

$vidSource480p = $_GET['vidSource480p'];
!isset($vidSource480p) && $vidSource480p = "$vidSource2";

$vidSource720p = $_GET['vidSource720p'];
!isset($vidSource720p) && $vidSource720p = "$vidSource3";

$vidSource1080p = $_GET['vidSource1080p'];
!isset($vidSource1080p) && $vidSource1080p = "$vidSource4";


?>




