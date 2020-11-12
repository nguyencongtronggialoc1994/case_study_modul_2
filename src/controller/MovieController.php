<?php


namespace App\controller;


use App\model\Movie;
use App\model\MovieManagement;

class MovieController
{
    protected $movieManagement;

    public function __construct()
    {
        $this->movieManagement = new MovieManagement();
    }

    public function showMovie()
    {
        $movie = $this->movieManagement->getAllMovie();
        include_once 'src/view/Movie_list.php';
    }

    public function addMovie()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once 'src/view/Movie_add.php';
        } else {
            $title = $_REQUEST['title'];
            $yearRelease = $_REQUEST['yearRelease'];

            $file = $_FILES['img']['tmp_name'];
            $path = 'image/' . $_FILES['img']['name'];
            if (move_uploaded_file($file, $path)) {
                echo 'success';
            } else {
                echo 'fail';
            }
            $image = $path == 'image/' ? 'image/batman2008.jpg' : $path;

            $fileVideo = $_FILES['vid']['tmp_name1'];
            $pathVideo = 'video/' . $_FILES['vid']['name1'];
            if (move_uploaded_file($fileVideo, $pathVideo)) {
                echo 'success';
            } else {
                echo 'fail';
            }
            $video = $pathVideo;

            $runtime = $_REQUEST['runTime'];
            $imdb = $_REQUEST['imdb'];
            $movie = new Movie($title, $yearRelease, $image, $video, $runtime, $imdb);
            $this->movieManagement->addMovie($movie);
            header('location:management.php');
        }
    }

    public function deleteMovie()
    {
            $id = $_GET['id'];
            $this->movieManagement->deleteMovie($id);
            header('location:management.php');
    }

    public function editMovie()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_GET['id'];
            $movie = $this->movieManagement->getById($id);
            include_once 'src/view/Movie_edit.php';
        } else {
            $id = $_GET['id'];
            $title = $_REQUEST['title'];
            $year_release = $_REQUEST['yearRelease'];
            $file = $_FILES['img']['tmp_name'];
            $path = 'image/' . $_FILES['img']['name'];
            if (move_uploaded_file($file, $path)) {
                echo "success";
            } else {
                echo "fail";
            }
            $image = $path;

            $fileVideo = $_FILES['vid']['tmp_name1'];
            $pathVideo = 'video/' . $_FILES['vid']['name1'];
            if (move_uploaded_file($fileVideo, $pathVideo)) {
                echo 'success';
            } else {
                echo 'fail';
            }
            $video = $pathVideo;

            $runtime = $_REQUEST['runTime'];
            $imdb = $_REQUEST['imdb'];
            $movie = new Movie($title, $year_release, $image, $video, $runtime, $imdb);
            $movie->setId($id);
            $this->movieManagement->update($movie);
            header('location:management.php');
        }
    }
}