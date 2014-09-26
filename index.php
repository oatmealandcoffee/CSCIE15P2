<?php
require 'pwgen.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>The XKCD Password Generator</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <style>
        .password
        {
        	color: #A5351C;
        	font-size: 300%;
        	font-family: monospace;
        }
    </style>

</head>
<body>

	<div class="jumbotron">
      <div class="container">
        <h1>The XKCD Password Generator</h1>
        <p>An easy-to-use password generator based on randomly selected words from the English language.</p>
      </div>
    </div>

    <div class="container">

        <div class="well">
            <h2>Settings</h2>
            <form action="index.php" method="GET">
				Word Count: <input type="text" name="word_count" value="4"> (Max words: <?=$maxWords;?>)<br>
				Include Number: <input type="checkbox" name="include_number"><br> (Randomly selected between <?=$minNumber;?>–<?=$maxNumber;?>.)<br>
				Include Special Character: <input type="checkbox" name="include_special"><br>
				Uppercase First Character: <input type="checkbox" name="uppercase_first"> (Words in source word list may already capitalized.)<br>
			<input type="submit">
			</form>
        </div>

        <div class="well">
            <h2>Password</h2>
            <p class="password"><?=$generatedPassword;?></p>
        </div>

        <hr>

        <h2>About</h2>
        <p>Passwords need to be created such that they are difficult to crack by hackers yet still easy to remember, which is a surprisingly hard thing to do. Randall Munroe of XKCD postulated (but did not endorse; a subtle but important distinction) an idea to create passwords that balance memorability and complexity by using words from the dictionary. To wit...</p>
        <p><img src="http://imgs.xkcd.com/comics/password_strength.png"></p>

      <hr>

      <footer>
        <p>Copyright &copy; 2014 Philip Regan. All rights reserved. All wrongs revenged.</p>
      </footer>
    </div> 


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
</body>
</html>
