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
        session_start()
       $msg="";

        $email = "";
        $name = "";
        $errors = array();
        echo "Connection successfully mysql: "; 
 // Taking all 5 values from the form data(input)


 if(isset($_POST['signup'])){
$name =   mysqli_real_escape_string($conn, $_POST['name']);
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$pno =  mysqli_real_escape_string($conn, $_POST['pno']);
$fpno = mysqli_real_escape_string($conn, $_POST['fpno']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$age = mysqli_real_escape_string($conn, $_POST['age']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$prof = mysqli_real_escape_string($conn, $_POST['prof']);
$file = $_FILES['image']['name'];
    $target = "uploads/".basename($file);
    if(count($errors) === 0){
    
        $insert_data = "INSERT INTO hostel (name,fname,pno,fpno, email,age,gender,address,prof,file)
        values('$name', '$fname', '$pno', '$fpno', '$email','$age','$gender','$address','$prof','$file')";
        
    


$data_check = mysqli_query($conn, $insert_data);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

*/

 ?>

