<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="<?php echo BASE_URL ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="addUsuarios" method="post">
        <label for="dni">D.N.I.</label>
        <input type="number" name="dni" placeholder="dni" required>
        <label for="nombre">nombre</label>
        <input type="text" name="nombre" placeholder="nombre" required>
        <input type="submit" value="Submit">
    </form>
</body>

</html>