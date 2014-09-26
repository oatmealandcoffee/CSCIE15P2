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
None

# Dependencies and Citations
<!--A list of any plugins, libraries, packages or outside code used in the project. See Student Responsibilities for more details on avoiding code plagiarism.-->
* [Bootstrap used for the design](http://www.bootstrap.org)
* All other code created and edited using [BBEdit](http://www.barebones.com/products/bbedit/) and [PHPStorm](http://www.jetbrains.com/phpstorm/).

# Project Notes

## Roadmap

	> Create HTML view
		X Title, Description, Explanation
		X Input Form
			X Word count option (pulldown menu)
			X Include a number option (checkbox)
			X Special symbol (checkbox)
			> Uppercase the first letter of the password (checkbox)
			* XTRA: Special character count
			* XTRA: Specify delimiter or camelCase
			* XTRA: Min/Max Length
		* Form input validation
	> Word list management
		- Read word list file // changed to holding the list as a baked-in array
		* XTRA: Scrape online word list 
	* Build password
		X Move build password out of the function 
		* Change build to be array-based then use join before output
		* Capture form values
		* Validate form values
		* Get words
		* Add specials
		* Join
		* Output generated password

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
* 14\_09\_25\_02\_01\_000: Added appending of random number; added global min and max number values

cd /Applications/MAMP/htdocs/CSCIE15P2; git add --all; git commit -m "14_09_25_02_01_000"; git push origin master