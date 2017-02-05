<?php
$this->Breadcrumbs->add([
    ['title' => 'Home', 'url' => ['controller' => 'home', 'action' => 'index']],
    ['title' => 'Register']
]);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-news-react">
            <div class="card-header">
                Register
            </div>
            <div class="card-block">
                <?php
                echo $this->Form->create($user);
                echo $this->Form->input('username', ['label' => 'Gebruikersnaam']);
                echo $this->Form->input('password', ['label' => 'Wachtwoord']);
                echo $this->Form->button('Verstuur');
                echo $this->Form->end();
                ?>
            </div>
        </div>
        <br>
    </div>
</div>