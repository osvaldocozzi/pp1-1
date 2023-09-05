<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Producto;


class ProductoFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        for($i = 1; $i < 11; $i++)
        {

            $producto = new Producto();
            $producto->setNombre('producto '.$i);
            $producto->setPrecio(mt_rand(10, 100));
            $producto->setDescripcion('Descripcion producto');
            $producto->setImagen('/imagen/producto'.$i.'jpg');
            $manager->persist($producto);
        }
        $manager->flush();
    }
}
