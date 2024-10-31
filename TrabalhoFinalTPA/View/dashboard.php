<!DOCTYPE html>
<html>
<head>
    <?php
    session_start();
    if(!isset($_SESSION['user_id'])) {
        echo "Sem permissão para acesso a página<br>";
        echo '<a href="../index.php">Ir para página inicial</a>';
        exit;
    }
    ?>
    <title>Painel do Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style> </style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="../files/avatar.jpg" alt="Logo" style="width:40px;" class="rounded-pill">
    </a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#">HOME</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">CADASTROS [CRUD]</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="EscolhaGerencia">Gerenciar</a></li>
          <li><a class="dropdown-item" href="EscolhaCadastro">Cadastrar</a></li>
        </ul>
      </li>
    </ul> 
  </div>
</nav>
<div class="container-fluid mt-3">
  <h3>Gerenciamento Hospedagem</h3>
  <p>Este sistema foi criado com fins didáticos.</p>
</div>
    <hr>
    <a href="../Controller/logout.php" class="btn btn-secondary">SAIR</a>
</body>
</html>
