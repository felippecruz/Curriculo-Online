<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Edson Maia">

    <title>Cadastrar</title>

    <link rel="shortcut icon" href="assets/images/diario.png" type="image/x-icon">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    
    <!-- Custom styles for this template -->
    <link href="assets/css/form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      
      <h2>Cadastro</h2>

    </div>

    <div class="row g-5">

      <div class="col-md-7 col-lg-12">

        <form class="needs-validation" novalidate>
          
          <div class="row g-12">

            <div class="col-sm-12">
              <label for="nome" class="form-label">Nome Completo</label>
              <input type="text" class="form-control" id="nome" placeholder="" value="" required>
              <div class="invalid-feedback">
                Digite o seu nome completo.
              </div>
            </div>

            <div class="col-sm-12">
              <label for="nacionalidade" class="form-label">Nacionalidade</label>
              <input type="text" class="form-control" id="nacionalidade" placeholder="" value="Brasileiro(a)" required>
              <div class="invalid-feedback">
                Digite a sua nacionalidade.
              </div>
            </div>

            <div class="col-md-12">
              <label for="estado_civil" class="form-label">Estado Civil</label>
              <select class="form-select" id="estado_civil" required>
                <option value="Solteiro">Solteiro(a)</option>
                <option value="Casado">Casado(a)</option>
                <option value="Viúvo">Viúvo(a)</option>
                <option value="Divorciado">Divorciado(a)</option>
              </select>
              <div class="invalid-feedback">
                Informe o seu Estado Civil.
              </div>
            </div>

            <div class="col-md-12">
              <label for="idade" class="form-label">Idade</label>
              <input type="number" class="form-control" id="idade" min="10" max="120" step="1" required>
              <div class="invalid-feedback">
                Informe a sua idade.
              </div>
            </div>

            <div class="col-12">
              <label for="endereco" class="form-label">Endereço completo</label>
              <input type="text" class="form-control" id="endereco" placeholder="" required>
              <div class="invalid-feedback">
                Digite o seu endereço completo, logradouro, nome, número e bairro.
              </div>
            </div>

            <div class="col-md-12">
              <label for="celular" class="form-label">Celular</label>
              <input type="text" class="form-control" id="celular" placeholder="(99) 99999-9999" required>
              <div class="invalid-feedback">
                Digite o número do seu celular com DDD.
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">E-mail</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="email" placeholder="email@provedor.com" required>
              <div class="invalid-feedback">
                  Digite o seu e-mail.
                </div>
              </div>
            </div>

          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit" name="bt_cadastrar">
            Cadastrar
          </button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2023 UserRev</p>

  </footer>
</div>

    <!-- SCRIPTS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/form-validation.js"></script>

  </body>
</html>
