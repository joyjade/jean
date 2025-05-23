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
      <?php if($page->message()->isNotEmpty()): ?> 
          <div class="alert success">
            <p><?= $page->message() ?></p>
          </div>  
          <a class="crumb" href="<?= url('about/contact')?>"><span class="back-arrow">←</span> Back to form </a>
      <?php else: ?>  
        <?php if (isset($alert['error'])): ?>
            <div><?= $alert['error'] ?></div>
        <?php endif ?>
          <form action="https://api.web3forms.com/submit" method="POST" id="contact">

          <!-- Replace with your Access Key -->
          <input type="hidden" name="access_key" value="<?= $page->secret() ?>">

          <!-- Subject Line -->
          <input type="hidden" name="subject" id="subject" value="<?= $page->subject()?>">
          <input type="hidden" name="from_name" value="yayjayfray website form">

          <!-- Form Inputs -->
          <div class="field">
            <label for="name">Name <abbr title="required">*</abbr></label>
            <input type="text" name="name" id="name" required>

            <!-- <input value="<?= esc($data['name'] ?? '', 'attr') ?>"> -->
            <!-- <?= isset($alert['name']) ? '<span class="alert error">' . esc($alert['name']) . '</span>' : '' ?> -->
          </div>
          <div class="field">
            <label for="email">Email <abbr title="required">*</abbr></label>
            <input type="email" name="email" id="email" required>
            <!-- <input value="<?= esc($data['email'] ?? '', 'attr') ?>" required>
            <?= isset($alert['email']) ? '<span class="alert error">' . esc($alert['email']) . '</span>' : '' ?> -->
          </div>
          <div class="field">
            <label for="text">
                Message <abbr title="required">*</abbr>
            </label>
            <textarea name="message" required></textarea>
            <!-- <textarea id="text" name="text" required>
                <?= esc($data['text'] ?? '') ?>
            </textarea>
            <?= isset($alert['text']) ? '<span class="alert error">' . esc($alert['text']) . '</span>' : '' ?> -->
          </div>

            <!-- <div class="honeypot">
              <label for="website">Website <abbr title="required">*</abbr></label>
              <input type="url" id="website" name="website" tabindex="-1">
            </div> -->

            <input type="checkbox" name="botcheck" class="hidden" style="display: none;">

            <input type="hidden" name="redirect" value="<?= url('contact/thanks')?>/">   <!-- success page -->

            <button id="send" type="submit" class="button">Send Message</button>
        </form>
      <?php endif ?>
    </main>
  <div>
</div>
<?php snippet('footer') ?>