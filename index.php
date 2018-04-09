<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Full Slider - Start Bootstrap Template</title>
<!-- multi step form  -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">



    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/full-slider.css" rel="stylesheet">

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <link href="css/classes.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Finleb</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

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

    <div class="div_goto">
      <button type="button" class="btn btn-primary" href="#second" onclick="smoothScroll(document.getElementById('div_hire'))">I want to hire</button>
      <button type="button" class="btn btn-primary" href="#second" onclick="smoothScroll(document.getElementById('div_work'))">I want to work</button>
    </div>
    









<form action="index.php" method="POST">
<div class="div_hire" id="div_hire">
  <h1>Test</h1>
<h1>
  <nav id="menu">
    <label for="tm" id="toggle-menu">Navigation <span class="drop-icon">▾</span></label>
    <input type="checkbox" id="tm">
    <ul class="main-menu clearfix">
    
      <li>  
                <a href="#">Select<span class="drop-icon">▾</span> 
                <label title="Toggle Drop-down" class="drop-icon" for="sm1">▾</label>
                </a>

                <input type="checkbox" id="sm1">
                
                <ul class="sub-menu">
                <?php
              
                    include ("php/connexion.inc.php");
                    $idcon = connex();
                    extract($_POST);
                    $query = "SELECT * From category";
                    $result = mysqli_query($idcon,$query);

                    while($row = mysqli_fetch_array($result)){
                        echo"
                        <style> 
                        
                        #menu ul {
                            margin: 0;
                            padding: 0;
                        }
                        
                        #menu .main-menu {
                            display: none;
                        }
                        
                        #tm:checked + .main-menu {
                            display: block;
                        }
                        
                        #menu input[type='checkbox'], 
                        #menu ul span.drop-icon {
                            display: none;
                        }
                        
                        #menu li, 
                        #toggle-menu, 
                        #menu .sub-menu {
                            border-style: solid;
                            border-color: rgba(0, 0, 0, .05);
                        }
                        
                        #menu li, 
                        #toggle-menu {
                            border-width: 0 0 1px;
                        }
                        
                        #menu .sub-menu {
                            background-color: #444;
                            border-width: 1px 1px 0;
                            margin: 0 1em;
                        }
                        
                        #menu .sub-menu li:last-child {
                            border-width: 0;
                        }
                        
                        #menu li, 
                        #toggle-menu, 
                        #menu a {
                            position: relative;
                            display: block;
                            color: white;
                            font-size: 25px;
                            text-shadow: 1px 1px 0 rgba(0, 0, 0, .125);
                        }
                        
                        #menu, 
                        #toggle-menu {
                            background-color: #09c;
                        }
                        
                        #toggle-menu, 
                        #menu a {
                            padding: 1em 1.5em;
                        }
                        
                        #menu a {
                            transition: all .125s ease-in-out;
                            -webkit-transition: all .125s ease-in-out;
                        }
                        
                        #menu a:hover {
                            background-color: white;
                            color: #09c;
                        }
                        
                        #menu .sub-menu {
                            display: none;
                        }
                        
                        #menu input[type='checkbox']:checked + .sub-menu {
                            display: block;
                        }
                        
                        #menu .sub-menu a:hover {
                            color: #444;
                        }
                        
                        #toggle-menu .drop-icon, 
                        #menu li label.drop-icon {
                            position: absolute;
                            right: 1.5em;
                            top: 1.25em;
                        }
                        
                        #menu label.drop-icon, #toggle-menu span.drop-icon {
                            border-radius: 50%;
                            width: 1em;
                            height: 1em;
                            text-align: center;
                            background-color: rgba(0, 0, 0, .125);
                            text-shadow: 0 0 0 transparent;
                            color: rgba(255, 255, 255, .75);
                        }
                        
                        #menu .drop-icon {
                            line-height: 1;
                        }
                        
                        @media only screen and (max-width: 64em) and (min-width: 52.01em) {
                            #menu li {
                            width: 33.333%;
                            }
                        
                            #menu .sub-menu li {
                            width: auto;
                            }
                        }
                        
                        @media only screen and (min-width: 52em) {
                            #menu .main-menu {
                            display: block;
                            }
                        
                            #toggle-menu, 
                            #menu label.drop-icon {
                            display: none;
                            }
                        
                            #menu ul span.drop-icon {
                            display: inline-block;
                            }
                        
                            #menu li {
                            float: left;
                            border-width: 0 1px 0 0;
                            }
                        
                            #menu .sub-menu li {
                            float: none;
                            }
                        
                            #menu .sub-menu {
                            border-width: 0;
                            margin: 0;
                            position: absolute;
                            top: 100%;
                            left: 0;
                            width: 12em;
                            z-index: 3000;
                            }
                        
                            #menu .sub-menu, 
                            #menu input[type='checkbox']:checked + .sub-menu {
                            display: none;
                            }
                        
                            #menu .sub-menu li {
                            border-width: 0 0 1px;
                            }
                        
                            #menu .sub-menu .sub-menu {
                            top: 0;
                            left: 100%;
                            }
                        
                            #menu li:hover > input[type='checkbox'] + .sub-menu {
                            display: block;
                            }
                        }
                        </style>
                        <link href='css/classes.css' rel='stylesheet'>
                        <li><a href='#'>{$row['cat_name']}
                            <span class='drop-icon'>▾</span>
                            <label title='Toggle Drop-down' class='drop-icon' for='sm2'>▾</label>
                        </a>
                        <input type='checkbox' id='sm2'>
                        <ul class='sub-menu'>";
                        $id=$row['cat_id'];
                        $query_sub = "SELECT * FROM subcategory where sub_cat_id=$id";
                        $result_sub = mysqli_query($idcon,$query_sub);
                        while($row_sub=mysqli_fetch_array($result_sub)){
                            echo"
                            <li><a href='#'>{$row_sub['sub_name']}</a></li>";
                        }
                            echo"
                            </ul>
                            </li>";
                }
                ?>
                
        </ul>
      </li>
    </ul>
  </nav>
  </h1> 
  </div>
</form>
 

<div class="div_work" id="div_work">
  <form id="regForm" action="/action_page.php">
    <h1 style="color: blue;">Register:</h1>
    <!-- One "tab" for each step in the form: -->
    <div class="tab">Name:
      <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
      <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
    </div>
    <div class="tab">Contact Info:
      <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
      <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
    </div>
    <div class="tab">Birthday:
      <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
      <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
      <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
    </div>
    <div class="tab">Login Info:
      <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
      <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
    </div>
    <div style="overflow:auto;">
      <div style="float:right;">
        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
      </div>
    </div>
    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center;margin-top:40px;">
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
    </div>
  </form>
</div>




<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>




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
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    
   <script src="vendor/bootstrap/js/ourjs.js"></script>
  </body>

</html>
