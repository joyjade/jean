<?php snippet('nav') ?>
<div class="content">
  <div class="left-col">
    
    <?php if($image = $page->image()): ?>
      <img class="profile" src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
      <figcaption><?= $image->credit()?></figcaption>
    <?php else: ?>
      &nbsp;
    <?php endif ?>
  </div>
  <div class="right-col">
    <?= $page->text()->kirbytext() ?> 
  </div>
</div>
<?php snippet('footer') ?>