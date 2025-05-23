<?php snippet('nav') ?>
<div class="content">
<div class="left-col checkers">
  &nbsp;
</div>
<div class="right-col">
  <h2 class="mobile-only">Other Writing</h2>
  <?php foreach ($genres as $genre): ?>
    <?php if($genre != "Other"): ?>
      <ul class="flex writing">
        <?php if($page->$genre()->isNotEmpty()) :?>
          <h3><?= $genre ?></h3>
        <?php foreach(  $page->$genre() -> toStructure() as $item ): ?> 
          
          <li>
            <a href="<?=$item -> link() ?>" target="_blank">
              <p>“<span class="link_title"><?=$item -> title()?></span>,”
              <span class="publisher"><?=$item -> publisher() ?></span>
              (<?=$item -> date() ?>)</p>
            </a>
          </li>
          <?php endforeach ?>
          <?php endif ?>
        </ul>
        <?php endif ?>
        <?php endforeach ?>
</div>
        
<?php snippet('footer') ?>