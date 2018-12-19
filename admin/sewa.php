<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="ckeditor/style.js"></script>

<?php
if (!empty($_GET['pesan'])){
	if ($_GET['pesan'] == 1) 
	{
		echo"
		<div class='alert-box success'>
			<h3>Cara penyewaan berhasil diedit</h3>
		</div>";
	}
}
?>

<div class="calenders">
	<div class="sewa">
		<h3>Cara Sewa</h3>
		<?php
		echo
		"
		<form action='sewaedit.php' method='POST'>
			<textarea name='sewa' class='ckeditor'>";
				$sewa=mysql_query("SELECT sewa FROM modul");
				while($s=mysql_fetch_array($sewa))
					echo"
					$s[sewa]";
				
			?>
			</textarea>
			<input type="submit" value="Edit"/>
		</form>
	</div>
</div>