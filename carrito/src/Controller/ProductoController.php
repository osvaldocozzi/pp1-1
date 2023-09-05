<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;
use App\Repository\ProductRepository;

class ProductoController extends AbstractController
{
 /**
 * @Route("/product/{id}", name="product_show")
 */
public function listarProductos(ManagerRegistry $doctrine, $id): Response
{
   $repositorio = $doctrine->getRepository(Product::class);
   $product = $repositorio->findAll();
if (!$product) {
throw $this->createNotFoundException('No existe');
}
}
 
 /**
 * @Route("/", name="listar_productos")
 */
 public function listarProducto(ManagerRegistry $doctrine, $id): Response
 {
    $productos = $alma->findAll();

 return $this->render('producto/lista.html.twig', ['productos' => $productos]);

 }

 /**
 * @Route("/producto/{id}", name="detalle_producto")
 */
public function detalleProducto(ManagerRegistry $doctrine, $id): Response
{
   $producto = $alma->find($id);

return $this->render('producto/detalle.html.twig', ['productoDeta' => $producto]);

}

}


?>