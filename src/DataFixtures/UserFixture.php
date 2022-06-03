<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixture extends Fixture
{

    private $faker;
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->faker = Factory::create();
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setName("Admin");
        $user->setEmail("master.anton.master@gmail.com");
        $user->setPassword($this->passwordHasher->hashPassword($user, "password"));
        $manager->persist($user);

        $manager->flush();
    }
}
