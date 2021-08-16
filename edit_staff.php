<?php
if(isset($_GET['editStaff'])){

    $edit_id = $_GET['editStaff'];

    $get_pro = "select * from `staff` where staffId='$edit_id'";

    $run_pro = mysqli_query($Con,$get_pro);
    $row_pro = mysqli_fetch_array($run_pro);
    
    $id = $row_pro['staffId'];
    $first_name = $row_pro['first_name'];
    $last_name = $row_pro['last_name'];
    $initial_name = $row_pro['initial_name'];
    $bod = $row_pro['bod'];
    $nic = $row_pro['nic'];
    $gender = $row_pro['gender'];
    $cNumber = $row_pro['c_number'];
    $address = $row_pro['address'];
    $email = $row_pro['email'];
    $post = $row_pro['post'];
    $image = $row_pro['image'];
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
                    <input class="inputText" type="text" name="firstlName" id="firstlName" value="<?php echo $first_name ?>"required>
                </div>
                <div class="divElement">
                    <label for="lastlName">Last Name:</label>
                    <input class="inputText" type="text" name="lastlName" id="lastlName" value="<?php echo $last_name ?>" required>
                </div>
                <div class="divElement">
                    <label for="initialName">Name with initials:</label>
                    <input class="inputText" type="text" name="initialName" id="initialName" value="<?php echo $initial_name ?>" required>
                </div>
                <div class="divElement">
                    <label for="birthdate">Birthdate:</label>
                    <input type="date" name="birthdate" id="birthdate" required>
                </div>
                <div class="divElement">
                    <label for="NIC">NIC: </label>
                    <input class="smallText" type="text" name="nic" id="NIC" value="<?php echo $nic ?>" required>
                </div>
                <div class="divElement">
                    <label>Gender:</label>
                    <div class="genderRadio">
                        <input type='radio' name="gender" value="Male" id="option1" >
                        <label for="option1">Male</label>
                        <input type="radio" name="gender" value="Female" id="option2">
                        <label for="option2">Female</label>
                    </div>
                </div>
                <div class="divElement">
                    <label for="contactNumber">Contact Number: </label>
                    <input class="smallText" type="text" name="cNumber" id="contactNumber" value="<?php echo $cNumber ?>" required>
                </div>
                <div class="divElement">
                    <label for="permanentAddress">Permanent Address:</label>
                    <textarea class="inputText" name="address" id="address" cols="20" rows="3" placeholder="Permanent Address" value="<?php echo $address ?>" required></textarea>
                </div>
                <div class="divElement">
                    <label>Email Address:</label><br>
                    <input class="inputText" type="email" name="email" value="<?php echo $email ?>">
                </div>
                <div class="divElement">
                    <label for="post">Post: </label>
                    <select name="post" id="post" required>
                        <option value="p1">Admin</option>
                        <option value="p2">Principle</option>
                        <option value="p3">Matron</option>
                    </select>
                </div>
                <div class="divElement">
                    <label>Employee Image:</label>
                    <input type="file" name="eImage">
                </div>  
                <div class="divElement">
                    <input type="submit" value="Update" name="submitBtn"><br>  
                </div>                                    
            </div>
        </form>
            
            <?php
                if (isset($_POST['editStaff'])) {

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
        

                    $insert_staff = "update  staff set first_name='$fname',last_name='$lName',initia_namee='$iName',bod='$bod', nic='$nic',
                    gender='$gender',c_number='$cNumber',address='$address',email='$email', post= '$post', image = '$eImage' where staffId = '$edit_id'";
                        

                    $run_staff = mysqli_query($Con, $insert_staff);

                    if ($run_staff) {
                        echo "<script> alert('User updated successfully ')</script>";
                        echo "<script> window.open('index.php?viewStaff ','_self')</script>";
                    }
                }
            ?>
