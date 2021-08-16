<!DOCTYPE html>

<html>
<head>
    <title>Insert Child</title>           
    <link rel="stylesheet" href="./css/CFormStyle.css" >      
</head>

<body>
    <form action="" method="POST">
        <div class="container">
            <h1>Child/ Add Child</h1>
            <div class="divElement">
                <label for="initialName">Name with initials:</label>
                <input class="inputText" type="text" name="initialName" id="initialName"  required>
            </div>
            <div class="divElement">
                <label for="fullName">Full Name:</label>
                <input class="inputText" type="text" name="fullName" id="fullName" required>
            </div>
            <div class="divElement">
                <label>Birthdate:</label>
                <input type="date" name="birthdate" id="birthdate" required>
            </div>
            <div class="divElement">
                <label>Gender:</label>
                <div class="genderRadio">
                    <input type='radio' name="gender" value="male" id="option1">
                    <label for="option1">Male</label>
                    <input type="radio" name="gender" value="female" id="option2">
                    <label for="option2">Female</label>
                </div>
            </div>
            <div class="divElement">
                <label>Child Image:</label>
                <input type="file" name="cImage">
            </div>
            <div class="divElement">
                <input type="submit" value="Add Child" name="submitBtn"><br>  
            </div>
        </div>
    </form>


</body>

        

                        
            
<?php
    if (isset($_POST['submitBtn'])) {

     $iName = $_POST['initialName'];
     $fName = $_POST['fullName'];
     $dob = $_POST['birthdate'];
     $gender =$_POST['gender'];
     $cImage = $_POST['cImage'];
    

        $insert_staff = "insert into child (initial_name,full_name,bod,gender,image)"
                . " values ('$iName','$fName','$dob','$gender','$cImage')";

        $run_staff = mysqli_query($Con, $insert_staff);

        if ($run_staff) {
            echo "<script> alert('child Added successfully ')</script>";
            echo "<script> window.open('index.php?viewChild ','_self')</script>";
        }
    }
?>
