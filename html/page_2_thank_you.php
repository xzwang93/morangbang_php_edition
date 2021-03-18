
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <title>Biography</title>
		<link href = "../css/general.css" rel = "stylesheet" type = "text/css">
</head>


<body>



<div class= "navibar">
	<div class="logo">
		<p> Thanks for updating. </p>
	</div>

	<div class= "pages">
		<ul>
			<li><a href = "page_3.html"> Latest Video </a></li>
			<li><a href = "page_2.php"> Disgraphy </a></li>
			<li><a href = "page_1.html"> Biography </a></li>
			<li><a href = "../index.html"> Home </a></li>
		</ul>
	</div>
</div>


<?php include('../php/page_2_thank_you_page_php.php') ?>

<div class= "footer">
	<div class="logo">
		<p> Xiezhe Wang </p>
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

<script type="text/javascript">   
    function Redirect() 
    {  
        window.location="page_2.php"; 
    } 
    document.write("You will be redirected to a new page in 3 seconds"); 
    setTimeout('Redirect()', 3000);   
</script>


</body>

</html>
