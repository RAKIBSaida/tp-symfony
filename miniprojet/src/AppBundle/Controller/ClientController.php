<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Client;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Adresse;
use AppBundle\Entity\Ville;
use AppBundle\Repository\ClientRepository;
use AppBundle\Form\ClientType;
use AppBundle\Form\VilleType;

class ClientController extends Controller
{
    /**
     * @Route("/client", name="client_list")
     */
    public function listAction(Request $request)
    {

        $client = new Client();

        $form = $this->createForm(clientType::class, $client);

        $form->handleRequest($request);

        if($form->isSubmitted()&& $form->isValid()){
            //dump($client);die;
            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();

        }


        return $this->render('default/client.html.twig', array(

            'form' => $form->CreateView()


        ));

        return new Reponse('VALIDER');
    }

    /**
     * @Route("/ville", name="ville_list")
     */
    public function VilleAction(Request $request)
    {

        $ville = new Ville();

        $form = $this->createForm(villeType::class, $ville);

        $form->handleRequest($request);

        if($form->isSubmitted()&& $form->isValid()){
            //dump($ville);die;
            $em = $this->getDoctrine()->getManager();
            $em->persist($ville);
            $em->flush();

        }

        return $this->render('default/client.html.twig', array(

            'form' => $form->CreateView()

        ));
        return new Reponse('VALIDER');
    }





    /**
     * @Route("/getVille", name="GEtville")
     */
    public function newAction(Request $request)
    {

        $ville = new  Ville();
        // die('get ville');
        $pays_id = $request->query->get('pays_id');

        $em = $this->getDoctrine()->getManager();

        $listVilles = $em->getRepository("AppBundle\Entity\Ville")->findby(array('IdPays' => $pays_id));

        $output = array(
            //  'data' => array()
        );
        $i = 0;
        foreach ($listVilles as $villes) {
            $output[$i] = [
                'libelle'=> $villes->getLibelle(),
                'id'=> $villes->getId(),
            ];
            $i++;
            //   var_dump($i);
        }
        sort($output);
        //  var_dump($villes);
//       dump($output);
        return new JsonResponse($output);
        // var_dump($villes);


    }



    /**
     * @Route("/Add_ville_list", name="Add_ville_list")
     *
     */
    public function AddAction(Request $request)
    {
        $IdPays=$request->get('IdPays');
        $code=$request->get('code');
        $libelle=$request->get('Libelle');
        $codePostale=$request->get('codepostale');
        $em = $this->getDoctrine()->getManager();
        $ville = $em->getRepository("AppBundle\Entity\Ville")->findOneBy(array('libelle' =>$libelle));
        if($ville != null){

            $response = new JsonResponse(array('result'=>'error'));

            return $response;
        }
        else{
            // var_dump($villes);die();




            $ville = new Ville();

            //  $ville->setNumClient(data['id']);
            // dump( $ville);die;

            $ville->setLibelle( $libelle);
            $ville->setCode( $code);
            $ville->setCodePostale( $codePostale);
            $ville->setIdPays( $IdPays);
            $em = $this->getDoctrine()->getManager();
            //  var_dump($ville); die;

            $em->persist($ville);
            $em->flush();

            $response = new JsonResponse(array('result'=>'DONE'));

            return $response;
        }


//                return new JsonResponse('Ajouter');
//            }


        // return $this->render('default/client.html.twig', array(
        //  'form' => $form->CreateView()
        // ));
        //  return new Reponse('VALIDER');
//  die('msg');
        // var_dump($listVilles);
        // die();
    }

    /**
     * @Route("/Veri", name="Veri")
     */
    public function VERIAction(Request $request)
    {

        $ville = new  Ville();

        $libe=$request->get('Libelle');

        // $em = $this->getDoctrine()->getManager();



        $output = array(
            //  'data' => array()
        );
        $i = 0;
        foreach ($listVilles as $villes) {
            $output[$i] = [
                'libelle'=> $villes->getLibelle(),
                'id'=> $villes->getId(),
            ];
            $i++;
            //   var_dump($i);
        }
        sort($output);
        //  var_dump($villes);
//       dump($output);
        return new JsonResponse($output);
        // var_dump($villes);


    }




}




