<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<?php echo Asset::css('bootstrap.min.css'); ?>

	<style>
		body { margin: 0px; }
	</style>

</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-center"role="navigation">
	<div class="navbar-header">
	<a class="navbar-brand" href="/">
	<img src="/assets/img/logo_b.png" alt="">
	</a>
	</div>
	
  	<nav class="navbar  navbar-default">
  <ul class="nav navbar-nav">

	<li><a href="/">Top</a></li>
  	<li><a href="/tweet/about">お店のご紹介</a></li>
  	<li><a href="/tweet/order">オーダーキッド家具</a></li>
  	<li><a href="#">ウッドデッキ</a></li>
	<li><a href="#">木工教室</a></li>
	<li><a href="#">お問い合わせ</a></li>

	

		
			</ul>
		</div>
	</div>
		</nav>
	</nav>
</nav>
	<div class="container">

	<div class="col-md-12">
	<?php echo $content; ?>
		</div>
	</div>
</body>
</html>