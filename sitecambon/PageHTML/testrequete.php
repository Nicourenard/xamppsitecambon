
<?php


// Establish a connection using MySQLi
printf ("test\n");
printf("Version de la bibliothèque cliente : %s\n", mysqli_get_client_info());

$mysqli = new mysqli('localhost', 'NICOLECTURE', 'password', 'cambonaventure');
// Check if the connection was successful

if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}
// Perform a sample query
printf ("query\n");
$query = "SELECT *

  FROM adherent" ; // FROM adherent WHERE NUMADHERENT = 1";
printf ("result\n");
$result = $mysqli->query($query);
// Check for query success

if (!$result) {
    die('Query failed: ' . $mysqli->error);
    
}

// Fetch and process the result set
while ($row = $result->fetch_assoc()) {
    // Your code for processing each row will come here
    printf("%s (%s) %s %s\n",
            $row["NOM"], $row["PRENOM"],$row["IDENTMAIL"],$row["PASSWORD"]
            );

}


// Closing the database connection when done
$mysqli->close();
?>



