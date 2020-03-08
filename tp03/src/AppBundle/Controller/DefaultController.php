<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
   /**
    * @Route("/addProduit/{nom}/{prix}")
    *@Template()
    */

    public function addProduitAction($nom,$prix){
        $produit=new Produit();
        $produit->setNom($nom);
        $produit->setPrix($prix);
        //entity manager permet d'accéder a toute les opérations classiques d'accès au BD (exple JPA)
        $em=$this->getDoctrine()->getManager();
        //pour enregistrer un objet
        $em->persist($produit);

        $em->flush();
       return  array('produit'=>$p);
    }

     /**
    * @Route("/ListProduit")
    *@Template()
    */

    public function addProduitsAction(){
        
       return  array('produit'=>$p);
    }
}
