<?php include_once 'header.php'; ?>
	<link href="assets/css/style.carrinho.css" rel="stylesheet">


	<section id="endereco" class="carrinho">
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
						<li data-step="3">
							<a href="chekout-pagamento.php">Pagamento</a>
						</li>
						<li data-step="4">
							<a href="chekout-final.php">Obrigado</a>
						</li>
					</ol>
				</div>
			</div>
		</div>
		<div class="carrinho-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="payment-details clearfix">
							<h6 class="titulo">Resumo do pedido</h6>
							<table>
								<tbody>
									<tr>
										<td class="td-title-1">Subtotal do Carrinho</td>
										<td class="td-title-2">R$155.00</td>
									</tr>
									<tr>
										<td class="td-title-1">Frete</td>
										<td class="td-title-2">R$15.00</td>
									</tr>
									<tr>
										<td class="td-title-1">Cupom de Desconto</td>
										<td class="td-title-2">R$00.00</td>
									</tr>
									<tr>
										<td class="order-total">Total</td>
										<td class="order-total-price">$170.00</td>
									</tr>
								</tbody>
							</table>
							<div style="height: 48px"></div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="adress-details clearfix">
							<h6 class="titulo">Endereço de Entrega</h6>
							<div class="endereco">
								<h5>Patricia Saramela</h5>
								<span>Av. Dr. Alexandre Rasgulaeff, 2536</span>
								<span>Sala 01</span>
								<span>Jardim Dourado / Maringá - PR</span>
								<span>CEP: 87033-080</span></label>
							</div>
							<button class="submit-btn cadastrar-end" type="submit" role="button" data-toggle="collapse" href="#boxnovoendereco" aria-expanded="false" aria-controls="boxnovoendereco">Alterar/Cadastrar Endereço</button>
						</div>
					</div>
					<div class="col-xs-12">
						<br/>
						<button class="submit-btn send-endereco anima">Continuar</button>
					</div>
				</div>
				<div class="collapse clearfix" id="boxnovoendereco">
					<div class="row">
						<div class="col-xs-12">
							<h6 class="titulo">Selecionar Endereço</h6>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="radio selected">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
									<h5>Patricia Saramela
										<small>(Trabalho)</small>
									</h5>
									<span>Av. Dr. Alexandre Rasgulaeff, 2536</span>
									<span>Sala 01</span>
									<span>Jardim Dourado / Maringá - PR</span>
									<span>CEP: 87033-080</span></label>
								</label>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
									<h5>Patricia Saramela
										<small>(Casa)</small>
									</h5>
									<span>Av. 7 de Setembro, 756</span>
									<span>Sala 01</span>
									<span>Centro / Engenheiro Beltrão - PR</span>
									<span>CEP: 87270-000</span></label>
								</label>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
									<h5>Patricia Saramela
										<small>(Casa 2)</small>
									</h5>
									<span>Av. 7 de Setembro, 756</span>
									<span>Sala 01</span>
									<span>Centro / Engenheiro Beltrão - PR</span>
									<span>CEP: 87270-000</span></label>
								</label>
							</div>
						</div>
					</div>
					<div class="clearfix">
						<h6 class="titulo">Cadastrar Novo Endereço</h6>
						<br/>
						<form name="formEndereco" class="formEndereco" action="#">
							<input name="nosp" value="" type="hidden">
							<input name="formName" value="formEndereco" type="hidden">
							<div class="form-group input-nome">
								<input class="form-control" name="nome" placeholder="Nome do Destinatário" type="text">
							</div>
							<div class="row">
								<div class="col-md-4 col-lg-3">
									<div class="form-group input-cep">
										<input id="endereco_novo_cep" class="form-control maskCep" name="cep" placeholder="CEP" type="text">
									</div>
								</div>

								<div class="col-md-8 col-lg-9">
									<div class="form-group input-endereco">
										<input id="endereco_novo_endereco" class="form-control" name="endereco" placeholder="Endereço" type="text">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group input-bairro">
										<input id="endereco_novo_numero" class="form-control" name="numero" placeholder="Número" type="text">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group input-complemento">
										<input class="form-control" name="complemento" placeholder="Complemento" type="text">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 form-group input-bairro">
									<input id="endereco_novo_bairro" class="form-control" name="bairro" placeholder="Bairro" type="text">
								</div>
								<div class="col-md-4 form-group input-cidade">
									<input id="endereco_novo_cidade" class="form-control" name="cidade" placeholder="Cidade" type="text">
								</div>

								<div class="col-md-4 form-group input-estado">
									<input id="endereco_novo_estado" class="form-control" name="estado" maxlength="2" placeholder="Estado" type="text">
								</div>
							</div>
							<div class=" form-group input-referencia">
								<input class="form-control" name="referencia" placeholder="Referência de localização" type="text">
							</div>
							<div class="row">
								<div class="col-md-6 form-group input-celular">
									<input class="form-control maskTelefone" name="celular" placeholder="Celular para contato" type="text">
								</div>

								<div class="col-md-6 form-group input-telefone">
									<input class="form-control maskTelefone" name="telefone" placeholder="Telefone para contato" type="text">
								</div>
							</div>
							<div class="form-group">
								<button class="submit-btn send-endereco anima">Cadastrar Endereço</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>


	</section>

	<script>
	</script>




	<?php include_once 'footer.php'; ?>