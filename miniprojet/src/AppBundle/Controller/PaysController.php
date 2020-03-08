<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Pays;
use AppBundle\Entity\Adresse;
use AppBundle\Repository\PaysRepository;
use AppBundle\Form\PaysType;
use AppBundle\Form\AdresseType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class PaysController extends Controller
{
    /**
     * @Route("/pays", name="pays_list")
     */
    public function listAction(Request $request)
    {
        
        $adresse = new Adresse();
        $form = $this->createForm(AdresseType::class, $adresse);
        $form->handleRequest($request);
      
        if($form->isSubmitted()&& $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($adresse);
            $em->flush();
        }
      

        return $this->render('default/pays.html.twig', array(
            
            'form' => $form->CreateView()
           
        ));
        return new Reponse('VALIDER');

    }

    /**
     * @Route("/add_pays", name="pays_add")
     */
    public function addAction(Request $request){
        // ("add pays");
        $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Pays');
        $listPays = $repository->findAll();

        return $this->render('default/client.html.twig',array(
            'listPays' => $listPays,
         
        ));
    }
}
