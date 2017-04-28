<?php
$this->Breadcrumbs->add([
    ['title' => 'Home', 'url' => ['controller' => 'home', 'action' => 'index']],
    ['title' => 'Register']
]);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-news-react card-shadow">
            <div class="card-header">
                Registreer
            </div>
            <div class="card-block">
                <?php
                echo $this->Form->create($user);
                echo $this->Form->input('firstname', ['label' => 'Voornaam']);
                echo $this->Form->input('surname', ['label' => 'Achternaam']);
                echo $this->Form->input('email', ['label' => 'Email']);
                echo $this->Form->input('username', ['label' => 'Gebruikersnaam']);
                echo $this->Form->input('password', ['label' => 'Wachtwoord']);
                echo $this->Form->button('Registreer');
                echo $this->Form->end();
                ?>
            </div>
        </div>
        <br>
    </div>
</div>