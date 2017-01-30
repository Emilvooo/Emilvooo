<div class="row">
    <div class="col-md-12">
    <?php foreach($posts as $post) : ?>
        <?php
            $countComments = sizeof($post->blog_posts_comments);
            $datetime = explode(',', $post->created);
            $date = $datetime[0];
            $time = $datetime[1];
        ?>
        <h3 class="card-title"><?= $post->title ?></h3>
        <p>
            <?= $post->content ?>
        </p>
        <p>
            <a href="blog/view/<?= $post->id ?>" class="btn btn-primary btn-sm card-link">Lees verder ></a>
        </p>
        <p class="small">
            <strong><?= $post->author ?></strong> | <?= $date ?> | <?= $time ?> |  <?= $countComments ?> reacties
        </p>
        <br>
        <?php endforeach; ?>
    </div>
</div>