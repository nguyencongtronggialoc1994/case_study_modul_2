<?php


namespace App\model;


class ShowMovieInfo
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function search($key)
    {
        $stmt = $this->database->prepare("SELECT * FROM movies WHERE title LIKE '$key'");
        $stmt->execute();
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $movie = new Movie($item['title'], $item['year_release'], $item['image'], $item['video'], $item['runtime'], $item['IMDB']);
            $movie->setId($item['id']);
            $arr[] = $movie;
        }
        return $arr;
    }

    public function getLimit()
    {
        $stmt = $this->database->prepare("SELECT * FROM movies LIMIT 8");
        $stmt->execute();
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $movie = new Movie($item['title'], $item['year_release'], $item['image'], $item['video'], $item['runtime'], $item['IMDB']);
            $movie->setId($item['id']);
            $arr[] = $movie;
        }
        return $arr;
    }

    public function getByCountry($country)
    {
        $sql = "SELECT movies.title,movies.year_release,movies.image,movies.video,movies.runtime,movies.IMDB FROM movies 
INNER JOIN movie_countrys ON movies.id = movie_countrys.movies_id
INNER JOIN countrys ON movie_countrys.countrys_id=countrys.id
WHERE countrys.name='$country' ";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $movie = new Movie($item['title'], $item['year_release'], $item['image'], $item['video'], $item['runtime'], $item['IMDB']);
            $movie->setId($item['id']);
            $arr[] = $movie;
        }
        return $arr;
    }

    public function getByGenres($genres)
    {
        $sql = "SELECT movies.title,movies.year_release,movies.image,movies.video,movies.runtime,movies.IMDB FROM movies 
INNER JOIN movie_genres ON movies.id = movie_genres.movies_id
INNER JOIN genres ON movie_genres.genres_id=genres.id
WHERE genres.name='$genres' ";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $movie = new Movie($item['title'], $item['year_release'], $item['image'], $item['video'], $item['runtime'], $item['IMDB']);
            $movie->setId($item['id']);
            $arr[] = $movie;
        }
        return $arr;
    }

    public function getByYearRelease($year)
    {
        $sql = "SELECT * FROM movies WHERE year_release=$year";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $movie = new Movie($item['title'], $item['year_release'], $item['image'], $item['video'], $item['runtime'], $item['IMDB']);
            $movie->setId($item['id']);
            $arr[] = $movie;
        }
        return $arr;
    }

    public function getById($id)
    {
        $stmt = $this->database->prepare("SELECT * FROM movies WHERE id = $id");
        $stmt->execute();
        $result = $stmt->fetch();
        $movie = new Movie($result['title'], $result['year_release'], $result['image'], $result['video'], $result['runtime'], $result['IMDB']);
        $movie->setId($id);
        return $movie;
    }

    public function getDirector($id)
    {
        $sql = "SELECT directors.name FROM directors
INNER JOIN movie_directors ON directors.id=movie_directors.directors_id
INNER JOIN movies ON movie_directors.movies_id=movies.id
WHERE movies.id=$id";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }

    public function getGenre($id)
    {
        $sql = "SELECT genres.name FROM genres
INNER JOIN movie_genres ON genres.id=movie_genres.genres_id
INNER JOIN movies ON movie_genres.movies_id=movies.id
WHERE movies.id=$id";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }
    public function getStart($id)
    {
        $sql = "SELECT stars.name FROM stars
INNER JOIN movie_stars ON stars.id=movie_stars.stars_id
INNER JOIN movies ON movie_stars.movies_id=movies.id
WHERE movies.id=$id";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }
}