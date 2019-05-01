<?php 
session_start();
if(isset ($_SESSION['email']))
	{
		$server1="localhost";
		$use1="root";
		$pass1="root";
		$conn2=mysqli_connect($server1,$use1,$pass1,"role_based_access_control");
		//$query2 = "SELECT fullname , avatar FROM Users where email = '".$_SESSION['email']."'";
		//$result2 = mysqli_query($conn2, $query2);
		//if (mysqli_num_rows($result2) > 0) {
		//	while($row2 = mysqli_fetch_assoc($result2)){
		//		$data3= $row2['fullname'];
		//		$data4= $row2['avatar'];
		//	}
		//}
		echo "<h2>Welcome ".$data3."</h2>";
		echo"<img src='img/".$data4."'/>";
		echo"<p>Your email is: ".$_SESSION['email']."</p>";
		// $query3 = "SELECT title,author FROM favoritebooks , books where favoritebooks.email = '".$_SESSION['email']."' and favoritebooks.bookid=books.bookid;";
		// $result3 = mysqli_query($conn2, $query3);
		// if (mysqli_num_rows($result3) > 0){
		// 	echo "<table><tr><th>List of favorite books:</th></tr>";
		// 	while($row3 = mysqli_fetch_assoc($result3)){
		// 		echo "<tr><td>".$row3['title']."</td>";
		// 		echo "<td>".$row3['author']."</td></tr>";
		// }
		// echo "</table>";
		}
		// else{
		// 	echo "You don't have any favorite books to display";
		//}
	//}
else
	header("location:login.html");
?>
