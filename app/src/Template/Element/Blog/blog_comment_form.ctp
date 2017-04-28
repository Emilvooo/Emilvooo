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