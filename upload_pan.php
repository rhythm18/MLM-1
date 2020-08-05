<?php

include("inc/connect.php");
include("inc/chkAuth.php");


if(isset($_POST['submit_pan']))
{

  $id=$_SESSION['user_id'];
  $pan_no=$_POST['pan_no'];
  $udate=date('Y-m-d');


  

$target_dir = "uploads/kycdoc/";
  $target_file = $target_dir.$id."-PAN-".basename($_FILES["fileToUpload"]["name"]);
  $filename=basename($_FILES["fileToUpload"]["name"]);

  $fileFlag=0;

  if($filename!="")
    {
      $uploadOk = 1;
      $filename=$id."-PAN-".$filename;

      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

      
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";

    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
              $fileFlag=1;

        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
  
  }
if($fileFlag==1)
{
  $str3=" ,pan_img='$filename'";
}
else
{
  $str3="";
}
 
 //$sql="insert into kyc_detail(user_id,pan_no,pan_img,update_date) values('$id','$pan_no','$filename','$udate')";

    $sql="update kyc_detail set pan_no='$pan_no',update_date='$udate'".$str3." where user_id=$id";


   if(mysqli_query($conn,$sql))
   {
    
            $msg="PAN info Updated Successfully !!!";
            $url="kyc_detail.php";
            dispMessage($msg,$url);
    
   }
   else
   {
    echo "There was some error in updating pan info!!";
   }
}

