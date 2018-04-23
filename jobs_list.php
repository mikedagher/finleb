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
<<<<<<< HEAD
    <link href="css/joblist.css" rel="stylesheet">
=======
    <link href="css/classes.css" rel="stylesheet">
>>>>>>> c232d5b3efca6f07d8746f81699b3156d93a1fd5

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


<<<<<<< HEAD

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
=======
            <div class="card text-center" style="max-width: 202px;">

            <!-- Heading -->
            <div class="card-body">
            <h4 class="card-title">Sun Gone</h4>
            <h6 class="card-subtitle text-muted">Sun disappears!</h6>
            </div>

            <!-- Image -->
            <img src="/pix/samples/12s.jpg" alt="Photo of sunset">

            <!-- Text Content -->
            <div class="card-body">
            <p class="card-text">The sun disappeared behind the horizon today. Experts claim it could be gone for good!</p>
            <a href="#" class="btn btn-primary">Full Report</a>
            </div>

            </div>


    </div>
    <div class="col-sm">




            <div class="card text-center" style="max-width: 202px;">

            <!-- Heading -->
            <div class="card-body">
            <h4 class="card-title">Sun Gone</h4>
            <h6 class="card-subtitle text-muted">Sun disappears!</h6>
            </div>

            <!-- Image -->
            <img src="/pix/samples/12s.jpg" alt="Photo of sunset">

            <!-- Text Content -->
            <div class="card-body">
            <p class="card-text">The sun disappeared behind the horizon today. Experts claim it could be gone for good!</p>
            <a href="#" class="btn btn-primary">Full Report</a>
            </div>

            </div>


</div>
    <div class="col-sm">



            <div class="card text-center" style="max-width: 202px;">

            <!-- Heading -->
            <div class="card-body">
            <h4 class="card-title">Sun Gone</h4>
            <h6 class="card-subtitle text-muted">Sun disappears!</h6>
            </div>

            <!-- Image -->
            <img src="/pix/samples/12s.jpg" alt="Photo of sunset">

            <!-- Text Content -->
            <div class="card-body">
            <p class="card-text">The sun disappeared behind the horizon today. Experts claim it could be gone for good!</p>
            <a href="#" class="btn btn-primary">Full Report</a>
            </div>

            </div>

</div>
  </div>
</div>



    <link rel="stylesheet" type="text/css" media="screen" href="css/jobscarousel.css" />
<script>
$("#myCarousel").on("slide.bs.carousel", function(e) {
  var $e = $(e.relatedTarget);
  var idx = $e.index();
  var itemsPerSlide = 3;
  var totalItems = $(".carousel-item").length;

  if (idx >= totalItems - (itemsPerSlide - 1)) {
    var it = itemsPerSlide - (totalItems - idx);
    for (var i = 0; i < it; i++) {
      // append slides to end
      if (e.direction == "left") {
        $(".carousel-item")
          .eq(i)
          .appendTo(".carousel-inner");
      } else {
        $(".carousel-item")
          .eq(0)
          .appendTo(".carousel-inner");
      }
    }
  }
});

</script>
<div class="container-fluid">
  <h1 class="text-center mb-3">Bootstrap Multi-Card Carousel</h1>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner row w-100 mx-auto">
      <div class="carousel-item col-md-4 active">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f44242/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 1</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/418cf4/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 2</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/3ed846/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 3</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/42ebf4/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 4</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f49b41/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 5</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f4f141/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 6</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/8e41f4/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 7</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>








>>>>>>> c232d5b3efca6f07d8746f81699b3156d93a1fd5
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<<<<<<< HEAD
   <script src="javascript/ourjs.js"></script>

   
   
=======
   <script src="javascript/scripts.js"></script>
>>>>>>> c232d5b3efca6f07d8746f81699b3156d93a1fd5
</body>


</html>

