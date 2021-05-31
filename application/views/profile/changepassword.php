<div class="row">
        <div class="col-12">
            <div id="" class="text-center">
              <?=$this->session->flashdata('pesan');?>
                </div>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4></h4>
                        </div>
                        <div class="card-body">
                            <form method="post" action="<?=base_url('profile/changepassword');?>" class="needs-validation" novalidate="">
                                <div class="form-group">
                                    <label for="current_password">Current Password </label>
                                    <input id="currrent_password" type="password" class="form-control" name="current_password" tabindex="2" required autofocus minlength="5">
                                    <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="new_password1">New Password </label>
                                    <input id="new_password1" type="password" class="form-control" name="new_password1" tabindex="2" required autofocus minlength="5">
                                    <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="new_password2">Confirm New Password </label>
                                    <input id="new_password2" type="password" class="form-control" name="new_password2" tabindex="3" required autofocus minlength="5">
                                    <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-lg btn-block" name="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>