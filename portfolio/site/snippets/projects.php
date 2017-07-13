
<ul class="projects">
  <?php foreach(page('projects')->children()->visible()->limit(6) as $project): ?>
  <li>
    <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $project->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
    </a>
    <?php endif ?>
    <h4><?php echo $project->title()->html() ?></h4>
    <?php echo $project->text()->kirbytext() ?>
  </li>
  <?php endforeach ?>
</ul>
