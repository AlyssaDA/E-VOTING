<section class="sec1" id="sec1">
<div class="container">
    <div class="row">
    <div class="col-md-6">
        <h2 class="display-4 text-primary mt-5 h2-sec1">Selamat Datang <br> Di E-Voting</h2>
        <p class="text-secondary">Silahkan gunakan hak suara kalian untuk </br> menentukan ketua terbaru</P>
<a href="" class="btn btn-primary"data-toggle="modal" data-target="#modalLogin">Login Disini</a>
<a href="#sec2" class="btn btn-secondary">Buat Akun?</a>
</div>
<div class="col-md-6">
    <img src="<?php echo base_url('assets/img/hero1.png'); ?>" class="img-fluid">
        </div>
    </div>
</div>
</section>

<section class="sec2" id="sec2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo base_url('assets/img/hero2.png'); ?>" class="img-fluid">
             </div>
             <div class="col-md-6">
                <h2 class="text-primary h2-sec2">Belum Punya Akun?</h2>
                <p class="text-secondary p-sec2">Silahkan daftarkan diri anda di form dibawah ini, jika sudah silahkan login lalu pilih menu voting.</p>
            
                <form action="<?php echo site_url('auth/registrasi'); ?>" method="post">
                    <div class="form-group">
                        <label for="nama" class="text-secondary">Nama *</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?php echo set_value('nama') ?>">
                        <?php echo form_error('nama', '<span class="text-danger small pl-3">', '</span>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="email" class="text-secondary">Email *</label>
                        <input type="text" name="email" id="email" class="form-control" value="<?php echo set_value('email') ?>">
                        <?php echo form_error('email', '<span class="text-danger small pl-3">', '</span>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="password" class="text-secondary">Password *</label>
                        <input type="password" name="password" id="password" class="form-control">
                        <?php echo form_error('password', '<span class="text-danger small pl-3">', '</span>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="id_kelas" class="text-secondary">Kelas *</label>
                        <select name="id_kelas" id="id_kelas" class="form-control">
                          <?php foreach ($kelas as $kls) : ?>
                            <option value="<?php echo $kls->id ?>"><?php echo $kls->nama ?></option>
                            <?php endforeach; ?>
</select>
</div>
<button type="submit" class="btn-primary">Registrasi Akun</button>
                </form>
            </div>
        </div>
    </div>

</section>
<!-- Modal -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<form action="<?php echo site_url('auth/login'); ?>" method="post">
  <div class="form-group">
    <label class="text-secondary" for="email1">Email *</label>
    <input type="email" name="email1" id="email1" class="form-control" required>
      </div>
      <div class="form-group">
    <label class="text-secondary"for="password1">Password *</label>
    <input type="password" name="password1" id="password1" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
      
      </div>
    </div>
  </div>
</div>
  