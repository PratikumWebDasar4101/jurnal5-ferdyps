<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
 <form action="prosesregis.php" method="post">
    NIM : <input type="text" name="nim" pattern="\d*" maxlength="10" required><br><br>
    Nama : <input type="text" name="nama" maxlength="25" required><br><br>
    Email : <input type="email" name="email" pattern="[a-z0-9._-]+@+[a-z]+.com"><br><br>
    <input type="submit" value="submit">
    </form>
</body>
</html>
