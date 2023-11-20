<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(){
        DB::table('films')->insert([
            [
                'id' => 1,
                'titre' => 'Matrice',
                'categorie' => 'action',
                'resume' => 'Neo tue tout le monde',
                'pochette' => 'https://m.media-amazon.com/images/I/71QcF+FlGYL._AC_UF1000,1000_QL80_.jpg',
                'personnes_id' => '1',
                'duree' => '136',
                'annee' => '1999',
                'rating' => '9.7'
            ],
            [
                'id' => 2,
                'titre' => 'Matrice Rechargé',
                'categorie' => 'action',
                'resume' => 'Neo tue encore tout le monde',
                'pochette' => 'https://m.media-amazon.com/images/M/MV5BODE0MzZhZTgtYzkwYi00YmI5LThlZWYtOWRmNWE5ODk0NzMxXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_.jpg',
                'personnes_id' => '2',
                'duree' => '138',
                'annee' => '2003',
                'rating' => '10'
            ],
            [
                'id' => 3,
                'titre' => 'Les Sacrifiés 3',
                'categorie' => 'action',
                'resume' => "En Somalie, les Expendables doivent arrêter le dangereux trafiquant d'armes Victor Minns. Il s'avère que la cible est Conrad Stonebanks, le cofondateur des Expendables, que Ross croyait avoir tué des années auparavant.",
                'pochette' => 'https://fr.web.img3.acsta.net/pictures/14/07/10/11/30/285929.jpg',
                'personnes_id' => '2',
                'duree' => '126',
                'annee' => '2014',
                'rating' => '7.2'
            ],
            [
                'id' => 4,
                'titre' => 'John Wick 4',
                'categorie' => 'action',
                'resume' => "John Wick a survécu à la trahison de Winston, et aidé du Bowery King, se lance dans une insurrection contre la Grande Table, l'organisation qui rassemble et dirige toute les familles criminelles de par le monde, afin de se libérer définitivement de son emprise. Mais la Grande Table a trouvé un dirigeant puissant en la personne du Marquis de Gramont, qui a reçu carte blanche pour éliminer John Wick par tous les moyens nécessaires.",
                'pochette' => 'https://m.media-amazon.com/images/I/81fkjvlsH4L._AC_UF1000,1000_QL80_.jpg',
                'personnes_id' => '2',
                'duree' => '169',
                'annee' => '2023',
                'rating' => '9.6'
            ],
            [
                'id' => 5,
                'titre' => 'Mission : Impossible - Bilan Mortel Première Partie',
                'categorie' => 'action',
                'resume' => "Ethan Hunt, au service de Mission Impossible depuis des décennies, fait face à ennemi d'un nouveau genre: une intelligence artificielle nommée « l'Entité », intangible, omniprésente, capable d'influencer comme jamais notre monde d'aujourd'hui. Entré en possession d'un indice qui pourrait permettre à quiconque parvenant à suivre la piste de contrôler le destin de cette I.A., Ethan Hunt ne suit plus les ordres, mais s'assigne lui-même une mission: mettre un terme à la menace de l'Entité par tous les moyens. Mais alors qu'il est traqué par le monde entier, Ethan va découvrir que cette Entité connaît tout de lui, s'est alliée à des ennemis de son passé d'avant Mission Impossible, et que pour la vaincre et sauver l'avenir, il devra sacrifier ce qu'il a de plus cher au monde.",
                'pochette' => 'https://m.media-amazon.com/images/M/MV5BYzFiZjc1YzctMDY3Zi00NGE5LTlmNWEtN2Q3OWFjYjY1NGM2XkEyXkFqcGdeQXVyMTUyMTUzNjQ0._V1_.jpg',
                'personnes_id' => '2',
                'duree' => '163',
                'annee' => '2023',
                'rating' => '9.8'
            ],
            [
                'id' => 6,
                'titre' => 'Rapides et Dangereux 10',
                'categorie' => 'action',
                'resume' => "La famille est attaqué par aquaman.",
                'pochette' => 'https://img6.cdn.cinoche.com/images/0ff1cba3331545645f8aad81cd92379b.jpg',
                'personnes_id' => '2',
                'duree' => '141',
                'annee' => '2023',
                'rating' => '9.7'
            ],
            [
                'id' => 7,
                'titre' => 'Le monde de Dory',
                'categorie' => 'comedie',
                'resume' => "Dory, la sympathique poisson aux tanins bleus, mais distraite, part à la recherche de ses parents disparus depuis longtemps, et tout le monde apprend quelques petites choses sur le vrai sens de la famille en cours de route.",
                'pochette' => 'https://fr.web.img5.acsta.net/pictures/16/03/14/16/21/478890.jpg',
                'personnes_id' => '1',
                'duree' => '97',
                'annee' => '2016',
                'rating' => '1.2'
            ],
            [
                'id' => 8,
                'titre' => 'Renfield',
                'categorie' => 'horreur',
                'resume' => "Renfield, acolyte de Dracula et détenu à l'asile de fous depuis des décennies, rêve d'une vie loin du comte, de ses diverses exigences et de toutes les effusions de sang qui en découlent.",
                'pochette' => 'https://th.bing.com/th/id/OIP.4rcLmM5aExTRes8e2MpaiwHaLu?pid=ImgDet&rs=1',
                'personnes_id' => '1',
                'duree' => '93',
                'annee' => '2023',
                'rating' => '6.4'
            ],
            [
                'id' => 9,
                'titre' => 'Ne respire pas II',
                'categorie' => 'horreur',
                'resume' => "Un vieil aveugle reclus a recueilli chez lui une fillette dont la famille a été décimée dans un terrible incendie. Quelques années après cet événement tragique, des criminels en lien avec un réseau de trafic d'organes tentent sans relâche de kidnapper l'enfant de 11 ans à la curieuse mèche blanche.",
                'pochette' => 'https://www.sonypictures.ca/sites/canada/files/2021-09/DP_6222228_DontBreathe2_EST_2000x3000_RVOD_CAN-FR_1333x2000_thumbnail-min.jpg',
                'personnes_id' => '2',
                'duree' => '98',
                'annee' => '2021',
                'rating' => '5.4'
            ],
            [
                'id' => 10,
                'titre' => 'Insidious: The Red Door',
                'categorie' => 'horreur',
                'resume' => "Afin de se débarrasser définitivement de leurs démons, Josh et son fils Dalton, à présent étudiant, doivent plonger encore plus profondément dans le Lointain pour affronter le sombre passé de leur famille et une multitude d'esprits toujours plus inquiétants qui se cachent derrière la Porte Rouge.",
                'pochette' => 'https://m.media-amazon.com/images/M/MV5BMjdlZjI4YTEtNjgzZi00NTA1LWIwZWYtMDc0MzhjOWNlYjcxXkEyXkFqcGdeQXVyMTUzMTg2ODkz._V1_.jpg',
                'personnes_id' => '2',
                'duree' => '107',
                'annee' => '2023',
                'rating' => '3.8'
            ],
            [
                'id' => 11,
                'titre' => 'Scream 6',
                'categorie' => 'horreur',
                'resume' => "Les survivants des derniers meurtres de Ghostface, les sœurs Samantha et Tara Carpenter et les jumeaux Chad et Mindy Meeks, quittent Woodsboro et entament un nouveau chapitre de leur vie à New York. Ils y sont à nouveau victimes d'une série de meurtres commis par un nouveau tueur Ghostface.",
                'pochette' => 'https://m.media-amazon.com/images/M/MV5BODBjM2M4YTQtNmJlMS00MGU2LWI4ZGYtZTA1MzdmZDAyMjFkXkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_FMjpg_UX1000_.jpg',
                'personnes_id' => '2',
                'duree' => '122',
                'annee' => '2023',
                'rating' => '6.5'
            ],
            [
                'id' => 12,
                'titre' => 'Evil Dead Rise',
                'categorie' => 'horreur',
                'resume' => "Les retrouvailles de deux sœurs sont interrompues par l'apparition de démons possesseurs de chair, les plongeant dans une bataille primitive pour leur survie et les confrontant à la version la plus cauchemardesque de la famille.",
                'pochette' => 'https://m.media-amazon.com/images/M/MV5BMmZiN2VmMjktZDE5OC00ZWRmLWFlMmEtYWViMTY4NjM3ZmNkXkEyXkFqcGdeQXVyMTI2MTc2ODM3._V1_FMjpg_UX1000_.jpg',
                'personnes_id' => '2',
                'duree' => '96',
                'annee' => '2023',
                'rating' => '6.6'
            ],
            [
                'id' => 13,
                'titre' => 'La Nonne 2',
                'categorie' => 'horreur',
                'resume' => "En France, en 1956, un prêtre est assassiné dans un internat. Après la mort du prêtre, il se passe des choses qui ne peuvent plus être expliquées rationnellement. Sœur Irène est une nouvelle fois confrontée à un pouvoir démoniaque.",
                'pochette' => 'https://fr.web.img3.acsta.net/pictures/23/07/12/15/32/1131759.jpg',
                'personnes_id' => '1',
                'duree' => '110',
                'annee' => '2023',
                'rating' => '5.7'
            ],
            [
                'id' => 14,
                'titre' => 'Shazam! La Rage des Dieux',
                'categorie' => 'comedie',
                'resume' => "Deux ans après avoir reçu les pouvoirs de Shazam et les avoirs partagés avec ses frères et sœurs, le jeune Billy Batson continue bon gré mal gré sa carrière de super-héros, tout en s'efforçant de gérer les changements qui surviennent au sein de sa famille, dont les membres commencent à avoir des intérêts divergent en grandissant. Mais sa récente ascension provoque des effets inattendus: en effet, pour empêcher Silvana d'acquérir ses pouvoirs deux ans auparavant, Billy Batson a accidentellement brisé la barrière entre son monde et le monde des dieux. En conséquence, une nouvelle menace apparaît lorsque les trois filles d'Atlas (Hespera, Kalypso et Anthea) veulent récupérer leurs pouvoirs et détruire le monde des hommes. Shazam et sa famille vont devoir unir leur force afin de trouver la solution pour vaincre les trois déesses, devenir de véritables héros et sauver le monde.",
                'pochette' => 'https://www.citizenkid.com/uploads/medias/06/e7/06e7a544087be02952c11e8a3f9c68a6ddc23717.jpeg',
                'personnes_id' => '2',
                'duree' => '131',
                'annee' => '2023',
                'rating' => '4.8'
            ],
            [
                'id' => 15,
                'titre' => 'Paint',
                'categorie' => 'comedie',
                'resume' => "Cela fait près de trente ans que Carl Nargle présente une émission éducative consacrée aux techniques picturales. Star d'une chaîne de télévision du Vermont, il voit sa popularité remise en question avec l'arrivée d'Ambrosia, une jeune peintre et animatrice qui lui prend rapidement des parts d'audience.",
                'pochette' => 'https://m.media-amazon.com/images/M/MV5BZjNlMTA2ZmYtMzUyOS00MmM5LWE3M2EtZGNkN2M5NDk2MWQ4XkEyXkFqcGdeQXVyNTIyODMzMzA@._V1_.jpg',
                'personnes_id' => '2',
                'duree' => '96',
                'annee' => '2023',
                'rating' => '4.9'
            ],
            [
                'id' => 16,
                'titre' => 'The Retirement Plan',
                'categorie' => 'comedie',
                'resume' => "Ashley et sa fille se tournent vers son ancien père, un clochard de plage, pour les aider à échapper à un chef du crime impitoyable.",
                'pochette' => 'https://m.media-amazon.com/images/M/MV5BYTYyM2NmM2QtZTY4My00NDYxLTgyMTctY2ZhOWRjZjk1NjY5XkEyXkFqcGdeQXVyNTE0NDY2Ng@@._V1_FMjpg_UX1000_.jpg',
                'personnes_id' => '2',
                'duree' => '103',
                'annee' => '2023',
                'rating' => '5.1'
            ],
            [
                'id' => 17,
                'titre' => 'Le manoir hanté',
                'categorie' => 'comedie',
                'resume' => "L'histoire d'une mère et son fils qui engagent une équipe de pseudo-experts pour les aider à chasser les différents spectres et fantômes qui hantent leur maison.",
                'pochette' => 'https://disney-planet.fr/wp-content/uploads/2022/04/affiche-manoir-hante-19.jpg',
                'personnes_id' => '2',
                'duree' => '123',
                'annee' => '2023',
                'rating' => '6.2'
            ],
            [
                'id' => 18,
                'titre' => 'Johnny English contre-attaque',
                'categorie' => 'comedie',
                'resume' => "Cette nouvelle aventure démarre lorsqu'une cyber-attaque révèle l'identité de tous les agents britanniques sous couverture. Johnny English devient alors le dernier espoir des services secrets. Rappelé de sa retraite, il plonge tête la première dans sa mission : découvrir qui est le génie du piratage qui se cache derrière ces attaques. Avec ses méthodes obsolètes, Johnny English doit relever les défis de la technologie moderne pour assurer la réussite de sa mission.",
                'pochette' => 'https://fr.web.img4.acsta.net/pictures/18/09/07/14/59/2973117.png',
                'personnes_id' => '2',
                'duree' => '89',
                'annee' => '2018',
                'rating' => '6.2'
            ]
        ]);
        }
}
