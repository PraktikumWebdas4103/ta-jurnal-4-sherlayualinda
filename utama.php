<form action="utama.php" method="POST"><br><br><br>
	<center><table bgcolor="skyblue">
			<tr>
				<td>Masukkan User Name</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Username"></td>
			</tr>
			<tr>
				<td>Masukkan Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Password"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Login"></td>
			</tr>
		</table>		
</form>


<?php
session_start();
$data = array(
			array(
				"id"=>"1",
				"username"=>"sherla",
				"password"=>"sherla",
				"akses"=>"admin"	
			),
			array(
				"id"=>"2",
				"username"=>"sherlayu",
				"password"=>"cantik",
				"akses"=>"user"	
			)
		);

	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$num = 0;
		$data_valid = 0;
			while($num < count($data)){
				if($username == $data[$num]['username'] && $password == $data[$num]['password'] ){
					$_SESSION['username'] = $username;
					$_SESSION['akses'] = $data[$num]['akses'];
					$_SESSION['id'] = $data[$num]['id'];
					$data_valid = 1;
				}
				$num++;
			}
				if ($data_valid < 1) {
					echo "Login Gagal";
			} 
			else{
				header('location: proses.php');
			}
	}
?>