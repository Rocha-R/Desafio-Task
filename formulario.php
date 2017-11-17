<form> <!--Pagina responsável por gerar o formulario -->
     
	    <input type="hidden" name="id" 
		        value="<?php echo $tarefa['id']; ?>" />
        <!--Este campo vem junto com a tarefa referente ao 'id' escolhido
        porém como não precisamos editar o 'id' deixamos o campo como 'hidden'
         invisível.		-->
      <fieldset>
             <legend>Nova Task</legend>
			 
             <label>
                Tarefa:
                  <input type="text" name="nome"
                  value="<?php echo $tarefa['nome']; ?>" />
				  <!--Traz os resultados em cada campo para que
                  estes possam ser editados.				  -->
             </label>
			 <p>

                 <input type="submit" value="
				
				     <?php echo ($tarefa['id'] > 0) ? 'Atualizar' : 'Cadastrar'; ?>
				 " />
			
      </fieldset>
	  
</form>
	  
				
				
				
				
				
				
				
				
				
				
				
				
				