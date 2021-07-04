<?php include('partials/doc_header.php');?>
<?php

if(isset($_POST['search']))
{
     $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `pattable` INNER JOIN `appointment` ON pattable.email=appointment.user_emailid WHERE doc_emailid='$loggeddoc_email'  AND   CONCAT(pattable.fullname,pattable.email,pattable.phoneno,pattable.gender,appointment.doc_emailid,appointment.specialization,appointment.consultancyfees,appointment.appointmenttime,appointment.appointmentdate) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT  * FROM `pattable` INNER JOIN `appointment` ON pattable.email=appointment.user_emailid where doc_emailid='$loggeddoc_email'";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    include('../includes/db_connect.php');
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<body class="table">
     <!-- Back Navigation -->
	<nav class="navbar navbar-light bg-light sticky-top">
        <a class="navbar-brand" href="doc_home.php"><i class="fas fa-backward"></i> Back</a>
        <form class="d-flex"  action="" method="POST" autocomplete="off">
        <input class="form-control mr-2" type="search" name="valueToSearch" placeholder="Value To Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" name="search">Search</button>
      </form>
    </nav>
    <h1 style="color:#009879">APPOINTMENT DETAILS</h1><br>
    
    <div class="table-responsive">
	<table class="content-table table">
        <thead>
        <tr>
        <th>SNO</th>	
        <th>PATIENT_FULLNAME</th>   
        <th>PATIENT_EMAILID</th>     
        <th>CONTACT</th>   
        <th>GENDER</th>   
        <th>DISEASE</th>   
        <th>SPECIALIZATION</th>   
        <th>APPOINTMENT_DATE</th>   
        <th>APPOINTMENT_TIME</th>   
        <th>CONSULTANCY_FEES</th>   
        <th>STATUS</th>   
        <th>ACTION</th>      
        </tr>
        </thead> 
	
  <!-- populate table from mysql database -->
    <?php
		$count=0;				
        while($row = mysqli_fetch_array($search_result)):
        $count = $count+1;
   ?>
      
        <tr class="activerow"> 
            <td><?php echo $count?></td>
            <td><?php echo $row['fullname'] ?></td>
            <td><?php echo $row['user_emailid'] ?></td>
            <td><?php echo $row['phoneno'] ?></td>
            <td><?php echo $row['gender'] ?></td>
            <td><?php echo $row['disease'] ?></td>
            <td><?php echo $row['specialization'] ?></td>
            <td><?php echo $row['appointmentdate'] ?></td>
            <td><?php echo $row['appointmenttime'] ?></td>
            <td><?php echo "Rs ".$row['consultancyfees']."/-" ?></td>    
		<td> 
		<?php
		              if(($row['userstatus']==1) && ($row['doctorstatus']==1))  
                  {
                      echo "Active";
					  
                  }
					        if(($row['userstatus']==1) && ($row['doctorstatus']==2))  
                    {
                      echo "Patient Appointment accepted";
					  
                    }
                    if(($row['userstatus']==0) && ($row['doctorstatus']==1))  
                    {
                      echo "Cancelled by Patient";
                    }

                    if(($row['userstatus']==1) && ($row['doctorstatus']==0))  
                    {
                      echo "Cancelled By the Yourself";
                    }
                      ?> 
        </td>
        <td>
		    <form method="POST" action='partials/doctor_db.php' class="d-flex">
		        <input type='hidden' name='SNo' value='<?php echo $row['sno'] ?>'/>
            <?php
		           if(($row['userstatus']==1) && ($row['doctorstatus']==1))  
                    {				
                        echo "<input class='btn btn-success btn-sm' type='submit' style='outline:none' name='user_appointment_accept'  value='Accept'/>";
				        echo "<input  class='btn btn-danger btn-sm ml-2' type='submit' style='outline:none;' name='user_appointment_reject'  value='Reject' />";
					}
					
				?>
			</form>
	
	    <form method="POST" action='doc_prescriptionsend.php'>
		    <input type='hidden' name='name' value='<?php echo $row['fullname'] ?>'/>
		    <input type='hidden' name='user_mail' value='<?php echo $row['user_emailid'] ?>'/>
		    <input type='hidden' name='doc_mail' value='<?php echo $row['doc_emailid'] ?>'/>
		    <input type='hidden' name='no' value='<?php echo $row['phoneno'] ?>'/>
		    <input type='hidden' name='gen' value='<?php echo $row['gender'] ?>'/>
		    <input type='hidden' name='di' value='<?php echo $row['disease'] ?>'/>
		    <input type='hidden' name='appointmentdate' value='<?php echo $row['appointmentdate'] ?>'/>
		    <input type='hidden' name='appointmenttime' value='<?php echo $row['appointmenttime'] ?>'/>
		    <input type='hidden' name='cfees' value='<?php echo $row['consultancyfees'] ?>'/>
		<?php
		    if(($row['userstatus']==1) && ($row['doctorstatus']==2))  
        {
          echo "<input class='btn btn-primary btn-sm' type='submit' style='outline:none' name='presc'  value='Prescribe'/>";
        }
		?>
		</form>
			</td>
		</tr>
		
        
   <?php endwhile;?>
    </table>
    </div>
<?php include('partials/doc_footer.php');?>