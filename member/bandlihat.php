<div class="datagrid">			
	<table> 
		<thead> 
			<tr> 
				<th>No</th>
				<th>Nama Band</th>
				<th>Genre</th>
				<th>Deskripsi</th>
			</tr> 
		</thead> 
		<tbody>
			<?php
			$tp = mysql_query("SELECT * FROM property WHERE kode_produk LIKE 'B%'");
			$nu = 1;
			while ($t=mysql_fetch_array($tp))
			{ 
				echo"<tr class='alt'> 
					<td>$nu</td>
					<td>$t[nama_properti]</td>
					<td>$t[genre]</td>
					<td>$t[deskripsi]</td>
					</tr>";
				$nu++;
			}
			?>
		</tbody> 
	</table>
</div>