<?php
// Saving data from form in text file in JSON format
// From: http://coursesweb.net/php-mysql/

// check if all form data are submited, else output error message
if(isset($_POST['apt-name']) && isset($_POST['locality']) && isset($_POST['term']) && isset($_POST['yield']) && isset($_POST['message'])) {
  // if form fields are empty, outputs message, else, gets their data
  if(empty($_POST['apt-name']) || empty($_POST['locality']) || empty($_POST['term']) || empty($_POST['yield']) || empty($_POST['message'])) {
    echo 'All fields are required';
  }
  else {
    // adds form data into an array
    $formdata = array(
      'apartment'=> $_POST['apt-name'],
      'locality'=> $_POST['locality'],
      'term'=> $_POST['term'],
      'yield'=> $_POST['yield'],
	  'description'=> $_POST['message']
    );

    // encodes the array into a string in JSON format (JSON_PRETTY_PRINT - uses whitespace in json-string, for human readable)
    $jsondata = json_encode($formdata, JSON_PRETTY_PRINT);

    // saves the json string in "formdata.txt" (in "dirdata" folder)
    // outputs error message if data cannot be saved
    if(file_put_contents('formdata.txt', $jsondata,FILE_APPEND)) echo 'Data successfully saved';
    else echo 'Unable to save data in "formdata.txt"';
	
	
  }
}
else echo 'Form fields not submited';
?>