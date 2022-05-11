<?php require del.php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="VIEWPORT" content="width=device-width , intial scale=1.0">
    <title> Registration</title>

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style.css">


</head>

<body>


    <center>
        <br>

        <div class="container">
            <br>
            <div class="title">Registration</div>
            <div class="content">
                <form action="del.php" method="post" enctype='multipart/form-data'>
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Full Name</span>
                            <input type="text" placeholder="Enter your name" name="name" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Father Name </span>
                            <input type="text" placeholder="Enter your Father Name" name="fname" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Phone Number</span>
                            <input type="text" name="pno" placeholder="Enter your number" required>
                        </div>
                        <div class="input-box">
                            <span class="details"> Father Phone Number</span>
                            <input type="text" name="fpno" placeholder="Enter your  Father number" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Email</span>
                            <input type="text" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="input-box">
                            <span class="details">AGE</span>
                            <input type="text" name="age" placeholder="Enter your age" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Gender</span>
                            <input type="text" name="gender" placeholder="Enter your age" required>
                        </div>
                        <div class="input-box ">
                            <span class="details ">Address</span>
                            <textarea rows="3 " cols="45 " name="address ">
                            
                             </textarea>

                        </div>
                    </div>
                    <div class="drop">
                        <p>Choose your Profession:</p>

                        <select name="prof">
                        <option value="S">Student</option>
                        <option value="i">opt 1 </option>
                        <option value="i2"> opt 2 </option>
                        <option value="i3">Berozgar</option>

                        </select>


                    </div>


                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="customFileInput" aria-describedby="customFileInput">
                        </div>


                    </div>
                    <br>
                    <label class="">
                        <input type="checkbox" checked="checked">
                        <span class="checkmark">Terms & conditions* </span>
                      </label>

                    <div class="button">
                        <input type="submit" value="Register" name="submit">
                    </div>

                </form>
            </div>
        </div>



    </center>
</body>

</html>