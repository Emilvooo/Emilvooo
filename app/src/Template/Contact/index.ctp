<?php
$this->Breadcrumbs->add([
    ['title' => 'Home', 'url' => ['controller' => 'home', 'action' => 'index']],
    ['title' => 'Contact']
])
?>
<div class="row">
    <div class="col-md-12">
        <p><?= $content ?></p>
        <div class="card card-news">
            <div class="card-header" id="comments">
                Conctact formulier
            </div>
            <div class="card-block">
                <?php
                echo $this->Form->create(null, ['url' => '/contact/sendEmail']);
                echo $this->Form->input('name');
                echo $this->Form->input('email');
                echo $this->Form->input('title');
                echo $this->Form->input('message', ['type' => 'textarea']);
                echo $this->Form->button('Verstuur');
                echo $this->Form->end();
                ?>
            </div>
        </div>
    </div>
</div>