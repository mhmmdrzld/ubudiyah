<?php
	include('koneksi.php');
	session_start();

	if(isset($_POST['login'])){

	 $username = mysql_real_escape_string(htmlentities($_POST['username']));
	 $password = mysql_real_escape_string(htmlentities($_POST['password']));

	 
	 $cek = mysql_query("SELECT * FROM pengguna WHERE username='$username' AND password='$password'");

		 if (mysql_num_rows($cek)==1) {

			$c = mysql_fetch_array($cek);

			$_SESSION['username'] = $c['username'];
			$_SESSION['level'] = $c['level'];
			$_SESSION['password'] = $c['password'];
			$_SESSION['status'] = $c['status'];
			$_SESSION['id_pengguna'] = $c['id_pengguna'];

			if($c['level']=="Admin" AND $c['status']=="Aktif"){

				$_SESSION['username']= $username;
				$_SESSION['password']= $password;
				echo '<script language="javascript">alert("Anda Login Sebagai Admin!"); document.location="admin/index.php';
				echo '";</script>';


			} else if($c['level']=="Siswa" AND $c['status']=="Aktif"){

				$_SESSION['username']=$username;
				$_SESSION['password']= $password;
				echo '<script language="javascript">alert("Anda Login Sebagai Siswa!"); document.location="siswa/index.php?';
				echo '";</script>';
			} else if($c['level']=="Siswa" AND $c['status']=="Tidak Aktif"){

				echo '<script language="javascript">alert("Akun Anda Tidak Aktif! Hubungi Admin Untuk Aktivasi Kembali."); document.location="index.php";</script>';
			}

		} else {

			echo '<script language="javascript">alert("Username dan Password Anda Salah!"); document.location="index.php";</script>';
		}
	}
?>