<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.css');?>">
	<link rel="stylesheet" href="<?php echo site_url('resources/css/skins/_all-skins.css');?>">
	<!-- jQuery 2.2.3 -->
	<script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
	<!-- Bootstrap 3.3.6 -->
	<script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>

</head>
<body class="hold-transition login-page">
	<?php                    
	if(isset($_view) && $_view)
		$this->load->view($_view);
	?>   
	<!-- FastClick -->
	<script src="<?php echo site_url('resources/js/fastclick.js');?>"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo site_url('resources/js/app.min.js');?>"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?php echo site_url('resources/js/demo.js');?>"></script>
</body>
</html>
