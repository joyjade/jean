<?php snippet('nav') ?>
<div class="content">
  <div class="left-col checkers">
    <?php if($image = $page->image()): ?>
      <img class="profile" src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
      <figcaption><?= $image->credit()?></figcaption>
    <?php else: ?>
      &nbsp;
    <?php endif ?>
  </div>
  <div class="right-col">
    <div class="play">
      <div class="jean title">Jean</div>
      <img src="/assets/icons/star_pink.svg" alt="" class="pink">
      <div class="kyoung title">Kyoung</div>
      <div class="frazier title">Frazier</div>
      <img src="/assets/icons/purple_triangle.svg" alt="" class="triangle">
      <img src="/assets/icons/star_green.svg" alt="" class="green">
    </div>
    <?= $page->text()->kirbytext() ?> 

    <?php if($image = $page->image()): ?>
      <div class="mobile-only checkers">
        <img class="profile" src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
        <figcaption><?= $image->credit()?></figcaption>
      </div>
    <?php endif ?>
  </div>
</div>
<?php snippet('footer') ?>