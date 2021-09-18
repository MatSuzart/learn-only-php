<div class="">
	<img src="<?php echo BASE; ?>assets/images/telas/<?php echo $curso->getImagem(); ?>" border="0" height="60" />

	<h3><?php echo $curso->getNome(); ?></h3>
	<?php echo $curso->getDescricao(); ?><br/>
</div>
<div class="">
	<?php foreach($modulos as $modulo): ?>
		<div class="modulo"><?php echo utf8_encode($modulo['nome']); ?></div>
		<?php foreach($modulo['aulas'] as $aula): ?>
			<div class="aula">
				<a href="<?php echo BASE; ?>cursos/aula/<?php echo $aula['id']; ?>"><div
				 class="aula"><?php echo $aula['nome']; ?></div></a>
							
			</div>
		<?php endforeach; ?>
	<?php endforeach; ?>
</div>
<div class="curso_right">

</div>
