 <?php
 session_start();
		if($_POST['email']=='' || $_POST['password']==''){
			header("Location:login.html");	
		}
		$server="localhost";
		$use="root";
		$pass="root";
		$conn = mysqli_connect($server,$use,$pass,"role_based_access_control");
		$query1= "SELECT email,password FROM users WHERE email='".$_POST['email']."' and password='".$_POST['password']."'"; 
		$result = mysqli_query($conn, $query1);
		while($row = mysqli_fetch_assoc($result)){
			$data1= $row["email"];
			$data2= $row["password"];
			echo $data1;
		}
		if($_POST['email']==$data1&&$_POST['password']==$data2){
			$_SESSION['email']=$_POST['email'];
			header("Location:ProcessLogin.php"); 
		}
		else{
			header("Location:login.html");	
		}
		
		
 ?>