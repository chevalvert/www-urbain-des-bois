<section class='menu'>
  <a class='menu__logo--icade' href='https://www.icade.fr/'>
    <?php snippet('svg/logo-icade') ?>
  </a>

  <div class='menu__logo--urbain'><?php snippet('svg/logo-urbain') ?></div>

  <input type='checkbox' name='toggleMenuVisibility' id='toggleMenuVisibility'>
  <label for='toggleMenuVisibility'><span>Menu</span></label>
  <div class='menu__overlay'></div>

  <nav class='menu__navigation'>
    <ul class='menu__anchors'>
      <?php foreach ($anchors as $url => $text) : ?>
        <li class='menu__anchor'>
          <a href='<?= $url ?>'><?= $text ?></a>
        </li>
      <?php endforeach ?>
    </ul>

    <ul class='menu__links'>
      <?php foreach ($links as $url => $text) : ?>
        <li class='menu__link'>
          <a href='<?= $url ?>'><?= $text ?></a>
        </li>
      <?php endforeach ?>
    </ul>
  </nav>
</section>
