<!DOCTYPE html>
<html>

<head>
   <title>Identifikasi Metode</title>
</head>

<body>
   <form action="<?php $_SERVER ['PHP_SELF']; ?>" method="get">
      NAMA
      <input type="text" name="nama" /><br />
      <input type="submit" value="Login" /><br />
   </form>

   <?php
			if (isset ($_REQUEST['nama'])){
				echo "Metode " .$_SERVER['REQUEST_METHOD'];
			}
		?>
</body>


</html>
