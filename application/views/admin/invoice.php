<div class="container">
	<h3 class="font-weight-bold">Invoice Pemesanan Produk</h3>
	<br>

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>Id Invoice</th>
			<th>Nama Pemesan</th>
			<th>Alamat Pengiriman</th>
			<th>Tanggal Pemesanan</th>
			<th>Batas Pembayaran</th>
			<th>Aksi</th>
		</tr>

		<?php foreach ($invoice as $inv): ?>
		<tr>
			<td><?php echo $inv->id ?></td>
			<td><?php echo $inv->nama ?></td>
			<td><?php echo $inv->alamat ?></td>
			<td><?php echo $inv->tgl_bayar ?></td>
			<td><?php echo $inv->batas_bayar ?></td>
			<td><?php echo anchor('admin/invoice/detail/' .$inv->id, '<div class="btn btn-sm btn-outline-primary">Detail</div>') ?></td>
		</tr>
		<?php endforeach; ?>

	</table>
</div>


