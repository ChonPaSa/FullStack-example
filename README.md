# FullStack-example

** Example of a development using HTML, CSS3, JS, jQuery, MySql, PHP Object oriented, W3.CSS, Ajax, Json.... **

In short, it’s all about a web page with a form. The form reads the fields from a database table
and saves data to a different table on the same database.

## HTML & CSS
Semantic html5 tags with w3c compliance. Responsive design with 3 breakpoints

## JavaScript
- When visiting the page for the first time, the user is shown a layer with a form to submit contact information. A cookie is saved so the user does not get the layer and pop up on their 2nd and
subsequent visits.
- The “Contact form” fields are read asynchronously with PHP from a MySQL database
- When the user scrolls down the page, the menu should stick to the top of the
browser’s view port and always be visible.

## MySql
You will find the structure of the database in the folder ./database/

## PHP
I use classes to store objects and an object relational mapper.
The files ./formFields.php and ./formSubmit.php read the actual form fields from the MySQL database table and save the form data into the database

- submitted forms are saved in the tables `formSubmit` and `formSubmitData`
- 'formSubmit' stores an id for each form submission
- Each row of the 'formSubmitData' table holds one submitted input field.


