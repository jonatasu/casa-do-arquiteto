<?php include_once 'header.php'; ?>
	<link href="assets/css/style.carrinho.css" rel="stylesheet">

	<section id="pagamento" class="carrinho">
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
					<div class="col-xs-12 col-md-6">
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
						</div>
					</div>
					<div class="col-xs-12 col-md-6">
						<div class="adress-details clearfix">
							<h6 class="titulo">Endereço de Entrega</h6>
							<div class="endereco">
								<h5>Patricia Saramela</h5>
								<span>Av. Dr. Alexandre Rasgulaeff, 2536</span>
								<span>Sala 01</span>
								<span>Jardim Dourado / Maringá - PR</span>
								<span>CEP: 87033-080</span></label>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="payment-details clearfix" style="margin-top:20px">
							<div class="clearfix">
								<h6 class="titulo">Dados de Pagamento</h6>
							</div>
							<div class="col-xs-12">
								<div class="hide">
									<div class="row">
										<div class="col-xs-12 col-md-6">
											<h2>Dados do comprador</h2>
											<!-- nome e email -->
											<div class="form-group clearfix required">
												<div class="col-md-6 input-senderEmail" style="padding-left: 0">
													<label for="senderEmail">E-MAIL</label>
													<input class="form-control input-sm" id="senderEmail" name="senderEmail" value="ltx@ltxx.com.br" type="email">
												</div>

												<div class="col-md-6 input-senderName" style="padding-left: 0">
													<label for="senderName">NOME COMPLETO</label>
													<input class="form-control input-sm" id="senderName" name="senderName" value="Guilherme Brepohl" type="text">
												</div>
											</div>
											<!-- cpf telefone -->
											<div class="form-group clearfix required">
												<div class="col-md-6 input-senderCPF" style="padding-left: 0">
													<label>CPF</label>
													<input class="form-control input-sm maskCPF_PG" id="senderCPF" name="senderCPF" value="067.108.689-82" holderfield="cpf" type="text">
												</div>
												<div class="col-md-6 input-senderAreaCode" style="padding-left: 0">
													<label for="senderAreaCode">DDD - TELEFONE</label>
													<div>
														<input name="senderAreaCode" id="senderAreaCode" holderfield="areaCode" class="form-control input-sm areaCode mask2Casas" style="width:36px; display:inline-block;  text-align:center" value="44" type="text"> -
														<input name="senderPhone" value="9125-1768" id="senderPhone" holderfield="phone" class="form-control input-sm maskTEL_PG" style="width:100px; display:inline-block;" type="text">
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-md-6">
											<h2>Endereço Residencial</h2>
											<!-- endereco -->
											<div class="form-group clearfix required">
												<div class="col-md-3 col-lg-2 input-shippingAddressPostalCode" style="padding-left: 0">
													<label for="shippingAddressPostalCode">CEP</label>
													<input class="form-control input-sm maskCEP_PG" id="shippingAddressPostalCode" name="shippingAddressPostalCode" value="87010-410" holderfield="postalCode" type="text">
												</div>


												<div class="col-md-4 col-lg-5 input-shippingAddressStreet" style="padding-left: 0">
													<label for="shippingAddressStreet">ENDEREÇO</label>
													<input class="form-control input-sm" id="shippingAddressStreet" name="shippingAddressStreet" value="Rua Martin Afonso" holderfield="street" type="text">
												</div>

												<div class="col-md-2 input-shippingAddressNumber" style="padding-left: 0">
													<label for="shippingAddressNumber">NÚMERO</label>
													<input class="form-control input-sm" id="shippingAddressNumber" name="shippingAddressNumber" value="400" holderfield="number" type="text">
												</div>

												<div class="col-md-3 input-shippingAddressComplement " style="padding-left: 0">
													<label class="notrequired" for="shippingAddressComplement">COMPLEMENTO</label>
													<input class="form-control input-sm" id="shippingAddressComplement" name="shippingAddressComplement" value="CASA" holderfield="complement" type="text">
												</div>
											</div>
											<div class="form-group clearfix required">
												<div class="col-md-4 input-shippingAddressDistrict" style="padding-left: 0">
													<label for="shippingAddressDistrict">BAIRRO</label>
													<input class="form-control input-sm" id="shippingAddressDistrict" name="shippingAddressDistrict" value="Zona 02" holderfield="district" type="text">
												</div>
												<div class="col-md-4 input-shippingAddressCity" style="padding-left: 0">
													<label for="shippingAddressCity">CIDADE</label>
													<input class="form-control input-sm" id="shippingAddressCity" value="Maringá" name="shippingAddressCity" holderfield="city" type="text">
												</div>
												<div class="col-md-4 input-shippingAddressState" style="padding-left: 0">
													<label>Estado</label>
													<select name="shippingAddressState" id="shippingAddressState" class="form-control input-sm addressState" holderfield="state">
														<option value="">Selecione o Estado</option>
														<option value="ac">Acre</option>
														<option value="al">Alagoas</option>
														<option value="am">Amazonas</option>
														<option value="ap">Amapá</option>
														<option value="ba">Bahia</option>
														<option value="ce">Ceará</option>
														<option value="df">Distrito Federal</option>
														<option value="es">Espírito Santo</option>
														<option value="go">Goiás</option>
														<option value="ma">Maranhão</option>
														<option value="mt">Mato Grosso</option>
														<option value="ms">Mato Grosso do Sul</option>
														<option value="mg">Minas Gerais</option>
														<option value="pa">Pará</option>
														<option value="pb">Paraíba</option>
														<option value="pr">Paraná</option>
														<option value="pe">Pernambuco</option>
														<option value="pi">Piauí</option>
														<option value="rj">Rio de Janeiro</option>
														<option value="rn">Rio Grande do Norte</option>
														<option value="ro">Rondônia</option>
														<option value="rs">Rio Grande do Sul</option>
														<option value="rr">Roraima</option>
														<option value="sc">Santa Catarina</option>
														<option value="se">Sergipe</option>
														<option value="sp">São Paulo</option>
														<option value="to">Tocantins</option>
													</select>
												</div>
											</div>
											<input name="shippingAddressCountry" id="shippingAddressCountry" holderfield="country" value="Brasil" type="hidden">
										</div>
									</div>
								</div>
								<div id="paymentMethodsOptions" style="text-align: center" class="clearfix">
									<div class="radio radio-info radio-inline active">
										<input id="creditCardRadio" name="changePaymentMethod" value="creditCard" type="radio">
										<label for="creditCardRadio">
											<img src="assets/img/credito.png">
											<p>Cartão de Crédito</p>
											<span class="btn-select">Selecionar</span>
										</label>
									</div>
									<div class="radio radio-info radio-inline">
										<input id="boletoRadio" name="changePaymentMethod" value="boleto" type="radio">
										<label for="boletoRadio">
											<img src="assets/img/boleto.png">
											<p>Boleto</p>
											<span class="btn-select">Selecionar</span>
										</label>
									</div>
									<div class="radio radio-info radio-inline">
										<input id="eftRadio" name="changePaymentMethod" value="eft" type="radio">
										<label for="eftRadio">
											<img src="assets/img/debito.png">
											<p>Débito on-line</p>
											<span class="btn-select">Selecionar</span></label>
									</div>
									<div id="paymentMethodLoading" style="display: none;"></div>
								</div>
								<div class="content-payment clearfix" id="cartao-credito">
									<br/>
									<div class="col-md-6 col-sm-12 col-xs-12">
										<div class="control-group">
											<label class="control-label">Número do Cartão</label>
											<div class="controls">
												<input type="text" class="input-block-level">
											</div>
										</div>
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12">
										<div class="control-group">
											<label class="control-label">Nome impresso no cartão</label>
											<div class="controls">
												<input type="text" class="input-block-level">
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-12 col-xs-12">
										<div class="control-group">
											<label class="control-label">Data de Validade</label>
											<div class="controls">
												<div class="half">
													<input type="text" class="input-block-level" placeholder="Mês">
												</div>
												<span style="display: block; float: left; color: rgb(119, 119, 119); font-size: 15px; margin: 8px 5px;">/</span>
												<div class="half">
													<input type="text" class="input-block-level" placeholder="Ano">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-12 col-xs-12">
										<div class="control-group">
											<label class="control-label">Código de segurança</label>
											<div class="controls">
												<input type="text" class="input-block-level" placeholder="CVV">
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-12 col-xs-12">
										<div class="control-group">
											<label class="control-label">Data de Nascimento</label>
											<div class="controls">
												<input type="text" class="input-block-level" placeholder="DD/MM/AAAA">
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-12 col-xs-12">
										<div class="control-group">
											<label class="control-label">CPF do Titular do Cartão</label>
											<div class="controls">
												<input type="text" class="input-block-level">
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
										<div class="control-group">
											<label class="control-label">Telefone</label>
											<div class="controls">
												<div class="half-1">
													<input type="text" class="input-block-level" placeholder="DDD">
												</div>
												<div class="half-2">
													<input type="text" class="input-block-level" placeholder="Número">
												</div>
											</div>
										</div>
									</div>
									<div class="col-xs-12">
										<button class="submit-btn" type="submit">Concluir Pagamento</button>
									</div>
								</div>
								<!--
								<div class="content-payment clearfix" id="boleto">
									<button type="button" id="boletoButton" class="btn btn-success btn-send">Gerar Boleto <i class="fa fa-barcode"></i></button>
								</div>
-->


								<!--
								<div class="content-payment clearfix" id="debito">
	<div style="border-bottom: 1px solid #eee; border-top: 1px solid #eee; margin: 40px 0; padding: 30px 0; text-align: center;">
		<p>Selecione o seu banco:</p>
		<ul>
			<li databank="bancodobrasil" class="bank-flag bancodobrasil">Banco do Brasil</li>
			<li databank="bradesco" class="bank-flag bradesco">Bradesco</li>
			<li databank="itau" class="bank-flag itau">Itau</li>
			<li databank="banrisul" class="bank-flag banrisul">Banrisul</li>
			<li databank="hsbc" class="bank-flag hsbc">HSBC</li>
		</ul>
	</div>
</div>
-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include_once 'footer.php'; ?>