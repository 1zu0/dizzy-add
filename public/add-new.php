<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Add</title>	

		<meta name="keywords" content="" />
		<meta name="description" content="">
		<meta name="author" content="RZ Technology">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body onload="digit()">

<div class="body">

			<div role="main" class="main">
				<br>
				<div class="row">
					<div class="col-lg-12 text-center" style="text-align: center;">
						<h2>Add new<strong> Subscription</strong></h2>
					</div>
				</div>
				<form id="contactForm" action="add-new.php" method="POST" style="width:70%;margin-left: auto;margin-right: auto;text-align: center;">
								<div class="form-row">
									<div class="form-group col-lg-6">
										<label>subscription_id *</label>
										<input type="number" value="" data-msg-required="Enter ID..." maxlength="100" class="form-control" name="id" id="idfz" required>
									</div>
									<div class="form-group col-lg-6">
										<label>iuid_fk *</label>
										<input type="number" value="" data-msg-required="Enter ID..." maxlength="100" class="form-control" name="iuidfk" id="iuidfk" required>
									</div>
									<div class="form-group col-lg-6">
										<label>subscribed_iuid_fk *</label>
										<input type="number" value="" data-msg-required="Enter ID..." maxlength="100" class="form-control" name="subscribediuidfk" id="subscribediuidfk" required>
									</div>
									<div class="form-group col-lg-6">
										<label>subscriber_name *</label>
										<input type="text" value="" placeholder="Peter Smith" data-msg-required="Add Name..." maxlength="100" class="form-control" name="subscribername" id="subscribername" required>
									</div>
									<div class="form-group col-lg-6">
										<label>payment_method *</label>
										<input type="text" value="" placeholder="Stripe" data-msg-required="Add Payment Method...." maxlength="100" class="form-control" name="paymentmethod" id="paymentmethod" required>
									</div>
									<div class="form-group col-lg-6">
										<label>payment_subscription_id *</label>
										<input type="text" value="sub_K97h2vKZFVXApv" placeholder="sub_K97h2vKZFVXApv" data-msg-required="Enter ID..." maxlength="100" class="form-control" name="subscriptionid" id="subscriptionid" required>
									</div>
									<div class="form-group col-lg-6">
										<label>customer_id *</label>
										<input type="text" value="cus_K97h8oGv3xztDR" placeholder="cus_K97h8oGv3xztDR" data-msg-required="Enter ID..." maxlength="100" class="form-control" name="customerid" id="customerid" required>
									</div>
									<div class="form-group col-lg-6">
										<label>plan_id *</label>
										<input type="text" value="plan_K97hdLav6ImECj" placeholder="plan_K97hdLav6ImECj" data-msg-required="Enter ID..." maxlength="100" class="form-control" name="planid" id="planid" required>
									</div>
									<div class="form-group col-lg-6">
										<label>plan_amount *</label>
										<input type="number" value="25" data-msg-required="Add Plan Costs" maxlength="100" class="form-control" name="planamount" id="planamount" required>
									</div>
									<div class="form-group col-lg-6">
										<label>admin_earning *</label>
										<input type="number" value="2" data-msg-required="Add Admin earnings..." maxlength="100" class="form-control" name="adminearning" id="adminearning" required>
									</div>
									<div class="form-group col-lg-6">
										<label>user_net_earning *</label>
										<input type="number" value="23" data-msg-required="Add User earnings..." maxlength="100" class="form-control" name="usernetearning" id="usernetearning" required>
									</div>
									<div class="form-group col-lg-6">
										<label>plan_amount_currency *</label>
										<input type="text" value="eur" data-msg-required="EUR, CHF..." maxlength="100" class="form-control" name="planamountcurrency" id="planamountcurrency" required>
									</div>
									<div class="form-group col-lg-6">
										<label>plan_interval *</label>
										<input type="text" value="month" data-msg-required="Interval..." maxlength="100" class="form-control" name="planinterval" id="planinterval" required>
									</div>
									<div class="form-group col-lg-6">
										<label>plan_interval_count *</label>
										<input type="text" value="1" data-msg-required="Interval Count..." maxlength="100" class="form-control" name="planintervalcount" id="planintervalcount" required>
									</div>
									<div class="form-group col-lg-6">
										<label>payer_email *</label>
										<input type="text" value="payermail@gmail.com" placeholder="payermail@mail.com" data-msg-required="Add Email..." maxlength="100" class="form-control" name="payeremail" id="payeremail" required>
									</div>
									<div class="form-group col-lg-6">
										<label>created *</label>
										<input type="text" value="2021-09-01 09:09:47" placeholder="00.00.2000" data-msg-required="Created at..." maxlength="100" class="form-control" name="created" id="created" required>
									</div>
									<div class="form-group col-lg-6">
										<label>plan_period_start *</label>
										<input type="text" value="2021-09-01 09:09:47" placeholder="00.00.2000" data-msg-required="Started at..." maxlength="100" class="form-control" name="planperiodstart" id="planperiodstart" required>
									</div>
									<div class="form-group col-lg-6">
										<label>plan_period_end *</label>
										<input type="text" value="2021-10-01 09:09:47" placeholder="00.00.2000" data-msg-required="End at..." maxlength="100" class="form-control" name="planperiodend" id="planperiodend" required>
									</div>
										<input type="hidden" value="active" placeholder="active" data-msg-required="Status..." maxlength="100" class="form-control" name="status" id="status" required>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="submit" value="Submit Subscription" class="btn btn-primary btn-lg" name="send" data-loading-text="lädt...">
									</div>
								</div>
								<?php
if(isset($_POST["send"]))
	{
$servername = "localhost";
$username = "dbusername";
$password = "dbpassword";
$dbname = "dbname";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$var1=$_POST['id'];
$var2=$_POST['iuidfk'];
$var3=$_POST['subscribediuidfk'];
$var4=$_POST['subscribername'];
$var5=$_POST['paymentmethod'];
$var6=$_POST['subscriptionid'];
$var7=$_POST['customerid'];
$var8=$_POST['planid'];
$var9=$_POST['planamount'];
$var10=$_POST['adminearning'];
$var11=$_POST['usernetearning'];
$var12=$_POST['planamountcurrency'];
$var13=$_POST['planinterval'];
$var14=$_POST['planintervalcount'];
$var15=$_POST['payeremail'];
$var16=$_POST['created'];
$var17=$_POST['planperiodstart'];
$var18=$_POST['planperiodend'];
$var19=$_POST['status'];
$sql = "INSERT INTO i_user_subscriptions (subscription_id, iuid_fk, subscribed_iuid_fk, subscriber_name, payment_method, payment_subscription_id, customer_id, plan_id, plan_amount, admin_earning, user_net_earning, plan_amount_currency, plan_interval, plan_interval_count, payer_email, created, plan_period_start, plan_period_end, status) VALUES ('$var1', '$var2', '$var3', '$var4', '$var5', '$var6', '$var7', '$var8', '$var9', '$var10', '$var11', '$var12', '$var13', '$var14', '$var15', '$var16', '$var17', '$var18', '$var19')";
if ($conn->query($sql) === TRUE) {
    echo "<h3 style=\"text-align:center;text-transform: none;color: #dc3545;\">Subscripton added successfully!</h3>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
							</form>
				<br>
			</div>
			
		</div>
<!-- Before Body End -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->
<script>
function digit() {
  var num = Math.floor(Math.random() * 90000) + 10000;
  document.getElementById("idfz").value = num;
}
</script>
</body>

</html>
