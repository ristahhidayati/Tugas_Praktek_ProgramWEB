<!DOCTYPE html>
<html>

<head>
   <title>Prefill Radio Button</title>
</head>

<body>
   <form action="<?php $_SERVER ['PHP_SELF']; ?>" method="POST">
      Jenis Kelamin
      <input type="radio" name="sex" value="Pria" checked /> Pria
      <input type="radio" name="sex" value="Wanita" /> Wanita<br />
      <input type="submit" value="OK" /><br />
   </form>

   <?php
			if (isset ($_POST['sex'])){
				echo $_POST['sex'];
			}
		?>
</body>


</html>