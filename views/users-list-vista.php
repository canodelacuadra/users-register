<div class="container">

    <table class="table table-striped align-items-center">
        <caption>Listado de Usuarios</caption>
        <thead>
            <tr>
                <th scope="col">Usuario</th>
                <th scope="col">Email</th>
                <th scope="col">contraseña</th>
                <th scope="col">Nivel Acceso</th>
                <th scope="col">Fecha de alta</th>
            </tr>
        </thead>


        <tbody>

            <?php for ($i = 0; $i < count($filas); $i++) { ?>

                <tr>
                    <th scope="row"><?php echo $filas[$i]['user_name']; ?></th>
                    <td><?php echo $filas[$i]['user_email']; ?></td>
                    <td><?php echo $filas[$i]['user_password']; ?></td>
                    <td><?php echo $filas[$i]['user_state']; ?></td>
                    <td><?php echo $filas[$i]['user_time_created']; ?></td>
                </tr>


            <?php } ?>



        </tbody>
    </table>
</div>