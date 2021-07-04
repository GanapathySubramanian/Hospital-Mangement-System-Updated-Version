<?php include('partials/pat_header.php');?>
<?php
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `appointment` WHERE user_emailid='$loggeduser_email' AND CONCAT( `user_emailid`, `doc_emailid`, `specialization`, `disease`, `appointmentdate`, `appointmenttime`, `consultancyfees`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `appointment` where user_emailid='$loggeduser_email' ";
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
        <a class="navbar-brand" href="pat_home.php"><i class="fas fa-backward"></i> Back</a>
        <form class="d-flex"  action="" method="POST" autocomplete="off">
        <input class="form-control mr-2" type="search" name="valueToSearch" placeholder="Value To Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" name="search">Search</button>
      </form>
    </nav>	 

    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-2">
        <h1 class="font-weight-bold" style="color:#009879">YOUR APPOINTMENT DETAILS</h1>
        <a class="btn btn-success mr-4"  data-toggle="modal" data-target="#bookappoint" data-whatever="@mdo" style="background-color:#009879" href="#">Book An Appointment</a>
    </div>

    <!-- Add patient modal -->
<div class="modal fade" id="bookappoint" tabindex="-1" role="dialog" aria-labelledby="bookappointModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Book An Appointment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="partials/patient_db.php">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Patient Emailid :</label>
                        <input type="text" class="form-control" placeholder="Enter the Emailid" name="u_mailid" value="<?php echo $loggeduser_email;?>"id="add_patfullname" readonly>
                    </div>
                    <div class="form-group">
                         <label for="message-text" class="col-form-label">Select Department:</label>
                         <select name="spec" id="spec" class="form-control"  onchange="my_fun(this.value);select_depart(this.value);select_time(this.value);">
                            <option value="" disabled selected>--Select Specialization--</option>
                            <?php
                            include('../includes/db_connect.php');
                            $depart = "SELECT depart_name FROM `department`";

                            $depart_run= mysqli_query($connect,$depart);
                                
                            while($d_name=mysqli_fetch_array($depart_run))
                            {
                                echo '<option value="'.$d_name['depart_name'].'">'.$d_name['depart_name'].'</option>';
                            }
                        ?>
                    </select>
                   </div>
                   <div class="form-group" id="doctid">
                        <label for="message-text" class="col-form-label">Select Doctor:</label>
                        <select  name="doc_emailid" class="form-control">
                            <option value="" disabled selected>--Select Doctor--</option>
                        </select>
                   </div>
                   <div class="form-group">
                         <label for="message-text" class="col-form-label">Disease Name with how many Number of days you are in sick:</label>
                        <input type="text" class="form-control" name="dis"placeholder="Enter the DiseaseName(No of days)">
                   </div>
                   <div class="form-group" id="fees">
                         <label for="message-text" class="col-form-label">Consultancy Fees:</label>
                        <input type="text" class="form-control" placeholder="Enter the Consultancy fees" name="fees" id="fees" readonly>
                   </div>
                   <div class="form-group">
                         <label for="message-text" class="col-form-label">Select Appointment Date:</label>
                        <input type="date" class="form-control" placeholder="Appointment-date" name="date" id="date" onchange="validatedate()" required>
                   </div>
                   <div class="form-group" id="apptime">
                         <label for="message-text" class="col-form-label">Select Appointment Time:</label>
                         <select name="time" class="form-control" required>
                            <option value="" disabled selected>--Select Time--</option>
                            <optgroup label="Morning Time">
                              <option value="">No data found</option>
                            </optgroup>
                            <optgroup label="Evening Time">
                              <option value="">No data found</option>
                            </optgroup>
                          </select>
                   </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success"  style="background-color:#009879" name="pat_bookappointment">Book Appointment</button>
                </div>
            </form>
            </div>
        </div>
        </div>



<br>
<div class="table-responsive">
   <table class="content-table table">
        <thead>
        <tr>
        <th>USER_EMAILID</th>   
        <th>DOCTOR_EMAILID</th> 
        <th>SPECIALIZATION</th>     
        <th>DISEASE</th>   
        <th>APPOINTMENT_DATE</th>   
        <th>APPOINTMENT_TIME</th>   
        <th>CONSULTANCY_FEES</th>   
        <th>YOUR_STATUS</th>      
        <th>ACTION</th>   
        </tr>
		</thead>
	
 <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
       
        <tr>
            
            <td><?php echo $row['user_emailid'] ?></td>
            <td><?php echo $row['doc_emailid'] ?></td>
            <td><?php echo $row['specialization'] ?></td>
            <td><?php echo $row['disease'] ?></td>
            <td><?php echo $row['appointmentdate'] ?></td>
            <td><?php echo $row['appointmenttime'] ?></td>
            <td><?php echo $row['consultancyfees'] ?></td>
			<td> 
		<?php
              if(($row['userstatus']==1) && ($row['doctorstatus']==1))  
              {
                echo "Active";
      
              }
              if(($row['userstatus']==1) && ($row['doctorstatus']==2))  
              {
                echo "Your Appointment accepted <br>wait for the Presciption";
      
              }
              if(($row['userstatus']==0) && ($row['doctorstatus']==1))  
              {
                echo "Cancelled by Yourself";
              }

              if(($row['userstatus']==1) && ($row['doctorstatus']==0))  
              {
                echo "Cancelled By the Doctor";
              }

                ?> 
        </td>
		
			<td>
			 <form method="POST" action="partials/patient_db.php">
			 <input type='hidden' name='SNo' value="<?php echo $row['sno'] ?>"/>
			 <?php
			 if(($row['userstatus']==1) && ($row['doctorstatus']==1))  
                    {
                        echo "<input class='btn btn-danger' type='submit' name='pat_appointmentcancel' onclick='return checkcancel()' value='Cancel'/>";
					}
					?>
			</form>
            </td>
		
			</tr>
         
		

<?php endwhile;?>
        </table>
        </div>
<?php include('partials/pat_footer.php');?>