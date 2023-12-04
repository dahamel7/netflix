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
                'pochette' => 'Matrice-65690960e128c.jpg',
                'personne_id' => '1',
                'duree' => '136',
                'annee' => '1999',
                'rating' => '9.7'
            ],
            [
                'id' => 2,
                'titre' => 'Matrice Rechargé',
                'categorie' => 'action',
                'resume' => 'Neo tue encore tout le monde',
                'pochette' => 'Matrice_Rechargé-65690975b8774.jpg',
                'personne_id' => '2',
                'duree' => '138',
                'annee' => '2003',
                'rating' => '10'
            ],
            [
                'id' => 3,
                'titre' => 'Les Sacrifiés 3',
                'categorie' => 'action',
                'resume' => "En Somalie, les Expendables doivent arrêter le dangereux trafiquant d'armes Victor Minns. Il s'avère que la cible est Conrad Stonebanks, le cofondateur des Expendables, que Ross croyait avoir tué des années auparavant.",
                'pochette' => 'Les_Sacrifiés_3-65690982a1efa.jpg',
                'personne_id' => '2',
                'duree' => '126',
                'annee' => '2014',
                'rating' => '7.2'
            ],
            [
                'id' => 4,
                'titre' => 'John Wick 4',
                'categorie' => 'action',
                'resume' => "John Wick a survécu à la trahison de Winston, et aidé du Bowery King, se lance dans une insurrection contre la Grande Table, l'organisation qui rassemble et dirige toute les familles criminelles de par le monde, afin de se libérer définitivement de son emprise. Mais la Grande Table a trouvé un dirigeant puissant en la personne du Marquis de Gramont, qui a reçu carte blanche pour éliminer John Wick par tous les moyens nécessaires.",
                'pochette' => 'John_Wick_4-656909b3943be.jpg',
                'personne_id' => '2',
                'duree' => '169',
                'annee' => '2023',
                'rating' => '9.6'
            ],
            [
                'id' => 5,
                'titre' => 'Mission : Impossible - Bilan Mortel Première Partie',
                'categorie' => 'action',
                'resume' => "Ethan Hunt, au service de Mission Impossible depuis des décennies, fait face à ennemi d'un nouveau genre: une intelligence artificielle nommée « l'Entité », intangible, omniprésente, capable d'influencer comme jamais notre monde d'aujourd'hui. Entré en possession d'un indice qui pourrait permettre à quiconque parvenant à suivre la piste de contrôler le destin de cette I.A., Ethan Hunt ne suit plus les ordres, mais s'assigne lui-même une mission: mettre un terme à la menace de l'Entité par tous les moyens. Mais alors qu'il est traqué par le monde entier, Ethan va découvrir que cette Entité connaît tout de lui, s'est alliée à des ennemis de son passé d'avant Mission Impossible, et que pour la vaincre et sauver l'avenir, il devra sacrifier ce qu'il a de plus cher au monde.",
                'pochette' => 'Mission_:_Impossible_-_Bilan_Mortel_Première_Partie-65690c58f20d2.jpg',
                'personne_id' => '2',
                'duree' => '163',
                'annee' => '2023',
                'rating' => '9.8'
            ],
            [
                'id' => 6,
                'titre' => 'Rapides et Dangereux 10',
                'categorie' => 'action',
                'resume' => "La famille est attaqué par aquaman.",
                'pochette' => 'Rapides_et_Dangereux_10-65690a8ee204a.jpg',
                'personne_id' => '2',
                'duree' => '141',
                'annee' => '2023',
                'rating' => '9.7'
            ],
            [
                'id' => 7,
                'titre' => 'Le monde de Dory',
                'categorie' => 'comedie',
                'resume' => "Dory, la sympathique poisson aux tanins bleus, mais distraite, part à la recherche de ses parents disparus depuis longtemps, et tout le monde apprend quelques petites choses sur le vrai sens de la famille en cours de route.",
                'pochette' => 'Le_monde_de_Dory-65690bbfba5ec.jpg',
                'personne_id' => '1',
                'duree' => '97',
                'annee' => '2016',
                'rating' => '1.2'
            ],
            [
                'id' => 8,
                'titre' => 'Renfield',
                'categorie' => 'horreur',
                'resume' => "Renfield, acolyte de Dracula et détenu à l'asile de fous depuis des décennies, rêve d'une vie loin du comte, de ses diverses exigences et de toutes les effusions de sang qui en découlent.",
                'pochette' => 'Renfield-65690abf5e6ff.jpg',
                'personne_id' => '1',
                'duree' => '93',
                'annee' => '2023',
                'rating' => '6.4'
            ],
            [
                'id' => 9,
                'titre' => 'Ne respire pas II',
                'categorie' => 'horreur',
                'resume' => "Un vieil aveugle reclus a recueilli chez lui une fillette dont la famille a été décimée dans un terrible incendie. Quelques années après cet événement tragique, des criminels en lien avec un réseau de trafic d'organes tentent sans relâche de kidnapper l'enfant de 11 ans à la curieuse mèche blanche.",
                'pochette' => 'Ne_respire_pas_II-65690d622bc24.jpg',
                'personne_id' => '2',
                'duree' => '98',
                'annee' => '2021',
                'rating' => '5.4'
            ],
            [
                'id' => 10,
                'titre' => 'Insidious: The Red Door',
                'categorie' => 'horreur',
                'resume' => "Afin de se débarrasser définitivement de leurs démons, Josh et son fils Dalton, à présent étudiant, doivent plonger encore plus profondément dans le Lointain pour affronter le sombre passé de leur famille et une multitude d'esprits toujours plus inquiétants qui se cachent derrière la Porte Rouge.",
                'pochette' => 'Insidious:_The_Red_Door-65690b7c1bbaa.jpg',
                'personne_id' => '2',
                'duree' => '107',
                'annee' => '2023',
                'rating' => '3.8'
            ],
            [
                'id' => 11,
                'titre' => 'Scream 6',
                'categorie' => 'horreur',
                'resume' => "Les survivants des derniers meurtres de Ghostface, les sœurs Samantha et Tara Carpenter et les jumeaux Chad et Mindy Meeks, quittent Woodsboro et entament un nouveau chapitre de leur vie à New York. Ils y sont à nouveau victimes d'une série de meurtres commis par un nouveau tueur Ghostface.",
                'pochette' => 'Scream_6-65690aa62a658.jpg',
                'personne_id' => '2',
                'duree' => '122',
                'annee' => '2023',
                'rating' => '6.5'
            ],
            [
                'id' => 12,
                'titre' => 'Evil Dead Rise',
                'categorie' => 'horreur',
                'resume' => "Les retrouvailles de deux sœurs sont interrompues par l'apparition de démons possesseurs de chair, les plongeant dans une bataille primitive pour leur survie et les confrontant à la version la plus cauchemardesque de la famille.",
                'pochette' => 'Evil_Dead_Rise-65690af393f73.jpg',
                'personne_id' => '2',
                'duree' => '96',
                'annee' => '2023',
                'rating' => '6.6'
            ],
            [
                'id' => 13,
                'titre' => 'La Nonne 2',
                'categorie' => 'horreur',
                'resume' => "En France, en 1956, un prêtre est assassiné dans un internat. Après la mort du prêtre, il se passe des choses qui ne peuvent plus être expliquées rationnellement. Sœur Irène est une nouvelle fois confrontée à un pouvoir démoniaque.",
                'pochette' => 'La_Nonne_2-65690b6194a27.webp',
                'personne_id' => '1',
                'duree' => '110',
                'annee' => '2023',
                'rating' => '5.7'
            ],
            [
                'id' => 14,
                'titre' => 'Shazam! La Rage des Dieux',
                'categorie' => 'comedie',
                'resume' => "Deux ans après avoir reçu les pouvoirs de Shazam et les avoirs partagés avec ses frères et sœurs, le jeune Billy Batson continue bon gré mal gré sa carrière de super-héros, tout en s'efforçant de gérer les changements qui surviennent au sein de sa famille, dont les membres commencent à avoir des intérêts divergent en grandissant. Mais sa récente ascension provoque des effets inattendus: en effet, pour empêcher Silvana d'acquérir ses pouvoirs deux ans auparavant, Billy Batson a accidentellement brisé la barrière entre son monde et le monde des dieux. En conséquence, une nouvelle menace apparaît lorsque les trois filles d'Atlas (Hespera, Kalypso et Anthea) veulent récupérer leurs pouvoirs et détruire le monde des hommes. Shazam et sa famille vont devoir unir leur force afin de trouver la solution pour vaincre les trois déesses, devenir de véritables héros et sauver le monde.",
                'pochette' => 'Shazam!_La_Rage_des_Dieux-65690c1f79287.jpg',
                'personne_id' => '2',
                'duree' => '131',
                'annee' => '2023',
                'rating' => '4.8'
            ],
            [
                'id' => 15,
                'titre' => 'Paint',
                'categorie' => 'comedie',
                'resume' => "Cela fait près de trente ans que Carl Nargle présente une émission éducative consacrée aux techniques picturales. Star d'une chaîne de télévision du Vermont, il voit sa popularité remise en question avec l'arrivée d'Ambrosia, une jeune peintre et animatrice qui lui prend rapidement des parts d'audience.",
                'pochette' => 'Paint-65690c14456f5.jpg',
                'personne_id' => '2',
                'duree' => '96',
                'annee' => '2023',
                'rating' => '4.9'
            ],
            [
                'id' => 16,
                'titre' => 'The Retirement Plan',
                'categorie' => 'comedie',
                'resume' => "Ashley et sa fille se tournent vers son ancien père, un clochard de plage, pour les aider à échapper à un chef du crime impitoyable.",
                'pochette' => 'The_Retirement_Plan-65690bd4c42e0.jpg',
                'personne_id' => '2',
                'duree' => '103',
                'annee' => '2023',
                'rating' => '5.1'
            ],
            [
                'id' => 17,
                'titre' => 'Le manoir hanté',
                'categorie' => 'comedie',
                'resume' => "L'histoire d'une mère et son fils qui engagent une équipe de pseudo-experts pour les aider à chasser les différents spectres et fantômes qui hantent leur maison.",
                'pochette' => 'Le_manoir_hanté-65690ae574b8a.jpg',
                'personne_id' => '2',
                'duree' => '123',
                'annee' => '2023',
                'rating' => '6.2'
            ],
            [
                'id' => 18,
                'titre' => 'Johnny English contre-attaque',
                'categorie' => 'comedie',
                'resume' => "Cette nouvelle aventure démarre lorsqu'une cyber-attaque révèle l'identité de tous les agents britanniques sous couverture. Johnny English devient alors le dernier espoir des services secrets. Rappelé de sa retraite, il plonge tête la première dans sa mission : découvrir qui est le génie du piratage qui se cache derrière ces attaques. Avec ses méthodes obsolètes, Johnny English doit relever les défis de la technologie moderne pour assurer la réussite de sa mission.",
                'pochette' => 'Johnny_English_contre-attaque-65690b08d44fd.png',
                'personne_id' => '2',
                'duree' => '89',
                'annee' => '2018',
                'rating' => '6.2'
            ]
        ]);
        }
}
