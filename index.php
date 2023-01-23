<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Exportar Excel - PHP</title>
</head>
<body>
    <nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand">Expo <b>Excel</b></a>
		</div>
	</nav>

    <div class="container">
        <h3 class="text text-center">Exportar tablas MySQL a Excel con PHP</h3>
        <hr style="border-top:4px solid #ccc;"/><br/><br/>

        <div class="row">
            <div class="col-md-4">
                <form action="save.php" method="POST">
                        <label class="form-label text-bold">Nombre</label>
                        <input type="text" class="form-control" name="name" required="required"/><br/>
                    
                        <label class="form-label">Apellidos</label>
                        <input type="text" class="form-control" name="lastname" required="required"/><br/>
                    
                        <label class="form-label">Telefono</label>
                        <input type="text" class="form-control" name="tel" required="required"/><br/>
                    
                        <label class="form-label">Dirección</label>
                        <input type="text" class="form-control" name="address" required="required"/><br/>
                    
                    <center><button name="save" class="form-control btn btn-primary">Guardar</button></center><br/>
                </form>
            </div>

            <div class="col-md-1"></div>

            <div class="col-md-7">
                <form method="POST" action="create_excel.php">
                    <button class="btn btn-success pull-right" name="export">Exportar a Excel</button>
                </form><br/>
                
                <table class="table table-bordered">
                    <thead class="alert-info">
                        <tr class="table-dark">
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Telefono</th>
                            <th>Dirección</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require 'conn.php';
                            $query = mysqli_query($conn, "SELECT * FROM clients");
                            while($fetch = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td><?php echo $fetch['id']?></td>
                            <td><?php echo $fetch['name']?></td>
                            <td><?php echo $fetch['lastname']?></td>
                            <td><?php echo $fetch['tel']?></td>
                            <td><?php echo $fetch['address']?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>