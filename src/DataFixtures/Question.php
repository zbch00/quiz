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
       $question->setReponseCorrect("Kaydop");
       $question->setReponse(['Kronovi','Kaydop','JSTN','Vatira']);
       $question->setTheme($this->getReference('theme1'));
       $question->setIntitule('Comment s\'appelle le joueur Alexandre Courant ?');
         $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Octane");
        $question->setReponse(['Octane','Dominus','Fennec','Paladin']);
        $question->setTheme($this->getReference('theme1'));
        $question->setIntitule('Quel est le véhicule quon a en tout premier ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Psyonix");
        $question->setReponse(['EA','Ubisoft','Activision','Psyonix']);
        $question->setTheme($this->getReference('theme1'));
        $question->setIntitule('Quelle est l\'entreprise qui a créer Rocket League ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("2015");
        $question->setReponse(['2014','2015','2016','2017']);
        $question->setTheme($this->getReference('theme1'));
        $question->setIntitule("Quelle est l'année de sortie de Rocket League ?");
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Vitality");
        $question->setReponse(['Dignitas','Vitality','NRG','Cloud 9']);
        $question->setTheme($this->getReference('theme1'));
        $question->setIntitule("Qui a gagné les RLCS de la saison 7 ?");
        $manager->persist($question);


        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Eminem");
        $question->setReponse(['Kanye West','Travis Scott','Kendrick Lamar','Eminem']);
        $question->setTheme($this->getReference('theme2'));
        $question->setIntitule('Quel rappeur a fait la chanson Lose Yourself ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Bring Me The Horizon");
        $question->setReponse(['Bring Me The Horizon','I Prevail','Bad Omens','Asking Alexandria']);
        $question->setTheme($this->getReference('theme2'));
        $question->setIntitule('Quel groupe de musique a créer l\'album Sempiternal ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Stoney");
        $question->setReponse(['Twelve Carat Toothache','beerbongs & bentley','Stoney','Hollywoods Bleeding']);
        $question->setTheme($this->getReference('theme2'));
        $question->setIntitule('Quel est le premier album de Post Malone ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("a-ha");
        $question->setReponse(['a-ha','Duran Duran','Bon Jovi','The Cranberries']);
        $question->setTheme($this->getReference('theme2'));
        $question->setIntitule('Quel groupe a chanté la chanson Take on Me ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Michael Jackson");
        $question->setReponse(['Bruno Mars','Prince','Elton John','Michael Jackson']);
        $question->setTheme($this->getReference('theme2'));
        $question->setIntitule('Qui a chanté la chanson Billie Jean ?');
        $manager->persist($question);



        $question = new \App\Entity\Question();
        $question->setReponseCorrect("GSP");
        $question->setReponse(['GSP','Rory Mcdonald','Mark Hominick','Carlos Newton']);
        $question->setTheme($this->getReference('theme3'));
        $question->setIntitule('Quel est le combattant Canadien avec un record de 26-2 ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Ciryl Gane");
        $question->setReponse(['Cheick Kongo','Ciryl Gane','Cyrille Diabate','Alan Baudot']);
        $question->setTheme($this->getReference('theme3'));
        $question->setIntitule('Quel combattant français a affronté Jon Jones en 2023 ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Dana White");
        $question->setReponse(['Conor Mcgregor','Bruce Buffer','Daniel Cormier','Dana White']);
        $question->setTheme($this->getReference('theme3'));
        $question->setIntitule('Qui est le président de l\'UFC ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Ouzbékistan");
        $question->setReponse(['Ouzbékistan','Tadjikistan','Kazakhstan','Kirghizistan']);
        $question->setTheme($this->getReference('theme3'));
        $question->setIntitule('De quel pays est originaire Shavkat Rakhmonov ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Judo");
        $question->setReponse(['Karaté','Lutte','Judo','Boxe']);
        $question->setTheme($this->getReference('theme3'));
        $question->setIntitule('De quel est médaillé Olympique Ronda Rousey ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Dustin Poirier");
        $question->setReponse(['José Aldo','Khabib Nurmagomedov','Nate Diaz','Dustin Poirier']);
        $question->setTheme($this->getReference('theme3'));
        $question->setIntitule('Contre qui Conor Mcgregor s\'est il combattu a 3 reprises ?');
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
