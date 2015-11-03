<?php 

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>author</title>
	<style>
		.main{
			padding-top:50px;
			padding-bottom: 100px;
		}
	</style>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
	<div class="container main">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<form action="" enctype="multipart/form-data">
					<textarea id="status" class="form-control" rows="10"></textarea>
					<br>
					<input type="file" name="" id="image">
					<br>
					<button class="btn" id="postsubmit">Post</button>
					<input type="hidden" name="nonce" value="<?php echo wp_create_nonce('status'); ?>">
				</form>
			</div>
		</div>
	</div>


	<?php wp_footer(); ?>
</body>
</html>