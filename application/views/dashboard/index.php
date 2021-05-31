<div class="row">
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-primary">
        <i class="fas fa-users"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Pelanggan</h4>
        </div>
        <div class="card-body">
        <?=$pelanggan->num_rows();?>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-5 col-sm-5 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-info">
         <i class="fas fa-wifi"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Pemasangan</h4>
        </div>
        <div class="card-body">
        
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-danger">
        <i class="fas fa-money-bill"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Tagihan</h4>
        </div>
        <div class="card-body">
        <!-- <?=$deposit->num_rows();?> -->
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-success">
        <i class="fas fa-user"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total User</h4>
        </div>
        <div class="card-body">
         <?=$user->num_rows();?>
        </div>
      </div>
    </div>
  </div>
</div>
