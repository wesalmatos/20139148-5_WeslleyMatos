    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="caption">
              <h2><?=$banner[0]['titulo'];?></h2>
              <div class="line-dec"></div>
              <p><?=$banner[0]['texto'];?></p>
              <div class="main-button">
                <a href="?pagina=<?=$banner[0]['link'];?>"><?=$banner[0]['botao'];?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="featured-items">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Produtos em Destaque</h1>
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

    <div class="subscribe-form">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1><?=$news[0]['titulo'];?></h1>
            </div>
          </div>
          <div class="col-md-8 offset-md-2">
            <div class="main-content">
              <p><?=$news[0]['texto'];?></p>
              <div class="container">
                <form id="subscribe" method="post">
                  <div class="row">
                    <div class="col-md-7">
                      <fieldset>
                        <input name="email" type="text" class="form-control" id="email" 
                        onfocus="if(this.value == 'Insira seu e-mail...') { this.value = ''; }" 
                    	onBlur="if(this.value == '') { this.value = 'Insira seu e-mail...';}"
                    	value="Insira seu e-mail..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-5">
                      <fieldset>
                        <button type="submit" id="form-submit" class="button"><?=$news[0]['botao'];?></button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
