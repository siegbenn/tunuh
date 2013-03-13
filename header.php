<?php include('brain.php'); ?>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>Tunuh : <?php echo $title; ?></title>
<meta name="description" content="A simple, tuning application with a large library of guitar tunings." />
<meta name="viewport" content="width=device-width" />
<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="stylesheet" href="https://s3.amazonaws.com/tuning-website/css/normalize.css" />
<link rel="stylesheet" href="https://s3.amazonaws.com/tuning-website/css/main.css" />
<link rel="stylesheet" href="https://s3.amazonaws.com/tuning-website/css/app.css" type="text/css" />

<!-- MOBILE
<script type="text/javascript">
  <!--
  if (screen.width <= 699) {
  document.location = "mobile.html";
  }
  //-->
  
<!--</script> -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){ 

		var allAudioEls = $("audio");

    function pauseAllAudio() {
       allAudioEls.each(function() {
          var a = $(this).get(0);
          a.pause();
       });
    }

    $(".btn").click(function(e){
        pauseAllAudio();
        $("audio", this)[0].play();
    });
	
	$("#stop").click(function(){
		$("audio").pause();
		$("audio").currentTime = 0;	    
    });
  });

	   </script>


<?php ?>
