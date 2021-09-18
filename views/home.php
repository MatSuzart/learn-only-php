<h2>Bem vindo !</h2>

<?php foreach($cursos as $curso): ?>
<a href="<?php echo BASE; ?>cursos/entrar/<?php echo $curso['id_curso']; ?>">Iniciar Curso</a>

<?php endforeach; ?>
<footer>
</footer>