<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Formule;
use App\Entity\Formulesanschauffeur;
use App\Entity\Locationsanschauffeur;
use App\Entity\Modele;
use App\Entity\Trajet;
use App\Entity\Utilisateur;
use App\Entity\Vehicule;
use App\Form\ClientType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home")
     */
    public function index(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Formulesanschauffeur::class);
        $lesFormules = $repository->findAll();
        $repository = $this->getDoctrine()->getRepository(Modele::class);
        $lesModeles = $repository->findAll();
        $repository = $this->getDoctrine()->getRepository(Trajet::class);
        $lesTrajets = $repository->findAll();
        dump($this->getUser()) ;
        return $this->render('home/index.html.twig', ['lesFormules' => $lesFormules, 'lesModeles' => $lesModeles, 'lesTrajets' => $lesTrajets]);
    }

    /**
     * @Route("/inscription", name="inscription")
     */
    public function inscription(Request $request): Response
    {
        $client = new Client;
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
     * @Route("/reservation", name="reservation")
     */
    public function reservation(Request $request): Response
    {
        $modele = $request->request->get("modele");
        //$trajet = $request->request->get("trajet");
        $formule = $request->request->get("formule");
        $vehicule = new Vehicule;
        //$vehicule->setImmatriculation("FR-85-SIO");
        $vehicule->setIdmodele($this->getDoctrine()->getRepository(Modele::class)->findOneBy(['idmodele' => $modele]));
        $location = new Locationsanschauffeur;
        $location->setIdformule($this->getDoctrine()->getRepository(Formule::class)->findOneBy(['idformule' => $formule]));
        //$location->setIdtrajet($this->getDoctrine()->getRepository(Trajet::class)->findOneBy(['idtrajet' => $trajet]));
        $location->setIdutilisateur($this->getUser());
        $em = $this->getDoctrine()->getManager();
        $em->persist($location);
        $em->flush();
        return $this->redirectToRoute('app_home');
        return $this->render('home/index.html.twig');
    }
}
