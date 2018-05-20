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
  <body>
      
    <!-------------------------------------- Navigation ----------------------------------- -->
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
              echo"
                <form action='index.php' method='POST' id='logout_form'>
                  <a href='?function' class='nav-link' id='logout_link' name='logout_link' style='margin-right: 7px;'><i class='fas fa-sign-out-alt'></i> Logout </a> 
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
</nav>
              
  <script>
    var form = document.getElementById("logout_form");
    var link = document.getElementById("logout_link");
    link.addEventListener("click",function(){form.submit();});
  </script>
  
     <!-- --------------  Sign Up -------------- -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="container"><br>
          <h2 style="display: inline;">Login or Register </h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <hr>

            <form action="index.php" method="POST">
        <div class="tab-content" id="myTabContent">
              
        <!-- Sign in division -->
              <div class="tab-pane fade show active" id="signin_div" role="tabpanel" aria-labelledby="profile-tab" >
                <p id="error_values" <?php if ($show_err_msg===false){?>style="display:none"<?php } ?> style='color: red;margin-left: 25%;font-size:18px;'> Invalid email or password!</p>
              <label for="email" style="color: #000000;"><b>Email</b></label>
                  <input type="text" placeholder="Enter Email" name="signin_email" required>

              <label for="psw" style="color: #000000;"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="signin_password" required>

            <a href="#" onclick="showStuff('register_div', 'signin_div', this); return false;">or Register here</a>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <input type="submit" class="btn btn-primary" value="Sign in" name="signin_submit"></input>
                </div>
            </div>
        </div>
</form>

<form action="index.php" method="POST">
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


<!-------------------------------------- Carousel ----------------------------------- -->

    <header>
      <div id="carouselExampleIndicators" class="carousel slide div_hide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('images/b1.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>First Slide</h3>
              <p>This is a description for the first slide.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/b2.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>


    <div class="div_mobi">
    </div>


    <!-- Smooth Scroll Buttons -->
    <div class="div_goto">
      <button type="button" class="btn btn-primary"  onclick="smoothScrollA(document.getElementById('div_hire'))">I want to hire</button>
      <button type="button" class="btn btn-primary"  onclick="smoothScrollB(document.getElementById('div_work'))">I want to work</button>
    </div>

<!-------------------------------------- Division Hire ----------------------------------- -->
    
<div class="div_hire" id="div_hire">
  <h1>FINLEB </h1>
  <h2> What do you want to explore?</h2>
<h1>
  <nav id="menu">
    <label for="tm" id="toggle-menu">Navigation <span class="drop-icon">▾</span></label>
    <input type="checkbox" id="tm">
    <ul class="main-menu clearfix">

      <li>
                <a>Select<span class="drop-icon">▾</span>
                <label title="Toggle Drop-down" class="drop-icon" for="sm1">▾</label>
                </a>

                <input type="checkbox" id="sm1">

                <ul class="sub-menu">
                
                 <?php                                  

                  $query = "SELECT * From category";
                  $result = mysqli_query($idcon, $query);

                  echo "<link href='css/classes.css' rel='stylesheet'>";
                  while ($row = mysqli_fetch_array($result)) {
                    echo "
                        <li><a>{$row['cat_name']}
                            <span class='drop-icon'>▾</span>
                            <label title='Toggle Drop-down' class='drop-icon' for='sm2'>▾</label>
                        </a>
                        <input type='checkbox' id='sm2'>
                        <ul class='sub-menu'>";
                    $id = $row['cat_id'];
                    $query_sub = "SELECT * FROM subcategory where sub_cat_id=$id";
                    $result_sub = mysqli_query($idcon, $query_sub);
                    while ($row_sub = mysqli_fetch_array($result_sub)) {
                      echo "
                            <li><a href='jobs_list.php?choice_sub={$row_sub['sub_name']}&choice_cat={$row['cat_name']}'>{$row_sub['sub_name']}</a></li>";
                    }
                    echo "
                            </ul>
                            </li>";
                  }

                  if (isset($register_submit)) {
                    $ins = "insert into user(u_fname,u_lname,u_email,u_password) values('$register_fname','$register_lname','$register_email','$register_password')";
                    mysqli_query($idcon, $ins);
                  }
                  ?>
        </ul>
      </li>
    </ul>
  </nav>
  </h1>

  </div>


  <!-------------------------------------- Division Work ----------------------------------- -->
<div class="div_work" id="div_work">

</div>


  <!-------------------------------------- Footer ----------------------------------- -->
<!-- Page Content -->
<section class="py-5">
    <div class="container">
      <h1>Full Slider by Start Bootstrap</h1>
      <p>The background images for the slider are set directly in the HTML using inline CSS. The rest of the styles for this template are contained within the
        <code>full-slider.css</code>
        file.</p>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
    </div>
    <!-- /.container -->
  </footer>



    <!-------------------------------------- Bootstrap core JavaScript ----------------------------------- -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Scripts -->
    <script src="javascript/scripts.js"></script>

  </body>

</html>



