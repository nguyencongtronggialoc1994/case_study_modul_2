<?php


namespace App\model;


class MovieManagement
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAllMovie()
    {
        $stmt = $this->database->prepare("SELECT * FROM movies");
        $stmt->execute();
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $movie = new Movie($item['title'], $item['year_release'], $item['image'],$item['video'], $item['runtime'], $item['IMDB']);
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
            $movie = new Movie($result['title'], $result['year_release'], $result['image'],$result['video'], $result['runtime'], $result['IMDB']);
            $movie->setId($id);
            return $movie;
        }

    public function update($movie)
    {
        $sql = "UPDATE movies SET title=:title,year_release=:year_release,image=:image,video=:video,runtime=:runtime,IMDB=:IMDB WHERE id=:id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':title', $movie->getTitle());
        $stmt->bindParam(':year_release', $movie->getYearRelease());
        $stmt->bindParam(':image', $movie->getImage());
        $stmt->bindParam(':video',$movie->getVideo());
        $stmt->bindParam(':runtime', $movie->getRuntime());
        $stmt->bindParam(':IMDB', $movie->getImdb());
        $stmt->bindParam(':id', $movie->getId());
        $stmt->execute();
    }

    public function addMovie($movie)
    {
        $sql = "INSERT INTO `movies`( `title`, `year_release`, `image`,`video`, `runtime`, `IMDB`) VALUES (:title,:year_release,:image,:video,:runtime,:imdb)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':title', $movie->getTitle());
        $stmt->bindParam(':year_release', $movie->getYearRelease());
        $stmt->bindParam(':image', $movie->getImage());
        $stmt->bindParam(':video',$movie->getVideo());
        $stmt->bindParam(':runtime', $movie->getRuntime());
        $stmt->bindParam(':imdb', $movie->getImdb());
        $stmt->execute();
    }

    public function deleteMovie($id)
    {
        $sql = "DELETE FROM `movies` WHERE id = $id";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
    }
}