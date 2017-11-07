<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

	<title><?php echo $title; ?></title>
	<?php echo Asset::css('bootstrap.min.css'); ?>
	<?php echo Asset::css('shop-homepage.css'); ?>
	<?php echo Asset::css('half-slider.css'); ?>

	
	

	<style>
		body { margin: 0px; }
	</style>

</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-center"role="navigation">

	<div class="navbar-header">
	<a class="navbar-brand" href="/">
	
	</a>
	</div>
<div class = "container">

 <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/">WOODWORK  クラフト工房ウッドワーク</a>

		 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
     
	 <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
			
			 <a class="nav-link" href="/">Top
                <span class="sr-only">(current)</span>
              </a>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="/tweet/about">お店のご紹介</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/tweet/order">オーダーキッド家具</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/tweet/tyumon">注文家具</a>
            </li>
			

		<li class="nav-item">
              <a class="nav-link" href="/tweet/dekki">ウッドデッキ</a>
			</li>

			 <li class="nav-item">
              <a class="nav-link" href="/tweet/wood">木工教室</a>
			</li>

			<li class="nav-item">
              <a class="nav-link" href="/tweet/Contact">お問い合わせ</a>
			</li>


          </ul>
        </div>
      </div>
    </nav>


	<div class="container">

	<div class="col-md-12">
	<?php echo $content; ?>
		</div>
	</div>
		<?php echo Asset::js("jquery.min.js"); ?>
        <?php echo Asset::js("bootstrap.bundle.min.js"); ?>


       
</body>
</html>