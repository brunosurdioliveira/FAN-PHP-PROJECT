<!-- 
    Name: Bruno Surdi Oliveira
    Date: August 2020
    Purpose: PHP PROJECT - Create a fully functional error free PHP web application with ALL of the outlined functions and features. The Web application will allow any user to submit data, and the database will store the information and display all the records in a friendly format.
-->

<!-- Connect with the database -->
<?php
// Start session
session_start();

// Assign the informations of the database into variables
$dbServername = "localhost";
$dbUsername = "phpuser";
$dbPassword = "phpuser";
$dbName = "bruno_project";

// Connect into the database using mysqli_connect()
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

// sanitize_html()
// Create a function called sanitizeArray()
// $array as an argument
function sanitizeArray($array) {
    // Loop over the choice array and foreach value
    foreach($array as $key => $val){

    // Sanitize your incoming data with htmlentities()
    $cleaned[$key] = htmlentities($val);

    // assign the existing key and value to a new clean array
    $cleanedArray[$key] = $cleaned[$key];
    }

    // return the array of sanitized values
    return array($cleanedArray);
}

// insert data function with $array as argument
function insert_data($array) {
    // Assign the sanitized values to a variable
    $artistName = $array[0]['artistName'];
    $artistTalent = $array[0]['artistTalent'];

    // To access the $conn of the global scope it is used global in front of the variable
    global $conn;

    // Insert into the database (to insert the date it was used CURRENT_TIMESTAMP())
    $sql = "INSERT INTO Artists (artist_name, artist_talent, datetime) VALUE ('$artistName', '$artistTalent',  CURRENT_TIMESTAMP());";
    // performs a query against a database using mysqli_query()
    mysqli_query($conn, $sql);

    // Set a session variable, that tracks the count of submissions per session
    increment_session_count();
}

// Select data function - to display the database datas
function select_data() {
    // use global to access the global variable $conn
    global $conn;

    // SELECT Statement into a variable
    $sql = "SELECT * FROM Artists;";
    // performs a query against a database using mysqli_query()
    $result = mysqli_query($conn, $sql);
    // mysqli_num_rows() - returns the number of rows in a result set.
    $resultCheck = mysqli_num_rows($result);

    // Create a table with thead and th
    echo "<table class='table table-hover'>
    <thead class='thead-dark'><tr>
    <th scope='col'>Artist ID</th>
    <th scope='col'>Artist Name</th>
    <th scope='col'>Talent</th>
    <th scope='col'>Date</th></tr></thead><tbody>";
    
    // If there is more than zero rows in the db display the datas
    if ($resultCheck > 0) {
        // mysqli_fetch_assoc() - fetches a result row as an associative array.
        while ($row = mysqli_fetch_assoc($result)) {
            // Create a table row for each  
            echo '<tr class="table-light">';
            echo '<th scope="row">' . $row['artist_id'] . '</td>';
            echo '<td>' . $row['artist_name'] . '</td>';
            echo '<td>' . $row['artist_talent'] . '</td>';
            echo '<td>' . $row['datetime'] . '</td></tr>';
        }
        // close tbody and table
        echo '</tbody></table>';
    }   
}

// Set a session variable, that tracks the count of submissions per session
function increment_session_count() {
    // If $_SESSION is not declared consider it as zero
    if ( !isset( $_SESSION['count'] ) ) {
        return $_SESSION['count'] = 0; 
    }
    else {
        // If it is declared, increment it!
        return $_SESSION['count']++;
    }
}
?>