<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/starter-template/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Starter Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top bg-black">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand text-white" href="#">Project name</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="starter-template" style="padding-top: 100px;">
            <?= $content; ?>
        </div>
    </div><!-- /.container -->
</body>

</html>