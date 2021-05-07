<section class='slideshow'>
  <h2><?= $title ?></h2>
  <ul class='slideshow__slides'>
    <?php for ($i = 0; $i < count($slides); $i++) : ?>
      <?php $slide = $slides[$i]; ?>
      <li class='slideshow__slide'>
        <h3><?= $slide['title'] ?></h3>
        <figure>
          <div class='slideshow__slide__image'>
            <img src='<?= $slide['image'] ?>'>
            <div class='slideshow__navigation'>
              <button data-action='prev'><?php snippet('svg/arrow-right') ?></button>
              <ul class='slideshow__navigation--bullets'>
                <?php
                  for ($j = 0; $j < count($slides); $j++) {
                    $isActive = $i === $j ? 'is-active' : '';
                    echo "<li class='$isActive'></li>";
                  }
                ?>
              </ul>
              <button data-action='next'><?php snippet('svg/arrow-right') ?></button>
            </div>
          </div>
          <figcaption>
            <h4><?= $slide['subtitle'] ?></h4>
            <div><?= $slide['text'] ?></div>
          </figcaption>

        </figure>
      </li>
    <?php endfor ?>
  </ul>
</section>
