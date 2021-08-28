
    <div class="about-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Quem Somos</h1>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-image">
              <img src="images/quem-somos.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <p>A Estilo Modas tem no seu DNA o universo jeanswear há cerca de 20 anos. Atenta ao cliente e ao comportamento jovem, a marca traz na criação de seus lançamentos semanais todas as inovações e tendências do mercado de moda jeans.</p> 
              <br>
              <h4>FABRICAÇÃO PRÓPRIA E CONSCIENTE!</h4>
              <p>Cuidamos de todos os detalhes para você, desde a criação voltada para as mais recentes tendências do mundo fashion, na produção com as melhores matérias-primas, aplicadas ao que há de mais moderno em tecnologia. Assim, deixamos de utilizar mais de 6,6 milhões de litros de água e 10 toneladas de produtos químicos na produção mensal do jeans. Geramos mais de 2 mil empregos diretamente, em nossas mais de 120 lojas próprias parque fabril.</p>
              <div class="share">
                <h6>Siga-nos:
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
