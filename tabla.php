<?php 
  if(!isset($_SESSION['usuario']))
  {
    echo "<script language='javascript'>window.location='login.php'</script>;";
  }
?>

<?php 
  class Tabla
  {
    public $registros;
    public function mostrarIndex()
    {
    echo "<form action='./sysbd/botones.php' method='POST'>";
    echo '<table>';
     echo '<tr>';
      echo '<th>ID</th>';
      echo '<th>T&iacute;tulo</th>';
      echo '<th>Contenido</th>';
      echo '<th>Autor</th>';
      echo '<th>Fecha</th>';
      echo '<th>Opciones</th> ';
     echo '</tr>';
    foreach ($this->registros as $registro)
    {
    echo '<tr>';
     echo '<td>'.$registro['id'].'</td>';
     echo '<td>'.$registro['titulo'].'</td>';
     echo '<td>'.$registro['contenido'].'</td>';
     echo '<td>'.$registro['autor'].'</td>';
     echo '<td>'.$registro['fecha'].'</td>';
     echo '<td> '."<input type='submit' name='editar' value='Editar' id='editar'>".
                "<input type='submit' name='eliminar' value='Eliminar' id='eliminar'>";
     echo '</td>';
    echo '</tr>';
    }
    echo '</table><br/>';
    echo "<input type='submit' name='nuevo' value='NUEVO' id='nuevo'>";
    echo "</form>";
    }

    private function botonEditar()
    {  
     
      echo "<input type='submit' name='editar' value='Editar' id='editar'>";
    }
    private function botonNuevo()
    {  
      echo "<input type='submit' name='nuevo' value='NUEVO' id='nuevo'>";
    }
    private function botonEliminar()
    {  
      echo "<input type='submit' name='eliminar' value='Eliminar' id='eliminar'>";
    }


  }
?>
