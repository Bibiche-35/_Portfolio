<?php

// - création d'un tableau associatif avec les données sur le premier article titre, auteur, texte, catégorie, date de publication, image de l'auteur 
$dataArticlesList = [
    1 => [
        "title" => "Lorem ipsum dolor article 1",
        "author"=> "Jean Bulldog",
        "content" =>"<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam nisi dignissimos consequatur, ipsa expedita nihil, hic molestiae commodi illo deserunt nobis odio error suscipit voluptates soluta incidunt sit at quo iure quibusdam assumenda eum? Eaque, eveniet, illo nisi assumenda necessitatibus commodi quidem minus veniam vel ullam, esse optio ad molestiae quibusdam pariatur nam itaque repellendus. Debitis earum sapiente recusandae? Voluptas eos sequi laborum consequuntur debitis earum perspiciatis aperiam distinctio esse, quas atque delectus, facilis asperiores dolores, doloremque ullam aliquid maiores odit culpa ea! Ut, qui reiciendis temporibus corporis dignissimos repellendus atque repellat reprehenderit a nostrum ea deserunt, nemo voluptatum nihil quidem consequuntur beatae, voluptate debitis sequi nisi! Ipsum, praesentium quos eos quibusdam aliquam voluptatum labore sapiente iste doloribus dolorum deserunt et, illum hic odio enim quo, pariatur minus cumque. Deleniti error similique nulla suscipit perferendis expedita amet velit cum iste, dicta repudiandae assumenda porro quod possimus minus laboriosam quos molestias nam soluta ipsam necessitatibus mollitia ipsa nostrum? Quos illum exercitationem eum illo, et facilis qui provident vero! Harum aliquid ipsam vitae! Et minus vero quia incidunt earum in quisquam id laborum, unde culpa praesentium voluptatibus aspernatur optio veritatis ipsum reiciendis iure rerum? Facilis accusantium, mollitia ut iusto numquam delectus ab magnam ullam est, sunt doloremque aspernatur consectetur quos quam illo repudiandae corporis sapiente optio nam minus modi perspiciatis in ipsam. Aut voluptatum, excepturi ex cum ullam a atque nihil! Quisquam dolorum veritatis perspiciatis maxime inventore dolor dolore culpa nesciunt? Cum repellendus sint repellat eligendi mollitia qui recusandae in, maiores et. Optio, tenetur! Repellendus aspernatur nulla odit praesentium labore libero, ut quae ullam incidunt fugiat deserunt modi asperiores vel facilis reiciendis quo, sed iusto tenetur illum sit dolorem quam cum? Ut aliquid iure eum cupiditate placeat perferendis laboriosam repellat exercitationem consequuntur provident doloribus beatae, sint quasi praesentium neque quae omnis cumque voluptates. Mollitia fugiat in natus libero delectus, ducimus id similique quia consequuntur ipsam officiis, quo fugit consectetur quod inventore enim dignissimos debitis possimus est doloremque aperiam! Quod error eum itaque dolor officiis quaerat soluta eligendi doloribus doloremque cupiditate ab veritatis sapiente est nobis facilis qui aliquam sunt quam culpa, harum repellat perferendis a. Consequuntur, voluptas modi consequatur quos impedit optio inventore nesciunt? Porro sit laudantium hic sint. Quae corporis dolorum harum velit veritatis tempora? Ad facere ab saepe beatae minus officiis laboriosam illo, nihil perferendis deleniti perspiciatis similique nesciunt assumenda qui cupiditate aliquam quidem vero provident ea inventore accusamus magni?</p>",
        "category"=>"Education",
  // - création d'une nouvelle catégorie afin d'intégrer une couleur sur la catégorie
        "color_category"=>"--color-education",
        "date" =>"le 22 mars 2020",
        "picture" => "../images/profil-avatar-homme-icone-ronde.jpg"
    ],
    2 => [
        "title" => "Lorem ipsum dolor article 2",
        "author"=> "Claude Teckel",
        "content" =>"<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos id impedit at quo, expedita iure, molestias error ullam distinctio vel.</p>",
        "category"=>"Bien-être",
        "color_category"=>"--color-care",
        "date" =>"le 14 février 2020",
        "picture" => "../images/profil-avatar-beagles.png"
    ],
    3 => [
        "title" => "Lorem ipsum dolor article 3",
        "author"=> "Emma Rottweiler",
        "content" =>"<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Location magnam, distinctio! Vero blanditiis nisi veritatis id perferendis, quod quaerat necessitatibus ullam nobis quidem ipsam optio sit quibusdam ad quae voluptatibus doloremque!</p>",
        "category"=>"Bien-être",
        "color_category"=>"--color-care",
        "date" =>"le 30 janvier 2020",
        "picture" => "../images/profil-avatar-femme-icone-ronde-rose.jpg"
    ],
    4 => [
        "title" => "Lorem ipsum dolor article 4",
        "author"=> "Mathilde Beagles",
        "content" =>"<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pirates molestias molestiae, obcaecati et. Veritatis, laudantium!</p>",
        "category"=>"Loisirs",
        "color_category"=>"--color-fun",
        "date" =>"le 15 janvier 2020",
        "picture" => "../images/profil-avatar-femme-icone-ronde.jpg"
    ],
    5 => [
        "title" => "Lorem ipsum dolor article 5",
        "author"=> "Charles Bouvier",
        "content" =>"<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Celtics nostrum obcaecati sit odit eveniet, unde hic animi molestiae, odio a quia aut perspiciatis dicta.</p>",
        "category"=>"Education",
        "color_category"=>"--color-education",
        "date" =>"le 20 décembre 2019",
        "picture" => "../images/profil-avatar-homme-icone-ronde-orange.jpg"
    ],
    6 => [
        "title" => "Lorem ipsum dolor article 6",
        "author"=> "Claude Teckel",
        "content" =>"<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nascar vitae assumenda reiciendis doloremque, quisquam.</p>",
        "category"=>"Loisirs",
        "color_category"=>"--color-fun",
        "date" =>"le 25 octobre 2019",
        "picture" => "../images/profil-avatar-beagles.png"
    ],
];

// - création d'un tableau associatif contenant le nom et le lien de chaque élément du menu de gauche (plan du site, toutes les races de chien, etc.)
$leftNavLink = [
    1 => [
        "title" => "Plan du site",
        "link"=> "../images/OIP.jpg",
    ],
    2 => [
        "title" => "Toutes les races de Chien",
        "link"=> "https://www.dogsplanet.com/race-de-chien/",
    ],
    3 => [
        "title" => "Contact",
        "link"=> "mailto:fabrice.hure.35@gmail.com",
    ],
];