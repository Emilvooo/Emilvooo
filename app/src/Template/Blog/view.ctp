<?php
$this->Breadcrumbs->add([
    ['title' => 'Home', 'url' => ['controller' => 'home', 'action' => 'index']],
    ['title' => 'Blog', 'url' => ['controller' => 'blog', 'action' => 'index']],
    ['title' => $post->title]
]);
?>
<div class="row">
    <div class="col-md-12">
        <?php
        echo $this->element('Blog/blog_post');
        ?>
    </div>
    <div class="col-md-12">
        <?php
        echo $this->element('Blog/blog_comments', [
            "comments" => $post->blog_posts_comments
        ]);
        ?>
    </div>
    <div class="col-md-12">
        <?php
        echo $this->element('Blog/blog_comment_form');
        ?>
    </div>
</div>
