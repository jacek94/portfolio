<?php snippet('header') ?>

  <main class="main" role="main">
    <?php snippet('menu') ?>
    <!-- Noise reduction -->
    <div id="about" class="tab-content current">
      <p><?php echo $page->about_text()->kirbytext() ?></p>
    </div>
    <div id="work" class="tab-content">
      <?php snippet('projects') ?>
    </div>
    <div id="resume" class="tab-content">
      <p><?php echo $page->resume_text()->kirbytext() ?></p>
    </div>
  </main>

  <?php snippet('footer') ?>
