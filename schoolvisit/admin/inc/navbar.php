<nav class="navbar navbar-expand-lg navbar-dark orange darken-1 mt-2">
  <a class="navbar-brand" href="index.php">DIECPD NANDED</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar5">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbar5">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        <a class="nav-link" href="index.php"><i class="fa fa-home"></i> Home</a>
      </li>
        
        <li class="nav-item">
        <a class="nav-link" href="viewSchool.php"><i class="fa fa-camera"></i> View School</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="schoollist.php"><i class="fa fa-star"></i> School List</a>
      </li>
        
        
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown">
             <i class="fa  fa-book"></i>  Create Masters
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="addUser.php">Add User</a>
            <a class="dropdown-item" href="addschool.php">Add Schools</a>
            
            <div class="dropdown-divider"></div>
            
          </div>
        </li>
        
        
        
   </ul>
    <ul class="navbar-nav ml-auto ">
      <li class="nav-item">
        <a class="nav-link" href="logout.php"><?php echo $name ; ?></a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="logout.php"><i class="fa fa-home"></i> Log Out</a>
      </li>
    </ul>
  </div>
</nav>