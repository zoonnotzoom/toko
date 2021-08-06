<div class="container">
	<div class="card">
    	<h4 class="card-header">Detail Produk</h4>
  		<div class="card-body">
			<?php foreach ($barang as $brg): ?>
			<div class="row">
				<div class="col-md-4">
					<img src="<?php echo base_url(). '/uploads/'. $brg->gambar ?>" class="card-img-top">
				</div>
				<div class="col-md-8">
					<table class="table">
						<tr>
							<td>Nama Produk</td>
							<td><strong><?php echo $brg->nama_brg ?></strong></td>
						</tr>

						<tr>
							<td>Keterangan</td>
							<td><strong><?php echo $brg->keterangan ?></strong></td>
						</tr>

						<tr>
							<td>Kategori</td>
							<td><strong><?php echo $brg->kategori ?></strong></td>
						</tr>

						<tr>
							<td>Stock</td>
							<td><strong><?php echo $brg->stok ?></strong></td>
						</tr>

						<tr>
							<td>Harga</td>
							<td><strong><div class="badge badge-white text-dark text-lg">Rp. <?php echo number_format($brg->harga, 0,',','.') ?></strong></td>
						</tr>
					</table>
					<?php echo anchor('dashboard/tambah_ke_keranjang/'. $brg->id_brg, '<div class="btn btn-sm btn-outline-dark">Tambah ke Keranjang</div>') ?>
					<?php echo anchor('dashboard/index/','<div class="btn btn-sm btn-outline-danger">Kembali</div>') ?>
				</div>
			</div> 
			<?php endforeach; ?>   
 		</div>
	</div>
</div>