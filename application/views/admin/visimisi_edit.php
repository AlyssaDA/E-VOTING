<section class="content">
<div class="box">
            <div class="box-header">
              <?php echo $this->session->flashdata('message'); ?>
              <h3 class="box-title"><?php echo $title ?></h3>
</div>

<div class="box-body">
              <form action="<?php echo site_url('admin/visi_misi/update');?>" method="post">
              <input type="hidden" name="id" value="<?php echo $row->id ?>">

              <div class="form-group">
                <label="id_kandidat">Nama Kandidat</label>
                <select name="id_kandidat" id="id_kandidat" class="form-control">
                  <?php foreach ($kandidat as $knd) : ?>
                    <option value="<?php echo $knd->id ?>"<?php echo $row->id_kandidat == $knd->id ? 'selected' : '' ?>><?php echo $knd->nama_kandidat ?></option>
                    <?php endforeach; ?>
                  </select>
                  </div>


                  <div class="form-group">
                    <label for="visi">Visi</label>
                    <textarea name="visi" id="visi" class="form-control ckeditor" required><?php echo $row->visi ?></textarea>
                  </div>
              
                  <div class="form-group">
                    <label for="misi">Misi</label>
                    <textarea name="misi" id="misi" class="form-control ckeditor" required><?php echo $row->misi ?></textarea>
                  </div>
    <a href="<?php echo site_url('admin/visi_misi'); ?>" class="btn bg-maroon"><i class="fa fa-arrow-left"></i>Kembali</a>

<button type="submit" class="btn bg-navy"><i class="fa fa-save"></i> Update</button>
</form>
</div>
</div>
</section> 
