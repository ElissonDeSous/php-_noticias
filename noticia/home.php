<!DOCTYPE html>
<html lang="pt-br">

<?php
$noticias = array();

$arquivo = fopen('arquivo.n','r');
   while(!feof($arquivo))
   {
          $registro = fgets($arquivo);
          $noticias[] = $registro;
   } 
 fclose($arquivo);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <header>
            <h1>Noticias</h1>
            <div id="criar_noticia">
                <a href="criar.php">Criar</a> <br> <br> <br>
            </div>
        </header>

        <section>
            
               <h2>Noticias</h2>
           
                <?php foreach($noticias as $news){ ?>
                    <?php
                      $noticia_dados = explode('/',$news);
                      if(count($noticia_dados) < 3)
                      {
                           continue;
                      }
                        
                    ?>
            <div id = "blocos">
                  <div id = "noticias">
                 <h3 class="titulo"><?=$noticia_dados[0]?></h3>
                 <h4 class = "categoria"><?=$noticia_dados[1]?></h4>
                 <p class ="descricao"><?=$noticia_dados[2]?>  
               </div>
          </div>
               <?php } ?>
        </section>
       
    </main>
</body>
</html>