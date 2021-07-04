<?php include('partials/doc_header.php');?>
<?php
    $user_mail = $_POST['user_mail'] ;
    $doc_mail = $_POST['doc_mail'] ;
    $mobile = $_POST['no'] ;
    $appointmentdate = $_POST['appointmentdate'] ;
    $appointmenttime = $_POST['appointmenttime'] ;
    $fullname = $_POST['name'] ;
    $dis =  $_POST['di'];
    $gen =  $_POST['gen'];
    $fees=$_POST['cfees'];
?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
    html,body{
        width:100%;
        height:100%;
        margin:0%;
        padding:0%;
        background-color:#009879;
    }
    *{
    margin:0;
    padding:0;
    box-sizing: border-box;
    font-family:sans-serif;
  }
  section{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #009879;
  }
  section .container{
    position: relative;
    min-width: 1100px;
    min-height: 650px;
    display: flex;
    z-index: 1000;
  }
  section .container .form
  {
    position: absolute;
    padding: 70px 50px;
    background: #fff;
    margin-left: 100px;
    padding-left: 50px;
    width: calc(100% - 150px);
    height: 100%;
    box-shadow: 0 50px 50px rgba(0,0,0,1.5);
    border-radius: 30px;
  }
  section .container .form h2{
    color: #0f3959;
    font-size: 24px;
    font-weight: 500;
  }
  section .container .form .formbox
  {
    position: relative;	
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    padding-top: 30px;
  }
  section .container .form .formbox .inputbox{
    position: relative;
    margin: 0 0 35px 0;
  }
  section .container .form .formbox .inputbox.w50{
    width: 47%;
  }
  section .container .form .formbox .inputbox.w100{
    width: 100%;
  }
  section .container .form .formbox .inputbox input,
  section .container .form .formbox .inputbox textarea{
    width: 100% !important;
    padding: 5px 0;
    resize: none;
    font-size: 18px;
    font-weight: 300;
    color: #333;
    border: none;
    border-bottom: 1px solid #777;
    outline: none;
  }
  section .container .form .formbox .inputbox textarea{
    min-height: 120px;
  }
  section .container .form .formbox .inputbox span{
    position: absolute;
    left: 0;
    padding: 5px 0;
    font-size: 18px;
    font-weight: 300;
    color: #333;
    transition: 0.3%;
    pointer-events: none;
  }
  section .container .form .formbox .inputbox input:focus ~ span,
  section .container .form .formbox .inputbox textarea:focus ~ span,
  section .container .form .formbox .inputbox input:valid ~ span,
  section .container .form .formbox .inputbox textarea:valid ~ span{
    transform: translateY(-20px);
    font-size: 12px;
    font-weight: 400;
    letter-spacing: 1px;
    color:#ff568c;
  }
  section .container .form .formbox .inputbox input[type="submit"]
  {
    border-radius: 30px;
    position: absolute;
    cursor: pointer;
    background: #009879;
    color:#fff;
    border: none;
    max-width: 150px;
    padding: 12px;
  }
  section .container .form .formbox .inputbox input[type="submit"]:hover{
    background:#ff568c;
  }
    </style>
    

</head>
<body>
     <!-- Back Navigation -->
	<nav class="navbar navbar-light bg-light sticky-top">
        <a class="navbar-brand" href="doc_appointmentlist.php"><i class="fas fa-backward"></i> Back</a>
    </nav>
    <div class="table-responsive">
        <table class="content-table table">
            <section>
            	<div class="container"> 
            		<form action="partials/doctor_db.php" method="post" autocomplete="off">
            		<input type='hidden' name='fname' value='<?php echo $fullname; ?>'/>
            		    <input type='hidden' name='mobileno' value='<?php echo $mobile; ?>'/>
            		    <input type='hidden' name='adate' value='<?php echo $appointmentdate; ?>'/>
            		    <input type='hidden' name='atime' value='<?php echo $appointmenttime; ?>'/>
            		    <input type='hidden' name='cfees' value='<?php echo $fees; ?>'/>
            		<div class="form">
            		<h2 style="color:#009879;font-family:sofia;">Send The Prescription</h2>
            			<div class="formbox">
            			<div class="inputbox w50">
            				<input type="text" name="doc_mail" style="color:grey" value="<?php echo $doc_mail;?>" readonly>
            				
            			</div>
            			<div class="inputbox w50">
            				<input type="text" name="user_mail" style="color:grey" value="<?php echo $user_mail;?>" readonly>
            			</div>
            			<div class="inputbox w50">
            				<input type="text" name="dis"style="color:grey" value="<?php echo $dis;?>" readonly>
            			</div>
            			<div class="inputbox w50">
            				<input type="text" name="gen" style="color:grey" value="<?php echo $gen;?>" readonly>
            			</div>
            			<div class="inputbox w50">
            				<input type="text" name="medicine" required>
            				<span>Medicine</span>
            			</div>
            			<div class="inputbox w50">
            				<input type="text" name="meet"  required>
            				<span>Patient Need To Meet You Or Not</span>
            			</div>
            			<div class="inputbox w50">
            				<input type="text" name="cfees" style="color:grey" value="<?php echo $fees;?>" readonly>
            			</div>
            			<div class="inputbox w100">
            				<textarea name="message" required></textarea>
            				<span>Enter The Cure Here.....</span>
            			</div>
            			<div class="inputbox w50">
            				<input type="submit" name="doc_prescriptionsend" value="Send">
            			</div>
            			</div>
            		</div>
            		</form>
            		</div>
		</section>
        </table>
    </div>
<?php include('partials/doc_footer.php');?>