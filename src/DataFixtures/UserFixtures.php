<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    public function __construct(
        private UserPasswordHasherInterface $passwordEncoder
    ) {}

    public function load(ObjectManager $manager): void
    {
        // données pour les DWWM
        $user = new User();
        $user->setEmail('dwwm@dwwm.dwwm');
        $user->setNom('Dwwm');
        $user->setPrenom('Dwwm');
        $user->setPassword($this->passwordEncoder->hashPassword($user, 'dwwm'));
        $user->setRoles(['ROLE_DWWM']);
        $user->setIsVerified(true);
        $manager->persist($user);

        $manager->flush();
    }
}
