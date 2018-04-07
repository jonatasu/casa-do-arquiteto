<?php include_once 'header.php'; ?>
<link href="assets/css/style.inner.css" rel="stylesheet">
<section id="minhaconta" class="areacliente">


    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12 col-md-push-9">
                <aside id="column-right">
                    <h3 class="subtitle">Minha Conta</h3>
                    <div class="list-group">
                        <ul class="list-item">
                            <li><a href="minhaconta.php">Dados Cadastrais</a></li>
                            <li><a href="enderecos.php">Endereços</a></li>
                            <li><a href="pedidos.php">Meus Pedidos</a></li>

                        </ul>
                    </div>
                </aside>
            </div>
            <div class="col-md-9 col-sm-12 col-xs-12 col-md-pull-3">
                <div class="content clearfix">
                    <h1 class="title">Dados Cadastrais</h1>
                    <p class="subtitle">Olá <strong>Lorem ipsum</strong>! Só altere suas informações abaixo caso necessário.</p>
                    <form class="form-horizontal">
                        <fieldset id="account">
                            <legend>Dados Pessoais</legend>
                            <div class="form-group required">
                                <label for="input-fullname" class="col-sm-2 control-label">Nome Completo</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="input-fullname" placeholder="Nome Completo" value="" name="fullname" type="text">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="input-email" class="col-sm-2 control-label">E-Mail</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="input-email" placeholder="E-Mail" value="" name="email" type="email">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="input-telefone" class="col-sm-2 control-label">Telefone</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="input-telefone" placeholder="Telefone" value="" name="telefone" type="tel">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-celular" class="col-sm-2 control-label">Celular</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="input-celular" placeholder="Celular" value="" name="celular" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-cpf" class="col-sm-2 control-label">CPF</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="input-cpf" placeholder="CPF" value="" name="cpf" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-nascimento" class="col-sm-2 control-label">Data de Nascimento</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="input-nascimento" placeholder="Data de Nascimento" value="" name="nascimento" type="text">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Dados de Acesso</legend>
                            <div class="form-group required">
                                <label for="input-emaillogin" class="col-sm-2 control-label">E-Mail</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="input-emaillogin" placeholder="E-Mail" value="" name="emaillogin" type="email">
                                </div>
                            </div>
                            <div class="col-sm-10 col-sm-offset-2">
                                <p class="help-block">Você se cadastrou utilizando o Facebook, mas também pode acessar por senha. Utilize os campos abaixo para informar a senha que deseja.</p>
                            </div>
                            <div class="form-group required">
                                <label for="input-senha" class="col-sm-2 control-label">Senha</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="input-senha" placeholder="Senha" value="" name="senha" type="senha">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="input-confirm" class="col-sm-2 control-label">Confirmar Senha</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="input-confirm" placeholder="Confirmar Senha" value="" name="confirm" type="senha">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Newsletter</legend>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Deseja Receber novidades e promoções por e-mail?</label>
                                <div class="col-sm-9">
                                    <label class="radio-inline">
											<input value="1" name="newsletter" type="radio"> Sim
										</label>
                                    <label class="radio-inline">
											<input checked="checked" value="0" name="newsletter" type="radio"> Não
										</label>
                                </div>
                            </div>
                        </fieldset>
                        <div class="buttons">
                            <div class="pull-right">
                                <input value="1" name="agree" type="checkbox"> &nbsp;Estou de Acordo com as <a class="agree" href="#"><b>Política de Privacidade</b></a> &nbsp;
                                <input class="btn btn-salvar" value="Salvar Alterações" type="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once 'footer.php'; ?>
