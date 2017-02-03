<?php
$this->Breadcrumbs->add([
    ['title' => 'Home', 'url' => ['controller' => 'home', 'action' => 'index']],
    ['title' => 'Contact']
])
?>
<div class="row">
    <div class="col-md-12">
        <p><?= $content ?></p>
    </div>
</div>