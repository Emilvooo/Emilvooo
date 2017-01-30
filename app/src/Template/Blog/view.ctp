<?php
$datetime = explode(',', $post->created);
$date = $datetime[0];
$time = $datetime[1];
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-block">
                <h3 class="card-title"><?= $post->title ?></h3>
                <p><?= $post->content ?></p>
                <p class="small">
                    <strong><?= $post->author ?></strong> | <?= $date ?> | <?= $time ?>
                </p>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-block">
                <h4 class="comments-heading">Comments</h4> <br>
                <?php foreach($post->blog_posts_comments as $comment) : ?>
                    <div class="card">
                        <div class="card-block">
                            <p class="card-text">
                                <?= $comment->content ?>
                            </p>
                            <p class="small">
                                <strong><?= $comment->author ?></strong> | <?= $date ?> | <?= $time ?>
                            </p>
                        </div>
                    </div>
                    <br>
                <?php endforeach ?>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-block">
                <h4>Comment toevoegen</h4>
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
