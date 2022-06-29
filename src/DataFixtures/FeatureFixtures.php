<?php

namespace App\DataFixtures;

use App\Entity\Feature;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FeatureFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        $feature = new Feature();
        $feature->setLanguage('php');
        $feature->setName('Identification');
        $this->addReference('feature_Identification', $feature);
        $manager->persist($feature);

        $manager->flush();
    }

}
