<style type='text/css' >
	p{text-indent:40px;}
</style>
<h1>
	<center> <?php echo $detail_pengumuman->judul; ?> </center>
</h1>
<hr>
	<table>
			<tr>
				<td>Nomor Surat</td>
				<td>:</td>
				<td><?php echo $detail_pengumuman->no_surat;?></td>
			</tr>
			<tr>
				<td>Tanggal Surat</td>
				<td>:</td>
				<td><?php echo $detail_pengumuman->tgl_posting;?></td>
			</tr>
			
	</table>
	
	<?php echo $detail_pengumuman->isi;?>