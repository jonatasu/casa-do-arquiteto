<?php include_once 'header.php'; ?>
	<link href="assets/css/style.carrinho.css" rel="stylesheet">





	<section id="final" class="carrinho">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<ol class="progress">
						<li class="active" data-step="1">
							<a href="carrinho.php">Carrinho</a>
						</li>
						<li class="active" data-step="2">
							<a href="chekout-endereco.php">Endereço</a>
						</li>
						<li class="active" data-step="3">
							<a href="chekout-pagamento.php">Pagamento</a>
						</li>
						<li class="active" data-step="4">
							<a href="chekout-final.php">Obrigado</a>
						</li>
					</ol>
				</div>
			</div>
		</div>
		<div class="carrinho-content">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="box-shadow">
							<h4>Obrigado. Recebemos o seu pedido</h4>
							<h5>Nº do Pedido: m2653257</h5>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<div class="payment-details clearfix">
							<h6 class="titulo">Detalhes de Pagamento</h6>
							<table>
								<tbody>
									<tr>
										<td class="td-title-1">Dummy Product Name x 2</td>
										<td class="td-title-2">R$10.00</td>
									</tr>
									<tr>
										<td class="td-title-1">Dummy Product Name</td>
										<td class="td-title-2">R$5.00</td>
									</tr>
									<tr>
										<td class="td-title-1">Dummy Product Name x 2</td>
										<td class="td-title-2">R$10.00</td>
									</tr>
									<tr>
										<td class="td-title-1">Dummy Product Name</td>
										<td class="td-title-2">R$5.00</td>
									</tr>
									<tr class="total">
										<td class="td-title-1">Subtotal do Carrinho</td>
										<td class="td-title-2">R$155.00</td>
									</tr>
									<tr class="total">
										<td class="td-title-1">Frete</td>
										<td class="td-title-2">R$15.00</td>
									</tr>
									<tr class="total">
										<td class="td-title-1">Cupom de Desconto</td>
										<td class="td-title-2">R$00.00</td>
									</tr>
									<tr class="total">
										<td class="order-total">Total</td>
										<td class="order-total-price">$170.00</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-xs-12 col-md-6">
						<div class="payment-details clearfix">
							<h6 class="titulo">Dados de Entrega</h6>
							<div class="endereco-block">
								<h5>Patricia Saramela</h5>
								<span>Av. Dr. Alexandre Rasgulaeff, 2536</span>
								<span>Sala 01</span>
								<span>Jardim Dourado / Maringá - PR</span>
								<span>CEP: 87033-080</span>
							</div>
						</div>
						<div class="payment-details clearfix">
							<h6 class="titulo">Dados de Pagamento</h6>
							<div class="endereco-block">
								<span>Boleto</span>
								<span>E-mail: patricia@ltxdesign.com.br</span>
								<span>CPF: 766.575.637-95</span>
								<span>Telefone: (00)3333-3333</span>
							</div>
						</div>
					</div>
					<div class="col-xs-12">
						<br>
						<button class="submit-btn anima">Concluir</button>
					</div>
				</div>
			</div>
		</div>
	</section>


	<?php include_once 'footer.php'; ?>