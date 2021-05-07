<section class='text1' id='<?= $id ?>'>
  <figure class='text1__cover' style='background-image: url("<?= $cover ?>")'>
    <h2><?= $title ?></h2>
    <?= $icon ?>
  </figure>

  <h2><?= $title ?></h2>

  <div class='text1__content'>
    <div class='text1__text'>
      <h3><?= $subtitle ?></h3>
      <div><?= $text ?></div>
    </div>

    <aside>
      <blockquote><?= $quote ?></blockquote>
      <footer class='text1__footer'>
        <?= $footer ?>
      </footer>
    </aside>
  </div>
</section>
