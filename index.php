<?php

use App\controller\ShowMovieController;

require __DIR__ . '/vendor/autoload.php';
$showMovieController = new ShowMovieController();
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;
switch ($page) {
    case 'search':
        $showMovieController->search();
        break;
    case 'my':
        $showMovieController->country('Mỹ');
        break;
    case 'anh':
        $showMovieController->country('Anh');
        break;
    case 'trungquoc':
        $showMovieController->country('Trung Quốc');
        break;
    case 'hanquoc':
        $showMovieController->country('Hàn Quốc');
        break;
    case 'hanhdong':
        $showMovieController->getByGenres('Hành động');
        break;
    case 'hai':
        $showMovieController->getByGenres('Hài hước');
        break;
    case 'vientuong':
        $showMovieController->getByGenres('Khoa học viễn tưởng');
        break;
    case 'tamly':
        $showMovieController->getByGenres('Tâm lý');
        break;
    case '2020':
        $showMovieController->getByYearRelease('2020');
        break;
    case '2019':
        $showMovieController->getByYearRelease('2019');
        break;
    case '2018':
        $showMovieController->getByYearRelease('2018');
        break;
    case '2017':
        $showMovieController->getByYearRelease('2017');
        break;
    case 'xemphim':
        $showMovieController->watchMovie();
        break;
    default:
        $showMovieController->showMovie();
}