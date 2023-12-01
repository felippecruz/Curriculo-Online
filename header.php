<header data-bs-theme="dark">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Bem Vindo(a)</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="perfil.php">Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="formacoes.php">Formações</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="cursos.php" aria-disabled="true">Cursos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="curriculo.php" aria-disabled="true">Curriculo</a>
          </li>
        </ul>
        <!----form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"------>
          <div class="dados-usuario"> <?=$_SESSION['email']; ?> </div>
          <a href="acoes/logout.php"><button class="btn btn-outline-danger active" type="submit">Sair</button></a>
        <!---/form---->
      </div>
    </div>
  </nav>
</header>