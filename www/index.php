<?php
  // Load all PHP functions needed for this project
  require_once 'core/snippet.php';
  require_once 'core/webpack.php';
?>

<!DOCTYPE html>
<html lang='fr'>
<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width,initial-scale=1.0'>

  <title>Urbain des Bois | Icade</title>
  <?= liveCSS('assets/bundle.css') ?>
</head>
<body>
  <main>
    <?php
      snippet('components/Menu', [
        'anchors' => [
          '#bas-carbone' => '<strong>Des projets</strong><br>bas carbone',
          '#concertation' => '<strong>La concertation du projet,</strong><br> à l’échelle du quartier',
          '#personnalisation' => '<strong>L’hyper-personnalisation du logement,</strong><br>ou la frugalité désirable',
          '#icade' => '<strong>ICADE,</strong><br>des lieux où il fait bon vivre',
        ],
        'links' => [
          '#team' => 'L’équipe',
          '#contact' => 'Contactez-nous'
        ]
      ]);

      snippet('components/Header', [
        'covers' => [
          'assets/images/cover-slideshow-1.jpg',
          'assets/images/cover-slideshow-2.jpg',
          'assets/images/cover-slideshow-3.jpg'
        ],
        'subtitle' => 'Notre raison d’être',
        'title' => 'Une filliale de promotion au&nbsp;service de l’habitat responsable',
        'text' => <<<HTML
          <p><strong>Acteur pionnier de la construction bas carbone, Icade accélère sa transition environnementale en 2021 en se fixant de nouveaux objectifs pour chacun de ses métiers.</strong></p>
          <p>
            Pour soutenir cette ambition et répondre aux nouvelles attentes en matière d’habitat responsable renforcées par la crise, Icade crée Urbain des bois, une filliale d’Icade Promotion dédiée à la construction bois et la personnalisation.<br>
            Celle-ci s’articule autour de trois pilliers qui répondent de manière innovante aux aspirations des acteurs de la ville et du quartier et à chaque étape de leur projet.
          </p>
        HTML
      ]);

      snippet('components/News', [
        'items' => [
          [
            'category' => 'économie',
            'date' => '7 avril 2021',
            'excerpt' => 'Anne Fraisse, Urbain des Bois. «&thinsp;Être des précurseurs de la construction bas carbone&thinsp;»',
            'url' => 'XXX',
            'cover' => 'assets/images/actu-1.jpeg'
          ],
          [
            'category' => 'nomination',
            'date' => '6 avril 2021',
            'excerpt' => 'Immobilier bas carbone : la Toulousaine Anne Fraisse à la tête d’Urbain des Bois (Icade)',
            'url' => 'XXX',
            'cover' => 'assets/images/actu-2.jpeg'
          ],
          [
            'category' => 'interview',
            'date' => '2 avril 2021',
            'excerpt' => '«&thinsp;Nous pousserons au maximum les curseurs sur le bas carbone&thinsp;», Anne Fraisse (Urbain des Bois)',
            'url' => 'XXX',
            'cover' => 'assets/images/actu-3.jpeg'
          ],
          [
            'category' => 'XXX',
            'date' => 'XXX',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Si qua in',
            'url' => 'XXX',
            'cover' => 'assets/images/actu-2.jpeg'
          ]
        ]
      ]);

      snippet('components/Text1', [
        'id' => 'bas-carbone',
        'title' => '<strong>Des projets</strong>bas carbone',
        'icon' => snippet('svg/building', [], true),
        'cover' => 'assets/images/matiere-bois-carbone.png',
        'subtitle' => 'Urbain des Bois vieille à la frugalité des matériaux.',
        'text' => <<<HTML
          <p>L’ambition bas carbone d’Urbain des Bois se traduit, avant tout, par <strong>le choix de matériaux à faible impact carbone</strong>, en premier lieu le bois, mais aussi d’autres matériaux bio-sourcés (terre crue, chanvre, paille…).</p>
          <p>La présence d’une végétalisation dense et créatrice de biodiversité apportera un agrément supplémentaire au logement.</p>
          <p><strong>Les projets d’Urbain des Bois favoriseront les mobilités douces</strong>, à l’échelle du programme, immobilier et du quartier : stationnements mutualisés plutôt qu'enterrés, circulations et espaces de l’immeuble repensés pour favoriser l’usage du vélo, etc.</p>
          <p>La construction bas carbone enfin, ne se limite pas à l’utilisation de matériaux à l’empreinte réduite, elle cherche à maîtriser l’impact global de nos projets, en favorisant notamment l’approvisionnement local et les circuits courts, et en systématisant le bon matériau au bon endroit.</p>
        HTML,
        'quote' => 'Engageons-nous à créer des îlots de fraîcheur, grâce à la présence d’une végétalisation dense et respectueuse de la biodiversité, au sein de chaque immeuble.',
        'footer' => 'En soutenant la filière bois ou les filières locales d’autres matériaux biosourcés, Urbain des Bois conçoit des projets au plus près des besoins des territoires et en lien avec ces derniers.'
      ]);

      snippet('components/Slideshow', [
        'title' => 'Références bas carbone',
        'slides' => [
          [
            'title' => 'L’urbain des bois Toulousain',
            'image' => 'assets/images/slideshow-1.png',
            'subtitle' => 'Wood’Art la canopée',
            'text' => <<<HTML
              <ul>
                <li>
                  Programme mixte de 137 logements
                  <ul>
                    <li>100 chambres d’hôtel</li>
                    <li>2789 m<sup>2</sup> de commerces</li>
                  </ul>
                </li>
                <li>76% de bois en R+10</li>
                <li>Mixité des matériaux :<br>bois, béton, acier</li>
                <li>RT 2021 Label E3C2 par CERQUAL</li>
                <li>Lauréat de l’appel à projet NoWatt</li>
                <li>Grand Prix Régional Occitanie Toulouse Métropole</li>
              </ul>
            HTML
          ],
          [
            'title' => 'XXX',
            'image' => 'assets/images/slideshow-2.jpg',
            'subtitle' => 'XXX',
            'text' => <<<HTML
              <ul>
                <li>
                  XXX
                  <ul>
                    <li>100 chambres d’hôtel</li>
                    <li>2789 m<sup>2</sup> de commerces</li>
                  </ul>
                </li>
                <li>76% de bois en R+10</li>
                <li>Mixité des matériaux :<br>bois, béton, acier</li>
                <li>RT 2021 Label E3C2 par CERQUAL</li>
                <li>Lauréat de l’appel à projet NoWatt</li>
                <li>Grand Prix Régional Occitanie Toulouse Métropole</li>
              </ul>
            HTML
          ]
        ]
      ]);

      snippet('components/Text2', [
        'id' => 'concertation',
        'title' => '<strong>La concertation sur&nbsp;le projet,</strong>à l’échelle du quartier',
        'icon' => snippet('svg/buildings-hand', [], true),
        'cover' => 'assets/images/project.png',
        'subtitle' => 'NOTRE ENGAGEMENT<br>Associer les collectivités locales et les habitants : <strong>pensons la ville ensemble</strong>.',
        'text' => <<<HTML
          <p>En les accompagnant dans une démarche de conception participative avant le dépôt du permis de construire, nous offrons aux futurs habitants la possibilité de penser ensemble leur lieu de vie : que ce soit collectivement, grâce à des ateliers de conception pour déterminer les usages du bâti et les espaces partagés, ou au sein d’un parcours personnalisé pour décider de l’aménagement de leur propre logement.</p>
        HTML,
        'quote' => 'Les projets Urbain des Bois favorisent ainsi la mixité, celle des usages comme celles des modes d’accession.',
        'footer' => <<<HTML
          <p>Associés en amont du projet immobilier, <strong>les utilisateurs deviennent co-concepteurs de leur habitat</strong> : logement, volumes du bâtiment, espaces communs, qui ponctuent la vie de la résidence, etc…</p>
          <p>Imaginer une laverie commune, des espaces de co-working… Urbain des Bois facilite la création de <strong>lieux de rencontres multiples</strong>.</p>
        HTML
      ]);

      snippet('components/Text3', [
        'id' => 'personnalisation',
        'title' => '<strong>L’hyper-personnalisation du logement,</strong> sur-mesure chez soi',
        'icon' => snippet('svg/tape', [], true),
        'cover' => 'assets/images/enfants.png',
        'subtitle' => 'Urbain des Bois repense les relations promoteur/acquéreur avec une approche hyper-personnalisée de la conception.',
        'text' => <<<HTML
          <p>De la concertation collective à la proposition de mobilier dessiné, Urbain des Bois rend possibl la personnalisation totale du bâtiment et des éléments qui le composent.</p>
          <p>La construction bois basée sur un système de poteaux-poutres offre une grande flexibilité dans l’aménagement intérieur du logement. C’est pourquoi, Urbain des Bois instaure un dialogue entre architectes et acquéreurs, dès l’amont du projet et à différents degrés de finalisation.</p>
        HTML,
        'quote' => 'Urbain des bois rend possible la personnalisation totale du bâtiment et des élements qui le composent',
        'footer' => <<<HTML
          <p>Accompagné dans la concption de son habitation, l’acquéreur fait ainsi le choix des volumes, de la composition et de l’agencement intérieur, ou encore des surfaces, formes et usages de l’extérieur de son habitat.</p>
          <p><i>Le sur-mesure, chez soi</i> s’incarne par un design spécifique combinant matériaux bruts jusqu’aux meubles qui peuvent être conçus spécifiquement de façon éco-responsable.</p>
        HTML
      ]);

      snippet('components/Text4', [
        'id' => 'icade',
        'title' => '<strong>ICADE,</strong> des lieux où il fait bon vivre',
        'icon' => snippet('svg/map', [], true),
        'cover' => 'assets/images/fond-icade.png',
        'subtitle' => 'Urbain des Bois repense les relations promoteur/acquéreur avec une approche hyper-personnalisée de la conception.',
        'text' => <<<HTML
          <p>Pour que sa Raison d’être est de «&thinsp;concevoir, construire, gérer et investir dans des lieux à l’empreintre carbone réduite&thinsp;», Icade affiche des engagements forts en matière d’immobilier durable.</p>
          <p>Pionnière du bas carbone, Icade compte à ce jour 320&nbsp;000 m<sup>2</sup> de construction bois livrées ou en développement, parmi lesquelles des opérations emblématiques telles que Wood’Art à Toulouse, état de l’art de la construction bois, dont les logements verront le jour en septembre 2021.</p>
          <p>Avec «&thinsp;Low carbon by Icade&thinsp;», le groupe se fixe en 2021 de nouveaux objectifs pour l’ensemble de ses métiers. Icade Promotion s’engage notamment à obtenir le label E+C- au niveau E2C1 pour 100% de ses bureaux de plus de 5&nbsp;000 m<sup>2</sup> et 50% de ses logements dès 2022.</p>
          <p><img src='assets/images/icade.png'></p>
        HTML
      ]);

      snippet('components/Team', [
        'id' => 'team',
        'title' => '<strong>L’équipe</strong> Urbain des bois',
        'subtitle' => 'Des expertises multiples',
        'members' => [
          [
            'name' => 'Philippe Poilleux',
            'role' => 'Président',
            'image' => 'assets/images/philippe-poilleux.png'
          ],
          [
            'name' => 'Anne Fraisse',
            'role' => 'Directrice Générale',
            'image' => 'assets/images/anne-fraisse.png'
          ],
          [
            'name' => 'Jean-Christophe Acquier',
            'role' => 'Stratégie opérationnelle et innovation',
            'image' => 'assets/images/jean-christophe-acquier.png'
          ],
          [
            'name' => 'Emmanuel Morvan',
            'role' => 'Personnalisation et marketing produit',
            'image' => 'assets/images/emmanuel-morvan.png'
          ],
          [
            'name' => 'Estelle Kassimi',
            'role' => 'Assistante de direction',
            'image' => 'assets/images/estelle-kassimi.png'
          ]
        ],
        'text' => <<<HTML
          <p><strong>L’équipe d’Urbain des Bois s’appuie aussi sur un réseau de fortes expertises au sein d’Icade&nbsp;:</strong></p>
          <p>
            Filière sèche, métiers transversaux, Synergies Urbaines by Icade (en charge de l’aménagement des territoires)…<br>
            Elle développe également des collaborations avec de nombreux acteurs externes : architectes, maîtrise d’oeuvre, assistance à maîtrise d’ouvrage… Des&nbsp;expertises multiples pour un engagement commun : le&nbsp;bas carbone.
          </p>
        HTML,
        'cover' => 'assets/images/photo-matiere-esquipe.png'
      ]);

      snippet('components/Contact', [
        'id' => 'contact',
        'title' => 'Contactez-nous',
        'phone' => '04 11 11 12 75',
        'action' => 'send-email.php',
        'agreement' => 'Icade traite vos données personnelles pour répondre à votre demande.'
      ]);

      snippet('components/Footer', [
        'title' => 'L’habitat responsable, <strong>Urbain des bois</strong>',
        'twitter' => 'https://twitter.com/XXX',
        'linkedin' => 'https://linkedin.com/XXX',
        'instagram' => 'https://instagram.com/XXX',
        'vimeo' => 'https://vimeo.com/XXX',
        'links' => [
          'Gestion des cookies' => 'https://example.com',
          'Mentions légales' => 'https://example.com',
          'Découvrez ICADE' => 'https://example.com',
          'Contact' => 'https://example.com'
        ]
      ]);
    ?>
  </main>
  <script src='assets/bundle.js'></script>
</body>
</html>
