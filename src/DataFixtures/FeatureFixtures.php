<?php

namespace App\DataFixtures;

use App\Entity\Feature;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FeatureFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        $feature = new Feature();
        $feature->setLanguage('php');
        $feature->setName('Identification');
        $this->addReference('feature_1', $feature);
        $manager->persist($feature);
        
        // $feature = new Feature();
        // $feature->setLanguage('js');
        // $feature->setName('Identification');
        // $this->addReference('feature_2', $feature);
        // $manager->persist($feature);
        
        $feature = new Feature();
        $feature->setLanguage('java');
        $feature->setName('Identification');
        $this->addReference('feature_2', $feature);
        $manager->persist($feature);
        
        $feature = new Feature();
        $feature->setLanguage('C#');
        $feature->setName('Identification');
        $this->addReference('feature_3', $feature);
        $manager->persist($feature);
        
        $feature = new Feature();
        $feature->setLanguage('ruby');
        $feature->setName('Identification');
        $this->addReference('feature_4', $feature);
        $manager->persist($feature);
        
        // $feature = new Feature();
        // $feature->setLanguage('php');
        // $feature->setName('Payment');
        // $this->addReference('feature_6', $feature);
        // $manager->persist($feature);
        
        $feature = new Feature();
        $feature->setLanguage('js');
        $feature->setName('Payment');
        $this->addReference('feature_5', $feature);
        $manager->persist($feature);
        
        $feature = new Feature();
        $feature->setLanguage('java');
        $feature->setName('Payment');
        $this->addReference('feature_6', $feature);
        $manager->persist($feature);
        
        // $feature = new Feature();
        // $feature->setLanguage('C#');
        // $feature->setName('Payment');
        // $this->addReference('feature_9', $feature);
        // $manager->persist($feature);
        
        $feature = new Feature();
        $feature->setLanguage('ruby');
        $feature->setName('Payment');
        $this->addReference('feature_7', $feature);
        $manager->persist($feature);
        
        $feature = new Feature();
        $feature->setLanguage('php');
        $feature->setName('Shopping cart');
        $this->addReference('feature_8', $feature);
        $manager->persist($feature);
        
        $feature = new Feature();
        $feature->setLanguage('js');
        $feature->setName('Shopping cart');
        $this->addReference('feature_9', $feature);
        $manager->persist($feature);
        
        // $feature = new Feature();
        // $feature->setLanguage('java');
        // $feature->setName('Shopping cart');
        // $this->addReference('feature_13', $feature);
        // $manager->persist($feature);
        
        $feature = new Feature();
        $feature->setLanguage('C#');
        $feature->setName('Shopping cart');
        $this->addReference('feature_10', $feature);
        $manager->persist($feature);
        
        // $feature = new Feature();
        // $feature->setLanguage('ruby');
        // $feature->setName('Shopping cart');
        // $this->addReference('feature_15', $feature);
        // $manager->persist($feature);
        
        $feature = new Feature();
        $feature->setLanguage('php');
        $feature->setName('Filter');
        $this->addReference('feature_11', $feature);
        $manager->persist($feature);
        
        $feature = new Feature();
        $feature->setLanguage('js');
        $feature->setName('Filter');
        $this->addReference('feature_12', $feature);
        $manager->persist($feature);
        
        $feature = new Feature();
        $feature->setLanguage('java');
        $feature->setName('Filter');
        $this->addReference('feature_13', $feature);
        $manager->persist($feature);
        
        // $feature = new Feature();
        // $feature->setLanguage('C#');
        // $feature->setName('Filter');
        // $this->addReference('feature_19', $feature);
        // $manager->persist($feature);
        
        $feature = new Feature();
        $feature->setLanguage('ruby');
        $feature->setName('Filter');
        $this->addReference('feature_14', $feature);
        $manager->persist($feature);
        
        $feature = new Feature();
        $feature->setLanguage('php');
        $feature->setName('Send mail');
        $this->addReference('feature_15', $feature);
        $manager->persist($feature);
        
        $feature = new Feature();
        $feature->setLanguage('js');
        $feature->setName('Send mail');
        $this->addReference('feature_16', $feature);
        $manager->persist($feature);
        
        $feature = new Feature();
        $feature->setLanguage('java');
        $feature->setName('Send mail');
        $this->addReference('feature_17', $feature);
        $manager->persist($feature);
        
        $feature = new Feature();
        $feature->setLanguage('C#');
        $feature->setName('Send mail');
        $this->addReference('feature_18', $feature);
        $manager->persist($feature);
        
        // $feature = new Feature();
        // $feature->setLanguage('ruby');
        // $feature->setName('Send mail');
        // $this->addReference('feature_25', $feature);
        // $manager->persist($feature);
        
        $feature = new Feature();
        $feature->setLanguage('php');
        $feature->setName('Modal');
        $this->addReference('feature_19', $feature);
        $manager->persist($feature);
        
        $feature = new Feature();
        $feature->setLanguage('js');
        $feature->setName('Modal');
        $this->addReference('feature_20', $feature);
        $manager->persist($feature);
        
        // $feature = new Feature();
        // $feature->setLanguage('java');
        // $feature->setName('Modal');
        // $this->addReference('feature_28', $feature);
        // $manager->persist($feature);
        
        $feature = new Feature();
        $feature->setLanguage('C#');
        $feature->setName('Modal');
        $this->addReference('feature_21', $feature);
        $manager->persist($feature);
        
        $feature = new Feature();
        $feature->setLanguage('ruby');
        $feature->setName('Modal');
        $this->addReference('feature_22', $feature);
        $manager->persist($feature);
        
        $feature = new Feature();
        $feature->setLanguage('php');
        $feature->setName('Carousel');
        $this->addReference('feature_23', $feature);
        $manager->persist($feature);
        
        // $feature = new Feature();
        // $feature->setLanguage('js');
        // $feature->setName('Carousel');
        // $this->addReference('feature_32', $feature);
        // $manager->persist($feature);
        
        $feature = new Feature();
        $feature->setLanguage('java');
        $feature->setName('Carousel');
        $this->addReference('feature_24', $feature);
        $manager->persist($feature);
        
        $feature = new Feature();
        $feature->setLanguage('C#');
        $feature->setName('Carousel');
        $this->addReference('feature_25', $feature);
        $manager->persist($feature);
        
        $feature = new Feature();
        $feature->setLanguage('ruby');
        $feature->setName('Carousel');
        $this->addReference('feature_26', $feature);
        $manager->persist($feature);
        
        // $feature = new Feature();
        // $feature->setLanguage('php');
        // $feature->setName('API REST');
        // $this->addReference('feature_36', $feature);
        // $manager->persist($feature);
        
        $feature = new Feature();
        $feature->setLanguage('js');
        $feature->setName('API REST');
        $this->addReference('feature_27', $feature);
        $manager->persist($feature);
        
        $feature = new Feature();
        $feature->setLanguage('java');
        $feature->setName('API REST');
        $this->addReference('feature_28', $feature);
        $manager->persist($feature);
        
        // $feature = new Feature();
        // $feature->setLanguage('C#');
        // $feature->setName('API REST');
        // $this->addReference('feature_39', $feature);
        // $manager->persist($feature);
        
        // $feature = new Feature();
        // $feature->setLanguage('ruby');
        // $feature->setName('API REST');
        // $this->addReference('feature_29', $feature);
        // $manager->persist($feature);
        


        $manager->flush();
    }

}
