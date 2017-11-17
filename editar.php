<?php session_start(); 

      include "banco.php"; 
	  
	  $exibir_tabela = false;



	   
	   
	       if (isset($_GET['nome']) && $_GET['nome'] != '') {//Função isset para verificar se o indice foi definido,
		   //no caso se o indice "nome" existe dentro do Array "$_GET" e
		   //se o indice é diferente de vazio.
		         
				 
			$tarefa = array();
			
			    $tarefa['id'] = $_GET['id'];

                $tarefa['nome'] = $_GET['nome'];
 
				 
		     editar_tarefa($conexao, $tarefa);/*A função editar_tarefa()
			 receberá a conexão que já temos, na variável $conexao, 
			 e também o "array $tarefa" que contem os dados que queremos editar e que está 
			 no banco. 
			 
			 Caso no lugar do parametro $tarefa ela recebesse o $_GET['id'] da
			 tarefa os campos nas hora de edição seriam desconhecidos
			 */
			 header('Location: tarefa.php');//Função que quebra o fluxo
			 //e redireciona para a pagina "tarefas_c.php" usando protocolo
			 //http.
			 die();//Mata o processo do PHP imediatamente (o de edição)
				
		}		
		
		$tarefa = buscar_tarefa($conexao, $_GET['id']);	 
			
				
				 
		
            			 
			include "template.php";//Instrução que adiciona o arquivo 
// em questão e todas as variáveis e funções nele criadas. 

//Podendo ser utilizadas no arquivo que esta utilizando o include.			
	      
	   ?>
	   
