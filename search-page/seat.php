<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
   
}
?>



<?php include 'checkbox.php';?>
<?php 

   $mysqlserverhost = "localhost";
 $database_name = "id18768632_test";
 $username_mysql = "id18768632_test123";
 $password_mysql = "zKUN0jmBMB?E2V*n";
    // -----------------------------------------------//
    session_start();

        $conn = mysqli_connect($mysqlserverhost, $username_mysql, $password_mysql, $database_name);
        if (!$conn) {
              echo "Connection problem ";
        }
       ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bed Booking</title>
    <link rel="stylesheet" href="s.css">
    <link rel="stylesheet" href="navstyle.css">


    <!--  boot strap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



</head>
<style>
#preloder{
    background: black url("images/BackIllinformedAsianelephant-size_restricted.gif") no-repeat center center;
    background-size: 520px;
    height: 100vh;
    width: 100%;
    position: fixed;
    z-index: 100;
}
iframe{
    display: none;
}
</style>

<body>
   <div id="preloder">

 </div>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://roomsterinc.000webhostapp.com"><img class="logo" src="images/logoing-removebg-preview.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page"  href="https://roomsterinc.000webhostapp.com">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#booking">BOOKING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT US</a>
                    </li>
                    


                </ul>
            </div>
        </div>
    </nav>


    <div class="ward">
        <div class="entry-side">
            <h3 class="select-text">Please select a Room</h3>
        </div>
        <form action="check.php" method="post">
            <ol class="cabin">
                <li class="row row--1">
                    <ol class="seats" type="A">
                        <li class="seat">
                         
    <input type="checkbox" value="1A" id="1A"  name="label[]" <?php echo $a1 ?> />
                            <label for="1A">1A</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" name="label[]" value="1B" id="1B" <?php echo $b1 ?> />
                            <label for="1B">1B</label>
                        </li>
                    </ol>
                </li>
                <li class="row row--2">
                    <ol class="seats" type="A">
                        <li class="seat">
                            <input type="checkbox" name="label[]" value="2A" id="2A" <?php echo $a2 ?>/>
                            <label for="2A">2A</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" name="label[]" value="2B" id="2B" <?php echo $b2 ?> />
                            <label for="2B">2B</label>

                    </ol>
                    </li>
                    <li class="row row--3">
                        <ol class="seats" type="A">
                            <li class="seat">
                                <input type="checkbox" name="label[]" value="3A" id="3A" <?php echo $a3 ?> />
                                <label for="3A">3A</label>
                            </li>
                            <li class="seat">
                                <input type="checkbox" name="label[]" value="3B" id="3B" <?php echo $b3 ?> />
                                <label for="3B">3B</label>

                        </ol>
                        </li>
                        <li class="row row--4">
                            <ol class="seats" type="A">
                                <li class="seat">
                                    <input type="checkbox" name="label[]" value="4A" id="4A" <?php echo $a4 ?> />
                                    <label for="4A">4A</label>
                                </li>
                                <li class="seat">
                                    <input type="checkbox" name="label[]" value="4B" id="4B" <?php echo $b4 ?> />
                                    <label for="4B">4B</label>

                            </ol>
                            </li>
                            <li class="row row--5">
                                <ol class="seats" type="A">
                                    <li class="seat">
                                        <input type="checkbox" name="label[]" value="5A" id="5A" <?php echo $a5 ?>/>
                                        <label for="5A">5A</label>
                                    </li>
                                    <li class="seat">
                                        <input type="checkbox" name="label[]" value="5B" id="5B"<?php echo $b5 ?> />
                                        <label for="5B">5B</label>

                                </ol>
                                </li>
                                <li class="row row--6">
                                    <ol class="seats" type="A">
                                        <li class="seat">
                                            <input type="checkbox" name="label[]" value="6A" id="6A"<?php echo $a6 ?> />
                                            <label for="6A">6A</label>
                                        </li>
                                        <li class="seat">
                                            <input type="checkbox" name="label[]" value="6B" id="6B"<?php echo $b6 ?> />
                                            <label for="6B">6B</label>

                                    </ol>
                                    </li>
                                    <li class="row row--7">
                                        <ol class="seats" type="A">
                                            <li class="seat">
                                     <input type="checkbox" name="label[]" value="7A" id="7A" <?php echo $a7 ?> />
                                                <label for="7A">7A</label>
                                            </li>
                                            <li class="seat">
                                                <input type="checkbox" name="label[]" value="7B" id="7B" <?php echo $b7 ?> />
                                                <label for="7B">7B</label>

                                        </ol>
                                        </li>
                                        <li class="row row--8">
                                            <ol class="seats" type="A">
                                                <li class="seat">
                                                    <input type="checkbox" name="label[]" value="8A" id="8A" <?php echo $a8 ?> />
                                                    <label for="8A">8A</label>
                                                </li>
                                                <li class="seat">
                                                    <input type="checkbox" name="label[]" value="8B" id="8B" <?php echo $b8 ?>/>
                                                    <label for="8B">8B</label>
                                                </li>
                                            </ol>
            </OL>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
           
    </div>
    <div class="btn">
    </div>
    </form>
 <iframe width="560" height="315" src="https://www.youtube.com/embed/dWEuF1tjdU4"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/dWEuF1tjdU4"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/dWEuF1tjdU4"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/dWEuF1tjdU4"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/dWEuF1tjdU4"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
  <script>
                var loder = document.getElementById('preloder');
                window.addEventListener("load", function () {
                    loder.style.display = "none";
                })
            </script>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>