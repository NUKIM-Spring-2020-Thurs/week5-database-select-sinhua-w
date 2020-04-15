<?php
	$link=mysqli_connect('localhost','root','password','php2020');
	$SQL="SELECT *
   		  FROM employee";

   	if($result=mysqli_query($link,$SQL))
   	{
		echo "<table width='1000' border='1'>";
		echo "<tr><td>No</td><td>Fname</td><td>Minit</td><td>Lname</td><td>Bdate</td><td>Address</td><td>Sex</td><td>Salary</td>";

   		while($row=mysqli_fetch_assoc($result))
  		{ 
   			echo "<tr>";
   			echo "<td>".$row['No']."</td><td>".$row['Fname']."</td><td>".$row['Minit']."</td><td>".$row['Lname']."</td><td>".$row['Bdate']."</td><td>".$row['Address']."</td><td>".$row['Sex']."</td><td>".$row['Salary']."</td><br/>";
   		}
   		
   		echo "</tr></table>";
   	}
   	else
   	{
   		echo "資料庫讀取失敗";
   	}
?>
