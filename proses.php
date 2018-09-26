<form action="proses.php" method="POST" enctype="multipart/form-data"><br><br><br>
		<center><table border="1">
			<tr>
				<td>
					<label>HOBI </label>
				</td>
				<td>
					<input type="checkbox" name="hobby[]" value="Menulis">Menulis
					<input type="checkbox" name="hobby[]" value="Membaca">Membaca
					<input type="checkbox" name="hobby[]" value="Makan">Makan
					<input type="checkbox" name="hobby[]" value="Tidur">Tidur
					<input type="checkbox" name="hobby[]" value="Belajar">Belajar<br>
					<input type="checkbox" name="hobby[]" value="Berenang">Berenang
					<input type="checkbox" name="hobby[]" value="Basket">Basket
					<input type="checkbox" name="hobby[]" value="Nonton">Nonton
					<input type="checkbox" name="hobby[]" value="belanja">Belanja
				</td>
			</tr>
			<tr>
				<td>
					<label>UPLOAD FOTO </label>
				</td>
				<td>
					<input type="file" name="foto">
				</td>
			</tr>
			<tr>
				<td>
					<label>GENRE FILM </label>
				</td>
				<td>
					<input type="checkbox" name="genre[]" value="Horor">Horor<br>
					<input type="checkbox" name="genre[]" value="Action">Action<br>
					<input type="checkbox" name="genre[]" value="Anime">Anime<br>
					<input type="checkbox" name="genre[]" value="Thrille">Thrille<br>
					<input type="checkbox" name="genre[]" value="Animasi">Animasi
				</td>
			</tr>
			<tr>
				<td>
					<label>TEMPAT WISATA TUJUAN TRAVELLING  </label>
				</td>
				<td>
					<input type="checkbox" name="wisata[]" value="Bali">Bali<br>
					<input type="checkbox" name="wisata[]" value="Raja  Ampat">Raja Ampat<br>
					<input type="checkbox" name="wisata[]" value="Pulau  Derawan">Pulau Derawan<br>
					<input type="checkbox" name="wisata[]" value="BangkaBelitung">Bangka Belitung<br>
					<input type="checkbox" name="wisata[]" value="Labuan Bajo">Labuan Bajo
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Submit">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><a href="utama.php">Back</a></td>
			</tr>
			

		</table></center>


		
	</form><br><br>

	<?php
		if (isset($_POST['submit'])) {
			$a = $_POST['hobby'];
			$c = $_POST['genre'];
			$d = $_POST['wisata'];

			echo "<center><table border=1>";
				echo "<tr>";
					echo "<td>";
						echo "Hobi";
					echo "</td>";

					echo "<td>";
						echo ":";
					echo "</td>";

					echo "<td>";
						foreach ($a as $e) {
						echo $e . ",";
						} 
					echo "</td>";
				echo "</tr>";


				echo "<tr>";
					echo "<td>";
						echo "Gambar";
					echo "</td>";

					echo "<td>";
						echo ":";
					echo "</td>";

					echo "<td>";
						$uploaddir = 'gambar/';
    					$uploadfile = $uploaddir . basename($_FILES['foto']['name']);
    					$namaGambar = $_FILES['foto']['name'];
    						if (move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile)) {
      					echo "<img src='gambar/$namaGambar'>";
    						} 
    						else {
       					echo "Upload failed";
    						}
					echo "</td>";
				echo "</tr>";


				echo "<tr>";
					echo "<td>";
						echo "Genre";
					echo "</td>";

					echo "<td>";
						echo ":";
					echo "</td>";

					echo "<td>";
						foreach ($c as $g ) {
							echo $g . ", ";
						}
					echo "</td>";
				echo "</tr>";


				echo "<tr>";
					echo "<td>";
						echo "Wisata";
					echo "</td>";

					echo "<td>";
						echo ":";
					echo "</td>";

					echo "<td>";
						foreach ($d as $h ) {
							echo $g . ", ";
						}
					echo "</td>";
				echo "</tr>";





			echo "<table>";

		}
	?>