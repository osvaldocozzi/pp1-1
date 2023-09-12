<?php
namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;


Class UsuarioFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        for($i = 0; $i < 5; $i++)
        {
            $user = new User();
            $user -> setNombre('Usuario'.$i);
            $user -> setEmail('usuario'.$i.'@gmail.com');
            $user -> setPassword('$2y$13$Y.NRlsQqC16mWyJvm79qi.Vhvazw0a8s3caF.DzE2c6LVFyQwKK7K');
            $manager ->persist($user);
        }
        $manager->flush();
    }
}
