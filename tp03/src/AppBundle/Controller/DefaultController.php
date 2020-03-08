<?php

namespace AppBundle\Controller;
use AppBundle\Entity\Produit;
use AppBundle\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
   /**
    * @Route("/addProduit/{nom}/{prix}")
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
    * @Route("/ListProduit",name="list")
    */

    public function addProduitsAction(){
        $produits=$this->getDoctrine()->getRepository("AppBundle:Produit")->findAll();//repository est un gestionnaire de entities
       return  array('produits'=>$produits);
    }
    
     /**
    * @Route("/formProduit")
    */

   /*  public function formProduitsAction(Request $request){
       $produit=new Produit();
        $form=$this->createFormBuilder($produit)
        ->add('nom','text')
        ->add('prix','text')
        ->add('Add','submit')
        ->getForm();
        //pour enregistrer la saisie
        $form->handleRequest($request);
        //pour verifier la validation
        if($form->isValide()){
            $em=$this->getDoctrine()->getManager();
            //l'enregistrement dans bd
            $em->persist($produit);
            $em->flush();
            $this->redirect($this->generateUrl("list"));
        }
       return  array('f'=>$form->createView());
    } */
}
