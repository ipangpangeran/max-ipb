<?php
	if (!empty($_GET['pesan'])){
		if ($_GET['pesan'] == 1) 
		{
			echo "
			<div class='alert-box success'>
				<h3>Profil telah diedit</h3>
			</div>";
		}
		if ($_GET['pesan'] == 2) 
		{
			echo "
			<div class='alert-box success'>
				<h3>Profil telah diedit dengan gambar</h3>
			</div>";
		}
	}
?>	

<link type="text/css" href="js/jsdate/themes/base/ui.all.css" rel="stylesheet" /> 
<script type="text/javascript" src="js/jsdate/jquery-1.3.2.js"></script>
<script type="text/javascript" src="js/jsdate/ui.core.js"></script>
<script type="text/javascript" src="js/jsdate/ui.datepicker.js"></script>


<script type="text/javascript"> 
      $(document).ready(function(){
        $("#tanggal").datepicker({
		dateFormat  : "yy-mm-dd", 
          changeMonth : true,
          changeYear  : true
		  
        });
      });
	  
    </script>

<div class="datagrid">			
	<table>
		<?php
		$edit = mysql_query("SELECT * FROM anggota Where username_anggota ='$_GET[username]'");
		$t = mysql_fetch_array($edit);

		echo"
		<form enctype='multipart/form-data' method='post' action='membereditcek.php?id=$t[username_anggota]'>		
			<tbody> 
				<tr> 
					<th>Nama</th> 
					<th><input type='text' name='nama' value='$t[nama]'></th>
				</tr>
				<tr>
					<th>Tanggal Lahir</th>
					<th><input type='text'  name='tanggal' id='tanggal'/ value='$t[tanggal_lahir]'></th>
				</tr>
				<tr>
					<th>NIM</th> 
					<th><input type='text' name='nim' value='$t[nim]'></th>
				</tr>
				<tr>
					<th>No Telpon</th> 
					<th><input type='text' name='phone' value='$t[phone]'></th>
				</tr>
				<tr>
					<th>Email</th> 
					<th><input type='email' name='email' value='$t[email]'></th>
				</tr>
				<tr>
					<th>Jabatan</th> 
					<th><input type='text' name='jabatan' value='$t[jabatan]'></th>
				</tr>
				<tr>
					<th>Divisi</th> 
					<th><input type='text' name='divisi' value='$t[divisi]'></th>
				</tr>
				<tr>
					<th>Alamat kost</th> 
					<th><input type='text' name='kost' value='$t[alamat_dikampus]'></th>
				</tr>	
				<tr>
					<th>Alamat Asal</th> 
					<th><input type='text' name='asal' value='$t[alamat_asal]'></th>
				</tr>	
				<tr>
					<th>Gambar </th>
					<th><img src='foto/$t[foto]' width=100 height=100 > </th>
				</tr>
				<tr>
					<th></th>
					<th><input type=file name='gambar'>*kosongkan jika gambar tidak di ubah </th>
				</tr>
				<tr>
					<th><input type='submit' value='Edit Profil'></th>
				</tr>
			</tbody>	
		</form>";?>
	</table>
</div>