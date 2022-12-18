<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>đăng ký</title>
</head>
<body>
	
	<form action="ketqua.php" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td colspan="2">Đăng ký</td>
			
		</tr>
		<tr>
			<td>username:</td>
			<td>
			<input type="text" name="username">
			</td>
		</tr>
		<tr>
			<td>password</td>
			<td>
			<input type="password" name="password">
			</td>
		</tr>
		<tr>
			<td>repassword</td>
			<td>
			<input type="password" name="repassword">
			</td>
		</tr>
		<tr>
			<td>Giới tính</td>
			<td>
			<input type="radio" name="gioitinh" value="Nam">Nam
			<input type="radio" name="gioitinh" value="Nữ">Nữ
			</td>
		</tr>
		<tr>
			<td>ngày sinh</td>
			<td>
			<input type="date" name="ngaysinh">
			</td>
		</tr>
		<tr>
			<td>Địa chỉ</td>
			<td>
			<textarea name="diachi" id="" cols="30" rows="10"></textarea>
			</td>
		</tr>
		<tr>
			<td>ảnh avatar</td>
			<td>
			<input type="file" name="fileToUpload">
			</td>
		</tr>
		<tr>
			<td>Sở thích:</td>
			<td>
			<input type="checkbox" name="sothich[]" value="xem phim">xem phim
			<input type="checkbox" name="sothich[]" value="thể thao">Thể Thao
			<input type="checkbox" name="sothich[]" value="wed">wed
			</td>
		</tr>
		<tr>
			<td ><input type="submit" value="ok" name=""></td>
			<td colspan="2"><input type="reset" value="reset" name=""></td>
			<td>
			
			</td>
		</tr>
		
	</table>
	</form>
</body>
</html>