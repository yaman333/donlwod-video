// video error elerts handling 
// these elerts or event occurs when an error occurred during the loading of an video:

// When the user starts moving/skipping to a new position in the video, alert some text:
var vid = document.getElementById("video_ctrl");
vid.onseeking = function() {
    alert("Seek operation began...");
};

var vid = document.getElementById("video_ctrl");
vid.onseeked = function() {
    alert("Seek operation completed!");
};

// Alert that the video has been paused:
var vid = document.getElementById("video_ctrl");
vid.onpause = function() {
    alert("The video has been paused");
};

// Alert that the video has started to play:
var vid = document.getElementById("video_ctrl");
vid.onplay = function() {
    alert("The video has started to play");
};

// Alert that the volume of a video has been changed,muted or unmuted:
var vid = document.getElementById("video_ctrl");
vid.onvolumechange = function() {
    alert("The volume has been changed,muted or unmuted!");
};

// Alert that the video is starting to load:
var vid = document.getElementById("video_ctrl");
vid.onloadstart = function() {
    alert("Starting to load video...");
};

// Alert when metadata for the video is loaded:
var vid = document.getElementById("video_ctrl");
vid.onloadedmetadata = function() {
    alert("Metadata for video loaded!");
};

// Alert that the duration of the video has changed:
var vid = document.getElementById("video_ctrl");
vid.ondurationchange = function() {
    alert("The video duration has changed!");
};

// Alert that data for the current frame is available (for <video>):
var vid = document.getElementById("video_ctrl");
vid.onloadeddata = function() {
    alert("Browser has loaded the current frame!");
};

// Alert that the video is loading:
var vid = document.getElementById("video_ctrl");
vid.onprogress = function() {
  alert("Loading... video!");
};

// Alert that the video can be played all the way through, without stopping (Video  loaded: 100%)
var vid = document.getElementById("video_ctrl");
vid.oncanplaythrough = function() {
    alert("Video loaded: 100%!");
};

// Alert that the video is ready to start playing:
var vid = document.getElementById("video_ctrl");
vid.oncanplay = function() {
    alert("Video is ready to start playing!");
};

// Alert that the loading of a video has been aborted:
var vid = document.getElementById("video_ctrl");
vid.onabort = function() {
    alert("Video load aborted!");
};

// Alert that an error occured while loading the video:
var vid = document.getElementById("video_ctrl");
vid.onerror = function() {
    alert("Error! Something went wrong.");
};

//If the browser is not able to fetch media data, alert that media data is not available:
var vid = document.getElementById("video_ctrl");
vid.onstalled = function() {
    alert("Media data is not available!");
};

// Alert that the loading of media data is prevented from continuing:
var vid = document.getElementById("video_ctrl");
vid.onsuspend = function() {
    alert("Media data is not available. So, Loading of the media is suspended!");
};

// Alert that the video has ended:
var vid = document.getElementById("video_ctrl");
vid.onended = function() {
    alert("The video has ended!");
};
