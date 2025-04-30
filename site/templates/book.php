<?php snippet('nav') ?>

<div class="content">
  <div class="left-col checkers">
    <?php if($image = $page->image()): ?>
      <img class="cover" src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
    <?php endif ?>
    <a href="<?= $page->url()?>" class="button">
      <?= $page->link_label() ?>
    </a>
  </div>
  <div class="right-col">  
    <h2><?= $page->title() ?></h2>
    <?= $page->summary()->kirbytext() ?>
    <h3><?= $page->blurb_header() ?></h3>
    <?= $page->blurb()->kirbytext() ?>
  </div>
</div>

<?php snippet('footer') ?>