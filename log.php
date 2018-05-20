<?php
    include("php/connexion.inc.php");
    $idcon = connex();
    extract($_POST);
    session_start();

    $v = $_SESSION['login'];

    if (isset($_GET['function'])){
      session_destroy();
      $v = 0;
    }

    $show_err_msg=false;

    if(isset($signin_submit)){
    session_start();

    $id = "SELECT u_id FROM user WHERE u_email = '$signin_email'";
    $result_id = mysqli_query($idcon, $id);

    $data = mysqli_fetch_array($result_id, MYSQLI_NUM);



    if($data[0] > 1) {
      $result_user = mysqli_query($idcon, $id);
      $row_id = mysqli_fetch_array($result_user);

      $_SESSION['u_id'] = $row_id['u_id'];

        $pass = "SELECT * FROM user WHERE u_email = '$signin_email'";
        $result_pass = mysqli_query($idcon,$pass);

        $data_pass = mysqli_fetch_array($result_pass);


        if($signin_password == $data_pass['u_password']){
          $show_err_msg=false;


          $_SESSION['login'] = 1 ;
          $v = $_SESSION['login'];
        }else if("$signin_password" != $result_pass){
          $_SESSION['login'] = 0 ;
          $v = $_SESSION['login'];
          $show_err_msg=true;
        }
    }else{
      $_SESSION['login'] = 0 ;
      $v = $_SESSION['login'];
      $show_err_msg=true;
    }
  }
?>