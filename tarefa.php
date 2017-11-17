<?php session_start(); 

      include "banco.php"; 
	  
	  $exibir_tabela = true;//Variável que controla a exibição da tabela
	  //com as tarefas já cadastradas no banco. True(Exibe tabela)
	                                          //False(Esconde tabela) 
?>


	   <?php
	   
	       if (isset($_GET['nome']) && $_GET['nome'] != '') {//Função isset para verificar se o indice foi definido,
		   //no caso se o indice "nome" existe dentro do Array "$_GET" e
		   //se o indice é diferente de vazio.
		         //$_GET : Variável superGlobais (existem dentro do PHP já)
				 
			$tarefa = array();

                $tarefa['nome'] = $_GET['nome'];

				 
		     gravar_tarefa($conexao, $tarefa);/*A função gravar_tarefa()
			 receberá a conexão que já temos, na variável $conexao, 
			 e também a nossa tarefa, que está no array $tarefa.*/
			 
			 header('Location: tarefa.php');
			 die();//mata a operação de adição, assim logo após um cadastro
			 //no banco de dados, podemos atualizar a página sem que a mesma
			 //cadastre de novo a ultima tarefa.
		}		
		
		$lista_tarefas = buscar_tarefas($conexao);	 
						
		//Este array serve para que o formulario.php sempre tenha uma tarefa
        //para exibir, evitando erros da variável $tarefa. Isto acotence
        //pois decidimos manter o mesmo formulario fazendo 2 tarefas.

        //A de editar (trazendo os resultados no campo).

        //E a de cadastrar trazendo os campos vazios.		
		$tarefa = array(
                'id'          => 0,
                'nome' 		  => ''
			
				);
				 
		
            			 
			include "template.php";//Instrução que adiciona o arquivo 
// em questão e todas as variáveis e funções nele criadas. 

//Podendo ser utilizadas no arquivo que esta utilizando o include.			
	      
	   ?>
	   