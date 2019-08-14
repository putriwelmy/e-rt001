<center> 
		<h1>Laporan Keuangan</h1>
		<h2> <?php echo $data_bulan->nama_bulan." ".$data_bulan->tahun;?>


	<hr>
	<table border='1' width='80%'>
		<tr>
			<th>NO</th>
			<th>Jenis Kegiatan</th>
			<th>Detail Kegiatan</th>
			<th>Nominal</th>
			<th>Keterangan</th>
		</tr>
		<?php 
			$i=1;
			foreach($detail_keuangan as $row) { ?>
			
				<tr>
					<td> <?php echo $i; ?></td>
					<td> <?php echo $row->jenis_keuangan;?></td>
					<td> <?php echo $row->detail_keuangan;?></td>
					<td> Rp.<?php echo number_format($row->nominal_keuangan, 0, ',', '.')?></td>
					<td> <?php echo $row->keterangan;?></td>
				</tr>
			<?php $i++; } ?>
	</table>
</center>