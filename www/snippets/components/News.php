<section class='news'>
  <h2><strong>Actualité</strong> Urbain des Bois</h2>
  <ul class='news__items'>
    <?php foreach ($items as $item) : ?>
      <li class='news__item'>
        <a href='<?= $item['url'] ?>'>
          <figure>
            <img src='<?= $item['cover'] ?>'>
            <div class='news__item-category'><?= $item['category'] ?></div>
          </figure>
          <div class='news__item-date'><?= $item['date'] ?></div>
          <div class='news__item-excerpt'><?= $item['excerpt'] ?></div>
        </a>
      </li>
    <?php endforeach ?>
    <?php 
    // add ghost items for ie 11
    $count_items = count($items);
    $count_more_items = 3 - $count_items % 3;
    for($i = 0 ; $i < $count_more_items ; $i++) : ?>
      <li class='news__item news__item-ghost'>
      </li>
    <?php endfor; ?>
  </ul>
  <button id='newsDisplayMore'>Voir toutes les publications</button>
</section>
