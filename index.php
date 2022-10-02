<?php
// Configurations
include("include/GetDomainURL.php");
include("include/GetDomain_CurrentURL.php");
include("include/config.php");
?>

<!-- Usage
<?php echo("$vidSource"); ?>
<?php echo("$DownloadURL"); ?>
<?php echo("$vidPoster"); ?>
-->
<!DOCTYPE html>
<html lang="en">
   <meta charset="utf-8" />
<title>VIDPLYR</title>
<link rel="icon" type="image/png" href="images/VIDPLYR-icon.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <head>
 <link rel="stylesheet" href="include/styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- remove 000webhost Banner -->
<script src="/Index_Resources/includes/remove-000webhost-Banner.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
  
<style>
.fa-spin {
  animation-duration: 10s; // or something else
}
</style>
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

<form action="#" method="get">
   Video URL-
   <input class="input_video_url" type="url" name="vidSource" value="<?php echo("$vidSource"); ?>" placeholder="Example- https://examplevideosong.mp4"/>
   <p></p>
   Poster URL-
   <input class="input_poster_url" type="url" name="vidPoster" value="<?php echo("$vidPoster"); ?>" placeholder="Example- https://exampleposter.jpeg"/>
   <p></p>
   <div class="center">
   <input class="submit_button" type="submit" value="Submit"/>

<!--Preview-->
<button onclick="this.form.action='include/VIDPLYR-Playback.php';" class="submit_button" style="margin-left:5px;" type="submit" value="Preview"><i style="margin-top:3px;" class="fa fa-eye" aria-hidden="true"></i></button>

<!--Settings-->
<button style="margin-left:5px;" class="submit_button" onclick="myFunction();scrollToBottom();return false;"><i style="margin-top:3px;" class="fa fa-cog fa-spin" aria-hidden="true"></i>
</button>
</div>
<br>
   

<div id="myDIV">
<center>

 <fieldset>
    <legend>Player</legend>
<label for="checkbox1" style="margin: 0.9em 0 9em 0; font-size: 1.2em; font-weight: 700; color: #096AA3; ">autoplay:</label>
<label class="switch">
		<input type="checkbox" id="checkbox1" <?php echo("$checked1"); ?>/> 
 <div class="slider"></div>
</label>
	<input class="hidden-input" name="autoplay" type="text" id="textbox1" style="text-align:center;" size="1" readonly/> 
	<br>

<label for="checkbox2" style="margin: 0.9em 0 9em 0; font-size: 1.2em; font-weight: 700; color: #096AA3; ">download:</label>
<label class="switch">
	<input type="checkbox" id="checkbox2"  <?php echo("$checked2"); ?>/> 
<div class="slider"></div>
</label>
	<input class="hidden-input" name="download" type="text" id="textbox2" style="text-align:center;" size="1" readonly/>
	<br>

<label for="checkbox3" style="margin: 0.9em 0 9em 0; font-size: 1.2em; font-weight: 700; color: #096AA3; ">muted:</label>
<label class="switch">
	<input type="checkbox" id="checkbox3" <?php echo("$checked3"); ?>/> 
<div class="slider"></div>
</label>
	<input class="hidden-input" name="muted" type="text" id="textbox3" style="text-align:center;" size="1" readonly/> 
<br/>

<label for="checkbox4" style="margin: 0.9em 0 9em 0; font-size: 1.2em; font-weight: 700; color: #096AA3; ">fullscreen:</label>
<label class="switch">
	<input type="checkbox" id="checkbox4"  <?php echo("$checked4"); ?>/> 
<div class="slider"></div>
</label>
	<input class="hidden-input"  name="fullscreen" type="text" id="textbox4" style="text-align:center;" size="1" readonly/>
	<br>

<label for="checkbox5" style="margin: 0.9em 0 9em 0; font-size: 1.2em; font-weight: 700; color: #096AA3; ">loop:</label>
<label class="switch">
	<input type="checkbox" id="checkbox5" <?php echo("$checked5"); ?>/> 
<div class="slider"></div>
</label>
	<input class="hidden-input" name="loop" type="text" id="textbox5" style="text-align:center;" size="1" readonly/>
<br>

