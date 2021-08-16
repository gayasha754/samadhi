<?php
        include("includes/db.php");
            if (isset($_POST['submitBtn'])) {

            $fname = $_POST['firstlName'];
            $lName = $_POST['lastlName'];
            $iName  =$_POST['initialName'];
            $bod =$_POST['birthdate'];
            $nic = $_POST['nic'];
            $gender = $_POST['gender'];
            $cNumber = $_POST['cNumber'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $post = $_POST['post'];
            $eImage = $_POST['eImage'];

                $insert_staff = "insert into staff (first_name,last_name,initial_name,bod,nic,gender,c_number,address,email,post,image)"
                        . " values ('$fname','$lName','$iName','$bod','$nic','$gender','$cNumber','$address','$email','$post','$eImage')";

                $run_staff = mysqli_query($Con, $insert_staff);

                if ($run_staff) {
                    echo "<script> alert('Staff Added successfully ')</script>";
                    echo "<script> window.open('index.php?viewStaff ','_self')</script>";
                }
            }
?>

<!DOCTYPE html>
    <html>
        <head>
            <title>Insert Staff</title>    
            <link rel="stylesheet" href="./css/CFormStyle.css" >      
          
        </head>

        <body>
            
            <form action="" method="POST" >
                <div class="container">
                    <h1>Staff/ Add Staff</h1>
                    <div class="divElement">
                        <label for="firstlName">First Name:</label>
                        <input class="inputText" type="text" name="firstlName" id="firstlName" required>
                    </div>
                    <div class="divElement">
                        <label for="lastlName">Last Name:</label>
                        <input class="inputText" type="text" name="lastlName" id="lastlName" required>
                    </div>
                    <div class="divElement">
                        <label for="initialName">Name with initials:</label>
                        <input class="inputText" type="text" name="initialName" id="initialName" required>
                    </div>
                    <div class="divElement">
                        <label for="birthdate">Birthdate:</label>
                        <input type="date" name="birthdate" id="birthdate" required>
                    </div>
                    <div class="divElement">
                        <label for="NIC">NIC: </label>
                        <input class="smallText" type="text" name="nic" id="NIC" required>
                    </div>
                    <div class="divElement">
                        <label>Gender:</label>
                        <div class="genderRadio">
                            <input type='radio' name="gender" value="male" id="option1" >
                            <label for="option1">Male</label>
                            <input type="radio" name="gender" value="female" id="option2">
                            <label for="option2">Female</label>
                        </div>
                    </div>
                    <div class="divElement">
                        <label for="contactNumber">Contact Number: </label>
                        <input class="smallText" type="text" name="cNumber" id="contactNumber" required>
                    </div>
                    <div class="divElement">
                        <label for="permanentAddress">Permanent Address:</label>
                        <textarea class="inputText" name="address" id="address" cols="20" rows="3" placeholder="Permanent Address" required></textarea>
                    </div>
                    <div class="divElement">
                        <label>Email Address:</label><br>
                        <input class="inputText" type="email" name="email">
                    </div>
                    <div class="divElement">
                        <label for="post">Post: </label>
                        <select name="post" id="post" required>
                            <option value="Admin">Admin</option>
                            <option value="Principle">Principle</option>
                            <option value="Matrons">Matron</option>
                        </select>
                    </div>
                    <div class="divElement">
                        <label>Employee Image:</label>
                        <input type="file" name="eImage">
                    </div>  
                    <div class="divElement">
                        <input type="submit" value="Insert" name="submitBtn"><br>  
                    </div>                                    
                </div>
            </form>
                            
                                
                
            
        