<?php
$title = "template";
$promo = "";
$hed = "Template";
$deck = "This is a template for personal data viz project";
$pubtime = "Published Nov. 9, 2016 at 11:55 a.m. ET";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title ?></title>
	<meta property="og:image" content=<?php echo $promo ?> />
	<meta property="og:title" content=<?php echo $hed ?> />
	<meta name="description" content=<?php echo $deck ?> />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/main.css">

</head>
<body>
<div class="container container-fluid">

	<header>
			<div class="header-text">

	          <!-- Headline -->
	    			<h1 class="headline"><?php echo $hed ?></h1>

	          <!-- Deck -->
	    			<h2 class="deck"><?php echo $deck ?></h2>

	          <!-- Hero-Image Wrapper -->
	          <!-- Meta -->
	          <div class="meta">
	             <?php echo $pubtime ?>
	          </div>
	    </div>
	</header>

  <div class="main">

		<div class="intro">
			<h3 class="subhead" >Subhead 1</h3>
			<p>Nobody can enjoy an eternal prosperity.</p>
			<p>By 2060, the world economy will be totally changing from what we see now. OECD projected both total and per capita GDP for major countries in its long-term economic forecast, in which switching economic positions among China, India and the U.S. will occur. Reset the framework.</p>
		</div>

		<div class="vizwrapper">
				<div id="viz"></div>
		</div>

	</div>

	<div id="footer">
	    <div id="colophon">
	      Source <a href="#" target="_blank">XXXXXXX</a><br/>
	      Created By&nbsp;&nbsp;<a href="https://twitter.com/yasufumisaito" target="_blank">@YasufumiSaito</a>&nbsp;&nbsp;
	      <br />
	      Share It On <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=">&nbsp;FACEBOOK</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a target="_blank "href="https://twitter.com/intent/tweet?text=">TWITTER</a>&nbsp;&nbsp;
	    </div>
	</div>

</div> <!-- end of container -->
	<!-- Libraries -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/d3/4.7.3/d3.min.js"></script>
	<!-- main script -->
	<script type="text/javascript" src="./js/script.js"></script>
</body>
</html>
