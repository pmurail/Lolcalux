<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Utilisateur;
use App\Entity\Vehicule;
use App\Entity\Location;
use App\Form\ClientType;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home")
     */
    public function index(Request $request): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/inscription", name="inscription")
     */
    public function inscription(Request $request): Response
    {
        $client = new Location;
        $form = $this->createForm(ClientType::class, $client);
        $form->handleRequest($request);
        if ($form->isSubmitted() == true) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();
            return $this->redirectToRoute('app_home');
        }


        return $this->render('home/inscription.html.twig', ['monForm' => $form->createView()]);
    }

    /**
     * @Route("/getReservation", name="getReservation", methods="GET")
     */
    public function getReservation()
    {
        $serializer = $this->get('serializer');
        $repository = $this->getDoctrine()->getRepository(Location::class);
        $products = $repository->findAll();
        $json = $serializer->serialize($products, 'json');
        return new Response($json);
    }

    /**
     * @Route("/reservation", name="ListeReservation")
     */

    public function AfficherReserv()
    {
        $repository = $this->getDoctrine()->getRepository(Location::class);
        $lesLocations = $repository->findAll();

        return $this->render('home/profil.html.twig', ['lesLocations' => $lesLocations]);
    }

    /**
     * @Route("/reservation2", name="reservation2")
     */
    public function reserv2(Request $request, EntityManagerInterface $entityManager): Response
    {

        $repository = $this->getDoctrine()->getRepository(Location::class);
        $dateloc = new \DateTime();
        // $dateD = $request->request->get('dateD');
        // dump($dateD);

        $user = $this->getUser();

        // if ($user == null){
        //     $this->addFlash('error', "Veuillez vous connectez pour faire une réservation  !");
        //     return $this->redirectToRoute('app_home');
        // }
        // elseif ($this->getDoctrine()->getRepository(Location::class)->findOneBy(array('numlocation' => $laLoc->getNumlocation(), 'idutilisateur' => $utilisateur->getIdutilisateur())) !== null) {

        //     $this->addFlash('error', "Vous avez déjà une réservation !");
        //     return $this->redirectToRoute('oui');
        // }
        // else {

            $entityManager = $this->getDoctrine()->getManager();
            $location = new location();
            $location->setIdutilisateur($user->getIdutilisateur());
            // $location->setDateheuredepartp($dateD);
            $location->setDatelocation(new DateTime('now'));

            $entityManager->persist($location);
            $entityManager->flush();
       
            // return $this->redirectToRoute('form2');


    // }
    
return $this->render('home/form2.html.twig');

}
/**
     * @Route("/coucou", name="coucou")
     */
    public function coucou(Request $request): Response
    {
        return $this->render('home/coucou.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}   
