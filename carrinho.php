<?php include_once 'header.php'; ?>
<link href="assets/css/style.carrinho.css" rel="stylesheet">
<section id="carrinho" class="carrinho">
    <div class="carrinho-content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
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
                                <div class="img-prod">
                                    <img src="uploads/produtos/<?=$i?>.jpg" class="center-block img-responsive" />
                                </div>

                                <div class="desc-item">
                                    <h6 class="product-title"><a href="#">dummy product name</a></h6>
                                    <p>Cor: Rosa Holográfico</p>


                                </div>
                            </td>
                            <td title="Preço" class="text-center">
                                <span>R$200,00</span>
                            </td>
                            <td title="Quantidade" class="text-center">
                                <div class="number input-counter">
                                    <span class="minus-btn"></span>
                                    <input type="text" value="1" size="5" />
                                    <span class="plus-btn"></span>
                                </div>
                                <a href="#" class="remove">Retirar do Carrinho</a>
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
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="observacao-pedido clearfix">
                        <h6 class="titulo">Deseja fazer algum pedido especial ou comentário para sua compra?</h6>
                        <textarea placeholder="Digite aqui..."></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="culculate-shipping clearfix">
                        <h6 class="titulo">Prazo e Entrega</h6>
                        <input placeholder="Digite o CEP do endereço de entrega!" type="text">
                    </div>
                    <div class="coupon-discount clearfix">
                        <h6 class="titulo">Cupom de Desconto</h6>
                        <div class="input-wrap">
                            <input name="name" placeholder="Insira seu cupom de desconto!" type="text">
                            <button class="submit-btn anima" type="submit">Aplicar Cupom</button>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="payment-details clearfix">
                        <h6 class="titulo">Detalhes de Pagamento</h6>
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
                        <button class="submit-btn anima" type="submit">Finalizar Compra</button>
                        <button class="submit-btn continuar anima" type="submit">Continuar Comprando</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(function() {
        if ($(".input-counter").length > 0) {
            $('.minus-btn').click(function() {
                var $input = $(this).parent().find('input');
                var count = parseInt($input.val()) - 1;
                count = count < 1 ? 1 : count;
                $input.val(count);
                $input.change();
                return false;
            });
            $('.plus-btn').click(function() {
                var $input = $(this).parent().find('input');
                $input.val(parseInt($input.val()) + 1);
                $input.change();
                return false;
            });
        }
    });

</script>
<?php include_once 'footer.php'; ?>
