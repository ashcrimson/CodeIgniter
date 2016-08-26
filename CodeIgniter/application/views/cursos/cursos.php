<h1>hola</h1>
<?
	if($cursos){
	foreach ($cursos->result() as $curso) { ?>
		<ul>
			<li><a href="<?= $curso->idCurso; ?>"><?= $curso->nombreCurso; ?></a></li>
		</ul>
	<? } 
}else {
		echo "<p>Error en la aplicación</p>";
		} 
	?>
</body>
</html>