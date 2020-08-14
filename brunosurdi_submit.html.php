<!-- 
    Name: Bruno Surdi Oliveira
    Date: August 2020
    Purpose: PHP PROJECT - Create a fully functional error free PHP web application with ALL of the outlined functions and features. The Web application will allow any user to submit data, and the database will store the information and display all the records in a friendly format.
-->

<?php 
// Start a PHP session 
session_start();
// echo session_id(); // Session ID
// var_dump($_SESSION);

// If $_SESSION['count'] is not declared considere it as zero
if ( !isset( $_SESSION['count'] ) ) {
  $_SESSION['count'] = 0; 
}
?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Shadows+Into+Light&display=swap" rel="stylesheet">
  

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <title>PROJECT</title>

  <!-- style -->
  <style>
  .col-6 {
    text-align: center;
  }

  h1 {
    padding: 20px;
    color: #daa520;
    font-family: 'Shadows Into Light', cursive;
    font-size: xxx-large;
  }

  input {
    text-align: center;
  }

  select {
    text-align-last: center;
  }

  body {
    background: url("https://images.unsplash.com/photo-1514306191717-452ec28c7814?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80");
  }

  .alert {
    font-family: 'Arvo', serif;
  }

  label {
    padding-right: 25%;
    padding-left: 25%;
    color: #ffffff;
    font-size: 20px;
    background: #0000003d;
    font-family: 'Arvo', serif;
  }

  </style>
</head>

<body>
  <!-- Bootstrap Grid -->
  <div class="container">
    <div class="row">
      <div class="col">
        <!-- Empty Grid -->
      </div>

      <!-- Middle - with the content -->
      <div class="col-6"> 
        <!-- Welcome to the page -->
        <h1>Welcome to ArtistGram</h1> <br>

        <!-- Button with a GET method - this will be used to differentiate from the POST method -->
        <button name="select_data" type="button" class="btn btn-info" onclick = "document.location.href='brunosurdi_output.php'">See all datas</button> <br><hr>

<!-- If session counter is bigger or equal 3 it's gonna display the message -->
<?php 
  if ($_SESSION['count'] >= 3) {
    // ALREADY SUBMITTED 3 TIMES TODAY MESSAGE (inside of an alert div)
?>
  <div class="alert alert-danger" role="alert">
  <?php 
    // Message
    echo 'You already submitted 3 times. Please, try again later <br>';
  ?>  
  </div>
<?php
  }
  // If session counter is less than 3 it's gonna display the form
  else {
  ?>
  <!-- Form that when submitted will post to the output -->
  <form action="brunosurdi_output.php" method="POST">
    <div class="form-group">
      <label for="artistName">Full Name:</label>
      <input type="text" name="artistName" class="form-control" id="artistName" placeholder="Artist Full name">
      <!-- name "artistName" -->
    </div>
    <div class="form-group">
      <label for="profissionalName">Artistic Name:</label>
      <input type="text" name="profissionalName" class="form-control" id="profissionalName" placeholder="Artistic Name (not required)"> 
      <!-- name "profissionalName" -->
    </div>
    <label for="talent">Talent:</label>
    <select name="artistTalent" class="form-control form-control">
      <option selected disabled>Select a talent...</option>
      <option value = "actor">Actor</option>
      <option value = "Singer">Singer</option>
      <option value = "Blogger">Blogger</option>
      <option value = "Other">Other</option>
    </select> <br>
    <!-- Name "artistTalent" -->
    <!-- Button to insert data into the database -->
    <button name="insert_data" class="btn btn-success">Insert informations</button>
  </form> 
  <?php  
  }
  ?>
      </div>
      <div class="col">
        <!-- Empty -->
      </div>
    </div>
  <div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
</body>

</html>