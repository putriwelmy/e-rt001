<center>
	<h1>KARTU KELUARGA</h1>
	<h2 style="margin-top:-30px;">No. <?php echo $detail_kk->no_kk;?></h2>
</center>

<table>
	<tr>
		<td>Kepala Keluarga</td>
		<td>:</td>
		<td ><?php echo $detail_kk->kepala_keluarga;?></td>
		<td style="padding-left:50px;">Kelurahan</td>
		<td>:</td>
		<td><?php echo $detail_kk->kelurahan;?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td ><?php echo $detail_kk->alamat;?></td>
		<td style="padding-left:50px;">Kecamatan</td>
		<td>:</td>
		<td><?php echo $detail_kk->kecamatan;?></td>
	</tr>
	<tr>
		<td>RT</td>
		<td>:</td>
		<td ><?php echo $detail_kk->rt;?></td>
		<td>RW</td>
		<td>:</td>
		<td ><?php echo $detail_kk->rw;?></td>
		<td style="padding-left:50px;">Kabupaten</td>
		<td>:</td>
		<td><?php echo $detail_kk->kabupaten;?></td>
	</tr>
	<tr>
		<td>Kode Pos</td>
		<td>:</td>
		<td ><?php echo $detail_kk->kode_pos;?></td>
		<td style="padding-left:50px;">Provinsi</td>
		<td>:</td>
		<td><?php echo $detail_kk->provinsi;?></td>
	</tr>
</table> 
<p>
	<b><u>Data Keluarga</u></b>
<p>
	<table border='1' width='100%'>
		<tr>
			<th>No</th>
			<th>Nama Lengkap</th>
			<th>NIK</th>
			<th>Jenis Kelamin</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Agama</th>
			<th>Pendidikan</th>
			<th>Pekerjaan</th>
			<th>Status Perkawinan</th>
			<th>Status Hub. Keluarga</th>
			<th>Kewarganegaraan</th>
			<th>Nama Ayah</th>
			<th>Nama Ibu</th>
		</tr>
		<?php 
			$i=1;
			foreach($anggota_keluarga as $row){
				
		?>
		<tr>
			<td> <?php echo $i; ?></td>
			<td><?php echo $row->nama_lengkap;?></td>
			<td><?php echo $row->nik;?></td>
			<td><?php echo $row->jenis_kelamin;?></td>
			<td><?php echo $row->tgl_lahir;?></td>
			<td><?php echo $row->tempat_lahir;?></td>
			<td><?php echo $row->agama?></td>
			<td><?php echo $row->pendidikan?></td>
			<td><?php echo $row->pekerjaan;?></td>
			<td><?php echo $row->status_perkawinan;?></td>
			<td><?php echo $row->status_hub_keluarga?></td>
			<td><?php echo $row->kewarganegaraan;?></td>
			<td><?php echo $row->nama_ayah;?></td>
			<td><?php echo $row->nama_ibu;?></td>
		</tr>
		<?php $i++; } ?>
	</table>
