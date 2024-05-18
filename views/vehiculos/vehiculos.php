<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $data["titulo"]; ?></title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/propios.css">
  <script src="assets/js/bootstrap.min.js"></script>
</head>

<body>
  <header>
    <div class="row">
      <div class="col-md 12">
          hola mundo
      </div>
    </div>
  </header>
  <div class="container">
    <h2><?php echo $data["titulo"]; ?></h2>
    <a href="index.php?c=vehiculos&a=nuevo" class="btn btn-primary">Agregar</a>
    <br />
    <br />
    <div class="table-responsive">
      <table border="1" width="80%" class="table">
        <thead>
          <tr class="table-primary">
            <th>Placa</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Año</th>
            <th>Color</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
          <!-- <?php foreach ($data["vehiculos"] as $dato) {
									echo "<tr>";
									echo "<td>" . $dato["placa"] . "</td>";
									echo "<td>" . $dato["marca"] . "</td>";
									echo "<td>" . $dato["modelo"] . "</td>";
									echo "<td>" . $dato["anio"] . "</td>";
									echo "<td>" . $dato["color"] . "</td>";
									echo "<td><a href='index.php?c=vehiculos&a=modificar&id=" . $dato["id"] . "' class='btn btn-warning'>Modificar</a></td>";
									echo "<td><a href='index.php?c=vehiculos&a=eliminar&id=" . $dato["id"] . "' class='btn btn-danger'>Eliminar</a></td>";
									echo "</tr>";
								}
								?> -->
          <?php foreach ($data["vehiculos"] as $dato) { ?>
          <tr>
            <td><?php echo "{$dato['placa']}"; ?></td>
            <td><?php echo "{$dato['marca']}"; ?></td>
            <td><?php echo "{$dato['modelo']}"; ?></td>
            <td><?php echo "{$dato['anio']}"; ?></td>
            <td><?php echo "{$dato['color']}"; ?></td>
            <td><a href='index.php?c=vehiculos&a=modificar&id=" . <?php $dato["id"] ?>. "'class='btn btn-warning'></a><?php echo "{$dato['id']}"; ?>
            </td>
            <td><a href='index.php?c=vehiculos&a=eliminar&id=" . <?php $dato["id"] ?>. "'class='btn btn-danger'></a><?php echo "{$dato['id']}"; ?>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>