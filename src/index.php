<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once('system/libraries/DController.php');
    include_once('./system/libraries/Load.php');
    $url = isset($_GET['url']) ? $_GET('url') : NULL;


    if ($url != NULL) {
        $url = rtrim($url, '/');
        $url = explode('/', $url);
    } else {
        unset($url);
    }


    if (isset($url[0])) {
        include_once('app/controllers/' . $url[0] . '.php');
        $index = new $url[0]();
        if (isset($url[2])) {
            echo "Co tham so dau vao";
        } else {
            echo "Khong co tham so dau vao";
        }
    } else {
        include_once('./app/controllers/index.php');
        $index = new index();
        $index->homepage();
    }






    ?>
</body>

</html>