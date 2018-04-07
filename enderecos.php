<?php include_once 'header.php'; ?>
<link href="assets/css/style.inner.css" rel="stylesheet">
<section id="enderecos" class="areacliente">

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
                    <h1 class="title">Meus Endereços</h1>
                    <br/>
                    <div class="row lista-enderecos">
                        <div class="col-sm-6">
                            <div class="endereco-block clearfix">
                                <h5>Patricia Saramela</h5>
                                <span>Av. Dr. Alexandre Rasgulaeff, 2536</span>
                                <span>Sala 01</span>
                                <span>Jardim Dourado / Maringá - PR</span>
                                <span>CEP: 87033-080</span></label>
                                <div class="acoes">
                                    <a href="#">Editar <i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <a href="#">Excluir <i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="endereco-block clearfix">
                                <h5>Patricia Saramela</h5>
                                <span>Av. Tiradentes, 3122</span>
                                <span>Apto 20</span>
                                <span>Zona 01 / Maringá - PR</span>
                                <span>CEP: 87013-260</span></label>
                                <div class="acoes">
                                    <a href="#">Editar <i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <a href="#">Excluir <i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once 'footer.php'; ?>
