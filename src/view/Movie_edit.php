<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        h1 {
            text-align: center;
            color: cyan;
            text-shadow: 5px 5px 5px red;
        }

        body {
            background-color: dimgrey;
        }
    </style>

</head>
<body>
<h1>EDIT MOVIE</h1>
<form method="post" enctype="multipart/form-data">
    <table class="table table-dark">
        <tr>
            <td>TITLE</td>
            <td><input type="text" name="title" value="<?php echo $movie->getTitle(); ?>"></td>
        </tr>
        <tr>
            <td>Year Release</td>
            <td><input type="text" name="yearRelease" value="<?php echo $movie->getYearRelease(); ?>"></td>
        </tr>
        <tr>
            <td>Image</td>
            <td><input type="file" name="img"></td>
        </tr>
        <tr>
            <td>Video</td>
            <td><input type="file" accept="video/*" name="vid"></td>
        </tr>
        <tr>
            <td>Runtime</td>
            <td><input type="text" name="runTime" value="<?php echo $movie->getRuntime(); ?>"></td>
        </tr>
        <tr>
            <td>IMDB</td>
            <td><input type="text" name="imdb" value="<?php echo $movie->getImdb(); ?>"></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-success">EDIT</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
