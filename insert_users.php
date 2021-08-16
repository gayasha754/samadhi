<?php
     include("includes/db.php");
     if (isset($_POST['submitBtn'])) {

          $name = $_POST['donarName'];       
          $contact = $_POST['contactNumber'];
          $address = $_POST['address'];
          $date =$_POST['date'];
          $type = $_POST['type'];             
          $amount = $_POST['amount'];
          $item = $_POST['item'];
          
          $insert_staff = "insert into donar (donar_name,c_number,address,Date,type,amount,item)"
                    . " values ('$name','$contact','$address','$date','$type','$amount','$item')";

          $run_staff = mysqli_query($Con, $insert_staff);

          if ($run_staff) {
               echo "<script> alert('Donar Added successfully ')</script>";
               echo "<script> window.open('index.php?viewUsers ','_self')</script>";
          }
     }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Add Donations form</title>
        <link rel="stylesheet" href="./css/CFormStyle.css" >      
    </head>
    <body>
          <form action="" method="POST" >
                <div class="container">
                    <h1>Donations/ Add Donations</h1>
                    <div class="divElement">
                        <label for="donarName">Donar Name:</label>
                        <input class="inputText" type="text" name="donarName" id="donarName" required>
                    </div>  
                    <div class="divElement">
                        <label for="contactNumber">Contact Number: </label>
                        <input class="smallText" type="text" name="contactNumber" id="contactNumber" required>
                    </div>
                    <div class="divElement">
                        <label for="address">Address:</label>
                        <textarea class="inputText" name="address" id="address" cols="20" rows="3" placeholder="Permanent Address" required></textarea>
                    </div>
                    <div class="divElement">
                        <label for="date">date:</label>
                        <input type="date" name="date" id="date" required>
                    </div>
                    <div class="divElement">
                        <label for="type">Donation Type</label>
                        <select name="type" id="type" required>
                            <option value="Cash">Cash</option>
                            <option value="Items">Items</option>
                            <option value="Both">Both</option>
                        </select>
                    </div>
                    <div class="divElement">
                        <label for="amount">Amount: </label>
                        <input class="smallText" type="text" name="amount" id="amount">
                    </div>
                    <div class="divElement">
                        <label for="item">Item:</label>
                        <input class="inputText" type="text" name="item" id="item">
                    </div>
                    <div class="divElement">
                        <input type="submit" value="Add Donation" name="submitBtn"><br>  
                    </div>  
                </div>
          </form>
        
    </body>
</html>