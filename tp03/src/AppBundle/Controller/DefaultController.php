<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
   /**
    * @Route("addProduit/{nom}/{prix}")
    *@Template()
    */

    public function addProduitAction($nom,$prix){
        $produit=new Produit();
        $produit->setNom($nom);
        $produit->setPrix($prix);
        
       return  array('a'=>$a,'b'=>$b,'somme'=>$s);
    }
}
