
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <title>Moranbong Band <3</title>
		<link href = "css/general.css" rel = "stylesheet" type = "text/css">
</head>



<body>

<div class= "navibar">
	<div class="logo">
		<p> Moranbong Band </p>
	</div>

	<div class= "pages">
		<ul>
			<li><a href = "html/page_4.php"> Mini Game </a></li>
			<li><a href = "html/page_3.php"> Latest Video </a></li>
			<li><a href = "html/page_2.php"> Disgraphy </a></li>
			<li><a href = "html/page_1.php"> Biography </a></li>
			<li><a href = "index.php"> Home </a></li>
		</ul>
	</div>
</div>

<div class= "header">
	<div class= "title">
		<h1> Moranbong Band </h1>
		<p>Because LOVE is Revolutionary!</p>
	</div>

	<div class= "buttons">
		<button type="button" onclick="document.location='html/page_1.php'">Know More About Us!</button> 
	</div>
</div>

<div class= "section-0">
	<div class = "box1">
		<div class = "pic">
			<img src="images/profile.png" alt="The Band" width="255" height="158">
		</div>
		<div class= "buttons" style= "text-align:center">
			<button type="button" onclick="document.location='html/page_1.php'">Read More</button> 
		</div>
	</div>

	<div class = "box2">
		<div class= "title">
			<h1> We Are Moranbong Band! </h1>
		</div>
		<div class= "article">
			<p> The Moranbong Band is an all-female music group in North Korea whose original members were selected by the country's supreme leader Kim Jong-un. Performing interpretive styles of pop, rock, and fusion, they are the first all-female band from the DPRK, and made their world debut on July 6, 2012. </p>
		</div>


	</div>
</div>


<div class= "section-1">
	<div class= "intro">
		<h1> Find out about our albums </h1>
		<p id="album_name"> In Praise of the Guiding Party</p>
	</div>

	<div class = "album">
			<img id="cover_art" src="images/In_Praise_of_the_Guiding_Party.png" alt="The Album" width="256" height="256" />
	</div>

	<div class = "button_wrapper">
		<div class= "buttons">
			<button type="button" onclick='add()'>Previous</button> 
		</div>
		<div class= "buttons">
			<button type="button" onclick='substract()'>Next</button> 
		</div>
		<div class= "buttons">
			<button type="button" onclick="document.location='html/page_2.php'">Read More</button> 
		</div>
	</div>
</div>



<script type="text/javascript">
	class score_album{
		constructor(score) {
			this.score = score;
		}
		add(){
			this.score ++;
		}
		substract(){
			this.score --;
		}
		present(){
			return this.score;
		}
	};
	new_score = new score_album(500);

	function add(){
		new_score.add();
		cover_art_update();
	};

	function substract(){
		new_score.substract();
		cover_art_update();
	};
	function cover_art_update(){
		switch(new_score.present() % 5){
			case 1:
			document.getElementById("cover_art").src = "images/Nuclear_Fallout_EP.png";
			document.getElementById("album_name").innerHTML = 'Nuclear Fallout';
			break;
			case 2:
			document.getElementById("cover_art").src = "images/CeleFive.jpg";
			document.getElementById("album_name").innerHTML = 'CeleFive';
			break;
			case 0:
			document.getElementById("cover_art").src = "images/In_Praise_of_the_Guiding_Party.png";
			document.getElementById("album_name").innerHTML = 'In Praise of the Guiding Party';
			break;
			case 3:
			document.getElementById("cover_art").src = "images/fan_tribute.jpg";
			document.getElementById("album_name").innerHTML = 'Fan Tribute';
			break;
			case 4:
			document.getElementById("cover_art").src = "images/secertive_album.jpg";
			document.getElementById("album_name").innerHTML = 'Secertive Album';
			break;
		}	
	};

	var intervalId = window.setInterval(function(){
 		add(); /// call your function here
	}, 3000);
</script>




<div class= "section-2">
	<div class= "title">
		<h1> Our new videos </h1>
	</div>

	<div class= "buttons">
		<button type="button" onclick="document.location='html/page_3.php'">Watch More</button> 
	</div>
</div>


<div class= "footer">
	<div class="logo">
		<p> Wang </p>
		<p> Copyright 2021 </p>
	</div>

	<div class= "pages">
		<ul>
		<li><a href = "https://www.facebook.com/MoranbongBand/"> Facebook </a></li>
		<li><a href = "https://en.wikipedia.org/wiki/Moranbong_Band"> Wikipedia </a></li>
		<li><a href = "https://kprofiles.com/moranbong-band-members-profile/"> Kpop Fansite </a></li>
		</ul>
	</div>
	<div class="empty-for-now">
	</div>	
</div>

<button onclick="topFunction()" id="totop" title="Go to top">Top</button>


<script>
//Get the button
var mybutton = document.getElementById("totop");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>


</body>

</html>
