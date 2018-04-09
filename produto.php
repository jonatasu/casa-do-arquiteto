<?php include_once 'header.php'; ?>
<link href="assets/css/style.produto.css" rel="stylesheet">
<section id="produto">
  <div class="container">
    <div class="row">
      <div class="col-sm-5 col-md-6 col-lg-5 col-xl-6">
        <div id="galeria">
          <div class="product-title visible-xs">
            <h2>Lorem ipsum dolor sit ctetur</h2>
          </div>
          <div class="bigPicture hidden-xs">
            <li class="item">
              <img src="uploads/produtos/1.jpg" class="img-responsive center-block">
            </li>
            <li class="item">
              <img src="uploads/produtos/1.jpg" class="img-responsive center-block">
            </li>
            <li class="item">
              <img src="uploads/produtos/1.jpg" class="img-responsive center-block">
            </li>
            <li class="item">
              <img src="uploads/produtos/1.jpg" class="img-responsive center-block">
            </li>
            <li class="item">
              <img src="uploads/produtos/1.jpg" class="img-responsive center-block">
            </li>
            <li class="item">
              <img src="uploads/produtos/1.jpg" class="img-responsive center-block">
            </li>
            <li class="item">
              <img src="uploads/produtos/1.jpg" class="img-responsive center-block">
            </li>
            <li class="item">
              <img src="uploads/produtos/1.jpg" class="img-responsive center-block">
            </li>
            <li class="item">
              <img src="uploads/produtos/1.jpg" class="img-responsive center-block">
            </li>
          </div>
          <ul class="smallPicture">
            <li class="item">
              <img src="uploads/produtos/1.jpg" class="img-responsive center-block">
            </li>
            <li class="item">
              <img src="uploads/produtos/1.jpg" class="img-responsive center-block">
            </li>
            <li class="item">
              <img src="uploads/produtos/1.jpg" class="img-responsive center-block">
            </li>
            <li class="item">
              <img src="uploads/produtos/1.jpg" class="img-responsive center-block">
            </li>
            <li class="item">
              <img src="uploads/produtos/1.jpg" class="img-responsive center-block">
            </li>
            <li class="item">
              <img src="uploads/produtos/1.jpg" class="img-responsive center-block">
            </li>
            <li class="item">
              <img src="uploads/produtos/1.jpg" class="img-responsive center-block">
            </li>
            <li class="item">
              <img src="uploads/produtos/1.jpg" class="img-responsive center-block">
            </li>
            <li class="item">
              <img src="uploads/produtos/1.jpg" class="img-responsive center-block">
            </li>
          </ul>
        </div>
      </div>
      <div class="product-info col-sm-7 col-md-6 col-lg-7 col-xl-12">
        <div class="clearfix">
          <div class="product-cd pull-right">COD: <strong>mtk012c</strong></div>
        </div>
        <div class="product-title hidden-xs">
          <h2>Lorem ipsum dolor sit ctetur</h2>
        </div>
        <div class="price-box clearfix">
          <div class="vista col-xs-6">
            <p>À vista por:</p>
            <span class="new">R$65.00</span>
            <span class="old">R$84.00</span>
          </div>
          <div class="prazo col-xs-6">
            <p>Parcele <strong>sem juros</strong> em até: </p>
            <span>3x </span><span class="valor">R$60,97</span>
            <a type="button" data-toggle="modal" data-target="#modalParcelas" href="#" class="parelas-modal">Ver Parcelas</a>
          </div>
        </div>
        <div class="product-info-description clearfix">
          <div class="col-xs-12 nopadding">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nibh magna, euismod non sollicitudin id, bibendum vel nunc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec leo massa, suscipit at dictum
              nec, suscipit vitae nulla. Integer pretium purus eget orci sagittis porttitor. Nam convallis, urna ut imperdiet tempus.</p>
          </div>
        </div>
        <div class="product-steps clearfix">
          <div class="passos">
            <div class="numero">
              <span>1</span><i class="fa fa-caret-right"></i>
            </div>
            <div class="titulo">
              Escolha a <strong>cor</strong>
            </div>
            <div class="cores">
              <ul class="colors-list">
                <li class="selected" data-tamanhos="" data-toggle="tooltip" data-placement="top" title="Vermelho">
                  <span class="item-color" style="background: #FF0000; background-size:cover;"></span>
                  <input checked="" name="colors" class="color" value="" type="radio">
                </li>
                <li class="" data-tamanhos="" data-toggle="tooltip" data-placement="top" title="Cinza e Preto">
                  <span class="item-color" style="background:url(uploads/cor.jpg) no-repeat; background-size:cover;"></span>
                  <input checked="" name="colors" class="color" value="" type="radio">
                </li>
                <li class="" data-tamanhos="" data-toggle="tooltip" data-placement="top" title="Rosa">
                  <span class="item-color" style="background:#FFC1C1; background-size:cover;"></span>
                  <input checked="" name="colors" class="color" value="" type="radio">
                </li>
              </ul>
            </div>
          </div>
          <div class="passos">
            <div class="numero">
              <span>2</span><i class="fa fa-caret-right"></i>
            </div>
            <div class="titulo">
              Escolha a <strong>quantidade</strong>
            </div>
            <div class="quantidade">
              <div class="pull-left">
                <div class="number input-counter">
                  <span class="minus-btn"></span>
                  <input type="text" value="1" size="5" />
                  <span class="plus-btn"></span>
                </div>
              </div>
              <div class="pull-left">
                <button type="submit" class="btn btn-cart anima btn-style1">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i> Adicionar ao Carrinho
										<!--											<i class="fa fa-spinner fa-pulse fa-3x fa-fw" style="font-size: 14px"></i>-->
									</button>
                <button type="submit" class="btn btn-cart anima btn-style1" onclick="window.location.href='personalizar.php'">
										<i class="fa fa-text-width" aria-hidden="true"></i> Personalizar
										<!--											<i class="fa fa-spinner fa-pulse fa-3x fa-fw" style="font-size: 14px"></i>-->
									</button>
              </div>
            </div>
          </div>
        </div>
        <div class="desconto row">
          <div class="col-xs-12">
            <div style="border: 1px solid #eee">
              <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">Valores de Compra no <strong>Atacado:</strong></h4>
              </div>

              <div class="panel-body" style="padding: 0">
                <div class="col-sm-6" style="">
                  <table style="width: 100%" class="table table-striped">
                    <tr>
                      <td>100 - 200 unidade</td>
                      <td>R$1,20 <small>cada</small></td>
                    </tr>
                    <tr>
                      <td>100 - 200 unidade</td>
                      <td>R$1,20 <small>cada</small></td>
                    </tr>
                    <tr>
                      <td>100 - 200 unidade</td>
                      <td>R$1,20 <small>cada</small></td>
                    </tr>
                    <tr>
                      <td>100 - 200 unidade</td>
                      <td>R$1,20 <small>cada</small></td>
                    </tr>
                  </table>
                </div>
                <div class="col-sm-6" style="">
                  <table style="width: 100%" class="table table-striped">
                    <tr>
                      <td>100 - 200 unidade</td>
                      <td>R$1,20 <small>cada</small></td>
                    </tr>
                    <tr>
                      <td>100 - 200 unidade</td>
                      <td>R$1,20 <small>cada</small></td>
                    </tr>
                    <tr>
                      <td>100 - 200 unidade</td>
                      <td>R$1,20 <small>cada</small></td>
                    </tr>
                    <tr>
                      <td>100 - 200 unidade</td>
                      <td>R$1,20 <small>cada</small></td>
                    </tr>
                  </table>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="social-share clearfix">
          <h5>Compartilhe:</h5>
          <a href="#" class="social"><i class="fa fa-facebook"></i></a>
          <a href="#" class="social"><i class="fa fa-twitter"></i></a>
          <a href="#" class="social"><i class="fa fa-youtube"></i></a>
          <a href="#" class="social"><i class="fa fa-instagram"></i></a>
          <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
          <a href="#" class="social"><i class="fa fa-skype"></i></a>
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-xs-12">
        <div class="desc-produ">
          <ul class="nav nav-tabs" role="tablist">
            <li class="active"><a href="#Tab1" role="tab" data-toggle="tab">Descrição</a></li>
            <li><a href="#Tab3" role="tab" data-toggle="tab">Avaliações</a></li>
          </ul>
          <div class="tab-content nav-stacked">
            <div role="tabpanel" class="tab-pane clearfix active" id="Tab1">
              <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
              <table class="table table-params">
                <tbody>
                  <tr>
                    <td class="text-right" style="width: 30%"><span class="color">Dimensões</span></td>
                    <td>7,3cm (diâmetro boca) X 12,4cm (altura)</td>
                  </tr>
                  <tr>
                    <td class="text-right"><span class="color">Capacidade</span></td>
                    <td>320ml</td>
                  </tr>
                  <tr>
                    <td class="text-right"><span class="color">43 gramas</span></td>
                    <td>Peso</td>
                  </tr>
                  <tr>
                    <td class="text-right"><span class="color">Material</span></td>
                    <td>PS Cristal (acrílico)</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div role="tabpanel" class="tab-pane clearfix" id="Tab3">
              <div id="wrap-avaliacoes">
                <div class="item">
                  <div class="review-content">
                    <div style="float: right;">
                      <div class="rating stars-3"></div>
                    </div>
                    <p class="review-title">Lorem ipsum dolor sit amet</p>
                    <p class="review-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pellentesque finibus lacinia. Duis tempus sodales pellentesque. Donec mollis dolor sit amet viverra mattis. Aliquam pharetra porta est, vel scelerisque erat bibendum at.
                      Pellentesque eu tincidunt turpis. Duis ipsum lorem, dapibus sed tortor vitae. </p>
                    <span class="nome">John Doe</span> <span class="cidade">Maringá - PR</span>
                  </div>
                </div>
                <div class="item">
                  <div class="review-content">
                    <div style="float: right;">
                      <div class="rating stars-3"></div>
                    </div>
                    <p class="review-title">Lorem ipsum dolor sit amet</p>
                    <p class="review-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pellentesque finibus lacinia. Duis tempus sodales pellentesque. Donec mollis dolor sit amet viverra mattis. Aliquam pharetra porta est, vel scelerisque erat bibendum at.
                      Pellentesque eu tincidunt turpis. Duis ipsum lorem, dapibus sed tortor vitae. </p>
                    <span class="nome">John Doe</span> <span class="cidade">Maringá - PR</span>
                  </div>
                </div>
                <div class="item">
                  <div class="review-content">
                    <div style="float: right;">
                      <div class="rating stars-3"></div>
                    </div>
                    <p class="review-title">Lorem ipsum dolor sit amet</p>
                    <p class="review-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pellentesque finibus lacinia. Duis tempus sodales pellentesque. Donec mollis dolor sit amet viverra mattis. Aliquam pharetra porta est, vel scelerisque erat bibendum at.
                      Pellentesque eu tincidunt turpis. Duis ipsum lorem, dapibus sed tortor vitae. </p>
                    <span class="nome">John Doe</span> <span class="cidade">Maringá - PR</span>
                  </div>
                </div>

              </div>
              <div class="clearfix">
                <a class="avaliar" role="button" data-toggle="collapse" href="#collapsereview" aria-expanded="false" aria-controls="collapsereview"><i class="fa fa-pencil"></i> Avaliar Produto </a>
              </div>
              <div class="collapse" id="collapsereview">
                <div class="row">
                  <form class="form-avaliacao">
                    <div class="col-md-6 col-md-offset-3">
                      <div class="form-group clearfix">
                        <label for="titulo" class="col-sm-2 control-label">Sua Classificação:</label>
                        <div class="col-sm-10">
                          <div class="stars">
                            <input type="radio" name="star" class="star-1" id="star-1" />
                            <label class="star-1" for="star-1">1</label>
                            <input type="radio" name="star" class="star-2" id="star-2" />
                            <label class="star-2" for="star-2">2</label>
                            <input type="radio" name="star" class="star-3" id="star-3" />
                            <label class="star-3" for="star-3">3</label>
                            <input type="radio" name="star" class="star-4" id="star-4" />
                            <label class="star-4" for="star-4">4</label>
                            <input type="radio" name="star" class="star-5" id="star-5" />
                            <label class="star-5" for="star-5">5</label>
                            <span></span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group clearfix">
                        <label for="titulo" class="col-sm-2 control-label">Título da Avaliação:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="titulo" placeholder="">
                        </div>
                      </div>
                      <div class="form-group clearfix">
                        <label for="titulo" class="col-sm-2 control-label">Comentários:</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" rows="3"></textarea>
                        </div>
                      </div>
                      <div class="form-group clearfix">
                        <button type="submit" class="btn btn-default">Avaliar</button>
                      </div>

                    </div>
                  </form>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Modal Parcelas -->
<div class="modal fade" id="modalParcelas" tabindex="-1" role="dialog" aria-labelledby="modalParcelasLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalParcelasLabel">Veja Todas As Parcelas</h4>
      </div>
      <div class="modal-body">
        <table class="table table-striped table-condensed">
          <tbody>
            <tr>
              <td>1 x</td>
              <td>de R$ 3.503,00</td>
              <td>sem juros</td>
              <td>total R$ 3.503,00</td>
            </tr>
            <tr>
              <td>2 x</td>
              <td>de R$ 1.751,50</td>
              <td>sem juros</td>
              <td>total R$ 3.503,00</td>
            </tr>
            <tr>
              <td>3 x</td>
              <td>de R$ 1.167,66</td>
              <td>sem juros</td>
              <td>total R$ 3.503,00</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- FIM Modal Parcelas -->


<script>
  $(document).ready(function() {

    // Galeria //
    $('.bigPicture').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.smallPicture'
    });
    $('.smallPicture').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.bigPicture',
      dots: false,
      centerMode: true,
      focusOnSelect: true,
      arrows: true,
      responsive: [{
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      }]
    });

    //Input Counter
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

  });
</script>

<?php include_once 'footer.php'; ?>
