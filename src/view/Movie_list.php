<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #31443f;
        }

        h1 {
            color: #d5e3cb;
            text-align: center;
            text-shadow: 5px 5px 5px yellow;
        }
    </style>
</head>
<body>
<h1>Movie Management</h1>
<a href="management.php?page=add" class="btn btn-warning">ADD NEW FILM</a>
<table class="table table-dark table-striped" style="width: 100%">
    <tr style="background-color: white;color: #28312e">
        <td>STT</td>
        <td>Movie Name</td>
        <td>Year Release</td>
        <td>Image</td>
        <td>Video</td>
        <td>Runtime</td>
        <td>IMDB</td>
        <td>Action</td>
    </tr>
    <?php if (empty($movie)): ?>
        <tr>NO DATA</tr>
    <?php else: ?>
        <?php foreach ($movie as $key => $value): ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $value->getTitle() ?></td>
                <td><?php echo $value->getYearRelease() ?></td>
                <td><img src="<?php echo $value->getImage() ?>" width="100px" height="150px"></td>
                <td>
                    <video width="150px" height="70px" controls>
                        <source src="<?php echo $value->getVideo() ?>" type="video/mp4">
                    </video>
                </td>
                <td><?php echo $value->getRuntime() ?></td>
                <td><?php echo $value->getImdb() ?></td>
                <td>
                    <a onclick="return confirm('Bạn có muốn xóa phim này không')"  href="management.php?page=delete&id=<?php echo $value->getId(); ?>"
                       class="btn btn-danger">DELETE</a>
                    <a href="management.php?page=edit&id=<?php echo $value->getId(); ?>"
                       class="btn btn-success">EDIT</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>
</body>
</html>
