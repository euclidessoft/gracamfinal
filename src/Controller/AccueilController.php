<?php

namespace App\Controller;

use App\Entity\Calcul;
use App\Entity\Produit;
use App\Form\CalculType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {

        return $this->redirectToRoute('Accueil');
    }

    /**
     * @Route("/SablesRiviere", name="SablesRiviere")
     */
    public function SablesRiviere()
    {

        return $this->render('site/SablesRiviere.html.twig');
    }

    /**
     * @Route("/SablesSanaga", name="SablesSanaga")
     */
    public function SablesSanaga()
    {

        return $this->render('site/SablesSanaga.html.twig');
    }


    /**
     * @Route("/gravier5_15", name="gravier5_15")
     */
    public function gravier5_15()
    {

        return $this->render('site/gravier5_15.html.twig');
    }

    /**
     * @Route("/gravier15_25", name="gravier15_25")
     */
    public function gravier15_25()
    {

        return $this->render('site/gravier15_25.html.twig');
    }


    /**
     * @Route("/gravier5_25", name="gravier5_25")
     */
    public function gravier5_25()
    {

        return $this->render('site/gravier5_25.html.twig');
    }

    /**
     * @Route("/gravier0_5", name="gravier0_5")
     */
    public function gravier0_5()
    {

        return $this->render('site/gravier0_5.html.twig');
    }

    /**
     * @Route("/gravier0_100", name="gravier0_100")
     */
    public function gravier0_100()
    {

        return $this->render('site/gravier0_100.html.twig');
    }

    /**
     * @Route("/ballast", name="ballast")
     */
    public function ballast()
    {

        return $this->render('site/ballast.html.twig');
    }

    /**
     * @Route("/pierreornementale", name="pierreornementale")
     */
    public function pierreornementale(Request $request)
    {
        $calcul = new Produit();
        $form = $this->createForm(CalculType::class, $calcul);
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
//                $em = $this->getDoctrine()->getManager();
//                $em->persist($calcul);
//                $em->flush();
//                $this->addFlash('notice', 'Message enregistrée avec succée');
//                return $this->redirectToRoute('Contact');
            }
        }
        return $this->render('site/pierreornementale.html.twig',[
        'form' => $form->createView(),
            ]);
    }


    /**
     * @Route("/sterile", name="sterile")
     */
    public function sterile()
    {

        return $this->render('site/sterile.html.twig');
    }

    /**
     * @Route("/moellons", name="moellons")
     */
    public function moellons()
    {

        return $this->render('site/moellons.html.twig');
    }


    /**
     * @Route("/distribution", name="distribution")
     */
    public function distribution()
    {

        return $this->render('site/distribution.html.twig');
    }

    /**
     * @Route("/accompagnement", name="accompagnement")
     */
    public function accompagnement()
    {

        return $this->render('site/distribution.html.twig');
    }
}
