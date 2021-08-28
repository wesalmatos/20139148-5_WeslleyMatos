
    <div class="featured-page">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Produtos</h1>
            </div>
          </div>
          <div class="col-md-8 col-sm-12">
            <div id="filters" class="button-group">
              <button class="btn btn-primary" data-filter="*">Todos</button>
              <button class="btn btn-primary" data-filter=".new">Novos</button>
              <button class="btn btn-primary" data-filter=".low">Menor Preço</button>
              <button class="btn btn-primary" data-filter=".high">Maior Preço</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="featured container no-gutter">

        <div class="row posts">

            <?php foreach ($produtos as $item): ?>


            <div id="<?=$item['id'];?>" class="item <?=$item['filtro'];?> col-md-4">
              <a href="?pagina=produto&id=<?=$item['id'];?>">
                <div class="featured-item">
                  <img src="images/produto-<?=$item['id'];?>.jpg" alt="<?=$item['titulo'];?>">
                  <h4><?=$item['titulo'];?></h4>
                  <h6>R$ <?=number_format($item['preco'], 2, ',', '.');?></h6>
                </div>
              </a>
            </div>

            <?php endforeach; ?>

         </div>
    </div>