<div class="datagrid">			
	<table> 
		<thead> 
			<tr> 
				<th>No</th> 
				<th>NIM</th>
				<th>Nama</th>
				<th>Organisasi</th>
				<th>Alamat</th>
			</tr> 
		</thead> 
		<tbody>
			<?php
			$tp = mysql_query("SELECT * FROM customer");
			$nu = 1;
			while ($t=mysql_fetch_array($tp))
			{ 
				echo"<tr class='alt'> 
					<td>$nu</td> 
					<td>$t[nim]</td>
					<td>$t[nama_customer]</td>
					<td>$t[organisasi]</td>
					<td>$t[alamat]</td>";
				$nu++;
			}
			?>
		</tbody> 
	</table>
</div>