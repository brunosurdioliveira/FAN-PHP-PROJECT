<!-- 
    Name: Bruno Surdi Oliveira
    Date: August 2020
    Purpose: PHP PROJECT - Create a fully functional error free PHP web application with ALL of the outlined functions and features. The Web application will allow any user to submit data, and the database will store the information and display all the records in a friendly format.
-->

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Shadows+Into+Light&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

    <title>PHP project</title>

    <!-- Style -->
    <style>
    body{
        text-align: center;
        background: url("https://images.unsplash.com/photo-1514306191717-452ec28c7814?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80");
    }

    button {
        margin-bottom: 20px;
    }

    .alert {
        font-family: 'Arvo', serif;
    }

    h1 {
        padding: 20px;
        color: #daa520;
        font-family: 'Shadows Into Light', cursive;
        font-size: xxx-large;
    }

    table {
        font-family: 'Arvo', serif;
    }
    </style>
</head>

<body>
    <h1>Welcome to ArtistGram</h1>

<?php 
    // Include the function php file
    define('__ROOT__', (__DIR__ . '/')); // Returns: /opt/lampp/htdocs/labs/project/
    include_once(__ROOT__ . 'brunosurdi_functions.php');

    // var_dump the incoming post array variables
    // var_dump($_POST);

    // Check if the method is get
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Display all datas
?>
    <div class="alert alert-dark" role="alert">
        <?php echo '<strong>Check all artists that you have submitted</strong><br>';?>
    </div>
<?php
}
    // If it is post it's gonna sanitize, insert and display
    else {
    // SanitizeArray() function to set a local clean array 
    $cleanedArray = sanitizeArray($_POST);
    // var_dump($cleanedArray);

    // Insert New Records (only if the count is less then 3)
    if ($_SESSION['count'] >= 3) {
        echo 'ERROR <br>';
    }
    else {
        // if $_POST isset Insert it
        if (isset($_POST)) {
            insert_data($cleanedArray);
            // Confirmation message
?>
            <div class="alert alert-success" role="alert">
                <?php echo 'SUCCESS!!!!! <br>';?>
            </div>
<?php
        }
    }
}

// Display all datas
select_data();

// Check the count...
echo '<br><div class="alert alert-danger" role="alert">
<strong>YOU ALREADY SUBMITTED ' . $_SESSION['count'] . ' TIMES</strong>. Remember you just can submit 3 times.
</div>';
?>

<!-- Display a hyperlink to insert a new record -->
<a href="brunosurdi_submit.html.php">
<button name="return" class="btn btn-success">Return to insert more datas</button>
</a><br>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
  </body>
</html>
