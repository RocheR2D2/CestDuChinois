<?php
/**
 * Created by PhpStorm.
 * User: roche
 * Date: 27/06/18
 * Time: 11:37
 */

namespace RecetteBundle\Security;


use RecetteBundle\Entity\Recette;
use SecuriteBundle\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class RecetteVoter extends Voter
{

    const VIEW = 'view';
    const EDIT = 'edit';
    const DELETE = 'delete';

    /**
     * Determines if the attribute and subject are supported by this voter.
     *
     * @param string $attribute An attribute
     * @param mixed $subject The subject to secure, e.g. an object the user wants to access or any other PHP type
     *
     * @return bool True if the attribute and subject are supported, false otherwise
     */
    protected function supports($attribute, $subject)
    {

        if(!in_array($attribute, [self::VIEW, self::EDIT, self::DELETE])) {
            return false;
        }

        if(!$subject instanceof  Recette) {
            return false;
        }

        return true;
    }

    /**
     * Perform a single access check operation on a given attribute, subject and token.
     * It is safe to assume that $attribute and $subject already passed the "supports()" method check.
     *
     * @param string $attribute
     * @param mixed $subject
     * @param TokenInterface $token
     *
     * @return bool
     */
    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
        $user =  $token->getUser();
        //Vérifier si utilisateur est connecté
        if(!$user instanceof User) {
            return false;
        }

        //Vérifier si utilisateur est propritaire des recettes
        if($user !== $subject->getUser()) {
            return false;
        }

        return true;
    }
}