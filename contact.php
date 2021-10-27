<?php
	$error = [];
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST')
	{
		$name = utf8_decode(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
		$email = utf8_decode(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
		$message = utf8_decode(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING));
		if (!$name)
		{
			$error['name'] = 'Please enter a name.';
		}
		if (!$email)
		{
			$error['email'] = 'Please enter a valid email adress.';
		}
		if (!$message)
		{
			$error['message'] = 'Please write a message.';
		}
		if (!$_POST['g-recaptcha-response'])
		{
			$error['captcha'] = 'Please confirm that your submission is not automatically generated.';
		}
		if (count($error) === 0 && $_POST['g-recaptcha-response'])
		{
			$to = 'contact@anwofilms.com';
			$subject = 'A message has been submitted to anwofilms.com!';
			$messagetome = 'NAME' . "\n" . $name . "\n\n" . 'EMAIL' . "\n" . $email . "\n\n" . 'MESSAGE' . "\n" . $message;
			$headers = 'From: Another World Films website <contact@anwofilms.com>' . "\r\n" . 'Reply-To: ' . $name . '<' . $email . '>';
			
			mail($to, $subject, $messagetome, $headers); 
			header('Location: ' . $_SERVER['PHP_SELF'] . '?message=success');
			exit;
		}
	}
	
	function showError(string $field)
	{
		global $error;
		if (isset($error[$field]))
		{
			echo '<span class="calibrierror">' . $error[$field] . '</span><br />';
		}
	}
	
	function showErrorClass(string $field)
	{
		global $error;
		if (isset($error[$field]))
		{
			echo 'error';
		}
	}
?>
	
	<!DOCTYPE html>
	<html lang="en-GB">

		<?php 	$file_type = 'contact';?>
		<?php 	$test_type = '';?>

		<head>
			<title>Contact - Another World Films</title>
			<link rel="shortcut icon" href="/sources/icon.png"/>
			<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $test_type;?>/stylesheet.php">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<script src='https://www.google.com/recaptcha/api.js?hl=en'></script>
			<script>
				function onSubmit(token) {
				document.getElementById("demo-form").submit();
				}
			</script>

			<style>
				<?php include($_SERVER['DOCUMENT_ROOT'] . $test_type . '/sitecapture.php');?>
			</style>
		</head>
					
		<body id="top"><!--googleoff: index-->
			<?php include($_SERVER['DOCUMENT_ROOT'] . $test_type . '/header.php');?>
				<div class="content">
					<?php if(isset($_GET['message']) && $_GET['message'] === 'success'): ?>
						<div class="container">
							<div class="leftpane">&nbsp;</div>
							<div class="middlepanecontact">
								<div class="stickybackto">
									<a href="<?php echo $test_type;?>/contact.php">
										<img class="backtotopicon" src="/sources/backtoprojectsicon.png">
									</a>
								</div>
								<div class="successtextarea">
									<h2>Contact</h2><br/>
									<p class="calibrisuccess">Thank you very much for your submission. We will be answering it as soon as possible.</p>
								</div>
							</div>
							<div class="rightpane">&nbsp;</div>
						</div>
					<?php else: ?>
						<div class="textarea">
							<h2>Contact</h2><br/>
							<!--googleon: index-->Feel free to send a message via the contact form below. Whether it is a question, a suggestion or of course criticism you have - we are looking forward to hear from you. (* indicates required field)<br/><br/>
							<form method="post" action="">
								<b>Name</b>*<br/>
								<input class="nameandmail validate <?php showErrorClass('name'); ?>" type="text" name="name" value="<?php echo htmlspecialchars($_POST['name'])?>"/><br/>
								<?php showError('name'); ?><br/>
								<b>Email</b>*<br/>
								<input class="nameandmail validate <?php showErrorClass('email'); ?>" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value="<?php echo htmlspecialchars($_POST['email'])?>"/><br/>
								<?php showError('email'); ?><br/>
								<b>Message</b>*<br/>
								<textarea class="message validate <?php showErrorClass('message'); ?>" name="message"><?php echo $_POST['message']; ?></textarea><br/>
								<?php showError('message'); ?><br/>
								<b>Validation</b>*<br/>
								<div class="g-recaptcha" style="margin-top: 0.4rem;" data-sitekey="6LdtFsQaAAAAAOT6wXCFc1gxxIrPWMe9bLLP-MiD"></div>
								<?php showError('captcha'); ?><br/>
								<input class="submit" type="submit" name="submit" value="Submit"/><br/><br/>
							</form>
						</div>
					<?php endif; ?>
				</div>
			<?php include($_SERVER['DOCUMENT_ROOT'] . $test_type . '/footer.php');?>
		</body>

	</html>
	
	