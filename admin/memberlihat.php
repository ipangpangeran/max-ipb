<div class="datagrid">			
	<table> 
		<thead> 
			<tr> 
				<th>No</th> 
				<th>NIM</th>
				<th>Nama</th>
				<th>Jabatan</th>
				<th>Divisi</th>
				<th>Alamat</th>
			</tr> 
		</thead> 
		<tbody>
			<?php
			$tp = mysql_query("SELECT * FROM anggota");
			$nu = 1;
			while ($t=mysql_fetch_array($tp))
			{ 
				echo"<tr class='alt'> 
					<td>$nu</td> 
					<td>$t[nim]</td>
					<td>$t[nama]</td>
					<td>$t[jabatan]</td>
					<td>$t[divisi]</td>
					<td>$t[alamat_dikampus]</td>";
				$nu++;
			}
			?>
		</tbody> 
	</table>
</div>