<label for="checkbox6" style="margin: 0.9em 0 9em 0; font-size: 1.2em; font-weight: 700; color: #096AA3; ">error elerts:</label>
<label class="switch">
	<input type="checkbox" id="checkbox6" <?php echo("$checked6"); ?>/> 
<div class="slider"></div>
</label>
	<input class="hidden-input" name="error_elerts" type="text" id="textbox6" style="text-align:center;" size="1" readonly/>	
      <br><br/>
  
<label for="preload" style="margin: 0.9em 0 9em 0; font-size: 1.1em; font-weight: 700; color: #096AA3; ">Preload:</label>
<select class="select-tag" name="preload" id="preload">
      <option value="auto" <?php echo("$preload_autoSet"); ?>>Auto</option>
      <option value="metadata" <?php echo("$preload_metadataSet"); ?>>Metadata</option>
      <option value="none" <?php echo("$preload_noneSet"); ?>>None</option></select>
<br/>

<label for="controls" style="margin: 0.9em 0 9em 0; font-size: 1.1em; font-weight: 700; color: #096AA3; ">controls:</label>
<select class="select-tag" name="controls" id="controls">
      <option value="controls" <?php echo("$controls_YesSet"); ?>>Yes</option>
      <option value="nocontrols" <?php echo("$controls_NoSet"); ?>>No</option>
</select>
<br/>

<label for="width" style="margin: 0.9em 0 9em 0; font-size: 1.1em; font-weight: 700; color: #096AA3; ">width:</label>
<input class="input-Width" type="text" name="width" id="width" value="<?php echo("$width"); ?>"/>

<label for="height" style="margin: 0.9em 0 9em 0; font-size: 1.1em; font-weight: 700; color: #096AA3; ">height:</label>
<input class="input-Height" type="text" name="height" id="height" value="<?php echo("$height"); ?>"/>
<br/>

</fieldset>
<br>

<fieldset>
   <legend>Video</legend>
<label for="Title" style="margin: 0.9em 0 9em 0; font-size: 1.1em; font-weight: 700; color: #096AA3; ">Video Title:</label>
<input class="input_video_url" type="text" name="Title" value="<?php echo("$Title"); ?>" style="text-align:center;" size="0" />
<br><br/>

<label for="vidSource360p" style="margin: 0.9em 0 9em 0; font-size: 15px; font-weight: 700; color: #096AA3; ">Video URL-360p:</label>
<input class="input_video_url" type="text" name="vidSource360p" type="text" value="<?php echo("$vidSource360p"); ?>" style="text-align:center;" size="0" />
<br><br>

<label for="vidSource480p" style="margin: 0.9em 0 9em 0; font-size: 15px; font-weight: 700; color: #096AA3; ">Video URL-480p:</label>
<input class="input_video_url" type="text" name="vidSource480p" type="text"  value="<?php echo("$vidSource480p"); ?>" style="text-align:center;" size="0" />
<br><br>

<label for="vidSource720p" style="margin: 0.9em 0 9em 0; font-size: 15px; font-weight: 700; color: #096AA3; ">Video URL-720p:</label>
<input class="input_video_url" type="text" name="vidSource720p" type="text" value="<?php echo("$vidSource720p"); ?>" style="text-align:center;" size="0" />
<br><br>

<label for="vidSource1080p" style="margin: 0.9em 0 9em 0; font-size: 15px; font-weight: 700; color: #096AA3; ">Video URL-1080p:</label>
<input class="input_video_url" type="text" name="vidSource1080p" type="text" value="<?php echo("$vidSource1080p"); ?>" style="text-align:center;" size="0" />
</fieldset>
<br/>

<!-- All Sharing Buttons -->
 <fieldset style="width:70%;">
    <legend>Share on</legend>
<?php
 include("include/sharing-buttons.php");
?>
</fieldset>
<br/>

<!-- Save Settings Button -->
<button class="submit_button" onclick"scrollToBottom();" type="submit">Save&nbsp<i style="margin-top:3px;" class="fa fa-cog fa-spin" aria-hidden="true"></i></button>
<br/>
</center>
</div>
</form>

<script>
    <?php include("include/script.js");?>
    <?php include("$error_elertsSet");?>
</script>
   </body>
   </html>

