<!DOCTYPE html>
<html>

	<head>
	<title>I am devops</title>
	</head>
        <center>
		<body style="background-color:blue">
			<h1> The Awesome DevOps Team</h1>
			<p>WE DO PRECISION GUESS WORK BASED ON UNRELIABLE</p>
			<p>DATA PROVIDED BY THOSE OF QUESTIONABLE KNOWLEDGE</p>
			<table>
				<tr>
					<th></th><th>Id</th>
					<th>Username</th>
					<th>Password</th>
				</tr>
				
				<?php $conn = mysqli_connect("localhost", "website", "f878d155d49ac", "company"); 
				if ($conn-> connect_error) {
				 die("Connection failed:". $conn-> connect_error);
				}

				$sql = "SELECT id, username, password from login";
				$result = $conn-> query($sql);

				if ($result-> num_rows > 0) {
				   while ($row = $result-> fetch_assoc()) {
				   echo "<td><td>". $row["id"] ."</td><td>". $row["username"] ."</td><td>". $row["password"] ."<td></tr>";

				   }
				   echo "</table>";

				}
				else {
				   echo "0 result";

				}
				$conn-> close();
				?>
			</table>

		</body>
		</center>
</html>
