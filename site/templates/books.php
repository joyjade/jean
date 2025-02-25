<?php snippet('nav') ?>
<div class="content">
  <?php foreach($page -> children() -> listed() as $book): ?>
    <div class="book">
      <div class="photo-col">
        <?php if($image = $book->image()): ?>
          <img class="cover" src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
        <?php endif ?>
        <a href="<?= $book->url()?>" class="button">
          <?= $book->link_label() ?>
        </a>
      </div>
      <div>
        <h2><?= $book->title() ?></h2>
        <?= $book->summary()->kirbytext() ?>
        <h3><?= $book->blurb_header() ?></h3>
        <?= $book->blurb()->kirbytext() ?>
      </div>
    </div>
  <?php endforeach ?>
</div>
<?php snippet('footer') ?>