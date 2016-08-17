<?php
// src/AppBundle/DataFixtures/ORM/LoadUserData.php

namespace LgmBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;

    class LoadUserData implements FixtureInterface
    {
        public function load(ObjectManager $manager)
        {
            $userAdmin = new User();
            $userAdmin->setUsername('admin');
            $userAdmin->setPassword('test');

            $manager->persist($userAdmin);
            $manager->flush();
        }
    }