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
  
             <form action="branches_registration.php" method="POST">
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
  
  <form action="jobs_registration.php" method="POST">
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

    <!-- ----------------------------------- Title -------------------------------------- -->

    <div class="container" style="margin-top: 80px;">
        <h1 style="font-size: 360%;"> Final step! </h1>
            <center> <h2 style="font-size: 170%;"> Let's add your company's branches </h2> </center>
        </div> <br>

    <!-- ----------------------------------- Body -------------------------------------- -->
    
  
  <div style="margin-left: 15%; margin-right: 15%;">
      <hr>
  <div class="tab-content" id="pills-tabContent">
   
    <!-- --------------------------------- Shop Division --------------------------------- -->
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"> <br>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputAddress">Phone Number</label>
                        <input type="text" class="form-control" name="branch_tel">
                    </div>
                    <div class="form-group col-md-6"></div>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="shop_comp_desc"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1"> Location </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="branch_location"></textarea>
                </div>
            
                <form method="post" enctype="multipart/form-data" name="formUploadFile">        
                    <input type="file" name="files[]" multiple="multiple" />
                    <input type="submit" value="Upload File" name="btnSubmit"/>
                </form>
            <?php
            $errors = array();
            $uploadedFiles = array();
            $extension = array("jpeg","jpg","png","gif");
            $bytes = 1024;
            $KB = 1024;
            $totalBytes = $bytes * $KB;
            $UploadFolder = "UploadFolder";
            
            $counter = 0;
            
            foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name){
                $temp = $_FILES["files"]["tmp_name"][$key];
                $name = $_FILES["files"]["name"][$key];
                
                if(empty($temp))
                {
                    break;
                }
                
                $counter++;
                $UploadOk = true;
                
                if($_FILES["files"]["size"][$key] > $totalBytes)
                {
                    $UploadOk = false;
                    array_push($errors, $name." file size is larger than the 1 MB.");
                }
                
                $ext = pathinfo($name, PATHINFO_EXTENSION);
                if(in_array($ext, $extension) == false){
                    $UploadOk = false;
                    array_push($errors, $name." is invalid file type.");
                }
                
                if(file_exists($UploadFolder."/".$name) == true){
                    $UploadOk = false;
                    array_push($errors, $name." file is already exist.");
                }
                
                if($UploadOk == true){
                    move_uploaded_file($temp,$UploadFolder."/".$name);
                    array_push($uploadedFiles, $name);
                }
            }
            
            if($counter>0){
                if(count($errors)>0)
                {
                    echo "<b>Errors:</b>";
                    echo "<br/><ul>";
                    foreach($errors as $error)
                    {
                        echo "<li>".$error."</li>";
                    }
                    echo "</ul><br/>";
                }
                
                if(count($uploadedFiles)>0){
                    echo "<b>Uploaded Files:</b>";
                    echo "<br/><ul>";
                    foreach($uploadedFiles as $fileName)
                    {
                        echo "<li>".$fileName."</li>";
                    }
                    echo "</ul><br/>";
                    
                    echo count($uploadedFiles)." file(s) are successfully uploaded.";
                }                               
            }
            else{
                echo "Please, Select file(s) to upload.";
            }

     ?>                  
                  
                    <button type="submit" class="btn btn-primary" name="shop_signin">Sign in</button>
  
                  <br> <br>
    
    </div>
                    
  
  
    <!-- --------------------------------- FreeLance Division --------------------------------- -->
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    
    
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputAddress">Phone</label>
                        <input type="text" class="form-control" id="inputAddress">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputAddress">Mobile</label>
                        <input type="text" class="form-control" id="inputAddress">
                    </div>
                    </div>
  
                    <div class="form-group">
                  <label for="exampleFormControlSelect1_freelance">What is your work category ?</label>
              <!--<form action="jobs_registration.php" method="POST"> -->
                  <body onload='loadCategories()'>
  
                  <select id='categoriesSelect_freelance' class="form-control" onchange="loadCategories()" name="shop_comp_cat_freelance">
                  <option>...</option>
                    </select>
              <!-- </form> -->
  
                  </div>
                  <div class="form-group">
                  <label for="exampleFormControlSelect2">Subcategory ?</label>
  
                  <select id='subcatsSelect_freelance' multiple class="form-control" name="shop_comp_subcat_freelance">
                  </select>
  
                  </body>
                  </div>
    
                    <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
  
                    <div class="form-group">
                  <label for="exampleFormControlTextarea1">Covering Area</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
    
                    <button type="submit" class="btn btn-primary" name="freelance_signin">Sign in</button>
                    <br> <br>
    
            </div>
  
        </div>
  
      </div>
  
      </div>






















   <!-- ------------------------------------------------------------------------------- -->
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Scripts -->
    <script src="javascript/scripts.js"></script>

  </body>

</html>