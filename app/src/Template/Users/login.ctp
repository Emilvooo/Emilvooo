<?php
$this->Breadcrumbs->add([
    ['title' => 'Home', 'url' => ['controller' => 'home', 'action' => 'index']],
    ['title' => 'Login']
]);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-news-react card-shadow">
            <div class="card-header">
                Login
            </div>
            <div class="card-block">
                <?php
                echo $this->Form->create(null);
                echo $this->Form->input('username', ['label' => 'Gebruikersnaam']);
                echo $this->Form->input('password', ['label' => 'Wachtwoord']);
                echo $this->Form->button('Login');
                echo $this->Form->end();
                ?>
            </div>
        </div>
        <br>
    </div>
</div>