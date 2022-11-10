<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://jsonplaceholder.typicode.com/albums');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$res = curl_exec($ch);
$data = json_decode($res, TRUE);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container text-center">
    <div class="row my-4">
        <div class="col">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">IdUser</th>
                    <th scope="col">IdAlbums</th>
                    <th scope="col">Title</th>
                </tr>
                </thead>
                <tbody>

                <?php
                foreach ($data as $item) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $item['userId']; ?></th>
                        <td><?php echo $item['id']; ?></td>
                        <td> <?php echo $item['title']; ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


</body>
</html>
