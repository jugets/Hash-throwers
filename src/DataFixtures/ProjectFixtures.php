<?php

namespace App\DataFixtures;

use App\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProjectFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        
        $project = new Project();
        $project->setName('Project-1');
        $project->setDomain('Banque');
        $project->setType('Static');
        $project->addFeature($this->getReference('feature_Identification'));
        $this->addReference('project_Project-1', $project);
        $manager->persist($project);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
          FeatureFixtures::class,
        ];
    }
}
