<?php


namespace App\model;


class Movie
{
    protected $id;
    protected $title;
    protected $year_release;
    protected $image;
    protected $video;
    protected $runtime;
    protected $imdb;

    public function __construct($_title, $_year_release, $_image, $_video, $_runtime, $_imdb)
    {
        $this->title = $_title;
        $this->year_release = $_year_release;
        $this->image = $_image;
        $this->video = $_video;
        $this->runtime = $_runtime;
        $this->imdb = $_imdb;

    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }


    public function getYearRelease()
    {
        return $this->year_release;
    }

    public function setYearRelease($year_release)
    {
        $this->year_release = $year_release;
    }


    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getVideo()
    {
        return $this->video;
    }

    public function setVideo($video)
    {
        $this->video = $video;
    }

    public function getRuntime()
    {
        return $this->runtime;
    }


    public function setRuntime($runtime)
    {
        $this->runtime = $runtime;
    }

    public function getImdb()
    {
        return $this->imdb;
    }

    public function setImdb($imdb)
    {
        $this->imdb = $imdb;
    }


}