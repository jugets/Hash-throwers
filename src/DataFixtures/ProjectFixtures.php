<?php

namespace App\DataFixtures;

use App\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProjectFixtures extends Fixture implements DependentFixtureInterface
{
    public const DOMAIN = [
        'Bank',
        'Aeronautics',
        'Industrial engineering',
        'IT expertise',
        'Information systems engineering',
    ];

    public const TYPE = [
        'Static',
        'Dynamic',
        'E-shop',
        'Showcase site',
        'Content management',
    ];

    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i < 29; $i++) {

            $project = new Project();
            $project->setName('Project-' . $i);
            $project->setDomain($this->randDomain());
            $project->setType($this->randType());
            $project->addFeature($this->getReference('feature_' . $i));
            $manager->persist($project);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            FeatureFixtures::class,
        ];
    }

    private function randDomain(): string
    {
        $domainKey = array_rand(self::DOMAIN);
        $domain = self::DOMAIN[$domainKey];
        return $domain;
    }

    private function randType(): string
    {
        $typeKey = array_rand(self::TYPE);
        $type = self::TYPE[$typeKey];
        return $type;
    }
}
