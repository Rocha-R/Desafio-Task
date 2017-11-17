<table border=1> <!--Pagina responsável por gerar a tabela com os dados cadastrados -->
        <tr>
              <th>Tarefa</th>
              <th>Opções</th>
        </tr>
		
            <?php foreach ($lista_tarefas as $tarefa) : ?>
        <tr>
             <td>
              <?php echo $tarefa['nome']; ?>
             </td>
			 
             <td>
              <a href="editar.php?id=<?php echo $tarefa['id']; ?> ">
               Editar
              </a>
			  
			  <a href="remover.php?id=<?php echo $tarefa['id']; ?>">
			  Remover
			  </a>
			  
             </td>
			 
     </tr>
	 
    <?php endforeach; ?>
	
</table>