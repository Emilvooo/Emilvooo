<?php foreach($posts as $post) :
    $countComments = sizeof($post->blog_posts_comments);
    $datetime = explode(',', $post->created);
    $date = $datetime[0];
    $time = $datetime[1];
    ?>
    <div class="col-md-4">
        <div class="card card-news card-shadow">
            <img class="card-img-top" src="http://placehold.it/350x150" alt="Card image cap">
            <div class="card-block card-block-news">
                <h3 class="card-title"><?= $post->title ?></h3>
                <p class="card-text">
                    Donec at massa et nunc viverra feugiat. In finibus risus neque, eget interdum lectus porta vel.
                </p>
                <p>
                    <a href="blog/<?= $post->id ?>" class="btn btn-primary btn-sm card-link">Lees verder</a>
                </p>
                <small class="text-muted">
                    <strong><?= $post->author ?></strong> | <?= $date ?> | <?= $time ?> | <a href="blog/<?= $post->id ?>#comments"><?= $countComments ?> reacties</a>
                </small>
            </div>
        </div>
    </div>
<?php endforeach; ?>