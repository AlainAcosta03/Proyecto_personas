<?php

   session_start();
   session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>historietas</title>
</head>
<body>
    <center>
        <tr>INDICE DE HISTORIETAS</tr>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>A. PATERNO</th>
                    <th>A. MATERNO</th>
                    <th>MATRICULA</th>
                    <th>NACIMIENTO</th>
                    <th>NACIONALIDAD</th>
                    <th>FOTOGRAFÍA</th>
                </tr>
            </thead>
            <!--------------------TITULOS-------------------->
            <tbody>
                <?php
                    include ("open.php");
                    $consulta = "SELECT * FROM estudiantes";
                    $resultado = $conexion->query($consulta);

                    while($row = $resultado->fetch_assoc()){
                ?>
                        <tr>
                            <td>    <?php   echo $row['id'];  ?>  </td>
                            <td>    <?php   echo $row['nombres'];  ?>  </td>
                            <td>    <?php   echo $row['apellido_p'];  ?>  </td>
                            <td>    <?php   echo $row['apellido_m'];  ?>  </td>
                            <td>    <?php   echo $row['matricula'];  ?>  </td>
                            <td>    <?php   echo $row['nacimiento'];  ?>  </td>
                            <td>    <?php   echo $row['nacionalidad'];  ?>  </td>
                            <td>   <img height="100px" src="data:image/jpg;base64,<?php   echo base64_encode($row['foto']);  ?>">   </td>
                        </tr>

                    <?php
                    }
                    ?>
                
            </tbody>
        </table>
    </center>
    
</body>
</html>