<?php 

class Post {
    public $likes = 0;       //vai receber números
    public $comments = [];   // vai receber um array de comentários
    public $author;         // vai receber uma string
}

$postagem1 = new Post();
$postagem1->likes = 5;
$postagem1->comments[0] = "Comentário teste";
$postagem1->author = "Walter";

echo "<pre>";
print_r($postagem1);
echo "</pre>";