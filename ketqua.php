<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Kết quả</title>
</head>
<body>
	<?php
		$username = $_POST['username'];
	//echo 'Tên đăng nhập: '.$username.'<br>';

	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	//echo "Mật khẩu: ".$password.'<br>';
	$confirm = $_POST['repassword'];
	//echo "Nhập lại mật khẩu: ".$confirm.'<br>';
	$gioitinh = $_POST['gioitinh'];
	//echo "Giới tính: ".$gioitinh.'<br>';
	$ngaysinh = $_POST['ngaysinh'];
	//echo "Ngày sinh: ".$ngaysinh.'<br>';
	$diachi = $_POST['diachi'];
	//echo "Địa chỉ: ".$diachi.'<br>';
	$sothich = $_POST['sothich'];
	$hobby = "";
	//var_dump($sothich);
	foreach ($sothich as $value) {
		//echo 'value:'.$value ;
		$hobby = $hobby.' - '. $value;
	}

	echo 'h: '.$hobby;
	//die();
	$diachi = $_POST['diachi'];
	//echo "Sở thích: ".'<br>';
	//var_dump($sothich);

	//upload file
	$target_dir = "uploads/"; // Upload vào flie
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	  if($check !== false) {
	   // echo "File is an image - " . $check["mime"] . ".";
	    $uploadOk = 1;
	  } else {
	   // echo "File is not an image.";
	    $uploadOk = 0;
	  }
	}

	// Check if file already exists
	//if (file_exists($target_file)) {
	  //echo "Sorry, file already exists.";
	  //$uploadOk = 0;
	//}

	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000000) {
	 // echo "Sorry, your file is too large.";
	  $uploadOk = 0;
	}

	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	  //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	  $uploadOk = 0;
	}

	// Check if $uploadOk is set to 0 by an error
	//if ($uploadOk == 0) {
	//  echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	//} else {
	  //if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
	 // } else {
	   // echo "Sorry, there was an error uploading your file.";
	//  }
	//}

	//$duongdanfile = "http://localhost:8080/hochtml/dangky/uploads/".
	      //  basename( $_FILES["fileToUpload"]["name"]);

	//echo '<br> duongdanfile: '.$duongdanfile;
	//echo '<img src="'.$duongdanfile.'" alt="">';
	//mở kết nối đen database
	$servername = "localhost";
		//$username = "root";
		//$password = "";

		// Create connection
		//$conn = new mysqli($servername, $username, $password);

		// Check connection
		//if ($conn->connect_error) {
		 // die("Connection failed: " . $conn->connect_error);
		//}
		//echo "Connected successfully";
		$servername = "localhost";
			$username_sql = "root";
			$password_sql = "";
			$dbname = "phpl02";

			// Create connection
			$conn = mysqli_connect($servername, $username_sql, $password_sql,$dbname);
			//mysql_query($conn,"SET CHARACTER SET  'utf8'");
			// Check connection
			if (!$conn) {
			
			  die("Connection failed 2: " . mysqli_connect_error());
			}
			//echo "Connected successfully 2";
			//tạo truy vấn sql
			$sql = "INSERT INTO users (username, password, repassword,  gioitinh, ngaysinh, diachi, sothich,hobby, avatar)
				VALUES ('$username', '$password', '$repassword','$gioitinh','$ngaysinh', '$diachi', '$hobby')";
//thực hiện insert db
				if (mysqli_query($conn, $sql)) {
				  echo "New record created successfully";
				} else {
				  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}

				mysqli_close($conn);
	  ?>
</body>
</html>