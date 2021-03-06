<nav class="navbar navbar-expand-lg navbar-light bg-light p-2">
  	<a class="navbar-brand" href="#">
  		<img src="<?=IMAGES?>/logo.png" class="" style="width:50px;">
  		My School
	</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link active" href="<?=ROOT?>">DASHBOARD</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=ROOT?>/users">USERS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=ROOT?>/classes">CLASSES</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="<?=ROOT?>/tests">TESTS</a>
      </li>
    </ul>
    
    <ul class="navbar-nav" style="float:right">
    <li class="nav-item dropdown dropdown-menu-end" style="float:right;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          USER
        </a>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?=ROOT?>/profile">Profile</a>
          <a class="dropdown-item" href="<?=ROOT?>">Dashboard</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?=ROOT?>/logout">Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>