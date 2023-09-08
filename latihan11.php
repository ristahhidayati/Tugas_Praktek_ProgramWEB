<!DOCTYPE html>
<html>

<head>
   <title>Studi Kasus: Preselecting pada Seleksi</title>
</head>

<body>
   <center>
      <div style="background:#123123; padding-top:50px; width:400px;height:400px">
         <h2>Daftar Nama Lengkap</h2>
         <strong>Nama panggilan:</strong><br>
         <em>Silakan pilih untuk menampilkan nama lengkap</em>
         <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <select name="nama">
               <option value="rista" <?php if (isset($_POST['nama'])&&$_POST['nama']=='rista') {
				echo "selected";
			} ?>>rista</option>
               <option value="yogi" <?php if (isset($_POST['nama'])&&$_POST['nama']=='yogi') {
				echo "selected";
			} ?>>yogi</option>
               <option value="novi" <?php if (isset($_POST['nama'])&&$_POST['nama']=='novi') {
				echo "selected";
			} ?>>Novi</option>
               <option value="satrio" <?php if (isset($_POST['nama'])&&$_POST['nama']=='satrio') {
				echo "selected";
			} ?>>satrio</option>
               <option value="dina" <?php if (isset($_POST['nama'])&&$_POST['nama']=='dina') {
				echo "selected";
			} ?>>dina</option>
            </select>
            <br>
            <input type="submit" value="OK">
         </form>
         <?php 
	if (isset($_POST['nama'])) {
		switch ($_POST['nama']) {
			case 'rista':
				echo "<div id='nilai'>Nama lengkap : Rista Hidayati</div>";
				break;

			case 'yogi':
				echo "<div id='nilai'>Nama lengkap : budiyanto suprayogi</div>";
				break;

			case 'novi':
				echo "<div id='nilai'>Nama lengkap : Fatimah Novi Warkita</div>";
				break;

			case 'satrio':
				echo "<div id='nilai'>Nama lengkap : satrio wibowo</div>";
				break;

			case 'dina':
				echo "<div id='nilai'>Nama Lengkap : endah puspa dina</div>";
				break;	
			default:
				# code...
				break;
		}
	}
	 ?>
      </div>
   </center>
</body>

</html>