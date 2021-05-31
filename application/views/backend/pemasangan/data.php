<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
    <a href="<?= base_url('pemasangan_baru') ?>">
        <div class="card card-statistic-1">
        <div class="card-icon bg-info">
            <i class="fas fa-users"></i>
        </div>
        <div class="card-wrap">
            <div class="card-header">
            <h4>Pelanggan Baru</h4>
            </div>
            <div class="card-body">
                <?= $baru->jumlah_baru ?>
            </div>
        </div>
        </div>
    </a>
  </div>

  <div class="col-lg-6 col-md-5 col-sm-5 col-12">
    <a href="<?= base_url('pemasangan_lama') ?>">
        <div class="card card-statistic-1">
            <div class="card-icon bg-success">
                <i class="fas fa-wifi"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                <h4>Pelanggan Lama</h4>
                </div>
                <div class="card-body">
                    <?= $lama->jumlah_lama ?>
                </div>
            </div>
        </div>
    </a>
  </div>
  
</div>
