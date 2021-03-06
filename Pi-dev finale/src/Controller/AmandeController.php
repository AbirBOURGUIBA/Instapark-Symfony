<?php

namespace App\Controller;

use App\Entity\Amande;
use App\Form\AmandeType;
use App\Repository\AmandeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/amande")
 */
class AmandeController extends AbstractController
{
    /**
     * @Route("/", name="app_amande", methods={"GET"})
     */
    public function index(AmandeRepository $amandeRepository): Response
    {
        return $this->render('amande/index.html.twig', [
            'amandes' => $amandeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="amande_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $amande = new Amande();
        $form = $this->createForm(AmandeType::class, $amande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($amande);
            $entityManager->flush();

            return $this->redirectToRoute('front', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('amande/new.html.twig', [
            'amande' => $amande,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="amande_show", methods={"GET"})
     */
    public function show(Amande $amande): Response
    {
        return $this->render('amande/show.html.twig', [
            'amande' => $amande,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="amande_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Amande $amande, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AmandeType::class, $amande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_amande', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('amande/edit.html.twig', [
            'amande' => $amande,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="amande_delete", methods={"POST"})
     */
    public function delete(Request $request, Amande $amande, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$amande->getId(), $request->request->get('_token'))) {
            $entityManager->remove($amande);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_amande', [], Response::HTTP_SEE_OTHER);
    }
}
