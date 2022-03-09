<?php

namespace App\Controller;

use App\Entity\Fourriere;
use App\Form\Fourriere1Type;
use App\Repository\FourriereRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
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
    public function index(FourriereRepository $fourriereRepository , Request $request, PaginatorInterface $paginator)
    {
        $donnees = $this->getDoctrine()->getRepository(Fourriere::class)->findAll();
        $fourriere = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
           3 // Nombre de résultats par page
        );
        return $this->render('fourriere/index.html.twig', [
            'fourrieres' => $fourriere,
        ]);
    }

    /**
     * @Route("/new", name="fourriere_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $fourriere = new Fourriere();
        $form = $this->createForm(Fourriere1Type::class, $fourriere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($fourriere);
            $entityManager->flush();

            return $this->redirectToRoute('app_fourriere', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('fourriere/new.html.twig', [
            'fourriere' => $fourriere,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="fourriere_show", methods={"GET"})
     */
    public function show(Fourriere $fourriere): Response
    {
        return $this->render('fourriere/show.html.twig', [
            'fourriere' => $fourriere,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="fourriere_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Fourriere $fourriere, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Fourriere1Type::class, $fourriere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_fourriere', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('fourriere/edit.html.twig', [
            'fourriere' => $fourriere,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="fourriere_delete", methods={"POST"})
     */
    public function delete(Request $request, Fourriere $fourriere, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$fourriere->getId(), $request->request->get('_token'))) {
            $entityManager->remove($fourriere);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_fourriere', [], Response::HTTP_SEE_OTHER);
    }
/**
* @Route("/recherche/fou", name="fourriere_search")
*/
    public function reche(Request $request, FourriereRepository $fourriereRepository){
        $data=$request->get('data');
        $fourriere=$fourriereRepository->reche($data);
        return $this->render('fourriere/index.html.twig', [
            'fourrieres' =>  $fourriere,


        ]);


    }

}
