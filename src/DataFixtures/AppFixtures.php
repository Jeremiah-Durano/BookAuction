<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // create objects
        $userUser = $this->createUser('user', 'user');
        $userAdmin = $this->createUser('admin', 'admin', ['ROLE_ADMIN']);
        // store to DB
        $manager->persist($userUser);
        $manager->persist($userAdmin);
        $manager->flush();

    }
    /**
     * @var UserPasswordEncoderInterface */
    private $encoder;
    public function __construct(UserPasswordEncoderInterface $encoder) {
        $this->encoder = $encoder;
    }
    private function createUser($username, $plainPassword, $roles = ['ROLE_USER']):User {

        $user = new User();
        $user->setUsername($username);
        $user->setRoles($roles);
        // password - and encoding
        $encodedPassword = $this->encodePassword($user, $plainPassword);
        $user->setPassword($encodedPassword);
        return $user;
    }
    private function encodePassword($user, $plainPassword):string {

        $encodedPassword = $this->encoder->encodePassword($user, $plainPassword);

        return $encodedPassword;
    }

}
