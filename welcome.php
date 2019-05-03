<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login | Company</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/AdminLTE.min.css">
    <link rel="stylesheet" href="css/blue.css">
</head>
<body class="hold-transition login-page">
<?php 
session_start();
if(isset ($_SESSION['email']))
	{
		$server1="localhost";
		$use1="root";
		$pass1="root";
		$conn2=mysqli_connect($server1,$use1,$pass1,"role_based_access_control");
		$query2 = "SELECT username , avatar, user_id FROM users where email = '".$_SESSION['email']."'";
		$result2 = mysqli_query($conn2, $query2);
		if (mysqli_num_rows($result2) > 0) {
			$row2 = mysqli_fetch_assoc($result2);
				$data3= $row2['username'];
				$data4= $row2['avatar'];
				$data5 = $row2['user_id'];
			
		}
		$query3 = "SELECT label FROM permission where user_id = '".$data5."'";
		$result3 = mysqli_query($conn2, $query3);
		if (mysqli_num_rows($result3) > 0) {
			while($row3 = mysqli_fetch_assoc($result3)){
				$data6= $row3['label'];
			}
		}
		echo"<font face='verdana' align ='left'><h2>Welcome ".$data3.",</h2></font>";
		if($data6 == 1){
			echo "<p>You can edit, update and create new posts.</p>";
		} else if($data6 == 2) {
			echo "<p>You can only edit and update the existing posts. You cannot create new posts.</p>";
		} else {
			echo "<p>You can only read posts.</p>";
		}
		echo"<font face='verdana' align='left'><p>UserID: ".$_SESSION['email']."</p></font>";
		echo"<a class='btn btn-primary' href='logout.php' style='float:right'>Logout</a>";
		echo"<img align='left' width='150px' src='img/".$data4."'/>";
		echo"<font face='verdana' size='7' align ='center'><p>IDS Corporation</p></font>";
		if ($data6 == 3) {
			echo"<center><textarea rows='20' cols='200' disabled>NIST defines Cloud computing as a model for enabling on-demand and convenient network access to a shared pool of configurable computing resources that can be rapidly provisioned and released with minimal management effort or service provider interaction. Every day, every one of us are generating data, and there’s no end to it. We as customers produce huge volumes of data that normal storage becomes almost impossible. Growing data shifted our means of data storage to cloud. It turned out to be an efficient platform both in terms of ease of access and cost. Amazon Web Services (AWS), a subsidiary of Amazon, provides on demand cloud computing platform. It provides its customers virtual cluster of computers that is available at all times, through the Internet. This enables the customers to outsource the storage of huge amount of data, reducing the financial overhead in data management. Some of the popular customers would be, Netflix, Adobe Systems, Airbnb, BMW, and Samsung.
			
				It is evident that its flaw and major concern is that regarding privacy and security issues that this new paradigm raises, when third party Cloud Service Providers are involved in hosting data. In these cases, the company raises concerns about the security of their data. When that data is on their premise, the data will be protected by the company’s measures, and firewalls, but when the data is getting outsourced, it is no longer under the protection of the company, but under that of the Service Provider.
			
				The data becomes vulnerable to attacks. There are several types of attacks on the data, the data can be altered, data can be shared to unauthorized people, data can be deleted, or even corrupted. This can be a threat because the user has limited knowledge on where the data is physically stored in the cloud. Whenever we let our code interact with an untrusted source that can increase the chance of being attacked. The intruder usually takes advantage of the vulnerabilities when multiple OS share a single processor. </textarea></center>";
		} else {
		echo"<center><textarea rows='20' cols='200'>NIST defines Cloud computing as a model for enabling on-demand and convenient network access to a shared pool of configurable computing resources that can be rapidly provisioned and released with minimal management effort or service provider interaction. Every day, every one of us are generating data, and there’s no end to it. We as customers produce huge volumes of data that normal storage becomes almost impossible. Growing data shifted our means of data storage to cloud. It turned out to be an efficient platform both in terms of ease of access and cost. Amazon Web Services (AWS), a subsidiary of Amazon, provides on demand cloud computing platform. It provides its customers virtual cluster of computers that is available at all times, through the Internet. This enables the customers to outsource the storage of huge amount of data, reducing the financial overhead in data management. Some of the popular customers would be, Netflix, Adobe Systems, Airbnb, BMW, and Samsung.

	It is evident that its flaw and major concern is that regarding privacy and security issues that this new paradigm raises, when third party Cloud Service Providers are involved in hosting data. In these cases, the company raises concerns about the security of their data. When that data is on their premise, the data will be protected by the company’s measures, and firewalls, but when the data is getting outsourced, it is no longer under the protection of the company, but under that of the Service Provider.

	The data becomes vulnerable to attacks. There are several types of attacks on the data, the data can be altered, data can be shared to unauthorized people, data can be deleted, or even corrupted. This can be a threat because the user has limited knowledge on where the data is physically stored in the cloud. Whenever we let our code interact with an untrusted source that can increase the chance of being attacked. The intruder usually takes advantage of the vulnerabilities when multiple OS share a single processor. </textarea></center>";
		}
		if ($data6 == 1) {
			echo"<input type='button' value='New' style='float: right; cursor: pointer;' class='btn btn-primary'>";
			echo"<input type='button' value='Update' style='float: right; cursor: pointer;' class='btn btn-primary'>";
		} else if ($data6 == 2) {
			echo"<input type='button' value='New' style='float: right; cursor: not-allowed;' class='btn btn-primary' disabled>";
			echo"<input type='button' value='Update' style='float: right; cursor: pointer;' class='btn btn-primary'>";
		} else {
			echo"<input type='button' value='New' style='float: right;cursor: not-allowed;' class='btn btn-primary' disabled>";
			echo"<input type='button' value='Update' style='float: right;cursor: not-allowed;' class='btn btn-primary' disabled>";
		}
		}
else
	header("location:login.html");
?>
</body>
<script src="js/jquery-2.2.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/icheck.min.js"></script>
</html>
