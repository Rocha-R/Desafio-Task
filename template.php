<html>
  <head>
      <meta charset="utf-8" />
      <title>Dashboard de Tasks</title>
	  <link rel="stylesheet" href="tarefa.css" type="text/css" />
  </head>

<body>
       <h1>Dashboard de Tasks</h1>
	   <!--Aqui irá o restante do código -->
	   

      <?php include('formulario.php'); ?>
	  <!--Usando o "include" é inserido o formulario para digitação,
      este que está em outra página.	  -->
	    
         <?php if ($exibir_tabela) : ?>
		 <!--Caso a condição acima seja verdadeira ,
		 será feita a inclusão do arquivo responsável pela tabela com
		 as tarefas ja cadastradas-->
		 
            <?php include('tabela.php'); ?>
			
      <?php endif; //Fechamento do IF usando a estrutura IF/EndIF?>
	  
  </body>	   


  
</html>