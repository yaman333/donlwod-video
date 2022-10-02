<?php
// Configurations
include("GetDomainURL.php");
include("GetDomain_CurrentURL.php");
include("config.php");

// Show Custom Error Elerts if true
$error_elerts = $_GET['error_elerts'];
!isset($error_elerts) && $error_elerts = "no";
if($error_elerts === yes)
{
$checked6 = "checked";
 $error_elertsSet = "error-elerts.js";
}else if($error_elerts === no){
$checked6 = "";
}
?>

<!-- Usage
<?php echo("$vidSource"); ?>
<?php echo("$DownloadURL"); ?>
<?php echo("$vidPoster"); ?>
-->
<!DOCTYPE html>
<html lang="en">
   <meta charset="utf-8" />
<title>VIDPLYR | Play Video from URL</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <head>
 <link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- remove 000webhost Banner -->
<script src="/Index_Resources/includes/remove-000webhost-Banner.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
  
 </head>
 <body style="color: #FF3333; width: 100%">

<div class="container">
   <h1 class="welcome">VIDPLYR</h1>
   <p class="muzile">Play Video from URL</p>
    </div>

<center>
<div class="dropdown">
 <button class="dropbtn">Quality <select style="background: #333333; color: white; width:16px; height: 16px; display:none;"></select></button>
 <div class="dropdown-content">
 <button onclick="set360p()">360p</button>
 <button onclick="set480p()">480p</button>
 <button onclick="set720p()">720p</button>
 <button onclick="set1080p()">1080p</button>
 </div>
 </div>

<div class="dropdown">
 <button class="dropbtn">Speed<select style="background: #333333; color: white; width:16px; height: 16px; display:none;"></select></button>
 <div class="dropdown-content">
 <button onclick="setPlaySpeed4()">0.25x</button>
 <button onclick="setPlaySpeed1()">0.5x</button>
 <button onclick="setPlaySpeed2()">0.75x</button>
 <button onclick="setPlaySpeed3()">Normal</button>
 <button onclick="setPlaySpeed5()">1.5x</button>
 <button onclick="setPlaySpeed6()">1.75x</button>
 <button onclick="setPlaySpeed7()">2x</button>
 <button onclick="setPlaySpeed8()">4x</button>
 </div>
 </div>

   <div id="div_video" class="frame_border">
   <video id="video_ctrl" width="<?php echo("$width"); ?>" height="<?php echo("$height"); ?>" poster="<?php echo("$vidPoster"); ?>" <?php echo("$controls"); ?> preload="<?php echo("$metadata"); ?>" controlsList="<?php echo("$fullscreenSet"); ?> <?php echo("$downloadSet"); ?>" PictureInPicture <?php echo("$autoplaySet"); ?> <?php echo("$mutedSet"); ?> <?php echo("$loopSet"); ?>/>
<source src="<?php echo("$vidSource"); ?>"/>
    Your browser does not support HTML video.
   </video>
   </div>
<!-- <button class="dropbtn" onclick="getSrcInfo()">Src Info.?</button> -->

<form action="#" method="get">
<input class="input_video_url hidden-input" type="text" name="url" value="<?php echo("$DownloadURL"); ?>" placeholder="Example- https://examplevideosong.mp4"/>

<button onclick="<?php echo("$Download_disabled"); ?>" name="submit" class="dropbtn" type="submit" formaction="<?php echo("$GetDomainURL"); ?>/Index_Resources/indexer/Url-to%20File%20Downloader%20v2/index.php?url=<?php echo("$DownloadURL"); ?>">Download</button>
<button class="dropbtn" Onclick="getPlaySpeedInfo();return false;">Speed Info.?</button>
</form>
<!-- Title -->
<p style="text-align: center; color:skyblue"><?php echo("$Title"); ?></p>
</center>

<center>
<!-- All Sharing Buttons -->
 <fieldset style="width:70%;">
    <legend>Share on</legend>
<?php
 include("sharing-buttons.php");
?>
</fieldset>
<br/>
</center>

<script>
    <?php include("script.js");?>
    <?php include("$error_elertsSet");?>
</script>
   </body>
   </html>

