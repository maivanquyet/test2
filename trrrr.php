gi<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Danh sách sinh viên</title>
</head>
<?php 
	 $servername = "localhost";
    $username = "root";
    $password = "";
    $db ="qlsv";

    // Create connection
    $conn = new mysqli($servername, $username, $password,$db);

    
     $sql_select = "select * from sinhvien";
    // $sql_select = "select lopid, hoten, ngaysinh, gioitinh from sinhvien,lop where sinhvien.lopid=lop.id";
     $result = mysqli_query($conn, $sql_select);

 ?>
<body>
	<table border="1">
		<tr>
			<td colspan="6" align="center">
				<input type="text" >
				<input type="submit">
			</td>
		</tr>
		<tr>
			<td colspan="6" align="center"><h1>Tổng Số sinh Viên</h1></td>
		</tr>
		<tr>
			<td colspan="6"><a href="themmoisv.php">Thêm Mới</a></td>
		</tr>
		<tr>
			<th>STT</th>
			<th>Lớp</th>
			<th>Họ Tên</th>
			<th>Ngày Sinh</th>
			<th>Giới Tính</th>
			<th>Chức Năng</th>
		</tr>

		<?php 
		$stt = 0;
			 if (mysqli_num_rows($result) > 0) {
                // output data of each row
                //$i = 1;
                while($row = mysqli_fetch_assoc($result)) {
                
               
		 ?>
		<tr>
			<td><?= ++$stt; ?></td>
			<td><?= $row['lopid'] ?></td>
			<td><?= $row['hoten'] ?></td>
			<td><?= $row['ngaysinh'] ?></td>
			<td><?= $row['gioitinh'] ?></td>
			<td>
				<a href="">Xóa</a>
				<a href="">Sửa</a>
			</td>
		</tr>
		<?php 
			 } 
            } else {
                echo "danh sách rỗng !!";
            }
		 ?>
	</table>
	<h1>đâylànhanh1g</h1>
	<h1>fdsfsdfdsfsdfsdfdsgsg</h1>
    <p>ahihidongo</p>
    <h1>sxdxwedwed</h1>
</body>
</html>