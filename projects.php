
	
	<!DOCTYPE html>
	<html lang="en-GB">

		<?php 	$file_type = 'projects';?>
		<?php 	$test_type = '';?>

		<head>
			<title>Projects - Another World Films</title>
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
				<div class="content">
					<div class="textarea">
						<h2>Projects</h2><br/>
							<!--googleon: index-->Here you can find the latest movies, announcements, behind the scenes and much more from Another World Films.<br/><br/><br/><br/>
					</div>
					<div class="container">
						<div class="leftpane">&nbsp;</div>
						<div class="middlepane">
							<div class="stickytop"  id="stickytop">
								<a href="<?php echo $test_type;?>/projects.php#top">
									<img class="backtotopicon" src="/sources/backtotopicon.png">
								</a>
							</div>
							<a href="<?php echo $test_type;?>/projects/deathintime.php">
								<img class="previewimg" src="/sources/previewdeathintime.jpg"></a><br/>
								<a class="previewlink" href="<?php echo $test_type;?>/projects/deathintime.php">Death in Time: A Doctor Who Fan Film</a><p class="calibripreviewvia">via <img class="previewviaicon" src="/sources/youtube.png"></p>
							<a href="<?php echo $test_type;?>/projects/deathintimetrailer2.php">
								<img class="previewimg" src="/sources/previewdittrailer2.jpg"></a><br/>
								<a class="previewlink" href="<?php echo $test_type;?>/projects/deathintimetrailer2.php">Trailer II - Death in Time: A Doctor Who Fan Film</a><p class="calibripreviewvia">via <img class="previewviaicon" src="/sources/youtube.png"></p>
							<a href="<?php echo $test_type;?>/projects/deathintimetrailer1.php">
								<img class="previewimg" src="/sources/previewdittrailer1.jpg"></a><br/>
								<a class="previewlink" href="<?php echo $test_type;?>/projects/deathintimetrailer1.php"><!--googleon: index-->Trailer I - Death in Time: A Doctor Who Fan Film</a><p class="calibripreviewvia">via <img class="previewviaicon" src="/sources/youtube.png"></p>
						</div><!-- #middlepane -->
						<div class="rightpane">&nbsp;</div>
					</div>
				</div>
			<?php include($_SERVER['DOCUMENT_ROOT'] . $test_type . '/footer.php');?>
		</body>

	</html>
	
	