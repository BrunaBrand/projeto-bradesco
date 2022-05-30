<div class="container-fluid">
		<div class="container">
		 <section>
		   <h2 class="fonte-zero">Conteúdo do site</h2>
	
			 <div class="row">
				 <!--inicio do loop de registro-->
				 <?php do { ?>
				 
			 	<div class="col-xl-12">
					
					<h3><?php //echo($row_rs_curso['idCurso']); ?> <?php echo($row_rs_curso['titulo']); ?></h3>
					
				 
				 </div>
				 
				 <div class="col-xl-8">
					
				 <?php echo($row_rs_curso['descricao']); ?><br><br>
					 
                     <a href="detalhes.php?idCurso=<?php echo($row_rs_curso['idCurso']); ?>">
                     <button type="button" class="btn btn-dark">+Detalhes</button>
                     </a>
                     <br><br>



				 
				 </div>
				 
				  <div class="col-xl-4"> 
					  
					  <a href="imagens/upload/<?php echo($row_rs_curso['img1']); ?>" title="<?php echo($row_rs_curso['titulo']); ?>" data-lightbox="example-1"> <img src="imagens/upload/<?php echo($row_rs_curso['img1Thumb']); ?>" alt="<?php echo($row_rs_curso['titulo']); ?>" title="<?php echo($row_rs_curso['titulo']); ?>" class="img-fluid"></a>

			     </div>
				 <div class="col-xl-12">
				
				 
				 </div>
				 
				 
				 <?php } while ($row_rs_curso = mysqli_fetch_assoc($rs_curso)); ?>

                <!--Fim do loop-->

			 </div>

			
			</section>
		</div>
	</div>