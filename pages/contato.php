
    <div class="contact-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Contato</h1>
            </div>
          </div>
          <div class="col-md-6">
            <div id="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15012.63443093201!2d-43.9591580119944!3d-19.833240801562923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa68ffd86fe7cdf%3A0x70fe808d23e98eb1!2sPlanalto%2C%20Belo%20Horizonte%20-%20MG!5e0!3m2!1spt-BR!2sbr!4v1630115545136!5m2!1spt-BR!2sbr" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <div class="container">
                <form id="contact" action="" method="post">
                  <div class="row">
                    <div class="col-md-6">
                      <fieldset>
                        <input name="nome" type="text" class="form-control" id="nome" placeholder="Seu nome..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input name="email" type="text" class="form-control" id="email" placeholder="Seu e-mail..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input name="assunto" type="text" class="form-control" id="assunto" placeholder="Assunto..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <textarea name="mensagem" rows="6" class="form-control" id="mensagem" placeholder="Mensagem..." required=""></textarea>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="button">Enviar</button>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <div class="share">
                        <h6>Você também pode no contactar em: 
                          <span>

                  <?php foreach ($social as $item): ?>

                    <a href="<?=$item['url'];?>" title="<?=$item['nome'];?>" target="_blank"><i class="fa fa-<?=strtolower($item['nome']);?>"></i></a>

                  <?php endforeach; ?>


                          </span>
                        </h6>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>