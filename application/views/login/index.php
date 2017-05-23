<div class="login-box">
	<div class="login-logo">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-6 col-md-offset-3">
					<img alt="" src="<?php echo site_url('resources/img/logo.jpg'); ?>" class="img-responsive">
				</div>
			</div>
		</div>
	</div>
	<!-- /.login-logo -->
	<div class="login-box-body">
		<?php echo validation_errors(); ?>
		<?php echo $mensagem; ?>

		<p class="login-box-msg">Sign in your account.</p>

		<?php echo form_open('login/index',array("class"=>"")); ?>
		<div class="form-group has-feedback">
			<input type="email" class="form-control" placeholder="E-mail" name="email">
			<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
		</div>
		<div class="form-group has-feedback">
			<input type="password" class="form-control" placeholder="Senha" name="senha">
			<span class="glyphicon glyphicon-lock form-control-feedback"></span>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<button type="submit" class="btn btn-danger btn-block btn-flat btn-lg">Sign in</button>
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>

</div>