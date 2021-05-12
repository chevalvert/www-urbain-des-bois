<section class='contact' id='<?= $id ?>'>
  <header class='contact__header'>
    <h2><?= $title ?></h2>
    <h3>
      <a href='phone:<?= $phone ?>'>
        <?php snippet('svg/phone') ?>
        <span><?= $phone ?></span>
      </a>
    </h3>
  </header>
  <form method='POST' action='<?= $action ?>'>
    <fieldset>
      <div>
        <label for='lastname'>Nom *</label>
        <input type='text' name='lastname' placeholder='Votre nom' required />
      </div>
      <div>
        <label for='firstname'>Prénom *</label>
        <input type='text' name='firstname' placeholder='Votre prénom' required />
      </div>
    </fieldset>

    <fieldset>
      <div>
        <label for='email'>Adresse email *</label>
        <input type='email' name='email' placeholder='Votre adrese email' required />
      </div>
      <div>
        <label for='phone'>Téléphone *</label>
        <input type='text' name='phone' placeholder='Votre numéro de téléphone' required />
      </div>
    </fieldset>

    <fieldset>
      <div>
        <label for='message'>Message *</label>
        <textarea name='message' placeholder='Votre message' rows='10' required></textarea>
      </div>
    </fieldset>

    <fieldset>
      <div class='checkbox-container'>
        <?= $agreement ?>
      </div>
      <button type='submit'>Envoyer <?php snippet('svg/arrow-right') ?></button>
    </fieldset>
  </form>
</section>
