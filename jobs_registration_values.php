<?php
extract($_POST);
session_start();

$u_id = $_SESSION['u_id'];

  if(isset($shop_signin)) {
    $insert_shop = "INSERT INTO company(comp_name,comp_website,comp_desc,comp_u_id,comp_type_id,comp_sub_id) VALUES('$shop_comp_name','$shop_comp_website','$shop_comp_desc','$u_id','1','$shop_comp_subcat')";
    mysqli_query($idcon, $insert_shop);
    header('Location: branches_registration.php');
  }else if(isset($freelance_signin)){
    $insert_freelance = "INSERT INTO company(comp_name,comp_website,comp_desc,comp_u_id,comp_type_id,comp_sub_id) VALUES('freelance','freelance','$shop_comp_desc','1','2','1')";
    mysqli_query($idcon, $insert_freelance);
  }



?>