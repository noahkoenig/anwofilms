	
	
	<!DOCTYPE html>
	<html lang="en-GB">

		<?php 	$file_type = 'home';?>
		<?php 	$test_type = '';?>

		<head>
			<title>Another World Films</title>
			<link rel="shortcut icon" href="/sources/icon.png"/>
			<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $test_type;?>/stylesheet.php">
			<meta name="viewport" content="width=device-width, initial-scale=1"> 
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<style>
				<?php include($_SERVER['DOCUMENT_ROOT'] . $test_type . '/sitecapture.php');?>
			</style>
		</head>
		
		<body id="top"><!--googleoff: index-->
			<?php include($_SERVER['DOCUMENT_ROOT'] . $test_type . '/header.php');?>
				<video class="reelvideo" controls autoplay muted loop>
					<source src="/sources/awfreel2021.mp4" type="video/mp4">
				</video>
				<div class="textarea">
					<h2>Hello there and welcome to anwofilms.com - the official website of Another World Films</h2><br/>
					<!--googleon: index-->We are a filmmaking group based in Munich, Germany. Consisting of a core of 5 young filmmakers with different specialisations we have one common goal in mind: making the best movies we possibly can for our audiences.<br/><br/>
					<h2>Latest news</h2><br/>
						Our long term project <i>Death in Time: A Doctor Who Fan Film</i> is now out on our YouTube channel with german audio and english subtitles!
						<!--a class="twitter-timeline" data-lang="en" data-width="100%" data-height="500" data-theme="dark" href="https://twitter.com/anwofilms?ref_src=twsrc%5Etfw">Tweets by anwofilms
						</a>
						<script async src="https://platform.twitter.com/widgets.js" charset="utf-8">
						</script>
						<br/><br/>
						<div class="embedsocial-hashtag" data-ref="c584f49dba06570250d83ea40a5ba2a79dace790" >
							<a class="feed-powered-by-es" href="https://embedsocial.com/products/embedfeed/" target="_blank" title="Powered by EmbedSocial">Powered by EmbedSocial<span>→</span>
							</a>
						</div>
						<script>(function(d, s, id){var js; if (d.getElementById(id)) {return;} js = d.createElement(s); js.id = id; js.src = "https://embedsocial.com/cdn/ht.js"; d.getElementsByTagName("head")[0].appendChild(js);}(document, "script", "EmbedSocialHashtagScript"));
						</script-->
					<br/><br/><br/>
				</div>
				
			<?php include($_SERVER['DOCUMENT_ROOT'] . $test_type . '/footer.php');?>
		</body>

	</html>
	
	