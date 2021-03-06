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
        EMILVOOO || <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('custom.css') ?>
    <link href='//code.cdn.mozilla.net/fonts/fira.css' rel='stylesheet' type='text/css' />
</head>
<body>
    <nav class="navbar navbar-light navbar-toggleable-md" style="background-color: white">
        <div class="container">
        <a class="navbar-brand" href="<?php echo $this->Url->build(["controller" => "Home", "action" => "Index"]); ?>">
            <strong class="header-title">EMILVOOO</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            &#9776;
        </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <?php
                echo $this->element('Header/menu');
                ?>
            </div>
        </div>
    </nav>
    <div class="container mt-3">
        <?= $this->Flash->render() ?>
    </div>
    <?= $this->fetch('content') ?>
    <footer id="footer">
        <div class="container">
            <span>
                &copy; Copyright 2017 - EMILVOOO.nl<br />
            </span>
        </div>
    </footer>
    <?= $this->Html->script('jquery-3.1.1.min.js') ?>
    <?= $this->Html->script('bootstrap.js') ?>
    <?= $this->Html->script('custom.js') ?>
</body>
</html>
