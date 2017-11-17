<?php 

    include "banco.php";

    remover_tarefa($conexao, $_GET['id']);//A função de remover
	//a tarefa do banco, pela a conexão e o 'id' da tarefa para
	//executar a instrução 'DELETE FROM tarefas WHERE 'id' = ' . $id;

    header('Location: tarefa.php');//Quebra o fluxo após a execução
    //da função de remover e redireciona para a pagina principal.	
	 
	 
	 
	 
	 ?>