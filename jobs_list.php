<?php
    include 'log.php';
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Job Registration</title>

<html xmlns="http://www.w3.org/1999/xhtml">

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/home.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/full-slider.css" rel="stylesheet">

    <!-- Logged in Logo -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">





</head>
<body style="background-color: #ADD8E6;">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
      <div class="container" id="nav">
        <a class="navbar-brand" href="#">Finleb</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
              <?php
                if($_SESSION['login'] == 1){
                  echo"<a class='nav-link' data-toggle='modal' data-target='#exampleModal'><i class='fas fa-user' style='font-size: 1.5em;margin-right: 6px;'></i></a>
                  <li class='nav-item'>
                    <form action='index.php' method='POST'>
                    <input type='submit' name='test' id='test' value='Logout' /><br/>                      <span class='sr-only'>(current)</span>
                    </a>
                    </form>
                      </li>
                      ";
                }else if($_SESSION['login'] == 0){
                  echo"<a class='nav-link' data-toggle='modal' data-target='#exampleModal' style='margin-right: 6px;'>Login/Sign Up</a>";
                }
              ?>
              
            </li>
            <li class="nav-item">
              <form action="jobs_registration.php" method="POST">
                <input type="submit" value="Add Business" class="btn btn-outline-success"></input>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </nav> <br> <br>

    
      <!--  Sign Up -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="container"><br>
          <h2 style="display: inline;">Login or Register </h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <hr>

            <form action="jobs_list.php" method="POST">
        <div class="tab-content" id="myTabContent">
              <!-- Sign in division -->

              <div class="tab-pane fade show active" id="signin_div" role="tabpanel" aria-labelledby="profile-tab" >
              <label for="email" style="color: #000000;"><b>Email</b></label>
                  <input type="text" placeholder="Enter Email" name="signin_email" required>

              <label for="psw" style="color: #000000;"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="signin_psw" required>

            <a href="#" onclick="showStuff('register_div', 'signin_div', this); return false;">or Register here</a>

            <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <input type="submit" class="btn btn-primary" value="Sign in" name="signin_submit"></input>
                </div>
            </div>
        </div>
</form>






<form action="jobs_list.php" method="POST">
        <!-- Register division -->
        <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="register_div" role="tabpanel" aria-labelledby="profile-tab" style="display: none;">

                    <table>
                            <tr>
                              <td>
                                <label for="first_name" style="color: #000000;"><b>First Name</b></label>
                                <input type="text" placeholder="John" name="register_fname" required>
                              </td>
                              <td>
                                <label for="last_name" style="color: #000000;"><b>First Name</b></label>
                                <input type="text" placeholder="Smith" name="register_lname" required>
                              </td>
                            </tr>
                          </table>

                            <label for="email" style="color: #000000;"><b>Email</b></label>
                                <input type="text" placeholder="Enter Email" name="register_email" required>

                            <label for="psw" style="color: #000000;"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="register_password" required>

                            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:5px">
                            <label style="color: #000000;">
                            Remember me
                          </label> <br>

            <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <input type="submit" class="btn btn-primary" value="Register" name="register_submit"></input>
                </div>
            </div>

        </div>

        </form>
          </div>
        </div>
      </div>
    </div>
    <script>
        function showStuff(id, text, btn) {
    document.getElementById(id).style.display = 'block';
    // hide the lorem ipsum text
    document.getElementById(text).style.display = 'none';
    // hide the link
    btn.style.display = 'none';
}
    </script>



<?php
    $hi1 = $_GET["choice_cat"];
    echo "<br><h1 style='text-align: center;'>$hi1-";
    $choicesub = $_GET["choice_sub"];
    echo "$choicesub</h1>";
?>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="width: 650px;background-color: #F08080;">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" style="width: 650px;">Profile</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      <br>
      <?php 
//SELECT * From user,company,subcategory,type where u_id=comp_u_id AND comp_sub_id=sub_id AND comp_type_id=type_id AND  type_name='freelance' AND sub_name='mecanics';
$query = "SELECT * From user,company,subcategory,`type` where u_id=comp_u_id AND comp_sub_id=sub_id AND comp_type_id=`type_id` AND `type_name`='freelance' AND sub_name='$choicesub' ";
$result = mysqli_query($idcon, $query);

while ($row = mysqli_fetch_array($result)) {
    echo "

    <div class='single-card'>

    <div class='card' style='width: 18rem; height:15rem;background-color: #FFFFE0;'>
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
  </div>

  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <br>
  <?php 
//SELECT * From user,company,subcategory,type where u_id=comp_u_id AND comp_sub_id=sub_id AND comp_type_id=type_id AND  type_name='freelance' AND sub_name='mecanics';
$query = "SELECT * From user,company,subcategory,`type` where u_id=comp_u_id AND comp_sub_id=sub_id AND comp_type_id=`type_id` AND `type_name`='shop' AND sub_name='$choicesub' ";

$result = mysqli_query($idcon, $query);

while ($row = mysqli_fetch_array($result)) {
    echo "

    <div class='single-card2'>

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
  </div>
</div>




               



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
  <script src="jquery-3.3.1.min.js"></script>
  <script src="javascript/ourjs.js"></script>

   
   
</body>


</html>

