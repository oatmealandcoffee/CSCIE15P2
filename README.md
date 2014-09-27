# Project: CSCI E-15 P2
**Philip Regan**

# Live URL
[http://p2.regan15.pw](http://p2.regan15.pw)

# Description
<!-- 2-3+ sentences -->
A password generator based on [the "correct horse battery staple example from XKCD](http://xkcd.com/936/).

# Demo information
<!-- If you attend your section to do an in-person demo, make a note of this. If you opt to do the Jing screencast demo, include the link here .-->
I will do an in-person demo the Thursday before this is due.

# Test Requirements and Details
<!-- Any details the instructor or TA needs to know, for example, test credentials. -->
Extra Features of the generator include:
* A password of four words is created by default, including upon loading the page without a query string
* Settings found in the query string are repopulated upon refresh
* The user can define a delimiter string to join password components
* Converts password to "camelCase"

# Dependencies and Citations
<!--A list of any plugins, libraries, packages or outside code used in the project. See Student Responsibilities for more details on avoiding code plagiarism.-->
* PHP created and edited with [PHPStorm](http://www.jetbrains.com/phpstorm/).
* [Bootstrap used for the design](http://www.bootstrap.org)
* HTML and CSS created and edited with [BBEdit](http://www.barebones.com/products/bbedit/)

# Project Notes

## Roadmap

	X Create HTML view
		X Title, Description, Explanation
		X Input Form
			X Word count option (pulldown menu)
			X Include a number option (checkbox)
			X Special symbol (checkbox)
			X Uppercase the first letter of the password (checkbox)
			- XTRA: Special character count
			X XTRA: Specify delimiter or camelCase
			- XTRA: Min/Max Length
		X Form input validation
	> Word list management
		- Read word list file // changed to holding the list as a baked-in array for speed
		- XTRA: Scrape online word list
	X Build password
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
* 14\_09\_26\_02\_05\_001: Updated project title and add explanatory notes for the joke that doesn't really need explanatory notes. If we can't have a bit of fun with our school projects, then what the hell is the point?
* 14\_09\_26\_02\_06\_000: Added joining built passwords with user-defined delimiter
* 14\_09\_26\_02\_07\_000: Moved styles to external style sheet for separation of concerns
* 14\_09\_26\_02\_08\_000: Added converting password to "camelCase"
* 14\_09\_26\_02\_09\_000: Added table layout to form
* 14\_09\_26\_02\_09\_001: Minor edits to the About section

cd /Applications/MAMP/htdocs/CSCIE15P2; git add --all; git commit -m "14_09_26_02_09_001"; git push origin master