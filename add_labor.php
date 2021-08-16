

<!DOCTYPE html>
    <html>
        <head>
            <title>Insert Staff</title>    
            <link rel="stylesheet" href="./css/CFormStyle.css" >      
          
        </head>

        <body>
            
            <form action="" method="POST" >
                <div class="container">
                    <h1>Labor/ Add Labor</h1>
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
                        <label for="company">Name of the hiring company: </label>
                        <select name="company" id="company" required>
                            <option value="sunshine">sunshine</option>
                            <option value="moonlight">moonlight</option>                            
                        </select>
                    </div>
                    <div class="divElement">
                        <input type="submit" value="Insert" name="submitBtn"><br>  
                    </div>                                    
                </div>
            </form>

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
            $company = $_POST['company'];
            

                $insert_staff = "insert into labor (first_name,last_name,initial_name,bod,nic,gender,c_number,address,company)"
                        . " values ('$fname','$lName','$iName','$bod','$nic','$gender','$cNumber','$address','$company')";

                $run_staff = mysqli_query($Con, $insert_staff);

                if ($run_staff) {
                    echo "<script> alert('Labor Added successfully ')</script>";
                    echo "<script> window.open('index.php?viewLabors ','_self')</script>";
                }
            }
?>










