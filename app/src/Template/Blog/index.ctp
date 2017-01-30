<div class="row">
    <div class="col-md-12">
    <?php foreach($posts as $post) : ?>
        <?php
        $countComments = sizeof($post->blog_posts_comments);
        $datetime = explode(',', $post->created);
        $date = $datetime[0];
        $time = $datetime[1];
        ?>
        <div class="card">
            <div class="card-block">
                <a href="blog/view/<?= $post->id ?>"><h3 class="card-title"><?= $post->title ?></h3></a>
                <p><?= $post->content ?></p>
                <p class="small">
                    <strong><?= $post->author ?></strong> | <?= $date ?> | <?= $time ?> |  <?= $countComments ?> reacties
                </p>
            </div>
        </div>
        <br>
        <?php endforeach; ?>
    </div>
</div>