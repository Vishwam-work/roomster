<?php
    $mysqlserverhost = "localhost";
    $database_name = "pg";
    $username_mysql = "root";
    $password_mysql = "";
    // -----------------------------------------------//
   
    $conn = mysqli_connect($mysqlserverhost, $username_mysql, $password_mysql, $database_name);
    if ($conn) {
          echo "Connection successfully mysql: ";
    }
        
      
  
 

    $email = "";
    
    $name = "";
    $errors = array();

 // Taking all 5 values from the form data(input)



$name =    $_REQUEST['name'];
$fname =  $_REQUEST['fname'];
$pno =   $_REQUEST['pno'];
$fpno =  $_REQUEST['fpno'];
$email =  $_REQUEST['email'];
$age =  $_REQUEST['age'];
$gender =  $_REQUEST['gender'];
$address =  $_REQUEST['address'];
$prof =  $_REQUEST['prof'];
$file = $_FILES['image']['name'];
    $target = "uploads/".basename($file);
    if(count($errors) === 0){
 
    
        $insert_data = "INSERT INTO hostel (name,fname,pno,fpno, email,age,gender,address,prof,file) values
       ('$name', '$fname', '$pno', '$fpno', '$email','$age','$gender','$address','$prof','$file')";
        echo"hi";
   }
    


   $data_check = mysqli_query($conn, $insert_data);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
    


 ?>