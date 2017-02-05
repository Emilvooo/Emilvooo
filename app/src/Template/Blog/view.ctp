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
    </div>
    <div class="col-md-12">
        <div class="card card-news">
            <div class="card-header">
                Reacties
            </div>
            <div class="card-block card-news-comments">
                <?php if (!empty($post->blog_posts_comments)) : ?>
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
                <?php else : ?>
                    <div class="card card-news">
                        <div class="card-block card-block-news-comments">
                           <p>Er zijn helaas geen reacties! :(</p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <br>
    </div>
    <div class="col-md-12">
        <div class="card card-news-react">
            <div class="card-header" id="comments">
                Reageer
            </div>
            <?php if (!is_null($this->request->session()->read('Auth.User.id'))) : ?>
            <div class="card-block">
                <?php
                echo $this->Form->create(null, ['url' => '/blog/createComment/'.$post->id]);
                echo $this->Form->input('title', ['label' => 'Titel']);
                echo $this->Form->input('content', ['type' => 'textarea', 'label' => 'Bericht']);
                echo $this->Form->button('Verstuur');
                echo $this->Form->end();
                ?>
            </div>
            <br>
            <?php else : ?>
                <div class="card card-news">
                    <div class="card-block card-block-news-comments">
                        <p>Login in om te reageren!</p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
