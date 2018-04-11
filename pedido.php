<?php include_once 'header.php'; ?>
<link href="assets/css/style.inner.css" rel="stylesheet">
<section id="pedido" class="areacliente">
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
          <table class="table table-bordered table-hover">
            <tbody>
              <tr>
                <td style="width: 50%;" class="text-left">
                  <b>Nº do Pedido:</b> #214521
                  <br>
                  <b>Data do Pedido:</b> 20/06/2016
                </td>
                <td style="width: 50%;" class="text-left">
                  <b>Pagamento:</b> Cartão de Crédito
                  <br>
                  <b>Entrega:</b> Sedex
                </td>
              </tr>
            </tbody>
          </table>
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <td style="width: 50%; vertical-align: top;" class="text-left">Endereço de Entrega</td>
                <td style="width: 50%; vertical-align: top;" class="text-left">Endereço de Cobrança</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-left">Jhone Cary
                  <br>Central Square
                  <br>22 Hoi Wing Road
                  <br>New Delhi - India
                </td>
                <td class="text-left">Jhone Cary
                  <br>Central Square
                  <br>22 Hoi Wing Road
                  <br>New Delhi - India
                </td>
              </tr>
            </tbody>
          </table>
          <table class="table table-xs">
            <tr>
              <th class="text-center">Produto</th>
              <th class="text-center">Preço</th>
              <th class="text-center">Quantidade</th>
              <th class="text-center">Total</th>
            </tr>
            <?php for($i=1; $i<=5;$i++){?>
            <tr class="item-row">
              <td>
                <div class="desc-item">
                  <h6 class="product-title"><a href="#">dummy product name</a></h6>
                  <p>Tamanho: 36</p>
                  <p>Cor: Preto e Branco</p>
                </div>
              </td>
              <td title="Preço" class="text-center">
                <span>R$200,00</span>
              </td>
              <td title="Quantidade" class="text-center">
                <span>1</span>
              </td>
              <td title="Total" class="text-center">
                <span>R$400,00</span>
              </td>
            </tr>
            <?php }?>
            <tr class="total-row">
              <td colspan="3" class="text-right">Total</td>
              <td class="text-right ">
                <span class="total-item">R$800.00</span>
              </td>
            </tr>
          </table>
          <h3 class="subtitle">Acompanhe Seu Pedido</h3>
          <table class="table table-bordered table-hover acompanhamento">
            <thead>
              <tr>
                <td class="text-left">Data</td>
                <td class="text-left">Status</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-left">20/06/2016</td>
                <td class="text-left">Em Processamento</td>
              </tr>
              <tr>
                <td class="text-left">21/06/2016</td>
                <td class="text-left">Enviado</td>
              </tr>
              <tr>
                <td class="text-left">24/06/2016</td>
                <td class="text-left">Entregue</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include_once 'footer.php'; ?>
