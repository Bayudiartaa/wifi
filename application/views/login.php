<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?= $title ?></title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url()?>assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/modules/fontawesome/css/all.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/css/components.css">
</head>


<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">

                        <div class="login-brand mt-5">
                            <img src="<?=base_url();?>assets/img/wifiger.jpg" alt="logo" width="120" class="shadow-light rounded-circle">
                        </div>
                        <?=$this->session->flashdata('pesan');?>
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Login</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="<?= base_url('auth'); ?>" class="needs-validation" novalidate="">
                                    <div class="form-group">
                                        <label for="text">Username</label>
                                        <input id="text" type="text" class="form-control <?=form_error('username') ? 'is-invalid' : null;?>" name="username" tabindex="1"  value="<?=$this->form_validation->set_value('username');?>">
                                        <div class="text-muted text-small"> Use valid username </div>
                                        <div class="invalid-feedback">
                                            Check your username and make it sure valid OK
                                        </div>
                                        <?=form_error('username', '<span class="error invalid-feedback">', '</span>');?>
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                            <div class="float-right">
                                            </div>
                                        </div>
                                        <input id="password" type="password" class="form-control <?=form_error('password') ? 'is-invalid' : null;?>" name="password" tabindex="2" autocomplete="off">
                                        <div class="text-muted text-small">Use valid password</div>
                                        <div class="invalid-feedback">
                                            Writte correctly
                                        </div>
                                        <?=form_error('password', '<span class="error invalid-feedback">', '</span>');?>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Login" class="btn btn-primary btn-lg btn-block" name="submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="simple-footer">
                                  Copyright &copy; <?= date('Y')?> <div class="bullet"></div> Development By Wifiger</a>
                           </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>



  <!-- General JS Scripts -->
  <script src="<?= base_url()?>assets/modules/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url()?>assets/modules/popper.js/dist/umd/popper.min.js" ></script>
  <script src="<?= base_url()?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url()?>assets/js/stisla.js"></script>
  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="<?= base_url()?>assets/js/scripts.js"></script>
  <script src="<?= base_url()?>assets/js/custom.js"></script>

</body>
</html>
