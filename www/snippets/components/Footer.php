<footer class='footer'>
  <a href='#' id='scrollTop'><?php snippet('svg/arrow-right') ?></a>

  <h2><?= $title ?></h2>
  <div class='footer__social'>
    <?php if ($twitter ?? false) : ?><a href='<?= $twitter ?>'><img src='assets/images/twitter.png'></a><?php endif ?>
    <?php if ($linkedin ?? false) : ?><a href='<?= $linkedin ?>'><img src='assets/images/linkedin.png'></a><?php endif ?>
    <?php if ($instagram ?? false) : ?><a href='<?= $instagram ?>'><img src='assets/images/instagram.png'></a><?php endif ?>
    <?php if ($vimeo ?? false) : ?><a href='<?= $vimeo ?>'><img src='assets/images/vimeo.png'></a><?php endif ?>
  </div>

  <ul class='footer__links'>
    <?php foreach ($links as $text => $url) : ?>
      <li class='footer__link'>
        <a href='<?= $url ?>'><?= $text ?></a>
      </li>
    <?php endforeach ?>
  </ul>
</footer>
