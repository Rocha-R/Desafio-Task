<html>
  <head>
      <meta charset="utf-8" />
      <title>Dashboard de Tasks</title>
	  <link rel="stylesheet" href="tarefa.css" type="text/css" />
  </head>

<body>
       <h1>Dashboard de Tasks</h1>
	   
	   

      <?php include('formulario.php'); ?>
	
	    
         <?php if ($exibir_tabela) : ?>
		
            <?php include('tabela.php'); ?>
			
      <?php endif; ?>
	  
  </body>	   


  
</html>
