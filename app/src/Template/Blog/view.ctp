<?php
$this->Breadcrumbs->add([
    ['title' => 'Home', 'url' => ['controller' => 'home', 'action' => 'index']],
    ['title' => 'Blog', 'url' => ['controller' => 'blog', 'action' => 'index']],
    ['title' => $post->title]
]);
?>
<div class="row">
    <div class="col-md-12">
        <h3 class="card-title"><?= $post->title ?></h3>
        <p><?= $post->content ?></p>
        <p class="small">
            <?php
            $datetime = explode(',', $post->created);
            $date = $datetime[0];
            $time = $datetime[1];
            ?>
            <strong><?= $post->author ?></strong> | <?= $date ?> | <?= $time ?>
        </p>
        <br>
        <div class="card card-news">
            <div class="card-header">
                Reacties
            </div>
            <div class="card-block card-news-comments">
                <?php foreach($post->blog_posts_comments as $comment) : ?>
                    <?php
                    $datetime = explode(',', $comment->created);
                    $date = $datetime[0];
                    $time = $datetime[1];
                    ?>
                    <div class="card card-news">
                        <div class="card-block card-block-news-comments">
                            <p class="small">
                                <strong><?= $comment->author ?></strong> | <?= $date ?> | <?= $time ?>
                            </p>
                            <p class="card-text">
                                <?= $comment->content ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <br>
        <div class="card card-news">
            <div class="card-header" id="comments">
                Reageer
            </div>
            <div class="card-block">
                <?php
                echo $this->Form->create(null, ['url' => '/blog/createComment/'.$post->id]);
                echo $this->Form->input('title');
                echo $this->Form->input('content', ['type' => 'textarea']);
                echo $this->Form->button('Opslaan');
                echo $this->Form->end();
                ?>
            </div>
        </div>
    </div>
</div>
