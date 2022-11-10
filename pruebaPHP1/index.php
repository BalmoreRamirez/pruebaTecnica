<?php include "./controller.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Prueba</title>
</head>

<body>

<div class="container text-center my-4">
    <div class="card">
        <div class="card-body">
            Lista de productos
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col">
            <?php if (mysqli_num_rows($result)) { ?>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">product_code</th>
                            <th scope="col">product_name</th>
                            <th scope="col">standard_cost</th>

                            <th scope="col">list_price</th>
                            <th scope="col">reorder_level</th>
                            <th scope="col">target_level</th>

                            <th scope="col">quantity_per_unit</th>
                            <th scope="col">minimum_reorder_quantity</th>
                            <th scope="col">category</th>


                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 0;
                        while ($rows = mysqli_fetch_assoc($result)) {
                            $i++;
                            ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?= $rows['product_code'] ?></td>
                                <td><?= $rows['product_name'] ?></td>
                                <td><?= $rows['standard_cost'] ?></td>

                                <td><?= $rows['list_price'] ?></td>
                                <td><?= $rows['reorder_level'] ?></td>
                                <td><?= $rows['target_level'] ?></td>

                                <td><?= $rows['quantity_per_unit'] ?></td>
                                <td><?= $rows['minimum_reorder_quantity'] ?></td>
                                <td><?= $rows['category'] ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>

                </div>
            <?php } ?>

        </div>
    </div>
</div>
</body>

</html>