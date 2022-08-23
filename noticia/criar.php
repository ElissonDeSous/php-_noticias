<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="criar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <header>
            <h1>Noticias</h1>
        </header>
        <section>
           <form action="registrar_noticia.php" method="post">
            <label>Titulo</label> <br>
             <input type="text" name="titulo" id="titulo"> <br> <br> <br>

              <label>Categoria</label>
              <select name="categoria" id="categoria">
                <option value="Esporte">Categoria de Noticias</option>
                <option value="Esporte">Esporte</option>
                <option value="Politica">Politica</option>
                <option value="Tecnologia">Tecnologia</option>
                <option value="Novela">Novela</option>
                <option value="Filmes">Filmes</option>
              </select> <br> <br> <br>
              
              <label>Descrição</label>
              <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea> <br> <br> <br>
              <div class = "voltar">
               <a href="home.php">Voltar</a>
              </div>

              <div class="botao">
                <input type="submit" value="Criar">
              </div>
            </form>
        </section>
    </main>
</body>
</html>