<form> <!--Pagina responsável por gerar o formulario -->
     
	    <input type="hidden" name="id" 
		        value="<?php echo $tarefa['id']; ?>" />
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
	  
				
				
				
				
				
				
				
				
				
				
				
				
				
