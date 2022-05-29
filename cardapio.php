<?php include_once("./partials/cart.php") ?>
<?php include_once("./partials/verificaLogin.php") ?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Brothers | Cardápio</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <?php include_once("./partials/styles.php") ?>
	</head>
	<body>
        <?php include_once("./partials/header_mobile.php") ?>
        <?php include_once("./partials/header.php") ?>
		<?php if ($a == 'cart'): ?>
		<div class="container">
			<h2>Sacola</h2>
			<div class="row">
				<div class="col-md-12">
					 <div class="table-responsive">
						<?php echo $cartContents; ?>
					 </div>
				</div>
			</div>
		</div>
		<?php elseif ($a == 'checkout'): ?>
		<div class="container">
			<h1>Checkout</h1>
			<div class="row">
				<div class="col-md-12">
					 <div class="table-responsive">
					 	<pre><?php print_r($cart->getItems()); ?></pre>
					 </div>
				</div>
			</div>
		</div>
        <?php $cart->clear(); ?>
		<?php else: ?>
		<div class="container">
            <div class="container-title" style="display: flex; ">
                <h2>Lanches</h2>
                <div class="container pull-right">
                    <div class="navbar-collapse collapse" id="navbar-main">
                        <ul class="nav navbar-nav pull-right">
                            <li style="width: 150px; font-size: 20px; "><a href="?a=cart" id="li-cart"><i class="fa fa-shopping-cart"></i> Sacola (<?php echo $cart->getTotalItem(); ?>)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
			<div class="row mt-5">
				<?php
				foreach ($products as $product) {
					echo '
					<div class="col-sm-4" style="margin-bottom: 100px">
						<center><h4>' . $product->nome . '</h4></center>
						<div>
							<div class="text-center">
								<img src="' . $product->imagem . '" border="0" width="300px" title="' . $product->nome . '" />
							</div><br />
                            <div class="text-center">
                                <p style="font-size: 12px">' . $product->descricao . '</p>
							</div><br />
							<div class="text-center">
                                <br><h4>R$ ' . number_format($product->valor, 2, ',', '.') . '</h4><br />
								<form>
									<input type="hidden" value="' . $product->id . '" class="product-id" />';

					echo '
									<div class="form-group" style="display: flex; margin-left:12rem">
										<br><label style="font-size:14px;">Quantidade:</label>&nbsp;&nbsp;&nbsp;<input type="number" value="1" class="form-control quantity" style="width:50px" /><br />
									</div>
									<div class="form-group">
										<button class="btn btn-success add-to-cart" style="width: 250px; font-size:20px;"><i class="fa fa-shopping-cart" style="font-size:20px"></i> Adicionar à sacola</button>
									</div>
								</form>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>';
				}
				?>
			</div>
		</div>
		<?php endif; ?>
        <?php include_once("./partials/footer.php") ?>
        <?php include_once("./partials/search.php") ?>
        <?php include_once("./partials/scripts.php") ?>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				$('.add-to-cart').on('click', function(e){
					e.preventDefault();

					var $btn = $(this);
					var id = $btn.parent().parent().find('.product-id').val();
					var qty = $btn.parent().parent().find('.quantity').val();

					var $form = $('<form action="?a=cart" method="post" />').html('<input type="hidden" name="add" value=""><input type="hidden" name="id" value="' + id + '"><input type="hidden" name="qty" value="' + qty + '">');

					$('body').append($form);
					$form.submit();
				});

				$('.btn-update').on('click', function(){
					var $btn = $(this);
					var id = $btn.attr('data-id');
					var qty = $btn.parent().parent().find('.quantity').val();

					var $form = $('<form action="?a=cart" method="post" />').html('<input type="hidden" name="update" value=""><input type="hidden" name="id" value="'+id+'"><input type="hidden" name="qty" value="'+qty+'">');

					$('body').append($form);
					$form.submit();
				});

				$('.btn-remove').on('click', function(){
					var $btn = $(this);
					var id = $btn.attr('data-id');

					var $form = $('<form action="?a=cart" method="post" />').html('<input type="hidden" name="remove" value=""><input type="hidden" name="id" value="'+id+'">');

					$('body').append($form);
					$form.submit();
				});

				$('.btn-empty-cart').on('click', function(){
					var $form = $('<form action="?a=cart" method="post" />').html('<input type="hidden" name="empty" value="">');

					$('body').append($form);
					$form.submit();
				});
			});
		</script>
	</body>
</html>