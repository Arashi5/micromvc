<?php
/**
 * @var $posts array
 */
?>

<style>
    body {
        background-color: #f4f4f4;
    }
    .text-gray {
        color: #878787;
    }
    .posts {
        width: 650px;
        margin: 0 auto;
    }
    .post {
        background-color: white;
        padding: 20px;
        margin: 10px;
        font-size: 13pt;
    }
    .post .content {
        margin-bottom: 16px;
    }
    .post .count {
        font-weight: bold;
    }
    .post .like, .post .comments {
        padding: 10px;
        border-radius: 4px;

        -webkit-transition: background-color 0.2s ease-in-out;
        transition: background-color 0.2s ease-in-out;
    }
    .post .like .fas.fa-heart {
        color: #ff3a3a;
    }
    .post .like:hover, .post .comments:hover {
        background-color: #e2e4e7;
        cursor: pointer;
    }
</style>

<div class="container">
    <div class="posts row blog-row">
        <?php foreach ($posts as $post) { ?>
        <div class="post col-md-12 col-sm-12 col-xs-12" data-post="<?= $post['id'] ?>">
            <p class="content"><?= $post['content'] ?></p>
            <a class="post_image" href="#">
                <img class="img-responsive center-block" src="<?= $post['image'] ?>">
            </a>
            <div class="blog-content bg-white">
                <hr>
                <p>
                    <span class="like"><i class="<?= $post['like_count'] ? 'fas' : 'far' ?> fa-heart"></i> Нравится <span class="count"><?= $post['like_count'] ?></span></span>
                    <span class="comments"><i class="far fa-comment"></i> Комментариев <span class="count"><?= $post['comment_count'] ?></strong></span>
                    <span class="pull-right text-gray"><?= $post['created_at'] ?></span>
                </p>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
