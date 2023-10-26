<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark sticky-top" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand brand-name" href="/">Portfol.io</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <form method="POST" action="/Portifo.io/controllers/ShowProjectsController.php">
            <input type="hidden" name="type" id="website" value="website">
            <button type="submit" class="btn btn-dark btn-create" value="website">Website</button>
          </form>
        </li>
        <li class="nav-item">
          <form method="POST" action="/Portifo.io/controllers/ShowProjectsController.php">
            <input type="hidden" name="type" id="app" value="app">
            <button type="submit" class="btn btn-dark btn-create" value="app">Applications</button>
          </form>
        </li>
        <li class="nav-item">
          <form method="POST" action="/Portifo.io/controllers/ShowProjectsController.php">
            <input type="hidden" name="type" id="design" value="design">
            <button type="submit" class="btn btn-dark btn-create" value="design">Designs</button>
          </form>
        </li>
      </ul>
    </div>
  </div>
  <div class="header-profile-container">
    <p class="header-profile-name"><?php echo $_SESSION['user_name'] ?? '' ?></p>
    <img src="../assets/birb.png" alt="" class="header-profile-img">
  </div>
</nav>