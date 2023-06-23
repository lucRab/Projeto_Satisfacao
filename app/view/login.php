<!DOCTYPE html>
<?php
    session_start();
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cidade do Saber</title>
  <link rel="stylesheet" href="app/view/assets/css/login.css">
</head>

<body>
  <h1 class="gradient">Cidade do Saber</h1>
  <div class="container">
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>

    <div class="content">
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form method="post" action="../controller/teste_jwt.controller.php">
          <h1>Login</h1>
          <p>
            <label for="cpf_login">Seu CPF</label>
            <input id="cpf_login" name="cpf_login" required="required" type="text" placeholder="000.000.000-00" />
          </p>

          <p>
            <label for="senha_login">Sua senha</label>
            <input id="senha_login" name="senha_login" required="required" type="password" placeholder="digite a senha" />
          </p>

          <p>
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" />
            <label for="manterlogado">Manter-me logado</label>
          </p>

          <p>
            <input type="submit" value="Logar" />
          </p>
        
          <p class="link">
            Sem conta?
            <a href="#paracadastro">Cadastre-se</a>
          </p>
        </form>
      </div>
      <script>
        const request = new XMLHttpRequest();
        request.open("GET", "foo.txt", true);
        request.send();

        request.onreadystatechange = () => {
        if (request.readyState === this.HEADERS_RECEIVED) {
        // Get the raw header string
        const headers = request.getAllResponseHeaders();
        const arr = headers.trim().split(/[\r\n]+/);
        // Create a map of header names to values
        const headerMap = {};
        arr.forEach((line) => {
        const parts = line.split(": ");
        const header = parts.shift();
        const value = parts.join(": ");
        headerMap[header] = value;
        });
        }
        };
      </script>
      <?php  echo $value;?>

      <!--FORMULÁRIO DE CADASTRO-->
      <div id="cadastro">
        <form method="post" action="">
          <h1>Cadastro</h1>

          <p>
            <label for="nome_cad">Seu nome</label>
            <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="Digite seu nome" />
          </p>

          <p>
            <label for="cpf_cad">Seu CPF</label>
            <input id="cpf_cad" name="cpf_cad" required="required" type="text" placeholder="000.000.000-00" />
          </p>

          <p>
            <label for="senha_cad">Sua senha</label>
            <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="Digite a senha" />
          </p>

          <p>
            <input type="submit" value="Cadastrar" />
          </p>

          <p class="link">
            Possui conta?
            <a href="#paralogin"> Ir para Login </a>
          </p>
        </form>
      </div>
    </div>
  </div>
</body>