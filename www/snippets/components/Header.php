<section class='header'>
  <div class='header__covers'>
    <?php foreach ($covers as $cover) : ?>
      <div class='header__cover' style='background-image: url("<?= $cover ?>")'></div>
    <?php endforeach ?>
  </div>
  <div class='header__content'>
    <header class='header__header'>
      <h2><?= $subtitle ?></h2>
      <h1><?= $title ?></h1>
    </header>

    <div class='header__text'>
      <?= $text ?>
    </div>
  </div>
</section>
