<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>jobs list</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/joblist.css" rel="stylesheet">

<script src="jquery-3.3.1.min.js"></script>


</head>
<body>
    

<h1>
    hsan1
</h1>

<?php 


$choicesub = $_GET["choice_sub"];
echo "$choicesub";

$hi1 = $_GET["choice_cat"];

echo "$hi1";


?>



                <?php
                include("php/connexion.inc.php");
                $idcon = connex();
                extract($_POST);
//SELECT * From user,company,subcategory,type where u_id=comp_u_id AND comp_sub_id=sub_id AND comp_type_id=type_id AND  type_name='freelance' AND sub_name='mecanics';
                $query = "SELECT * From user,company,subcategory,`type` where u_id=comp_u_id AND comp_sub_id=sub_id AND comp_type_id=`type_id` AND `type_name`='freelance' AND sub_name='$choicesub' ";
                $query1 = "SELECT * From subcategory";
                $result = mysqli_query($idcon, $query);

                while ($row = mysqli_fetch_array($result)) {
                    echo "

                    <div class='single-card'>

                    <div class='card' style='width: 18rem; height:15rem;'>
                      <img class='card-img-top' src='...' alt='Card image cap'>
                      <div class='card-body'>
                        <h5 class='card-title'>{$row['u_fname']}</h5>
                        <p class='card-text'>{$row['comp_desc']}.</p>
                        <a href='#' class='btn btn-primary'>Go somewhere</a>
                      </div>
                   </div>
              <br>
              </div>
                    ";
                }
                ?>



<!-- 
<div class="single-card">

      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
     </div>
<br>
</div>

-->



</div>   
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <script src="javascript/ourjs.js"></script>

   
   
</body>


</html>

