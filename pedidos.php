<?php include_once 'header.php'; ?>
<link href="assets/css/style.inner.css" rel="stylesheet">
<section id="pedidos" class="areacliente">


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
                    <h1 class="title">Meus Pedidos</h1>
                    <br/>
                    <div class="lista-pedidos">
                        <table class="table table-xs table-hover">
                            <tr>
                                <th class="text-center">Nº do Pedido</th>
                                <th class="text-center">Realizado em</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Total</th>
                                <th class="text-center"></th>
                            </tr>
                            <?php for($i=1; $i<=5;$i++){?>
                            <tr class="item-row">
                                <td title="Nº do Pedido" class="text-center">
                                    38-281016
                                </td>
                                <td title="Realizado em" class="text-center">
                                    28/10/2016 14:45
                                </td>
                                <td title="Status" class="text-center">
                                    Cancelado
                                </td>
                                <td title="Total" class="text-center">
                                    R$179,20
                                </td>
                                <td title="Visualizar Pedido" class="text-center">
                                    <a href="pedido.php" data-toggle="tooltip" data-placement="top" title="Visualizar Pedido"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once 'footer.php'; ?>
