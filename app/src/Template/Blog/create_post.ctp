<?php
$this->Breadcrumbs->add([
    ['title' => 'Home', 'url' => ['controller' => 'home', 'action' => 'index']],
    ['title' => 'Blog', 'url' => ['controller' => 'blog', 'action' => 'index']],
    ['title' => 'Toevoegen']
]);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-news-react">
            <div class="card-header">
                Toevoegen
            </div>
            <div class="card-block">
                <?php
                echo $this->Form->create(null, ['url' => '/blog/createPost']);
                echo $this->Form->input('title', ['label' => 'Titel']);
                echo $this->Form->input('content', ['type' => 'textarea', 'label' => 'Bericht']);
                echo $this->Form->button('Verstuur');
                echo $this->Form->end();
                ?>
            </div>
        </div>
        <br>
    </div>
</div>