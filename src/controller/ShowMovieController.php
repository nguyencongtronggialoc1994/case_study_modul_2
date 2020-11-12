<?php


namespace App\controller;


use App\model\ShowMovieInfo;

class ShowMovieController
{
    protected $showMovieInfo;

    public function __construct()
    {
        $this->showMovieInfo = new ShowMovieInfo();
    }

    public function showMovie()
    {
        $movies = $this->showMovieInfo->getLimit();
        include_once 'src/view/ShowMovie.php';
    }

    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] = 'POST') {
            $search = "%" . $_POST['search'] . "%";
            $movies = $this->showMovieInfo->search($search);
            include_once 'src/view/ShowMovie.php';
        }
    }

    public function country($country)
    {
        $movies = $this->showMovieInfo->getByCountry($country);
        include_once 'src/view/ShowMovie.php';
    }

    public function getByGenres($genres)
    {
        $movies = $this->showMovieInfo->getByGenres($genres);
        include_once 'src/view/ShowMovie.php';
    }

    public function getByYearRelease($year)
    {
        $movies = $this->showMovieInfo->getByYearRelease($year);
        include_once 'src/view/ShowMovie.php';
    }

    public function watchMovie()
    {
        $id = $_GET['id'];
        $movies = $this->showMovieInfo->getById($id);
        $director = $this->showMovieInfo->getDirector($id);
        $genre = $this->showMovieInfo->getGenre($id);
        $start = $this->showMovieInfo->getStart($id);
        include_once 'src/view/xemphim.php';
    }
}