<?
if(isset($_POST['submit'])){

	//echo "<pre>";
	//print_r($_FILES);

	$name = $_FILES['homework']['name'];
	$ext = pathinfo($name, PATHINFO_EXTENSION);
	$ext = strtolower($ext);
	//var_dump($ext);
	$allowedTypes = array("jpg", "png", "jpeg");
	$tmp_name = $_FILES ['homework']['tmp_name'];
	$size = $_FILES ['homework']['size'];
	$ok = false;
	$mes = array();

	if($size>204800){

			$mes[] = "Sizes are not allowed more than 204800 KB";
			//print_r($mes);
			//echo "Sorry";
			$ok=false;

	}elseif(!in_array($ext,$allowedTypes)){

		$ok = false;
		 $mes[] = "Files must be jpg, png, jpeg";

	}else{

		$ok=true;
	}
		if($ok && is_uploaded_file($tmp_name)){
			move_uploaded_file($tmp_name, "uploads/".$name);

		echo "File uploaded Successfully <br>";
		echo "<img src='uploads/$name' width=200px; height=100px>";
		echo"<br>";
		}else{
			echo "Sorry, File can't be uploaded <br>";
			//print_r($mes);
			foreach($mes as $err){
				echo $err . "<br>";
			}
		}
	

	
}//first if//
?>


	<form action=" " enctype="multipart/form-data"
	method="post">
 <label form="name">Name:</label><br>
 <input type="text" name="name" value=""><br>
 <label form="email">Email:</label><br>
 <input type="text" name="email" value=""><br>
 <label form="homework">Class notes:</label>
 <input type="file" name="homework" value=""><br>
 <input type="submit" name="submit" value="Submit Homework">
</form>
</body>
</html>