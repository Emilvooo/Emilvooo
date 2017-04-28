<div class="card card-news mb-3">
    <div class="card-header">
        Reacties
    </div>
    <div class="card-block card-news-comments">
        <?php if (!empty($comments)) : ?>
            <?php foreach($comments as $comment) : ?>
                <?php
                $datetime = explode(',', $comment->created);
                $date = $datetime[0];
                $time = $datetime[1];
                ?>
                <div class="card card-news">
                    <div class="card-block card-block-news-comments">
                        <p class="card-text">
                            <small class="text-muted"><strong><?= $comment->author ?></strong> | <?= $date ?> | <?= $time ?></small>
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