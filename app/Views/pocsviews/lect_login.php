<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
    <!-- Bootstrap CSS -->
    <link href="<?= base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/styles.css'); ?>" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <title>Sign in</title>
  </head>
   <body class="bg-secondary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Lecture Login</h3></div>
                                    <div class="card-body">
				<form method="post" action="<?= base_url('lectcontroller/check2'); ?>" outocomplete="off">
				<?= csrf_field(); ?>
				<?php if(!empty(session()->getFlashdata('fail'))): ?>
				<div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
				<?php endif ?>
				<div class="form-group">
                    <label class="small mb-1" for="inputEmailAddress">Email</label>
                    <input class="form-control py-4" id="inputEmailAddress" type="text" value="<?= set_value('email');?>" name="email" placeholder="Enter your email" /><span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
                </div>
                <div class="form-group">
                    <label class="small mb-1" for="inputPassword">Password</label>
                    <input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="Enter your password"/>
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') :''?></span>
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                        <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                    </div>
                </div>
                
                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
       
                    <button class="btn btn-primary btn-brock" type="submit">Sign in</button>
                <div class="col-md-2">

    <div class="small"><a href="<?= site_url('welcome/index1');?>">Back</a></div></div>
</div></div>

</div>	    </form>
            </div></div>
        </div>
    </div>
</div>
</main>
</div><br><br>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</body>
</html>
