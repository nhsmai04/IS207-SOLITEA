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
    include_once('./system/libraries/Database.php');
    include_once('./system/libraries/DModel.php');

    $url = isset($_GET['url']) ? $_GET['url'] : NULL;

    if ($url != NULL) {
        $url = rtrim($url, '/');
        $url = explode('/', filter_var($url, FILTER_SANITIZE_URL));
    } else {
        unset($url);
    }



    if (isset($url[0])) {
        $controllerFile = 'app/controllers/' . $url[0] . '.php';
        if (file_exists($controllerFile)) {
            include_once($controllerFile);
            if (class_exists($url[0])) {
                $index = new $url[0]();
                if (isset($url[2]) && method_exists($index, $url[1])) {
                    $index->{$url[1]}($url[2]);
                } elseif (isset($url[1]) && method_exists($index, $url[1])) {
                    $index->{$url[1]}();
                } else {
                    die('Method not found.');
                }
            } else {
                die('Controller class not found.');
            }
        } else {
            die('Controller file not found.');
        }
    } else {
        include_once('./app/controllers/index.php');
        if (class_exists('index')) {
            $index = new index();
            $index->homepage();
        } else {
            die('Default controller class "index" not found.');
        }
    }
    ?>
</body>

</html>