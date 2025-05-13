<?php snippet('nav') ?>
<div class="content">
  <div class="left-col checkers">
  <div class="msg">
    <?= $page->inquiry()->kirbytext() ?>
  </div>
  </div>
  <div class="right-col">
  <div class="mobile-only">
    <h2><?= $page->template()->name() ?></h2>
  </div>
  <main class="main">
      <?php if($success): ?>
      <div class="alert success">
          <p><?= $success ?></p>
      </div>
      <?php else: ?>
      <?php if (isset($alert['error'])): ?>
          <div><?= $alert['error'] ?></div>
      <?php endif ?>
      <form method="post" action="<?= $page->url() ?>">
          <div class="honeypot">
              <label for="website">Website <abbr title="required">*</abbr></label>
              <input type="url" id="website" name="website" tabindex="-1">
          </div>
          <div class="field">
              <label for="name">
                  Name <abbr title="required">*</abbr>
              </label>
              <input type="text" id="name" name="name" value="<?= esc($data['name'] ?? '', 'attr') ?>" required>
              <?= isset($alert['name']) ? '<span class="alert error">' . esc($alert['name']) . '</span>' : '' ?>
          </div>
          <div class="field">
              <label for="email">
                  Email <abbr title="required">*</abbr>
              </label>
              <input type="email" id="email" name="email" value="<?= esc($data['email'] ?? '', 'attr') ?>" required>
              <?= isset($alert['email']) ? '<span class="alert error">' . esc($alert['email']) . '</span>' : '' ?>
          </div>
          <div class="field">
              <label for="text">
                  Message <abbr title="required">*</abbr>
              </label>
              <textarea id="text" name="text" required>
                  <?= esc($data['text'] ?? '') ?>
              </textarea>
              <?= isset($alert['text']) ? '<span class="alert error">' . esc($alert['text']) . '</span>' : '' ?>
          </div>
          <input class="submit" type="submit" name="submit" value="Submit">
      </form>
      <?php endif ?>
  </main>
  <div>
</div>
<?php snippet('footer') ?>