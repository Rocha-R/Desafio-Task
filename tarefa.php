<?php session_start(); 

      include "banco.php"; 
	  
	  $exibir_tabela = true;//Variável que controla a exibição da tabela
	  //com as tarefas já cadastradas no banco. True(Exibe tabela)
	                                          //False(Esconde tabela) 
?>


	   <?php
	   
	       if (isset($_GET['nome']) && $_GET['nome'] != '') {
			$tarefa = array();

                $tarefa['nome'] = $_GET['nome'];

				 
		     gravar_tarefa($conexao, $tarefa);
		       
			 header('Location: tarefa.php');
			 die();
		}		
		
		$lista_tarefas = buscar_tarefas($conexao);	 
						
		//Este array serve para que o formulario.php sempre tenha uma tarefa
        //para exibir, evitando erros da variável $tarefa. Isto acotence
        //pois o formulario existe para 2 tarefas.

        //A de editar (trazendo os resultados no campo).

        //E a de cadastrar trazendo os campos vazios.		
		$tarefa = array(
                'id'          => 0,
                'nome' 		  => ''
			
				);
				 
		
            			 
			include "template.php";
		
	      
	   ?>
	   
