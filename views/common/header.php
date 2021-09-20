<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img src="<?php echo URL; ?>public/assets/images/logobvm.png" alt="logo" height="50">
        <!-- utilise la constante URL pour s'assurer qu'on part toujours de la racine -->
        <span class="ms-5 fs-4">Simple MVC BS template header</span>
      </a>

      <?php require_once 'views/common/menu.php'; ?>
    </header>
</div>