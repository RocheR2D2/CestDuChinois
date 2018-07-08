<?php
/**
 * Created by PhpStorm.
 * User: roche
 * Date: 02/07/18
 * Time: 17:23
 */

namespace RecetteBundle\DataFixtures;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use RecetteBundle\Entity\Tags;

class TagsFixtures extends Fixture
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 10; $i++) {

            $tag = new Tags();
            $tag->setName("tag".$i);
            $manager->persist($tag);
        }

        $manager->flush();
    }
}