<!DOCTYPE html >
<html>
<head>
  <meta charset="utf-8" >
   <title>Thank You for Joining our Mailing List</title>
</head>

<body>
   <?php

   // Create PHP variables and assign incoming POST variables to PHP variables (left to right assignment)
   $FirstName= $_POST['FirstName'];
   $LastName= $_POST['LastName'];
   $TelephoneNumber= $_POST['TelephoneNumber'];
   $EmailAddress= $_POST['EmailAddress'];

   // Create an HTML page "on the fly"

	echo "<!DOCTYPE html><html><head><meta charset='utf-8'><title>Thank You for Joining our Mailing List</title></head><body>";
	echo "<h3>Thank you for Joining Our Mailing List!</h3>";
	echo "<p>This is the information you entered:</p>";
	echo "<table>";
	echo "<tr><td>First Name:</td><td> $FirstName</td></tr>";
	echo "<tr><td>Last Name:</td><td> $LastName</td></tr>";
	echo "<tr><td>Telephone Number:</td><td> $TelephoneNumber</td></tr>";
	echo "<tr><td>Email Address:</td><td> $EmailAddress</td></tr>";
	echo "</table>";
	echo "</body></html>";

   ?>

</body>
</html>
