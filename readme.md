# Landing page template

Responsive landing page template with e-mail input.

Landing pages can be used to test customer demand before building a minimum viable product or to gather a mailing list for a product launch.

## Getting started

Search and replace these strings to fit your product and you're good to go!

index.php
* `LANDINGPAGE_URL`: the URL of the landing page
* `META_DESCRIPTION`: the description of your page (meta HTML tag)
* `SOCIALMEDIA_THUMBNAIL`: image to be used on social media sharing sites
* `SOCIALMEDIA_TITLE`: title to be used on social media sharing sites
* `SOCIALMEDIA_COMPANY`: company or author to be used on social media sharing sites
* `PAGE_TITLE`: title HTML tag
* `GOOGLEANALYTICS_UA`: your Google Analytics web property id e.g. UA-12345678-1
* `GOOGLEANALYTICS_TITLE`: the page title as you want it to appear in Google Analytics
* `HEADER1`: the first line of text (your tagline)
* `HEADER2`: the second line of text (a message informing the user to enter their e-mail address)
* `SUBMIT_BUTTON`: text of the submit button 
* `EMAIL_PLACEHOLDER`: placeholder of the e-mail textbox

js.js
* `SUBMIT_SUCCESS`: message shown on the button when the e-mail address has been saved
* `SUBMIT_ERROR`: generic error message shown on the button when an error occured, such as invalid e-mail or server error

subscribe.php
* `DB_HOST`: database host
* `DB_NAME`: database name
* `DB_USER`: database user
* `DB_PASSWORD`: database password

Warning: there is no rate limiting or e-mail address format validation.

## Screenshot

![Landing page template screenshot](/screenshot.png?raw=true)

Background image by Bruno Marinho (unsplash.com).

