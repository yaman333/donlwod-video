
    //checkbox1
        $(document).ready(function() { 
        // Set initial state 
        $('#textbox1').val('<?php echo("$autoplay"); ?>'); 
        // Returns yes or no in textbox1 
        // when checked and unchecked 
        $('#checkbox1').click(function() { 
        if ($("#checkbox1").is(":checked") == true) { 
        $('#textbox1').val('yes'); 
        } else { 
        $('#textbox1').val('no'); 
        } 
        }); 
        });
        
     //checkbox2
        $(document).ready(function() { 
        // Set initial state 
        $('#textbox2').val('<?php echo("$download"); ?>'); 
        // Returns yes or no in textbox1 
        // when checked and unchecked 
        $('#checkbox2').click(function() { 
        if ($("#checkbox2").is(":checked") == true) { 
        $('#textbox2').val('yes'); 
        } else { 
        $('#textbox2').val('no'); 
        } 
        }); 
        });

     //checkbox3
	$(document).ready(function() { 
	// Set initial state 
	$('#textbox3').val('<?php echo("$muted"); ?>'); 
	// Returns yes or no in textbox1 
	// when checked and unchecked 
	$('#checkbox3').click(function() { 
	if ($("#checkbox3").is(":checked") == true) { 
	$('#textbox3').val('yes'); 
	} else { 
	$('#textbox3').val('no'); 
	} 
	}); 
	});
	
	//checkbox4
	$(document).ready(function() { 
	// Set initial state 
	$('#textbox4').val('<?php echo("$fullscreen"); ?>'); 
	// Returns yes or no in textbox1 
	// when checked and unchecked 
	$('#checkbox4').click(function() { 
	if ($("#checkbox4").is(":checked") == true) { 
	$('#textbox4').val('yes'); 
	} else { 
	$('#textbox4').val('no'); 
	} 
	}); 
	});

      //checkbox5
	$(document).ready(function() { 
	// Set initial state 
	$('#textbox5').val('<?php echo("$loop"); ?>'); 
	// Returns yes or no in textbox1 
	// when checked and unchecked 
	$('#checkbox5').click(function() { 
	if ($("#checkbox5").is(":checked") == true) { 
	$('#textbox5').val('yes'); 
	} else { 
	$('#textbox5').val('no'); 
	} 
	}); 
	});

      //checkbox6
	$(document).ready(function() { 
	// Set initial state 
	$('#textbox6').val('<?php echo("$error_elerts"); ?>'); 
	// Returns yes or no in textbox1 
	// when checked and unchecked 
	$('#checkbox6').click(function() { 
	if ($("#checkbox6").is(":checked") == true) { 
	$('#textbox6').val('yes'); 
	} else { 
	$('#textbox6').val('no'); 
	} 
	}); 
	});

//Scroll
        function scrollToBottom() { 
// To Top
      //      window.scrollTo(0, 0); 
//To Bottom
window.scrollTo(0,document.body.scrollHeight);
        } 

// Hide and show div
function myFunction() {
 var x = document.getElementById("myDIV");
 if (x.style.display === "block") {
   x.style.display = "none";
 } else {
   x.style.display = "block";
 }
}

// script for Play Video
 var video =  document.getElementById("video_ctrl");
 
 function getSrcInfo() { 
 alert(video.src);
 } 
 
function set360p(){
  video.src = '<?php echo("$vidSource360p"); ?>'; // Make sure to not use ..\ like in HTML but ../ if you have to give a more complex file path like: '../../myVideoFolder/myVideo.mp4'
  video.load();
  }
  
function set480p(){
  video.src = '<?php echo("$vidSource480p"); ?>'; // Make sure to not use ..\ like in HTML but ../ if you have to give a more complex file path like: '../../myVideoFolder/myVideo.mp4'
  video.load();
}

function set720p(){
  video.src = '<?php echo("$vidSource720p"); ?>'; // Make sure to not use ..\ like in HTML but ../ if you have to give a more complex file path like: '../../myVideoFolder/myVideo.mp4'
  video.load();
}

function set1080p(){
  video.src = '<?php echo("$vidSource1080p"); ?>'; // Make sure to not use ..\ like in HTML but ../ if you have to give a more complex file path like: '../../myVideoFolder/myVideo.mp4'
  video.load();
}

var x = document.getElementById("video_ctrl");

function getPlaySpeedInfo() { 
 alert(x.playbackRate);
} 

function setPlaySpeed1() { 
 x.playbackRate = 0.5;
} 

function setPlaySpeed4() { 
 x.playbackRate = 0.25;
} 

function setPlaySpeed2() { 
 x.playbackRate = 0.75;
} 

function setPlaySpeed3() { 
 x.playbackRate = 1;
} 

function setPlaySpeed5() { 
 x.playbackRate = 1.5;
} 

function setPlaySpeed6() { 
 x.playbackRate = 1.75;
} 

function setPlaySpeed7() { 
 x.playbackRate = 2;
} 

function setPlaySpeed8() { 
 x.playbackRate = 4;
} 

