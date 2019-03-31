<?php

    class Post extends Dbh
    {
        public function getAllPosts(){
            $stmt = $this->connect()->query("SELECT * FROM posts");
            while ($row = $stmt->fetch()) {
                $uid = $row['title'];
                return $uid;
            }
        }

        public function getPostsWithCountCheck(){
            $id = 2;
            $title = "Post two";

            $stmt = $this->connect()->prepare("SELECT * FROM posts WHERE id=? and title=?");
            $stmt->execute([$id,$title]);

            if ($stmt->rowCount()) {
                while ($row = $stmt->fetch()) {
                    return $row['title'];
                }
            }

        }
    }


?>