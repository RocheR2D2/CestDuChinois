<?php
/**
 * Created by PhpStorm.
 * User: roche
 * Date: 19/06/18
 * Time: 11:02
 */

namespace SecuriteBundle\DataFixtures;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use SecuriteBundle\Entity\User;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager) {



        for ($i = 0; $i < 10; $i++) {
            $user = new User();
            $user->setFirstname('firstname'.$i);
            $user->setLastname('lastname'.$i);
            $user->setSex('F');
            $user->setEmail('user'.$i.'@hotmail.com');
            $user->setPassword('$2y$13$vbonEYxHT6T9iSF1ePGQ3uwDMXJ7L7DSQsnqKiyjad6mDpA1yaQHq');
            $user->setUsername('user'.$i);
            $user->setRoles(['ROLE_USER']);
            $manager->persist($user);
        }


        $user1 = new User();
        $user1->setFirstname('Julia');
        $user1->setLastname('NVN');
        $user1->setSex('F');
        $user1->setEmail('julia.navennec@hotmail.com');
        $user1->setPassword('$2y$13$vbonEYxHT6T9iSF1ePGQ3uwDMXJ7L7DSQsnqKiyjad6mDpA1yaQHq');
        $user1->setUsername('julianvn');
        $user1->setRoles(['ROLE_ADMIN']);


        $user2 = new User();
        $user2->setFirstname('Haoshi');
        $user2->setLastname('CHEN');
        $user2->setSex('M');
        $user2->setEmail('rocher2d2@gmail.com');
        $user2->setPassword('$2y$13$vbonEYxHT6T9iSF1ePGQ3uwDMXJ7L7DSQsnqKiyjad6mDpA1yaQHq');
        $user2->setUsername('rocher2d2');
        $user2->setRoles(['ROLE_SUPER_ADMIN']);


        $manager->persist($user1);
        $manager->persist($user2);
        $manager->flush();
    }
}