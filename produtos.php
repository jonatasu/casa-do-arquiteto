<?php include_once 'header.php'; ?>
<?php //<link rel='stylesheet prefetch' href='assets/css/awesome-bootstrap-checkbox.css'> ?>
<link rel='stylesheet prefetch' href='assets/js/ranger/ion.rangeSlider.css'>
<link rel='stylesheet prefetch' href='assets/js/ranger/ion.rangeSlider.skinNice.css'>
<link href="assets/css/style.produto.css" rel="stylesheet">

<section id="produtos-lista">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="sidebar">
          <form class="filter-Overlay">
            <div class="filter-Overlay-header visible-xs visible-sm">
              <div class="col-xs-3 col-sm-3">
                <a class="overlay-close" href="#">×</a>
              </div>

              <div class="col-xs-6 col-sm-6">
                <span class="title">filtros</span>
              </div>

              <div class="col-xs-3 col-sm-3">
                <a class="overlay-submit" href="#">Aplicar</a>
              </div>
            </div>
            <div class="filter-Overlay-body">
              <div class="single-widget hidden-xs hidden-sm" id="categorias">
                <h4 class="section-title">Categorias</h4>
                <ul role="tablist" aria-multiselectable="true">
                  <li role="tab" id="c-heading1">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#c-collapse1" aria-expanded="false" aria-controls="c-collapse1">Baldes<i class="fa fa-angle-down"></i></a>
                    <ul id="c-collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="c-heading1">
                      <li><a href="#">Lorem ipsum</a></li>
                      <li><a href="#">Lorem ipsum</a></li>
                    </ul>
                  </li>
                  <li role="tab" id="c-heading2">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#c-collapse2" aria-expanded="false" aria-controls="c-collapse2">Canecas<i class="fa fa-angle-down"></i></a>
                    <ul id="c-collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="c-heading2">
                      <li><a href="#">Lorem ipsum</a></li>
                      <li><a href="#">Lorem ipsum</a></li>
                    </ul>
                  </li>
                  <li role="tab" id="c-heading3">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#c-collapse3" aria-expanded="false" aria-controls="c-collapse3">Copos<i class="fa fa-angle-down"></i></a>
                    <ul id="c-collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="c-heading3">
                      <li><a href="#">Lorem ipsum</a></li>
                      <li><a href="#">Lorem ipsum</a></li>
                    </ul>
                  </li>

                  <li role="tab" id="c-heading4">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#c-collapse4" aria-expanded="false" aria-controls="c-collapse4">Taças<i class="fa fa-angle-down"></i></a>
                    <ul id="c-collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="c-heading4">
                      <li><a href="#">Lorem ipsum</a></li>
                      <li><a href="#">Lorem ipsum</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <ul role="tablist" aria-multiselectable="true" id="sidebarCollapsible">
                <!-- Filtro de Preço -->
                <li role="tab" id="heading1" class="single-widget">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                    <h4 class="section-title">Filtrar por Preço</h4><i class="fa fa-angle-down"></i></a>
                  <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
                    <div class="padding-inner">
                      <div class="range-slider">
                        <input type="text" class="js-range-slider" value="" id="range" />
                      </div>
                    </div>
                  </div>
                </li>
                <!-- Filtro de Tamanho -->
                <li role="tab" id="heading2" class="single-widget">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                    <h4 class="section-title">Filtrar por Tamanho</h4><i class="fa fa-angle-down"></i></a>
                  <div id="collapse2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading2">
                    <div class="padding-inner">
                      <ul class="sizes-widget clearfix">
                        <li class="item-size">
                          <label>175ml</label>
                          <input name="size" class="size" value="" type="radio">
                        </li>
                        <li class="item-size selected">
                          <label>200ml</label>
                          <input name="size" class="size" value="" type="radio">
                        </li>
                        <li class="item-size">
                          <label>350ml</label>
                          <input name="size" class="size" value="" type="radio">
                        </li>
                        <li class="item-size">
                          <label>450ml</label>
                          <input name="size" class="size" value="" type="radio">
                        </li>
                        <li class="item-size">
                          <label>500ml</label>
                          <input name="size" class="size" value="" type="radio">
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <!-- Filtro de Cor -->
                <li role="tab" id="heading3" class="single-widget">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                    <h4 class="section-title">Filtrar por Cor</h4><i class="fa fa-angle-down"></i></a>
                  <div id="collapse3" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading3">
                    <div class="padding-inner">
                      <ul class="colors-list clearfix">
                        <li class="selected" data-tamanhos="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Vermelho">
                          <span class="item-color" style="background: #FF0000; background-size:cover;"></span>
                          <input checked="" name="colors" class="color" value="" type="radio">
                        </li>
                        <li class="" data-tamanhos="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cinza e Preto">
                          <span class="item-color" style="background: yellow no-repeat; background-size:cover;"></span>
                          <input checked="" name="colors" class="color" value="" type="radio">
                        </li>
                        <li class="" data-tamanhos="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Rosa">
                          <span class="item-color" style="background:#FFC1C1; background-size:cover;"></span>
                          <input checked="" name="colors" class="color" value="" type="radio">
                        </li>
                        <li class="" data-tamanhos="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Verde">
                          <span class="item-color" style="background:#42ba38; background-size:cover;"></span>
                          <input checked="" name="colors" class="color" value="" type="radio">
                        </li>
                        <li class="" data-tamanhos="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Azul">
                          <span class="item-color" style="background:#0e0ead; background-size:cover;"></span>
                          <input checked="" name="colors" class="color" value="" type="radio">
                        </li>
                        <li class="" data-tamanhos="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Roxo">
                          <span class="item-color" style="background: #6200ff; background-size:cover;"></span>
                          <input checked="" name="colors" class="color" value="" type="radio">
                        </li>
                        <li class="" data-tamanhos="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cinza">
                          <span class="item-color" style="background: #78777b; background-size:cover;"></span>
                          <input checked="" name="colors" class="color" value="" type="radio">
                        </li>
                        <li class="" data-tamanhos="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pink">
                          <span class="item-color" style="background:#f215d0; background-size:cover;"></span>
                          <input checked="" name="colors" class="color" value="" type="radio">
                        </li>
                        <li class="" data-tamanhos="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amarelo">
                          <span class="item-color" style="background:#ffce00; background-size:cover;"></span>
                          <input checked="" name="colors" class="color" value="" type="radio">
                        </li>
                        <li class="" data-tamanhos="" data-toggle="tooltip" data-placement="top" title="" data-original-title="laranja">
                          <span class="item-color" style="background:#ff7600; background-size:cover;"></span>
                          <input checked="" name="colors" class="color" value="" type="radio">
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
            </div>

            <div class="Filter-Overlay-footer visible-xs">
              <button class="btn-clear">limpar filtros</button>
              <button class="btn-submit">aplicar</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div class="shop-item-filter">
          <div class="col-lg-4 col-md-3 col-sm-4 col-xs-4 clearfix">
            <div class="shop-tab clearfix hidden-xs hidden-sm">
              <ul role="tablist">
                <li><a href="#" id="icon-grid"><i class="fa fa-th"></i></a></li>
                <li><a href="#" id="icon-list"><i class="fa fa-th-list"></i></a></li>
              </ul>
            </div>
            <div class="visible-xs visible-sm">
              <a href="#" class="mobile-filter-btn">Filtrar</a>
            </div>
          </div>
          <div class="col-md-5 col-xs-8 col-sm-8 col-sm-offset-0 col-md-offset-3">
            <div class="filter-by text-right">
              <h4>Ordenar por: </h4>
              <form action="#">
                <div class="select-filter">
                  <select>
											<option value="">Relevantes</option>
											<option value="">Novidades</option>
											<option value="">Mais Baratos</option>
											<option value="">Mais Caros</option>
										</select>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="clearfix produtos grid-item">
          <?php for($h=1; $h<=3;$h++){?>
            <div class="row">
              <?php for($i=1; $i<=4;$i++){?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                  <div class="prod-block">
                    <div class="prod-image">
                      <a href="produto.php"><img src="uploads/produtos/<?=$i?>.jpg" alt="" class="img-responsive"></a>
                      <a href="produto.php" class="btn-cart"><span class="ti-shopping-cart-full"></span> Adicionar ao Carrinho</a>
                    </div>
                    <div class="prod-desc">
                      <a href="produto.php">
                        <span class="text">Lorem ipsum dolor sit amet consectetur adipiscing elit aenean ac imperdiet</span>
                        <span class="price">
                          <span class="old">R$123,45</span>
                          <span class="new"><small>R$ </small>123,45</span>
                          <span class="parc">ou 5X R$123,45</span>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          <?php } ?>
        </div>
        <div class="clearfix pagincacao">
          <div class="text-center ">
            <ul class="pagination">
              <li>
                <a href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<script src='assets/js/ranger/ion.rangeSlider.min.js'></script>
<script>
  function sameHeight() {
    $('.lista-produtos.grid-item').each(function() {
      var highestBox = 0;
      $('.product-item', this).each(function() {
        if ($(this).height() > highestBox) {
          highestBox = $(this).height();
        }
      });
      $('.product-item', this).height(highestBox);
    });
  }

  $(document).ready(function() {
    sameHeight();
    /*Filtro de Preços*/
    $("#range").ionRangeSlider({
      type: "double",
      grid: true,
      min: 0,
      max: 1000,
      from: 200,
      to: 800,
      prefix: "$"
    });
    /* Blocos de Produtos com a mesma altura */
    $('.shop-tab #icon-list').click(function(event) {
      event.preventDefault();
      $('.lista-produtos').removeClass('grid-item');
      $('.lista-produtos').addClass('list-item');
      $('.list-item .product-item').height('100%');
      var highestBox = $('.product-info').outerHeight();
      $('.product-img').height(highestBox);
    });
    $('.shop-tab #icon-grid').click(function(event) {
      event.preventDefault();
      $('.lista-produtos').removeClass('list-item');
      $('.lista-produtos').addClass('grid-item');
      $('.product-img').height('100%');
      sameHeight();
    });
    /*Filtro XS*/
    $('.mobile-filter-btn').click(function(event) {
      $('.sidebar .filter-Overlay').addClass('is-visible');
      $('#sidebarCollapsible .panel-collapse').collapse('hide');
    });

    $('.overlay-close').click(function(event) {
      console.log('teste')
      $('.sidebar .filter-Overlay.is-visible').removeClass('is-visible');
      $('#sidebarCollapsible .panel-collapse').collapse('show');
    });
  });
</script>


<?php include_once 'footer.php'; ?>
