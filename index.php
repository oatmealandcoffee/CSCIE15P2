<?php
require 'pwgen.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>eXperimental Knotty Credential Developer</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
    <div class="container">
        <h1>eXperimental Knotty Credential Developer*</h1>
        <p>An easy-to-use password generator based on randomly selected words from the English language.</p>
        <div class="well">
            <h2>Settings</h2>
            <form action="index.php" method="GET">
                <table>
                    <tr>
                        <td class="form_label">Word Count</td>
                        <td class="form_entry"><input type="text" name="word_count" value="<?php echo ($wordCount ? $wordCount : $defaultWords); ?>"></td>
                        <td class="form_inst">Max words: <?=$maxWords;?></td>
                    </tr>
                    <tr>
                        <td class="form_label">Include Number</td>
                        <td class="form_entry"><input type="checkbox" name="include_number" <?php echo ($includeNumber ? 'checked' : ''); ?>></td>
                        <td class="form_inst">Randomly selected between <?=$minNumber;?>–<?=$maxNumber;?>.</td>
                    </tr>
                    <tr>
                        <td class="form_label">Include Special Character</td>
                        <td class="form_entry"><input type="checkbox" name="include_special" <?php echo ($includeSpecial ? 'checked' : ''); ?>></td>
                        <td class="form_inst"></td>
                    </tr>
                    <tr>
                        <td class="form_label">Uppercase First Character</td>
                        <td class="form_entry"><input type="checkbox" name="uppercase_first" <?php echo ($uppercaseFirst ? 'checked' : ''); ?>></td>
                        <td class="form_inst">Words in source word list may already capitalized.</td>
                    </tr>
                    <tr>
                        <td class="form_label">Delimiter</td>
                        <td class="form_entry"><input type="text" name="delimiter" value="<?php echo ($userDelimiter ? $userDelimiter : '' ); ?>"></td>
                        <td class="form_inst">A space is the default</td>
                    </tr>
                    <tr>
                        <td class="form_label">Use camelCase</td>
                        <td class="form_entry"><input type="checkbox" name="camelCase" <?php echo ($camelCase ? 'checked' : ''); ?>></td>
                        <td class="form_inst">Overrides delimiter and first uppercase</td>
                    </tr>
                    <tr>
                        <td class="form_label"></td>
                        <td class="form_entry"><button type="submit">Create password</button></td>
                        <td class="form_inst"></td>
                    </tr>
                </table>

			</form>
        </div>

        <div class="well">
            <h2>Password</h2>
            <p class="password"><?=$generatedPassword;?></p>
        </div>

        <hr>

        <h2>About</h2>
        <p>Passwords need to be created such that they are difficult to crack by hackers yet still easy to remember, which is a surprisingly hard thing to do. Randall Munroe of <a href="http://www.xkcd.com">XKCD</a>  postulated (but did not endorse; a subtle but important distinction) an idea to create passwords that balance memorability and complexity by using words from the dictionary by virtue of their length. To wit...</p>
        <p><img src="http://imgs.xkcd.com/comics/password_strength.png"></p>

      <hr>
        <p>* Get it? e<u>X</u>perimental <u>K</u>notty <u>C</u>redential <u>D</u>eveloper? XKCD? Get it? See, it's funny because it's a password generator based on an XKCD comic and the title of the page is based on the letters of the comic that spawned the idea.</p>
      <footer>
        <p>Copyright &copy; 2014 Philip Regan. All rights reserved. All wrongs revenged.</p>
      </footer>
    </div> 


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
</body>
</html>
