<section class="sec1" id="sec1">
<div class="container">
<h2 class="display-4 text-primary mt-5 h2-sec1 text-center">Perolehan Suara</h2>
<canvas id="ChartHasilSuara" width="400" height="400"></canvas>
</div>
</section>

<section class="sec2" id="sec2">
    <div class="container">
    <h2 class="display-4 text-primary mt-5 h2-sec1 text-center">Voting</h2>
    <div class="row">
      <?php foreach($kandidat as $knd) : ?>
      <div class="col-md-4">
      <div class="card mb-3" style="width: 18rem;">
  <img src="<?php echo base_url('assets/img/' . $knd->foto); ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-center text-primary font-weight-bold"><?php echo $knd->nama_kandidat ?></h5>
    <p class="card-text text-center text-secondary"><?php echo $knd->nama_calon ?></p>
    <div class="d-flex justify-content-between">
    <a href="<?php echo site_url('home/visimisi/' . $knd->id); ?>" class="btn btn-primary btn-sm">Lihat Visi & Misi</a>
    <a href="#" class="btn btn-success btn-sm">Pilih <?php echo $knd->nama_kandidat ?></a>
      </div>
  </div>
</div>
</div>
<?php endforeach; ?>
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
<script>
const ctx = document.getElementById('ChartHasilSuara').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Calon ke-1', 'Calon ke-2', 'Calon ke-3'],
        datasets: [{
            label: '# Hasil Suara',
            data: [20, 20, 20],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
</section>