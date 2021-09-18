<div id="<?php $aula_info['id_aula'] ?>" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo BASE; ?>assets/images/telas/<?php echo $aula_info['url'];  ?>" alt="<?php $aula_info['id_aula'] ?>" /> 
    </div>
    
  <a class="carousel-control-prev" href="<?php echo BASE. 'cursos/aula/'.$aula_info['id_aula'] = $aula_info['id_aula']?>" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="<?php echo BASE. 'cursos/aula/'.$aula_info['id_aula'] = $aula_info['id_aula']+1; ?>" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php foreach($modulos as $modulo): ?>
<h2><?php echo utf8_encode($modulo['nome']); ?></h2>
<div class="">
		<?php foreach($modulo['aulas'] as $aula): ?>
			<div class="aula">
				<a href="<?php echo BASE; ?>cursos/aula/<?php echo $aula['id']; ?>"><div
				 class="aula"><?php echo $aula['nome']; ?></div></a>
							
			</div>
		<?php endforeach; ?>
	<?php endforeach; ?>
</div>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
