<?php

namespace App\Controller;

use App\Entity\Fourriere;
use App\Form\FourriereType;
use App\Repository\FourriereRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/fourriere")
 */
class FourriereController extends AbstractController
{
    /**
     * @Route("/", name="app_fourriere", methods={"GET"})
     */
    public function index(FourriereRepository $fourriereRepository): Response
    {
        return $this->render('fourriere/index.html.twig', [
            'fourrieres' => $fourriereRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_fourriere_new", methods={"GET", "POST"})
     */
    public function new(Request $request, FourriereRepository $fourriereRepository): Response
    {
        $fourriere = new Fourriere();
        $form = $this->createForm(FourriereType::class, $fourriere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $fourriereRepository->add($fourriere);
            return $this->redirectToRoute('app_fourriere', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('fourriere/new.html.twig', [
            'fourriere' => $fourriere,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_fourriere_show", methods={"GET"})
     */
    public function show(Fourriere $fourriere): Response
    {
        return $this->render('fourriere/show.html.twig', [
            'fourriere' => $fourriere,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_fourriere_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Fourriere $fourriere, FourriereRepository $fourriereRepository): Response
    {
        $form = $this->createForm(FourriereType::class, $fourriere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $fourriereRepository->add($fourriere);
            return $this->redirectToRoute('app_fourriere', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('fourriere/edit.html.twig', [
            'fourriere' => $fourriere,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_fourriere_delete", methods={"POST"})
     */
    public function delete(Request $request, Fourriere $fourriere, FourriereRepository $fourriereRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$fourriere->getId(), $request->request->get('_token'))) {
            $fourriereRepository->remove($fourriere);
        }

        return $this->redirectToRoute('app_fourriere', [], Response::HTTP_SEE_OTHER);
    }
}
