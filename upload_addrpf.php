<?php

include("inc/connect.php");
include("inc/chkAuth.php");
      

if(isset($_POST['submit_addrpf']))
{

  $id=$_SESSION['user_id'];
  $addpf_id=$_POST['addr_doc_id'];
  $addpf_no=$_POST['addr_doc_no'];
  $udate=date('Y-m-d');

  

$target_dir = "uploads/kycdoc/";
  $target_file = $target_dir.$id."-ADDR-".basename($_FILES["fileToUpload"]["name"]);
  $filename=basename($_FILES["fileToUpload"]["name"]);

  $fileFlag=0;

  if($filename!="")
    {
        $uploadOk = 1;
        $filename=$id."-ADDR-".$filename;

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
  $str2=" ,addr_doc_img='$filename'";
}
else
{
  $str2="";
}
 

   //$sql="insert into kyc_detail(user_id,addr_doc_id,addr_doc_no,addr_doc_img,update_date) values('$id','$addpf_id','$addpf_no','$filename','$udate')";

   $sql="update kyc_detail set addr_doc_id='$addpf_id',addr_doc_no='$addpf_no',update_date='$udate'".$str2." where user_id=$id";

   if(mysqli_query($conn,$sql))
   {
            $msg="Address Proof Updated Successfully !!!";
            $url="kyc_detail.php";
            dispMessage($msg,$url);    

   }
   else
   {
    echo "There was some error in updating Address proof!!";
   }
}


?>


