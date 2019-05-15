<?php
session_start();
if(!isset($_SESSION['ar_movies'])){
   $_SESSION['ar_movies'] = array();
}
?>
<h2>Alquiler de Peliculas</h2>
<table border="1" align="center" width="80%" cellpadding="3">
<thead>
  <tr>
    <td colspan="3"><a href="addMovieFrm.php">Agregar Pelicula</a></td>
  </tr>
  <tr>
      <td>Titulo</td>
      <td>Autor</td>
      <td>Acciones</td>
  </tr>
</thead>
<tbody>
  <?php foreach($_SESSION['ar_movies'] as $movies) :?>
  <tr>
     <td><?php echo $movies['title']?></td>
     <td><?php echo $movies['author']?></td>
     <td> <a href="pessMovieSend.php">Prestar</a> | <a href="delMovieSend.php">Eliminar</a> </td>
  </tr>
  <?php endforeach; ?>
</tbody>  
</table>
