<!DOCTYPE html>
<html>
  <head>
    <title>Register</title>
  </head>
  <body>
    <form action="#" method="POST">
      <h1>E-mail <input type="email" name="email"></h1>
      <h1>Password <input type="password" name="password"></h1>
      <input type="submit" name="enter" value="Registrati">
    </form>
  </body>
</html>

<?php
if(isset($_POST["enter"]))
{
$servername = "localhost";
$username = "suffragium";
$password = "Px3PVKmsyt9V";
$dbname = "my_suffragium";
$conn = new mysqli($servername, $username, $password, $dbname);
$pw = $_POST["password"];
$cognome = $_POST["cognome"];
$mail = $_POST["email"];
$sql = "INSERT INTO votante (n_utente, password, nome, cognome, CF, email, indirizzo, data_di_nascita) VALUES ('$us', '$pw','$nome','$cognome','$CF','$mail','$address','$birth')";
if ($conn->query($sql) === TRUE) 
	{
    echo "New record created successfully";
	} 
else 
	{
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
$conn->close();
}
?>