<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Negocio\Almacen;

class ProductoController extends AbstractController
{
 /**
 * @Route("/", name="listar_productos")
 */
 public function listarProductos(Almacen $alma): Response
 {
    $productos = $alma->findAll();

 return $this->render('producto/lista.html.twig', ['productos' => $productos]);

 }
}


?>