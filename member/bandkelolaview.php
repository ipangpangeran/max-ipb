<div class="datagrid">			
	<table> 
		<thead> 
			<tr> 
				<th>No</th>
				<th>Nama</th>
			</tr> 
		</thead> 
		<tbody>
			<?php
			$tp = mysql_query("SELECT * FROM gabung WHERE kode_produk='$_GET[id]'");
			$nu = 1;
			while ($t=mysql_fetch_array($tp))
			{ 
				echo"<tr class='alt'> 
					<td>$nu</td>";
				$cek = mysql_query("SELECT * FROM anggota WHERE username_anggota='$t[username_anggota]'");
				$r=mysql_fetch_array($cek);
				echo"
					<td>$r[nama]</td>
					</tr>";
				$nu++;
			}
			?>
		</tbody> 
	</table>
</div>