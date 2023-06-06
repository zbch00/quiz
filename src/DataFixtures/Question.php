<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
class Question extends Fixture implements DependentFixtureInterface
{

    public function load(ObjectManager $manager): void
    {
       $question = new \App\Entity\Question();
       $question->setReponseCorrect("Un oiseau");
       $question->setReponse(['Un poisson','Un canidé','Un oiseau','Un félin']);
       $question->setTheme($this->getReference('theme1'));
       $question->setIntitule('Quel animal est le roitelet ?');
         $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("babille");
        $question->setReponse(['babille','roucoule','glougloute','craille']);
        $question->setTheme($this->getReference('theme1'));
        $question->setIntitule('Quand elle crie, on dit qu’une grive …');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Le guépard");
        $question->setReponse(['Le léopard','Le guépard','La panthère','Le puma']);
        $question->setTheme($this->getReference('theme1'));
        $question->setIntitule('Quel est le seul félin qui ne peut rentrer ses griffes ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Les insectes");
        $question->setReponse(['Les poissons','Les oiseaux','Les insectes','Les serpents']);
        $question->setTheme($this->getReference('theme1'));
        $question->setIntitule("Quel genre d’animaux un entomologiste étudie-t-il ?");
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("De l'Amérique");
        $question->setReponse(['De Sibérie','De l\'Inde','Du Moyen-Orient','De l\'Amérique']);
        $question->setTheme($this->getReference('theme1'));
        $question->setIntitule("De quelle région du monde le puma est-il originaire ?");
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("La Creuse");
        $question->setReponse(['Le Doubs','Le Calvados','La Creuse','La Côte d\'Or']);
        $question->setTheme($this->getReference('theme2'));
        $question->setIntitule("Quel département a pour code le 23 ?");
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Privas");
        $question->setReponse(['Privas','Mende','Laon','Annonay']);
        $question->setTheme($this->getReference('theme2'));
        $question->setIntitule("Quel est le chef-lieu de l’Ardèche ?");
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("D'un massif volcanique");
        $question->setReponse(['D\'un massif forestier','D\'un massif volcanique','D\'une rivière','Du nom de la province d\'Ancien Régime']);
        $question->setTheme($this->getReference('theme2'));
        $question->setIntitule("De quoi le Cantal tire-t-il son nom ?");
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("La Gironde");
        $question->setReponse(['La Côte d\'Or','La Gironde','La Dordogne','Les Landes']);
        $question->setTheme($this->getReference('theme2'));
        $question->setIntitule("La Guyane est le plus grand département français. Mais en France métropolitaine, lequel est premier ?");
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Les Samariens");
        $question->setReponse(['Les Sommois','Les Samarois','Les Sommiens','Les Samariens']);
        $question->setTheme($this->getReference('theme2'));
        $question->setIntitule("Depuis 2012, quel est le gentilé des habitants de la Somme ?");
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("1 392 684 km");
        $question->setReponse(['7 456 298 km','10 143 859 km','1 392 684 km','3 904 398 km']);
        $question->setTheme($this->getReference('theme3'));
        $question->setIntitule('Quel est le diamètre du Soleil ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("300 000 km/s");
        $question->setReponse(['400 000 km/s','3000 km/s','300 000 km/s','3 000 000 km/s']);
        $question->setTheme($this->getReference('theme3'));
        $question->setIntitule('Quelle est, environ, la vitesse de la lumière ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Voyager 1");
        $question->setReponse(['Pioneer 7','Il n\'y a jamais eu de voyage interstellaire','Voyager 1','Galileo']);
        $question->setTheme($this->getReference('theme3'));
        $question->setIntitule('Quel engin a effectué le premier un voyage interstellaire ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Une planète géante gazeuse");
        $question->setReponse(['Une étoile','Une planète tellurique','Une planète géante gazeuse','Un satellite à atmosphère dense']);
        $question->setTheme($this->getReference('theme3'));
        $question->setIntitule('De quel type de planète est Jupiter ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Une nébuleuse");
        $question->setReponse(['Une supernova','Une comète','Une nébuleuse','Un trou noir']);
        $question->setTheme($this->getReference('theme3'));
        $question->setIntitule('Comment nomme-t-on un nuage de gaz et de poussières répandu dans l’espace interstellaire ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("savoyard");
        $question->setReponse(['normand','auvergnat','savoyard','bourguignon']);
        $question->setTheme($this->getReference('theme4'));
        $question->setIntitule('Le beaufort est un fromage...');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("À sa forme carrée");
        $question->setReponse(['À sa forme cylindrique','À sa forme ronde','À sa forme carrée','À sa forme en cœur']);
        $question->setTheme($this->getReference('theme4'));
        $question->setIntitule('À quoi reconnaît-on souvent un Pont-l\'Évêque ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("L'abondance");
        $question->setReponse(['Le brie','Le morbier','Le pélardon','L\'abondance']);
        $question->setTheme($this->getReference('theme4'));
        $question->setIntitule('Parmi les fromages suivants, sélectionnez celui qui est à pâte pressée cuite :');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("La mimolette");
        $question->setReponse(['Le bergues','Le gouda','Le bleu','La mimolette']);
        $question->setTheme($this->getReference('theme4'));
        $question->setIntitule('Quel est fromage est surnommé « la boule de Lille » ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("de la tyrosine");
        $question->setReponse(['de la phénylalanine','du saccharose','des cristaux de sel','de la tyrosine']);
        $question->setTheme($this->getReference('theme4'));
        $question->setIntitule('Le comté est notamment réputé pour les petits cristaux qu\'on trouve dans sa pâte, qui sont...');
        $manager->persist($question);

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            Theme::class
        ];
    }
}
