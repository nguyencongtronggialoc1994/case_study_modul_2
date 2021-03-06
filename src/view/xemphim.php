<!DOCTYPE html>
<html class=''>
<head>

    <meta charset='UTF-8'>
    <meta name="robots" content="noindex">
    <link rel="shortcut icon" type="image/x-icon"
          href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico"/>
    <link rel="mask-icon" type=""
          href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg"
          color="#111"/>
    <link rel="canonical"
          href="https://codepen.io/ryanparag/pen/LLrVbo?depth=everything&order=popularity&page=10&q=movie&show_forks=false"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

    <!------ Include the above in your HEAD tag ---------->
    <script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script>
    <script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script>
    <script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script>
    <style class="cp-pen-styles">@import url("https://fonts.googleapis.com/css?family=Arimo:400,700");

        body {
            height: 100%;
            width: 100%;
            background: #e9e9e9;
            font-family: 'Arimo', Arial, sans-serif;
            font-weight: 400;
            font-size: 14px;
            color: #010b26;
        }

        * {
            -webkit-transition: 300ms;
            transition: 300ms;
        }


        ul {
            list-style-type: none;
        }

        h1, h2, h3, h4, h5, p {
            font-weight: 400;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        a:hover {
            color: #6ABCEA;
        }

        .container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            max-width: 100%;
            margin-top: 10vh;
            margin-left: auto;
            margin-right: auto;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .movie-card {
            background: #ffffff;
            box-shadow: 0px 6px 18px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 315px;
            margin: 2em;
            border-radius: 10px;
            display: inline-block;
        }

        .movie-header {
            padding: 0;
            margin: 0;
            height: 367px;
            width: 100%;
            display: block;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }


        .header-icon-container {
            position: relative;
        }

        .header-icon {
            width: 100%;
            height: 367px;
            line-height: 367px;
            text-align: center;
            vertical-align: middle;
            margin: 0 auto;
            color: #ffffff;
            font-size: 54px;
            text-shadow: 0px 0px 20px #6abcea, 0px 5px 20px #6ABCEA;
            opacity: .85;
        }

        .header-icon:hover {
            background: rgba(0, 0, 0, 0.15);
            font-size: 74px;
            text-shadow: 0px 0px 20px #6abcea, 0px 5px 30px #6ABCEA;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            opacity: 1;
        }

        .movie-card:hover {
            -webkit-transform: scale(1.03);
            transform: scale(1.03);
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.08);
        }

        .movie-content {
            padding: 18px 18px 24px 18px;
            margin: 0;
        }

        .movie-content-header, .movie-info {
            display: table;
            width: 100%;
        }

        .movie-title {
            font-size: 24px;
            margin: 0;
            display: table-cell;
        }

        .imax-logo {
            width: 50px;
            height: 15px;
            background: url("https://6a25bbd04bd33b8a843e-9626a8b6c7858057941524bfdad5f5b0.ssl.cf5.rackcdn.com/media_kit/3e27ede823afbf139c57f1c78a03c870.jpg") no-repeat;
            background-size: contain;
            display: table-cell;
            float: right;
            position: relative;
            margin-top: 5px;
        }

        .movie-info {
            margin-top: 1em;
        }

        .info-section {
            display: table-cell;
            text-transform: uppercase;
            text-align: center;
        }

        .info-section:first-of-type {
            text-align: left;
        }

        .info-section:last-of-type {
            text-align: right;
        }

        .info-section label {
            display: block;
            color: rgba(0, 0, 0, 0.5);
            margin-bottom: .5em;
            font-size: 9px;
        }

        .info-section span {
            font-weight: 700;
            font-size: 11px;
        }

        @media screen and (max-width: 500px) {
            .movie-card {
                width: 95%;
                max-width: 95%;
                margin: 1em;
                display: block;
            }

            .container {
                padding: 0;
                margin: 0;
            }
        }
    </style>
</head>
<body>
<nav class="navbar navbar-default navbar-inverse" style="height: 60px">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" style="font-size: 60px;color: #6fef41;text-shadow: 3px 3px 3px red">PHIMHAY.VN</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"
        ">
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Trang chủ <span class="sr-only">(current)</span></a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false">Thể loại <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="index.php?page=hanhdong">Hành động</a></li>
                    <li><a href="index.php?page=hai">Hài</a></li>
                    <li><a href="index.php?page=vientuong">Viễn tưởng</a></li>
                    <li><a href="index.php?page=tamly">Tâm lý</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false">Quốc gia <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="index.php?page=my">Mỹ</a></li>
                    <li><a href="index.php?page=anh">Anh</a></li>
                    <li><a href="index.php?page=trungquoc">Trung Quốc</a></li>
                    <li><a href="index.php?page=hanquoc">Hàn Quốc</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false">Năm sản xuất <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="index.php?page=2020">2020</a></li>
                    <li><a href="index.php?page=2019">2019</a></li>
                    <li><a href="index.php?page=2018">2018</a></li>
                    <li><a href="index.php?page=2017">2017</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="management.php">Quản lý website </a></li>
        </ul>
        <form class="navbar-form navbar-left" method="post" action="index.php?page=search">
            <div class="form-group">
                <input type="text" name="search" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Search</button>
        </form>
    </div>
    </div>
</nav>
<div class="container" style="width: 300px;height: auto">
    <table>
        <tr>
            <td><img src="<?php echo $movies->getImage(); ?>" width="400px" height="auto"></td>
        </tr>
        <tr>
            <td><p>Năm sản xuất : <?php echo $movies->getYearRelease(); ?></p></td>
        </tr>
        <tr>
            <td><p>Thời gian : <?php echo $movies->getRuntime() . "  phút"; ?></p></td>
        </tr>
        <tr>
            <td><p>Đạo diễn : <?php echo $director['name']; ?></p></td>
        </tr>
        <tr>
            <td><p>Diễn viên : <?php echo $start['name']; ?></p></td>
        </tr>
        <tr>
            <td><p>Thể loại : <?php echo $genre['name']; ?></p></td>
        </tr>
        <tr>
            <td><a href="#" class="btn btn-success">Xem Phim</a></td>
        </tr>
        <tr></tr>
    </table>

</div>
<div id="footer" style="background-color: #28312e;height: 100px;color: white;position: relative;bottom: -60px">
    <h3 style="text-align: center;position:relative;top: 40px">PHIMHAY.VN xem phim không giới hạn</h3>
</div>
</body>
</html>


