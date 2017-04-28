<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <li class="nav-item">
        <a class="nav-link" href="<?php echo $this->Url->build(["controller" => "Home", "action" => "Index"]);?>">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo $this->Url->build(["controller" => "Blog", "action" => "Index"]);?>">Blog</a>
    </li>
<!--    <li class="nav-item">-->
<!--        <a class="nav-link " href="--><?php //echo $this->Url->build(["controller" => "Pogo", "action" => "Index"]);?><!--">Pogo</a>-->
<!--    </li>-->
    <li class="nav-item">
        <a class="nav-link " href="<?php echo $this->Url->build(["controller" => "Contact", "action" => "Index"]);?>">Contact</a>
    </li>
</ul>
<ul class="nav navbar-nav navbar-right">
    <?php if (is_null($this->request->session()->read('Auth.User.id'))) : ?>
        <li class="nav-item">
<!--            <a class="nav-link" href="--><?php //echo $this->Url->build(["controller" => "Users", "action" => "Login"]);?><!--">Login</a>-->
        </li>
        <li class="nav-item">
<!--            <a class="nav-link" href="--><?php //echo $this->Url->build(["controller" => "Users", "action" => "Register"]);?><!--">Registreer</a>-->
        </li>
    <?php else : ?>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?= $this->request->session()->read('Auth.User.username') ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?php echo $this->Url->build(["controller" => "Profile", "action" => "Index"]);?>">Profiel</a>
                <?php if ($this->request->session()->read('Auth.User.role') === 'admin') : ?>
                    <a class="dropdown-item" href="<?php echo $this->Url->build(["controller" => "Blog", "action" => "createPost"]);?>">Posts toevoegen</a>
                <?php else : ?>

                <?php endif; ?>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo $this->Url->build(["controller" => "Users", "action" => "Logout"]);?>">Logout</a>
        </li>
    <?php endif; ?>
</ul>