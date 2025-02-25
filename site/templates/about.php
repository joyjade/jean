<?php snippet('nav') ?>
<div class="content">
  <div class="about">
    <div class="photo-col">
      <?php if($image = $page->image()): ?>
        <img class="profile" src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
        <figcaption><?= $image->credit()?></figcaption>
      <?php endif ?>
    </div>
    <div>
      <?= $page->text()->kirbytext() ?> 
    </div>
  </div>
</div>
<?php snippet('footer') ?>