<body class="bg-gradient-white">

    <div class="container text-center">
        <img src="<?php echo base_url('assets/img/logo.png') ?>" width="250" height="100">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9">

                <div class="card o-hidden border-1 shadow-sm my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row bg-white">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Form Login!</h1>
                                    </div>

                                    <?php echo $this->session->flashdata('pesan') ?>
                                    <form class="user" method="post" action="<?php echo base_url('auth/login') ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukkan Username" name="username">
                                                <?php echo form_error('username', '<div class="text-danger small ml-2">','</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password">
                                                <?php echo form_error('password', '<div class="text-danger small ml-2">','</div>'); ?>
                                        </div>
                                        <button type="submit" class="btn btn-dark form-control">Login</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small text-dark" href="<?php echo base_url('registrasi/index') ?>">Belum Punya Akun? Daftar!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright text-center py-3 text-dark">© 2021 Copyright:
      <a href="<?php echo base_url('dashboard') ?>">Toko Buku Prestasi</a>
    </div>
    </div>

</body>