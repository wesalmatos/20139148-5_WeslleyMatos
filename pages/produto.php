<?php
  if (isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET["id"];
  }else {
    return 0;
  }

  foreach ($produtos as $item):
    if($item['id'] == $id):
?>

    <div class="single-product">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1><?=$item['titulo'];?></h1>
            </div>
          </div>
          <div class="col-md-6">
            <div class="product-slider">
              <div class="flexslider">
                <img src="images/produto-<?=$item['id'].'-'.$item['id'];?>.jpg" />
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <h4><?=$item['titulo'];?></h4>
              <h6>R$ <?=number_format($item['preco'], 2, ',', '.');?></h6>
              <p><?=$item['descricao'];?></p>
              <span><?=$item['qtde'];?> no estoque</span>
              <form action="" method="get">
                <label for="quantity">Quantidade:</label>
                <input name="quantity" type="quantity" class="quantity-text" id="quantity" 
                	onfocus="if(this.value == '1') { this.value = ''; }" 
                    onBlur="if(this.value == '') { this.value = '1';}"
                    value="1">
                <input type="submit" class="button" value="Comprar">
              </form>
              <div class="down-content">
                <div class="categories">
                  <h6>Categoria: <span><a href="#"><?=$item['categoria'];?></a></span></h6>
                </div>
                <div class="share">
                  <h6>Share:
                    <span>

                  <?php foreach ($social as $item): ?>

                    <a href="<?=$item['url'];?>" title="<?=$item['nome'];?>" target="_blank"><i class="fa fa-<?=strtolower($item['nome']);?>"></i></a>

                  <?php endforeach; ?>

                    </span>
                  </h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
    endif;
  endforeach;
?>

    <div class="featured-items">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Você Pode Gostar</h1>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel owl-theme">

            <?php foreach ($produtos as $item): ?>

              <a href="?pagina=produto&id=<?=$item['id'];?>">
                <div class="featured-item">
                  <img src="images/<?=$item['slug'];?>.jpg" alt="<?=$item['titulo'];?>">
                  <h4><?=$item['titulo'];?></h4>
                  <h6>R$ <?=number_format($item['preco'], 2, ',', '.');?></h6>
                </div>
              </a>

            <?php endforeach; ?>

            </div>
          </div>
        </div>
      </div>
    </div>