<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> View Staff

</h3><!-- panel-title Ends -->


</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

    <thead>

        <tr>
           
            <th>Initial Name</th>
            <th>NIC</th>
            <th>Gender</th>
            <th>Number</th>
            <th>Address</th>
            <th>Email</th>
            <th>Post</th>
            <th>Image</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

    </thead>

    <tbody>

        <?php

            $i = 0;

            $get_pro = "select * from `staff`";

            $run_pro = mysqli_query($Con,$get_pro);

            while($row_pro=mysqli_fetch_array($run_pro)){

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

        ?>

            <tr>
               
                <td><?php echo $initial_name; ?></td>
                <td><?php echo $nic; ?></td>
                <td><?php echo $gender; ?></td>
                <td><?php echo $cNumber; ?></td>
                <td><?php echo $address; ?></td>
                <td><?php echo $email; ?></td>
                
               
                <td><?php echo $post; ?></td>
                <td><?php echo $image; ?></td>


                <td>

                    <a href="index.php?editStaff=<?php echo $id; ?>">

                    <i class="fa fa-pencil"> </i> Edit

                    </a>

                </td>
                <td>

                    <a href="index.php?deleteStaff=<?php echo $id; ?>">

                    <i class="fa fa-trash-o"> </i> Delete

                    </a>

                </td>
            </tr>

        <?php } ?>


    </tbody>


</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->


