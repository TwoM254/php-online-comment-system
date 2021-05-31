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
    <title>Sign up</title>
    </head>
    <body class="bg-secondary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
				<form method="post" action="<?= base_url("pocscontroller/save");?>" outocomplete="off">
                <?= csrf_field();?>
<div class="form-row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="small mb-1" for="inputFirstName">User Name</label>
            <input class="form-control py-2" id="inputFirstName" type="text" name="username" placeholder="Enter your username" value="<?= set_value('username');?>"/>
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'username') : '' ?></span>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="small mb-1" for="inputLastName">reg_no</label>
            <input class="form-control py-2" id="inputLastName"  name="reg_no" placeholder="Enter your reg_no" maxlength="9" value="<?= set_value('phone');?>"/>
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'reg_no') : '' ?></span>
        </div>
    </div>
</div>
<div class="form-group">
    <label class="small mb-1" for="inputEmailAddress">Gender</label>
    <select class="form-control py-2" name="gender">
        <option selected>Choose...</option>
        <option value="female">female</option>
        <option value="male">male</option>
    </select>
    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'gender') : '' ?></span>
</div>
<div class="form-group">
    <label class="small mb-1" for="inputEmailAddress">Email</label>
    <input class="form-control py-2" id="inputEmailAddress" type="email" aria-describedby="emailHelp" name="email" placeholder="Enter your email" value="<?= set_value('email');?>"/>
    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
</div>
<div class="form-row">
	<div class="col-md-6">
		<div class="form-group">
			<label class="small mb-1" for="inputPassword">Password</label>
			<input class="form-control py-2" id="inputPassword" type="password" name="password" placeholder="Enter your password" />
			<span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>
		</div>
   </div>
<div class="col-md-6">
        <div class="form-group">
            <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
            <input class="form-control py-2" id="inputConfirmPassword" type="password" name="cpassword" placeholder="Re enter password"  />
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'cpassword') : '' ?></span>
        </div>
    </div>
</div>               
<div class="form-group mt-4 mb-0">
	<button class="btn btn-primary btn-block" type="submit">Create Account</button>
</div>
    </form>
</div>					
<div class="card-footer text-center">
    <div class="small"><a href="<?= site_url('pocscontroller');?>">already have an account? Go to login</a></div>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url('public/assets/js/scripts.js'); ?>"></script>
</body>
</html>