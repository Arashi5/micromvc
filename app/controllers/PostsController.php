<?php

namespace app\controllers;

use app\components\DB;

class PostsController extends Controller
{
    public function postsAction() {
        $db = DB::getInstance();
        $stmt = $db->prepare("SELECT * FROM posts");
        $posts = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        $this->render('posts.php', 'Лента', [
            'posts' => $posts,
        ]);
    }
    public function likeAction() {
        $_GET['post_id'];

        header('Content-Type: application/json');
        echo json_encode([
            'like_count' => rand(10, 50),
            'is_like' => (bool)rand(0,1),
        ]);
    }
}