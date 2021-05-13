<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Exercício de Linux</title>
  </head>
  <body>
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="index.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.html">Sobre</a>
      </li>
    </ul>
    <div class="container">
      <table><tr>
        <td>
          <h1>Bem vindo Fulano</h1>
          <p> Este site foi desenvolvido pelo professor Vinicius como exercício de Linux. </p>
          <p> Este site está hospedado em um servidor com IP: <?php echo $_SERVER['SERVER_ADDR']; ?> </p>
          <p> O exercício pode ser encontrado em: https://github.com/viniciusx7/exercicio02 </p>
          <p> Apos fazer o exercício, se tudo estiver funcionando corretamente, você verá a figura do pinguim do linux ao lado, e o link ABOUT estara funcionando corretamente. </p>
        </td>
        <td>
          <img width="180" height="200" src="imagens/pinguim.png">
        </td>
      </tr></table>
      <table class="table table-striped table-sm">
  <thead>
    <tr>
      <th scope="col">Distribuicao</th>
      <th scope="col">Foco Principal</th>
      <th scope="col">Site</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Debian</th>
      <td>Servidores</td>
      <td>www.debian.org</td>
    </tr>
    <tr>
      <th scope="row">CentOS</th>
      <td>Servidores</td>
      <td>www.centos.org</td>
    </tr>
    <tr>
      <th scope="row">Ubuntu Server</th>
      <td>Servidores</td>
      <td>www.ubuntu.com</td>
    </tr>
    <tr>
      <th scope="row">Ubuntu</th>
      <td>PCs/Notebooks</td>
      <td>www.ubuntu.com</td>
    </tr>
    <tr>
      <th scope="row">Mint</th>
      <td>PCs/Notebooks</td>
      <td>www.linuxmint.com</td>
    </tr>
    <tr>
      <th scope="row">Fedora</th>
      <td>PCs/Notebooks</td>
      <td>getfedora.org</td>
    </tr>
  </tbody>
</table>
    </div>
  </body>
</html>
