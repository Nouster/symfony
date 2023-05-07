<?php

namespace App\DataFixtures;

use App\Entity\Game;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{

    private const NB_GAMES = 150;

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for ($i=0; $i < self::NB_GAMES; $i++) {
            $game = new Game();
            $game
            ->setName($faker->word())
            ->setPicture($faker->text())
            ->setDescription($faker->realText())
            ->setLaunch($faker->dateTimeBetween())
            ->setStartDate($faker->dateTimeBetween())
            ->setLastPlayedDate($faker->dateTimeBetween())
            ->setPlayCount($faker->numberBetween(0, 2000))
            ->setGotFrom($faker->word());
            
            $manager->persist($game);
        }
        

        $manager->flush();
    }
}
