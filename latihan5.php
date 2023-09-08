<!DOCTYPE html>
<html>

<head>
   <title>Identifikasi Metode</title>
</head>

<body>
   <form action="<?php $_SERVER ['PHP_SELF']; ?>" method="POST">
      NAMA
      <input type="text" name="nama" value="<?php  
			echo isset ($_POST['nama']) ? $_POST['nama']:'';
			?>" /><br />
      <input type="submit" value="Login" /><br />
   </form>

   <?php
			if (isset ($_POST['nama'])){
				echo $_POST['nama'];
			}
		?>
</body>


</html>
