<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">DIET नांदेड</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="home.php">मुख्य पान <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown">
                    वर्ग निवडा 
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php getNavTopics() ?>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">

        </ul>
    </div>
</nav>
