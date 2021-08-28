<?php
  include('dados/arrays.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Site desenvolvido para o MAPA da matéria de Back End I.">
    <meta name="author" content="Weslley Matos">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <title><?=$topo[0]['titulo'];?></title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>
  <body>
    <!-- Topo Header -->
    <div id="pre-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <span><?=$topo[0]['texto'];?></span>
          </div>
        </div>
      </div>
    </div>

<?php
  include('menu.php');
  $pag = isset($_GET['pagina'])?$_GET["pagina"]:'home';

  switch ($pag) {
    case 'produtos':
      require_once 'pages/'.$pag.'.php';
      break;

    case 'quem-somos':
      require_once 'pages/'.$pag.'.php';
      break;

    case 'contato':
      require_once 'pages/'.$pag.'.php';
      break;

    case 'localizacao':
      require_once 'pages/'.$pag.'.php';
      break;
    
    default:
      require_once './pages/home.php';
      break;
  }
?>

    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="logo">
              <img src="images/logo.png" alt="">
            </div>
          </div>
          <div class="col-md-12">
            <div class="footer-menu">
              <ul>

              <?php foreach ($menu as $item): ?>

                <li><a href="?pagina=<?=$item['slug'];?>"><?=$item['nome'];?></a></li>

              <?php endforeach; ?>

              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="social-icons">
              <ul>

              <?php foreach ($social as $item): ?>

                <li><a href="<?=$item['url'];?>" title="<?=$item['nome'];?>" target="_blank"><i class="fa fa-<?=strtolower($item['nome']);?>"></i></a></li>

              <?php endforeach; ?>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include('sub-footer.php'); ?>