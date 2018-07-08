<?php
/**
 * Created by PhpStorm.
 * User: roche
 * Date: 28/06/18
 * Time: 11:18
 */

namespace RecetteBundle\Form;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\PersistentCollection;
use RecetteBundle\Entity\Tags;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class TagsTransformer implements DataTransformerInterface
{

    /**
     *
     * @param mixed $value The value in the original representation
     *
     * @return mixed The value in the transformed representation
     *
     * @throws TransformationFailedException when the transformation fails
     */
    public function transform($array)
    {

        $newArray = array();

        if (!($array instanceof PersistentCollection)) {
            dump($array->toArray());
            return new ArrayCollection();
        }


        foreach ($array as $key => $value) {
            $newArray[] = $value;
        }


        dump($newArray);
        return new ArrayCollection($newArray);


    }


    public function reverseTransform($value)
    {
        // TODO: Implement reverseTransform() method.
        $tagname =  explode(',', $value);
        $tags = [];
        foreach($tagname as $name) {
            $tag = new Tags();
            $tag->setName($name);
            $tags[] = $tag;

        }

        return $tags;
    }
}