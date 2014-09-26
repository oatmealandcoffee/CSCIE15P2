# Project: CSCI E-15 P1
**Philip Regan**

# Live URL
[http://p2.regan15.pw](http://p2.regan15.pw)

# Description
<!-- 2-3+ sentences -->
A password generator based on [the "correct horse battery staple example from XKCD](http://xkcd.com/936/).

# Demo information
<!-- If you attend your section to do an in-person demo, make a note of this. If you opt to do the Jing screencast demo, include the link here .-->
None	

# Test Requirements and Details
<!-- Any details the instructor or TA needs to know, for example, test credentials. -->
Extra Features of the generator include:
* A password of four words is created by default, including upon loading the page without a query string
* Settings found in the query string are repopulated upon refresh

# Dependencies and Citations
<!--A list of any plugins, libraries, packages or outside code used in the project. See Student Responsibilities for more details on avoiding code plagiarism.-->
* PHP created and edited with [PHPStorm](http://www.jetbrains.com/phpstorm/).
* [Bootstrap used for the design](http://www.bootstrap.org)
* HTML and CSS created and edited with [BBEdit](http://www.barebones.com/products/bbedit/)

# Project Notes

## Roadmap

	> Create HTML view
		X Title, Description, Explanation
		X Input Form
			X Word count option (pulldown menu)
			X Include a number option (checkbox)
			X Special symbol (checkbox)
			X Uppercase the first letter of the password (checkbox)
			* XTRA: Special character count
			* XTRA: Specify delimiter or camelCase
			* XTRA: Min/Max Length
		* Form input validation
	> Word list management
		- Read word list file // changed to holding the list as a baked-in array
		* XTRA: Scrape online word list 
	* Build password
		X Move build password out of the function 
		X Change build to be array-based then use join before output
		X Capture form values
		X Validate form values
		X Get words
		X Add number on selection
		X add special character on selection
		X Uppercase first letter
		X Join
		X Output generated password

## Bugs
None known

# Change History

* 14\_09\_24\_01\_00\_000: Started source
* 14\_09\_24\_01\_01\_000: Updated interface; Added `wordlist.php`; Added `pwgen.php`
* 14\_09\_24\_01\_01\_001: Added basic form to interface
* 14\_09\_25\_01\_01\_002: Added pulling of random word from $wordlist with global variables
* 14\_09\_25\_01\_01\_003: Added pulling of random word from $wordlist with scoped variables
* 14\_09\_25\_01\_01\_003: Added function to handle pulling a word from the word list
* 14\_09\_25\_01\_01\_004: Update generatePassword function to accept variables
* 14\_09\_25\_02\_00\_000: Added special character list; Added GET to form; Added form value capture; Added form value validation; Updated interface with option information
* 14\_09\_25\_02\_01\_001: Fixed bug in handling random number special addition
* 14\_09\_25\_02\_02\_000: Added special character on selection; Minor formatting update to index.php
* 14\_09\_25\_02\_03\_000: Added populating of password parameters captured from query string
* 14\_09\_25\_02\_04\_000: Added making first character uppercase
* 14\_09\_25\_02\_05\_000: Added generating password based on the default; updated readme

cd /Applications/MAMP/htdocs/CSCIE15P2; git add --all; git commit -m "14_09_25_02_05_000"; git push origin master