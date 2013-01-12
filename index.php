<!DOCTYPE HTML>

<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]-->
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!-->
<html class="no-js" lang="en"><!--<![endif]-->

<head>
	<meta charset="UTF-8">
	<title>Conftweets.com ~ Tweets, from conferences!</title>

	<!-- If JS is available, changes <html> class to js -->
	<script>
		var docElement = document.documentElement;
		docElement.className = docElement.className.replace(/\bno-js\b/,'') + ' js';
	</script>

	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1">
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  	<script>window.jQuery || document.write('<script src="js/jquery.js"><\/script>')</script>

	<script type="text/javascript" src="js/jq.tinysort.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
	<link href="webfonts/ss-social.css" rel="stylesheet" /> <!-- Social Symbol Set -->
	<link href="webfonts/ss-standard.css" rel="stylesheet" /> <!-- Symbol Set -->


	<script type="text/javascript" src="//use.typekit.net/euc8ntw.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>
<body>
	<h1><img src="img/conftweets.png" alt="Conftweets.com" /></h1>
	<p>Keep up to date on the twitter-chatter of the following web conferences. Hashtag your tweets with the appropriate hashtags to join in the conversation. See the build-up before each conference and follow along during the day!</p>

	<ul id="conflist">

		<li data-etime="2013-04-19">
			<h2><a href="/jquk">jQuery UK</a></h2>
			<p>
				<span class="location"><i class="ss-icon">location</i>Oxford</span>
				<span class="date"><i class="ss-icon">date</i>19th April, 2013</span>
				<span class="webaddress"><a href="http://events.jquery.org/2013/uk/" title="Conference website"><i class="ss-icon">link</i>http://events.jquery.org/2013/uk/</a></span>
				<span class="twitteracct"><a href="http://twitter.com/jquk" title="conference twitter acct"><i class="ss-icon ss-social">twitter</i>@jquk</a></span>
			</p>
		</li>

		<li data-etime="2013-05-04">
			<h2><a href="/points">Points</a></h2>
			<p>
				<span class="location"><i class="ss-icon">location</i>Brighton</span>
				<span class="date"><i class="ss-icon">date</i>4th May, 2013</span>
				<span class="webaddress"><i class="ss-icon">link</i><a href="http://pointsbrighton.co.uk" title="Conference website">http://pointsbrighton.co.uk</a></span>
				<span class="twitteracct"><i class="ss-icon ss-social">twitter</i><a href="http://twitter.com/pointsbrighton" title="conference twitter acct">@pointsbrighton</a></span>
			</p>
		</li>

		<li data-etime="2013-01-23">
			<h2><a href="naconf">New Adventures 2013</a></h2>
			<p>
				<span class="location"><i class="ss-icon">location</i>Nottingham</span>
				<span class="date"><i class="ss-icon">date</i>23rd January, 2013</span>
				<span class="webaddress"><i class="ss-icon">link</i><a href="http://newadventuresconf.com" title="Conference website">http://newadventuresconf.com</a></span>
				<span class="twitteracct"><i class="ss-icon ss-social">twitter</i><a href="http://twitter.com/naconf" title="conference twitter acct">@naconf</a></span>
			</p>
		</li>
	</ul>

	<footer>
		<p>2011-<?php echo date(Y);?> MrQwest</p>
	</footer>
</body>
</html>