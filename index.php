<!DOCTYPE html>
<html>
	<body>
		<form action="index.php" method="POST" enctype="multipart/form-data">
			<input type="file" name="image"><input type="submit" name="submit" value="Upload">
		</form>
		<?php
			
			if(isset($_POST['submit'])){
				
				mysql_connect("localhost", "root", "") or die("Fail to connect MySQL");
				mysql_select_db("upload") or die("Fail to select DB");
				
				$imageName = mysql_real_escape_string($_FILES["image"]["name"]);
				$imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
				$imageType = mysql_real_escape_string($_FILES["image"]["type"]);
				
				echo $imageName."<br>";
				echo $imageType."<br>";
				
				if(strpos($imageType, "image") !== false){
					
					mysql_query("INSERT INTO `files`(`ID`, `NOME`, `DADO`) VALUES ('','$imageName','$imageData')")or die("Error to Insert");
					echo "Done<br>";
				}
				else
					echo "Only IMAGE<br>";
			}
		?>
	</body>
</html>