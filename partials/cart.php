<?php
	$arquivo = file_get_contents('./json/cardapio.json');
	$products = json_decode($arquivo);

	$a = (isset($_GET['a'])) ? $_GET['a'] : 'home';

	require_once './cart/class.Cart.php';

	$cart = new Cart([
		'cartMaxItem' => 0,
		'itemMaxQuantity' => 0,
		'useCookie' => true,
	]);

	if ($a == 'cart') {
		$cartContents = '
		<div class="alert alert-success" style="margin-bottom:30rem; margin-top:3rem; display:flex">
			<i class="fa-2xl fa fa-info-circle" style="margin-top:1.40rem"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p style="font-size:24px">Sacola vazia!!!</p>
		</div>';

		if (isset($_POST['empty'])) {
			$cart->clear();
		}

		if (isset($_POST['add'])) {
			foreach ($products as $product) {
				if ($_POST['id'] == $product->id) {
					break;
				}
			}

			$cart->add($product->id, $_POST['qty'], [
				'price' => $product->valor,
			]);
		}

		if (isset($_POST['update'])) {
			foreach ($products as $product) {
				if ($_POST['id'] == $product->id) {
					break;
				}
			}

			$cart->update($product->id, $_POST['qty'], [
				'price' => $product->valor,
			]);
		}

		if (isset($_POST['remove'])) {
			foreach ($products as $product) {
				if ($_POST['id'] == $product->id) {
					break;
				}
			}

			$cart->remove($product->id, [
				'price' => $product->valor,
			]);
		}
		if (!$cart->isEmpty()) {
			$allItems = $cart->getItems();
			$pedido = 'Olá, desejo comprar o(s) lanche(s):';
			foreach ($allItems as $id => $items) {
				foreach ($items as $item) {
					foreach ($products as $product) {
						if ($id == $product->id) {
							break;
						}
					}
$pedido .= '
Lanche: '. $product->nome .'
Quantidade: '. $item['quantity'] .'
Valor: R$'. $item['attributes']['price'] .'
';
				}
			}
$pedido .= ' 
Valor total: R$'. number_format($cart->getAttributeTotal('price'), 2, ',', '.').'
';
			$pedido=urlencode($pedido);
		}
		if (!$cart->isEmpty()) {
			$allItems = $cart->getItems();

			$cartContents = '
			<br><table class="table table-striped table-hover">
				<thead>
					<tr>
						<th class="col-md-7"><h5>Produto</h5></th>
						<th class="col-md-2 text-center"><h5>Quantidade</h5></th>
						<th class="col-md-2 text-right"><h5>Valor</h5></th>
					</tr>
				</thead>
				<tbody>';

			foreach ($allItems as $id => $items) {
				foreach ($items as $item) {
					foreach ($products as $product) {
						if ($id == $product->id) {
							break;
						}
					}
					$cartContents .= '
					<tr>
						<td><h6>' . $product->nome . '</h6></td>
						<td class="text-center"><div class="form-group"><input type="number" value="' . $item['quantity'] . '" class="form-control quantity pull-left" style="width:50px; height:30px"><div class="pull-right"><button class="btn btn-default btn-update" data-id="' . $id . '"><i class="fa-2xl fa-solid fa-arrow-rotate-right"></i></button><button class="btn btn-default btn-remove" data-id="' . $id . '"><i class="fa-2xl fa fa-trash"></i></button></div></div></td>
						<td class="text-right"><h6>R$ ' . $item['attributes']['price'] . '</h6></td>
					</tr>';
				}
			}
			$cartContents .= '
				</tbody>
			</table>
			<div class="text-right">
				<h3>Total:<br />R$ ' . number_format($cart->getAttributeTotal('price'), 2, ',', '.') . '</h3>
			</div>
			<p style="margin-bottom: 100px">
				<div class="pull-left" style="margin-bottom: 100px">
					<button class="btn btn-success btn-empty-cart" style="width: 200px; font-size:20px;">Esvaziar sacola</button>
				</div>
				<div class="pull-right text-right">
					<a href="?a=home" class="btn btn-default" style="width: 250px; font-size:20px;">Continuar comprando</a>
					<a href="https://wa.me/5511942036449?text='.$pedido.'" target="_blank" class="btn btn-success btn-empty-cart" style="width: 200px; font-size:20px;">Finalizar pedido</a>
				</div>
			</p>';
		}
	}
?>
