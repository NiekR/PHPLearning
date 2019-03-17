<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'phpblog';

// Set DSN = Data Source Name
// String with assoc data structure
$dsn = 'mysql:host='. $host .';dbname='. $dbname;

// Create a PDO instance
$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

# PDO QUERY

$stmt = $pdo->query('SELECT * FROM posts');

//    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
//        echo $row['title'] . '<br>';
//    }

//    while ($row = $stmt->fetch(PDO::FETCH_OBJ)){
//        echo $row->title . '<br>';
//    }

# PREPARE STATEMTNS (prepare & execute)

// Fetch multiple posts

// User input
$author = 'author';
$is_published =  true;
$id = 1;


# Positional params
$sql = 'SELECT * FROM posts WHERE author = ?';
$stmt = $pdo->prepare($sql);
$stmt->execute([$author]);
$posts = $stmt->fetchAll();

# Named params
$sql = 'SELECT * FROM posts WHERE author = :author && is_published = :is_published';
$stmt = $pdo->prepare($sql);
$stmt->execute(['author' => $author, 'is_published' => $is_published]);
$posts = $stmt->fetchAll();

var_dump($posts);
foreach($posts as $post){
    echo $post->title . '<br>';


# Fetch single Post
$sql = 'SELECT * FROM posts WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);
$post = $stmt->fetch();
echo $post->body;

# Get Row Count
$stmt = $pdo->prepare('SELECT * FROM posts WHERE author = ?');
$stmt->execute([$author]);
$postCount = $stmt->rowCount();
echo $postCount;

# Inserting Data
$title = 'Post Five';
$body = 'This is post five';
$author = 'Brad';

$sql = 'INSERT INTO posts(body,title,author) VALUES(:body,:title,:author)';
$stmt = $pdo->prepare($sql);
$stmt->execute(['body' => $body,'title' => $title,$author => 'author']);
echo 'Post Added';


# Updating Data
$id = 1;
$body = 'Updated body';

$sql = 'UPDATE posts SET body = :body WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->execute(['body' => $body, 'id' => $id]);
echo 'Post Updated';

# Deleting Data
$id = 1;

$sql = 'Delete FROM posts WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);
echo 'Post Deleted';

# Search Data
$search = '%post%';
$sql = 'SELECT * FROM posts WHERE title LIKE ?';
$stmt = $pdo->prepare($sql);
$stmt->execute([$search]);
$posts = $stmt->fetchAll();

foreach ($posts as $post){
    echo $post->title . '<br>';
}




?>