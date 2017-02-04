<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('custom.css') ?>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-toggleable-md" style="background-color: #374046">
        <div class="container">
        <a class="navbar-brand" href="<?php echo $this->Url->build(["controller" => "Home", "action" => "Index"]);?>"><strong>EMILVOOO</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($this->fetch('title') == 'Home') ? 'active' : ''; ?>" href="<?php echo $this->Url->build(["controller" => "Home", "action" => "Index"]);?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($this->fetch('title') == 'Blog') ? 'active' : ''; ?>" href="<?php echo $this->Url->build(["controller" => "Blog", "action" => "Index"]);?>">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($this->fetch('title') == 'Contact') ? 'active' : ''; ?>" href="<?php echo $this->Url->build(["controller" => "Contact", "action" => "Index"]);?>">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?= $this->Breadcrumbs->render(); ?>
    <div class="container">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
    <?= $this->Html->script('jquery-3.1.1.min.js') ?>
    <?= $this->Html->script('bootstrap.js') ?>
    <?= $this->Html->script('custom.js') ?>
</body>
</html>
