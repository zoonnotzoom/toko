<div class="container-fluid"
    <hr style="border: 3px solid #000000">
</div>
<br>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo base_url('assets/img/carousel1.jpeg') ?>" alt="First slide" width="1200" height="600">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/img/carousel2.jpg') ?>" alt="Second slide" width="1200" height="600">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/img/carousel3.jpg') ?>" alt="Third slide" width="1200" height="600">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <div class="row text-center mt-3">
         
         <?php foreach ($promo as $brg) : ?>

            <div class="card ml-3 ml-md-5 mt-3" style="width: 23rem; ">
              <img src="<?php echo base_url(). '/uploads/'. $brg->gambar ?>" class="card-img-top" width="100%" height="250px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $brg->nama_brg ?></h5>
                <small><?php echo $brg->keterangan ?></small></br>
                <span class="badge badge-white text-dark text-lg mb-3">Rp. <?php echo number_format($brg->harga, 0,',','.') ?></span></br>
                <?php echo anchor('dashboard/tambah_ke_keranjang/'. $brg->id_brg, '<div class="btn btn-sm btn-dark">Tambah ke Keranjang</div>') ?>
                <?php echo anchor('dashboard/detail/'. $brg->id_brg, '<div class="btn btn-sm btn-secondary">Detail</div>') ?>
              </div>
            </div>

         <?php endforeach; ?>
    </div>
</div>