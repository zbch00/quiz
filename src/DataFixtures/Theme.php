<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Theme extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $theme = new \App\Entity\Theme();
        $theme->setLibelle('Rocket League');
        $this->addReference('theme1',$theme);
        $manager->persist($theme);

        $theme2 = new \App\Entity\Theme();
        $theme2->setLibelle('Musique');
        $this->addReference('theme2',$theme2);
        $manager->persist($theme2);

        $theme3 = new \App\Entity\Theme();
        $theme3->setLibelle('UFC');
        $this->addReference('theme3',$theme3);
        $manager->persist($theme3);
        $manager->flush();

        $theme4 = new \App\Entity\Theme();
        $theme4->setLibelle('Manga & Animé');
        $this->addReference('theme4',$theme4);
        $manager->persist($theme4);
        $manager->flush();

        $theme5 = new \App\Entity\Theme();
        $theme5->setLibelle('Sport');
        $this->addReference('theme5',$theme5);
        $manager->persist($theme3);
        $manager->flush();

        $theme6 = new \App\Entity\Theme();
        $theme6->setLibelle('Film');
        $this->addReference('theme6',$theme6);
        $manager->persist($theme3);
        $manager->flush();

        $theme7 = new \App\Entity\Theme();
        $theme7->setLibelle('Série');
        $this->addReference('theme7',$theme7);
        $manager->persist($theme7);
        $manager->flush();

        $theme8 = new \App\Entity\Theme();
        $theme8->setLibelle('Jeux vidéo');
        $this->addReference('theme8',$theme8);
        $manager->persist($theme8);
        $manager->flush();

        $theme9 = new \App\Entity\Theme();
        $theme9->setLibelle('Animaux');
        $this->addReference('theme9',$theme9);
        $manager->persist($theme9);
        $manager->flush();

        $theme10 = new \App\Entity\Theme();
        $theme10->setLibelle('Capitale');
        $this->addReference('theme10',$theme10);
        $manager->persist($theme10);
        $manager->flush();

        $theme11 = new \App\Entity\Theme();
        $theme11->setLibelle('Histoire');
        $this->addReference('theme11',$theme11);
        $manager->persist($theme11);
        $manager->flush();

        $theme12 = new \App\Entity\Theme();
        $theme12->setLibelle('Science');
        $this->addReference('theme12',$theme12);
        $manager->persist($theme12);
        $manager->flush();
    }
}
