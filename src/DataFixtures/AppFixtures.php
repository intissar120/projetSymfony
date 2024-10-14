<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    protected $encoder;
    public function __construct(UserPasswordHasherInterface $encoder){
        $this->encoder = $encoder;
    }
    public function load(ObjectManager $manager): void
    {
         $user = new User();
         $user ->setNom('EL Qadi')->setPrenom('Intissar');
         $user ->setEmail('intissar.elqadi@gmail.com');
         $encoded = $this->encoder->hashPassword($user,'123');
         $user ->setPassword($encoded);
         $user ->setRoles(['ROLE_USER']);

         $admin = new User();
         $encodedAdmin = $this->encoder->hashPassword($admin,'123');
         $admin->setNom('EL Qadi')->setPrenom('Intissar')->setEmail('admin@gmail.com')
             ->setPassword($encodedAdmin)
             ->setRoles(['ROLE_ADMIN']);

         $employee = new User();

         $encodedEmployee = $this->encoder->hashPassword($employee,'123');
         $employee->setNom('EL Qadi')->setPrenom('Intissar')->setEmail('Jules.Dupont@gmail.com')
             ->setPassword($encodedEmployee)
             ->setRoles(['ROLE_EMPLOYEE']);

        $manager->persist($user);
        $manager->persist($admin);
        $manager->persist($employee);

        $manager->flush();
    }
}
