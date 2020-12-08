<?php

namespace App\DataFixtures;

use App\Entity\User;
use Faker;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 1000; $i++) {
            $user = new User();
            $user->setName($faker->firstName);
            $user->setSurname($faker->lastName);
            $user->setAge(rand(15, 99));
            $user->setEmail($faker->email);
            $user->setPhone($faker->phoneNumber);
            $manager->persist($user);
        }
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
