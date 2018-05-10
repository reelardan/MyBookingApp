<!DOCTYPE html>
<html>
<head>
	<title>Booking App</title>
</head>

<style type="text/css">

	
	.fusername {
		width: 450px;
		height: 50px;
		border: 1px solid #b3b3b3;
		border-radius: 3px;
		padding-left: 10px;
		margin-bottom: 10px;
	}


	.Fpassword{
		width: 450px;
		height: 50px;
		border: 1px solid #b3b3b3;
		border-radius: 3px;
		padding-left: 10px;
		margin-bottom: 10px;
	}


	.Ffullname {
		width: 450px;
		height: 50px;
		border: 1px solid #b3b3b3;
		border-radius: 3px;
		padding-left: 10px;
		margin-bottom: 10px;
	}


	.Flevel{
		width: 450px;
		height: 50px;
		border: 1px solid #b3b3b3;
		border-radius: 3px;
		padding-left: 10px;
		margin-bottom: 10px;
	}

	.Form1 {
		padding-top: 35px;
		margin-left: 450px;
	}

	.Form2 {
		margin-left: 450px;
	}

	.Form3 {
		margin-left: 450px;
	}

	.Form4 {
		margin-left: 450px;
	}

	.Judule {
		margin-left: 450px;
		padding-top: 20px;
		font-family: 'Open Sans';
		color: #262626;
		font-size: 22px;
	}

	.garis {
		margin-top: 25px;
		width: 40px;
		margin-left: 450px;
		height: 3px;
		background-color: #5371D3;
	}

	.btnKirim {
		background-color: #5371D3;
		height: 50px;
		width: 461px;
		border: 1px solid #5371D3;
		margin-left: 450px;
		border-radius: 3px;
		color: white;
		font-family: 'Open Sans';
		margin-top: 20px;
		font-size: 14px;
	}

	.btnKirim:hover {
		background-color: #4664c4;

	}

</style>

<body> 

<?php foreach ($isi->result() as $key): ?>
<div class="Backgroundku"> 


	<div class="Judule">Lengkapi Form</div>

	<div class="garis"></div>

	<form action="http://localhost/MyBookingApp/Codeigniter/index.php/User/gantikan/<?php echo $key->user_id ?>" method="post">
		
		<div class="Form1">

			<input type="text" name="username" placeholder="Masukan Username" class="fusername">
		
		</div>

		<div class="Form2">

			<input type="password" name="password" placeholder="Masukan Password" class="Fpassword">
		
		</div>

		<div class="Form3">

			<input type="text" name="fullname" placeholder="Masukan Nama Lengkap" class="Ffullname">
		
		</div>

		<div class="Form4">

			<input type="text" name="level" placeholder="Masukan Level" class="Flevel">
		
		</div>

		<input type="submit" name="kirim" value="Kirim" class="btnKirim">

	</form>

</div>

<?php endforeach ?>

</body>
</html>