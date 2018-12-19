<?php
	if (!empty($_GET['pesan'])){
		if ($_GET['pesan'] == 1) 
		{
			echo '<h3>NIM telah diedit</h3>';
		}
		else if ($_GET['pesan'] == 2) 
		{
			echo '<h3>Band telah diedit tanpa merubah gambar</h3>';
		}
	}
?>	

<div class="datagrid">			
	<table>
		<?php
		$edit = mysql_query("SELECT * FROM admin Where username ='$_GET[username]'");
		$t = mysql_fetch_array($edit);

		echo"
		<form method='post' action='editadmincek.php?id=$t[username]'>		
			<tbody> 
				<tr> 
					<th>NIM</th> 
					<th><input type='text' name='nim' value='$t[nim]'></th>
				</tr>
				
				<tr>
					<th><input type='submit' value='Edit NIM'></th>
				</tr>
			</tbody>	
		</form>";?>
	</table>
</div>