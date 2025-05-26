<?php snippet('nav') ?>
<div class="content contact">
  <div class="left-col checkers">
  <div class="msg">
    <?= $page->parent()->inquiry()->kirbytext() ?>
  </div>
  </div>
  <div class="right-col">
    <main class="main">
      <div class="alert success">
        <p>Your message was sent!</p>
        <p><?= $page->message() ?></p>
        </div>  
        <a class="crumb" href="<?= url('contact')?>"><span class="back-arrow">←</span> Back to form </a>
      </div>
    </main>
  <div>
</div>
<?php snippet('footer') ?>