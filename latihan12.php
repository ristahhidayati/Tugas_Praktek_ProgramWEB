<html>

<head>
   <title>Studi Kasus 2: Prefilling pada Checkbox</title>
</head>

<body>
   <div>
      <h1>@@@@ MENU MAKANAN @@@@</h1>
      <div id='info'>Makanan Lezat, Enak, Bergizi</div>
      <em>Pilih menu lebih dari satu!!!:</em>
      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
         <input type="checkbox" name="makanan[]" value="soto" <?php if (isset($_POST['makanan'])) {

			foreach ($_POST['makanan'] as $key => $value) {
				if ($value=='soto') {
					echo "checked";
				}
		}	
		} ?>>soto Madura<br>

         <input type="checkbox" name="makanan[]" value="sate" <?php if (isset($_POST['makanan'])) {

			foreach ($_POST['makanan'] as $key => $value) {
				if ($value=='sate') {
					echo "checked";
				}
		}
		} ?>>Sate Ayam Kampung<br>

         <input type="checkbox" name="makanan[]" value="nasgor" <?php if (isset($_POST['makanan'])) {

			foreach ($_POST['makanan'] as $key => $value) {
				if ($value=='nasgor') {
					echo "checked";
				}
		}
		} ?>>Nasi Goreng Mawut<br>

         <input type="checkbox" name="makanan[]" value="rawon" <?php if (isset($_POST['makanan'])) {

			foreach ($_POST['makanan'] as $key => $value) {
				if ($value=='rawon') {
					echo "checked";
				}
		}
		} ?>>rawon daging<br>

         <input type="submit" value="OK">

      </form>
      <?php 
	if (isset($_POST['makanan'])) {
		echo "<div id='pilihan'>Anda memilih makanan berikut:</div><br/>";
		echo "<ul>";
		foreach ($_POST['makanan'] as $key => $value) {  //looping untuk menampilkan makanan yang di pilih
			echo "
			<li style='text-align:left'>".$value."</li>
			";
		}

		echo "</ul>";
	}
	 ?>
   </div>
</body>

</html>