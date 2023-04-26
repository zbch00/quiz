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


    }
}
