<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Theme extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $theme = new \App\Entity\Theme();
        $theme->setLibelle('Animaux');
        $this->addReference('theme1',$theme);
        $manager->persist($theme);

        $theme2 = new \App\Entity\Theme();
        $theme2->setLibelle('Départements');
        $this->addReference('theme2',$theme2);
        $manager->persist($theme2);

        $theme3 = new \App\Entity\Theme();
        $theme3->setLibelle('Astronomie');
        $this->addReference('theme3',$theme3);
        $manager->persist($theme3);
        $manager->flush();

        $theme4 = new \App\Entity\Theme();
        $theme4->setLibelle('Fromages');
        $this->addReference('theme4',$theme4);
        $manager->persist($theme4);
        $manager->flush();






    }
}
