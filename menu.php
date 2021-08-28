    <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="./"><img src="images/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            <?php foreach ($menu as $item): ?>

            <li class="nav-item">
              <a class="nav-link" href="?pagina=<?=$item['slug'];?>"><?=$item['nome'];?></a>
            </li>

            <?php endforeach; ?>

          </ul>
        </div>
      </div>
    </nav>