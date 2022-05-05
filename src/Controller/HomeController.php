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
        $repository = $this->getDoctrine()->getRepository(Formulesanschauffeur::class);
        $lesFormules = $repository->findAll();
        $repository = $this->getDoctrine()->getRepository(Modele::class);
        $lesModeles = $repository->findAll();
        $repository = $this->getDoctrine()->getRepository(Trajet::class);
        $lesTrajets = $repository->findAll();
        dump($this->getUser()) ;
        $date = date("Y-m-d H:i:s");
        dump(date("Y-m-d H:i:s", strtotime($date. ' + 2 hours')));
        return $this->render('home/index.html.twig', ['lesFormules' => $lesFormules, 'lesModeles' => $lesModeles, 'lesTrajets' => $lesTrajets]);
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



        $location = new Location();
        $dateloc = new \DateTime('now');
        $dateD = $request->request->get('dateD');
        $dateR = $request->request->get('dateR');
        $location->setIdutilisateur($this->getUser());

        $dateD = $request->request->get('dateD');
        $dateR = $request->request->get('dateR');

        $dateloc = date('Y-m-d H:i:s');
        $dateloc = date('Y-m-d H:i:s', strtotime($dateloc. '+ 2 hours'));

        $location->setDateheuredepartp(new DateTime($dateD));
        $location->setDatelocation(new DateTime($dateloc));
        $location->setHateheureretourp(new DateTime($dateR));

        $em = $this->getDoctrine()->getManager();
        $em->persist($location);
        $em->flush();
        return $this->redirectToRoute('app_home');
        return $this->render('home/index.html.twig');
    }

    /**
     * @Route("/accueil", name="accueil")
     */
    public function coucou(Request $request): Response
    {
        return $this->render('home/accueil.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}   
