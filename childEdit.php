<?php


if(isset($_GET['editChild'])){

    $edit_id = $_GET['editChild'];

    $get_pro = "select * from child where id='$edit_id'";

    $run_pro = mysqli_query($Con,$get_pro);


    $row_pro = mysqli_fetch_array($run_pro);

    $iname = $row_pro['initial_name'];
    $fname = $row_pro['full_name'];
    $bdate = $row_pro['bod'];
    $gender = $row_pro['gender'];
    $cImage = $row_pro['image'];
    $id = $row_pro['id'];

}

?>

<!DOCTYPE html>

    <html>
        <head>
            <title>Insert Staff</title>    
            <link rel="stylesheet" href="./css/CFormStyle.css" >      
          
        </head>

        <body>

            <div class="row"><!--row starts-->

                <div class="col-lg-12"><!--col-lg-12 starts-->

                    
                </div><!--col-lg-12 Ends-->

            </div><!--row Ends-->

            <div class="row"><!--2 row starts-->

                <div class="col-lg-12"><!--col-lg-12 starts-->

                    <div class="panel panel-default"><!--panel panel-default starts-->

                        

                        <div class="panel-body"><!--panel-body starts-->

                        <form action="" method="POST">
                        <div class="container">
                            <h1>Child/ Add Child</h1>
                            <div class="divElement">
                                <label for="initialName">Name with initials:</label>
                                <input class="inputText" type="text" name="initialName" id="initialName" value="<?php echo $iname ?>" required>
                            </div>
                            <div class="divElement">
                                <label for="fullName">Full Name:</label>
                                <input class="inputText" type="text" name="fullName" id="fullName" value="<?php echo $fname ?>" required>
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
                                <input type="submit" value="Update Child" name="submitBtn"><br>  
                            </div>
                        </div>
                    </form>


                        </div><!--panel-body Ends-->

                    </div><!--panel panel-default Ends-->

                </div><!--col-lg-12 Ends-->

            </div><!--2 row Ends-->
            
            
            
    <?php
        if (isset($_POST['submitBtn'])) {

            $iName = $_POST['initialName'];
            $fName = $_POST['fullName'];
            $dob = $_POST['birthdate'];
            $gender =$_POST['gender'];
            $cImage = $_POST['cImage'];

            $insert_staff = "update child  set initial_name='$iName',full_name='$fName',bod='$dob',gender='$gender',image='$cImage' where id= '$edit_id'";
                

            $run_staff = mysqli_query($Con, $insert_staff);

            if ($run_staff) {
                echo "<script> alert('child updated successfully ')</script>";
                echo "<script> window.open('index.php?viewChild ','_self')</script>";
            }
        }
    ?>
