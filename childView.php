


<div class="row"><!--  1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->
 


</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!--  1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> View Child

</h3><!-- panel-title Ends -->


</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

    <thead>

        <tr>
            <th>Name with Initials</th>   
            <th>Full Name</th>            
            <th>Birth Date</th>
            <th>Gender</th>
            <th>Image</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

    </thead>

    <tbody>

    <?php

        $i = 0;

        $get_pro = "select * from child";

        $run_pro = mysqli_query($Con,$get_pro);

        while($row_pro=mysqli_fetch_array($run_pro)){

            $iname = $row_pro['initial_name'];
            $fname = $row_pro['full_name'];
            $bdate = $row_pro['bod'];
            $gender = $row_pro['gender'];
            $cImage = $row_pro['image'];
            $id = $row_pro['id'];
            $i++;           
            ?>
        <tr>
            <td><?php echo $iname; ?></td>
            <td><?php echo $fname; ?></td>
            <td><?php echo $bdate; ?></td>
            <td><?php echo $gender; ?></td>
            <td><?php echo $cImage; ?></td>
            <td>
                <a href="index.php?editChild=<?php echo $id; ?>">
                    <i class="fa fa-pencil"> </i> Edit
                </a>
            </td>
            <td>
                <a href="index.php?deleteChild=<?php echo $id; ?>">
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


