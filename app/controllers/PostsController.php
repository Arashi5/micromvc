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
}