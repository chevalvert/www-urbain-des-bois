<section class='team' id='<?= $id ?>'>
  <h2><?= $title ?></h2>
  <h3><?= $subtitle ?></h3>
  <ul class='team__members'>
    <?php foreach ($members as $member) : ?>
      <li class='team__member'>
        <figure>
          <img src='<?= $member['image'] ?>'>
        </figure>
        <div class='team__member-name'><?= $member['name'] ?></div>
        <div class='team__member-role'><?= $member['role'] ?></div>
      </li>
    <?php endforeach ?>
  </ul>

  <div class='team__text'>
    <div><?= $text ?></div>
    <figure><img src='<?= $cover ?>'></figure>
  </div>
</section>
