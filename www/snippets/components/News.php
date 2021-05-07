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
  </ul>
  <button id='newsDisplayMore'>Voir toutes les publications</button>
</section>
