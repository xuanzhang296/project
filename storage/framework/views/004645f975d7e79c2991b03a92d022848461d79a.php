<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo e(asset('/resources/views/admin/style/css/admin.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('/resources/views/admin/style/font/css/font.min.css')); ?>">
</head>
<body style="background:#F3F3F4;">
	<div class="login_box">
		<h1>Blog</h1>
		<h2>Welcome to Personal Blog System Protal </h2>
		<div class="form">
			
			<?php if(session('errmsg')): ?>
			<p style="color:red"><?php echo e(session('errmsg')); ?></p>
			<?php endif; ?>
			<form action="#" method="post">
			<?php echo e(csrf_field()); ?>

				<ul>
					<li>
					<input type="text" name="username" class="text"/>
						<span><i class="fa fa-user"></i></span>
					</li>
					<li>
						<input type="password" name="password" class="text"/>
						<span><i class="fa fa-lock"></i></span>
					</li>
					<li>
						<input type="text" class="code" name="code"/>
						<span><i class="fa fa-check-square-o"></i></span>
						<img src="<?php echo e(url('admin/code')); ?>" alt="" onclick="this.src = '<?php echo e(url('admin/code')); ?>?'+Math.random()">
					</li>
					<li>
						<input type="submit" value="login"/>
					</li>
				</ul>
			</form>
			<p><a href="#">back</a> &copy; 2016 Powered by ZX
		</div>
	</div>
</body>
</html>