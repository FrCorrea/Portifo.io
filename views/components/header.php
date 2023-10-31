<?php
  isset($user) ? $data = json_decode($user, true) : $data = null;
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark sticky-top" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand brand-name" href="/">Portfol.io</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php if (isset($data)): ?>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <form method="POST" action="/get-project-type/website">
              <input type="hidden" name="type" id="website" value="website">
              <button type="submit" class="btn btn-dark btn-create" value="website">Website</button>
            </form>
          </li>
          <li class="nav-item">
            <form method="POST" action="/get-project-type/application">
              <input type="hidden" name="type" id="app" value="Application">
              <button type="submit" class="btn btn-dark btn-create" value="app">Applications</button>
            </form>
          </li>
          <li class="nav-item">
            <form method="POST" action="/get-project-type/design">
              <input type="hidden" name="type" id="design" value="design">
              <button type="submit" class="btn btn-dark btn-create" value="design">Designs</button>
            </form>
          </li>
          <li class="nav-item">
            <form method="GET" action="/user-projects">
              <input type="hidden" name="type" id="all" value="all">
              <button type="submit" class="btn btn-dark btn-create" value="all">All</button>
            </form>
          </li>
        </ul>
      </div>
    <?php endif; ?>
  </div>
  <div class="header-profile-container">
    <?php if (isset($data) && is_array($data) && isset($data[0]['name'])): ?>
        <p class="header-profile-name"><?php echo $data[0]['name']; ?></p>
    <?php else: ?>
        <p class="header-profile-name"></p>
    <?php endif; ?>
    <img src="views/assets/images/birb.png" alt="" class="header-profile-img">
</div>

</nav>