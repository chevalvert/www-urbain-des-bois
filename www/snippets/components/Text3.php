<section class='text3' id='<?= $id ?>'>
  <figure class='text3__cover' style='background-image: url("<?= $cover ?>")'>
    <h2>
      <?= $icon ?>
      <span><?= $title ?></span>
    </h2>
  </figure>


  <div class='text3__content'>
    <div class='text3__left'>
      <h2><?= $title ?></h2>
      <h3><?= $subtitle ?></h3>
      <div>
        <?= $text ?>
      </div>
    </div>

    <div class='text3__right'>
      <blockquote><?= $quote ?></blockquote>
      <footer class='text3__footer'>
        <?= $footer ?>
      </footer>
    </div>
  </div>
</section>
