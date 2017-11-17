<?php

$bdServidor = '127.0.0.1';
$bdUsuario = 'systemtask';
$bdSenha = 'taskvoxus'; //Sempre há problema se naõ for criado como localhost
$bdBanco = 'task';

$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if (mysqli_connect_errno($conexao)) {
   echo "Problemas para conectar no banco. Verifique os dados!";
   die();
   }

   
   function buscar_tarefas($conexao)
   {
         $sqlBusca = 'SELECT * FROM task';//Variável "$sqlBusca" que executa o comando de busca no banco.
		 $resultado = mysqli_query($conexao, $sqlBusca);//Aqui a função
		 //"mysqli_query" usa a variável com a conexão e a variável com
		 //o comando de busca para ir ao banco e trazer o resultado.
		 
		 $tarefas = array();//Criação de Array vazio.
		 
		 while ($tarefa = mysqli_fetch_assoc($resultado)) {
		     //O while é executado até
			 //que a função "mysqli_fetch_assoc" tenha passado 
			 //por todas as linhas do resultado, sendo que cada
			 //linha do resultado é armazenada na variável $tarefa
			 //(no singular), para diferenciar do array $tarefas.
			 
			 $tarefas[] = $tarefa;//Cada linha é armazenada no array $tarefas.
			 
			 }
			 return $tarefas;//AQui o return devolve os dados para quem chamou a função.
		}

   
   function	gravar_tarefa($conexao, $tarefa)
    { /*Não deixe de reparar que abrimos a string $sqlGravar na 
	    linha onde ela é declarada e a fechamos na linha
        depois do código SQL. */
		
      $sqlGravar = "
         INSERT INTO task
         (nome)
         VALUES
         (
            '{$tarefa['nome']}'
         )
     ";
	 //A data precisa ser formatada como uma string para o mysql,
	 //por isso está entre aspas.
	 
       /*Não se esqueça de colocar as variáveis PHP dentro das 
	   chaves quando estiver colocando o conteúdo das variáveis
       dentro de outras strings. EX: '{$tarefa['nome']}' */
	   
       mysqli_query($conexao, $sqlGravar);//A função "mysqli_query()"
       //serve para executar código SQl. Seja para devolver dados com
       //o SELECT ou inserir com o INSERT.	   
   }
   
   
   function buscar_tarefa($conexao, $id) {
      $sqlBusca = 'SELECT * FROM task WHERE id = ' . $id;//faz referência
	  //para uma tarefa como única, isto através do campo "id" da tabela.
	  
	  $resultado = mysqli_query($conexao, $sqlBusca);//Aqui a variável
	  //recebe a execução da conexão e a busca da tarefa.
	  
	  return mysqli_fetch_assoc($resultado);//Aqui com a função
	  //"mysqli_fetch_assoc" é precorrido o resultado e devolvido
	  //a linha referente a tarefa encontrada.
	  }
	  
	  
	  
	  
  function editar_tarefa($conexao, $tarefa)
    {
      $sqlEditar = "
	  UPDATE task SET
         nome = '{$tarefa['nome']}'
      WHERE id = {$tarefa['id']}
        ";

     mysqli_query($conexao, $sqlEditar);
    }	 
	
	
	function remover_tarefa($conexao, $id)//Pega a conexão e o 'id'
	//da tarefa que será excluida do banco.
	{
	     $sqlRemover = "DELETE FROM task WHERE id = {$id}";
		 //Diferente do Editar, nesse utilizamos a variável $id
		 //para comparação, pois ela ja está sendo passada como
		 //parametro.
		 
		 mysqli_query($conexao, $sqlRemover);
     }
?>