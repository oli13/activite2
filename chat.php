<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Fichier base</title>
	<link href="style/style.css" type="text/css" rel="stylesheet" />
  </head>
<body>
<div id="bloc1">
	<form action="chat/minichat_post.php" method="post" id="chatForm">
		<label for="message">Message : </label><input type="text" size="22px" name="message" id="message" form="chatForm">
	<!--<label for="pseudo">Pseudo : </label><input type="text" name="pseudo" id="pseudo" value="-->
	<?php if(isset($_COOKIE['pseudo'])){ echo $_COOKIE['pseudo'];} ?>
	<!--"/>-->
		<input type="submit" size="8px" value=">>"/>
	</form>
		<div id="message">
			<?php include('chatWindow.php'); ?>
		</div>
	<p><a href="chat/minichat.php">module Chat</a> - <a href="chat/minichat_raz.php">Vider le chat</a></p>
</div>
  
  <script src="jquery.js"></script>
  <script>
    
  </script>
 </body>
 </html>
