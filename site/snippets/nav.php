<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= $site->title()?> | <?= $page->title() ?></title>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🍕</text></svg>">

	
  <?= css(['assets/css/global.css', 'assets/type/typography.css', 'assets/css/mobile.css', '@auto',]) ?>
</head>


<body class="<?= $page->template()->name() ?>">
  <div class="header">
    <div class="title">
      <a href="<?= $site->url() ?>"><?= $site->title() ?></a>
    </div>
  </div>
  
  <!-- nested menu -->
  <?php 
  $items = $pages->listed();
  if($items->isNotEmpty()): // only show the menu if items are available

  ?>
    <nav>
      <ul class="nav">
        <?php foreach($items as $item): ?>
        <li>
          <a
            <?php e($item->isOpen(), 'class="active"') ?> 
            href="<?php e($item->children()->listed()->isEmpty(), $item->url()) ?>"><?= $item->title()->html() ?></a>

          <?php
            $children = $item->children()->listed();           // get all children for the current menu item
            if($children->isNotEmpty()):                       // display the submenu if children are available
          ?>
          <ul class="sub-nav">
            <?php foreach($children as $child): ?>
            <li><a<?php e($child->isOpen(), ' class="active"') ?> href="<?= $child->url() ?>"><?= $child->title()->html() ?></a></li>
            <?php endforeach ?>
          </ul>
          <?php endif ?>

        </li>
        <?php endforeach ?>
      </ul>
    </nav>
  <?php endif ?>