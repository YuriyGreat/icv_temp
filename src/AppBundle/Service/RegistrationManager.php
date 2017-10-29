<?php
/**
 * Created by PhpStorm.
 * User: yuriy
 * Date: 26.10.17
 * Time: 16.40
 */

namespace AppBundle\Service;

use Doctrine\Common\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use AppBundle\DBManager\UserDBManager;
use AppBundle\Entity\User;

class RegistrationManager
{
    private $dbManager;
    private $encoder;
    const DEFAULT_ROLE = 'ROLE_USER';

    public function __construct(ManagerRegistry $doctrine, UserPasswordEncoderInterface $encoder)
    {
        $this->dbManager = new UserDBManager($doctrine);
        $this->encoder = $encoder;
    }

    public function addUser(User $user)
    {
        $this->encodePassword($user);
        $user->setRole(self::DEFAULT_ROLE);
        $user->setIsActive(false);
        $this->dbManager->addUser($user);
    }

    public function getUserById($id): User
    {
        return $this->dbManager->getUserById($id);
    }

    private function encodePassword(User $user)
    {
        echo 'pss-'.$user->getPlainPassword();
        $encodedPassword = $this->encoder->encodePassword($user, $user->getPlainPassword());
        $user->setPassword($encodedPassword);
        echo '-epss-'.$user->getPassword();
    }
}