<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
      <div class="container">
        <a class="navbar-brand" href="#">Fazril</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link <?php echo e(($active == "home") ? 'active' : ''); ?>" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo e(($active == "about") ? 'active' : ''); ?>" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo e(($active == "posts") ? 'active' : ''); ?>" href="/posts">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo e(($active == "categories") ? 'active' : ''); ?>" href="/categories">Categories</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">

            <?php if(auth()->guard()->check()): ?> 
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome back, <?php echo e(auth()->user()->name); ?>

              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> My Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                  </form>
                </li>
              </ul>
            </li>
            <?php else: ?>
            <li class="nav-item">
              <a href="/login" class="nav-link <?php echo e(($active == "login") ? 'active' : ''); ?>"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>
            <?php endif; ?>

          </ul>
        </div>
      </div>
    </nav><?php /**PATH C:\xampp\htdocs\php Laravel\coba-laravel\resources\views/partials/navbar.blade.php ENDPATH**/ ?>