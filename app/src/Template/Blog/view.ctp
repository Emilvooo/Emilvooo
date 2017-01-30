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
                <?= $this->Form->create('', ['class' => 'form-horizontal', 'url' => '/blog/createComment/'.$post->id]); ?>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="title">Title</label>
                    <div class="col-md-6">
                        <?php echo $this->Form->input('title', ['type' => 'text', 'id' => 'title', 'placeholder' => '', 'class' => 'form-control ', 'div' => false, 'label' => false, 'required']); ?>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="text">Content</label>
                    <div class="col-md-6">
                        <?php echo $this->Form->input('content', ['type' => 'textarea', 'id' => 'text', 'placeholder' => '', 'class' => 'form-control ', 'div' => false, 'label' => false, 'required']); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12">
                        <?= $this->Form->button('Opslaan', ['class' => 'btn btn-primary']); ?>
                    </div>
                </div>
                <?= $this->Form->end(); ?>
            </div>
        </div>
    </div>
</div>
