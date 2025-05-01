<?php snippet('nav') ?>
<div class="content">
<div class="left-col checkers">
  &nbsp;
</div>
<div class="right-col">
  <?php foreach ($genres as $genre): ?>
    <?php if($genre != "Other"): ?>
      <ul class="flex writing">
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
        </ul>
        <?php endif ?>
        <?php endforeach ?>
</div>
        
<?php snippet('footer') ?>