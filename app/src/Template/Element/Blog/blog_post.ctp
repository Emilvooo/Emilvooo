<div class="card card-news card-shadow mb-3">
    <div class="card-block">
        <h3 class="card-title"><?= $post->title ?></h3>
        <p><?= $post->content ?></p>
        <small class="text-muted">
            <?php
            $datetime = explode(',', $post->created);
            $date = $datetime[0];
            $time = $datetime[1];
            ?>
            <strong><?= $post->author ?></strong> | <?= $date ?> | <?= $time ?>
        </small>
    </div>
</div>