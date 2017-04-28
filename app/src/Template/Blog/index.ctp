<section class="section--default">
    <div class="row">
        <div class="col-md-12">
            <div class="container">
                <h1>Artikelen</h1>
                <hr>
                <div class="card-columns">
                    <?php foreach ($posts as $post) :
                        $countComments = sizeof($post->blog_posts_comments);
                        $datetime = explode(',', $post->created);
                        $date = $datetime[0];
                        $time = $datetime[1];
                        ?>
                        <div class="card mt-3">
                            <div class="card-block">
                                <h4 class="card-title"><?= $post->title ?></h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <p>
                                    <small class="text-muted">
                                        <strong><?= $post->author ?></strong> | <?= $date ?> | <?= $time ?> | <a href="blog/<?= $post->id ?>#comments"><?= $countComments ?> reacties</a>
                                    </small>
                                </p>
                            </div>
                            <div class="card-button">
                                <a href="blog/<?= $post->id ?>" class="btn-block btn-lg card-link"><h5>Lees meer</h5></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>