<html>

<head>
    <title>CRUD</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <br>
    <h1>TUGAS PERTEMUAN 8</h1>

    <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'> Username dan Password tidak sesuai ! </div>";
		}
	}
	?>

    <div class="kotak_login">
        <p class="tulisan_login">Silahkan login</p>

        <form action="ceklogin.php" method="post">
            <label>Username</label>
            <input type="text" name="Username" class="form_login" placeholder="Username .." required="required">

            <label>Password</label>
            <input type="Password" name="Password" class="form_login" placeholder="Password .." required="required">
            <input type="submit" class="tombol_login" value="LOGIN">
            <br />
            <br />
        </form>

    </div>


</body>

</html>