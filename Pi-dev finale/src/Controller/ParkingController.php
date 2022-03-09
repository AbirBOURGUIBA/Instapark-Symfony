<?php

namespace App\Controller;
use App\Entity\Parking;
use App\Form\ParkingType;
use App\Repository\ParkingRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/parking")
 */
class ParkingController extends AbstractController
{
    /**
     * @Route("/", name="app_parking", methods={"GET"})
     */
    public function index(ParkingRepository $parkingRepository): Response
    {
        return  $this->render('parking/index.html.twig', [
            'parkings' => $parkingRepository->findAll(),
        ]);
    }

        /**
     * @Route("/indexp", name="indexp", methods={"GET"})
     */
    public function indexp(ParkingRepository $parkingRepository): Response
    {
        return  $this->render('/front/speakers-details.html.twig', [
            'parkings' => $parkingRepository->findAll(),
        ]);
    }


    /**
     * @Route("/new", name="parking_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $parking = new Parking();
        $form = $this->createForm(ParkingType::class, $parking);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($parking);
            $entityManager->flush();
            return $this->redirectToRoute('app_parking', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('parking/new.html.twig', [
            'parking' => $parking,
             'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="parking_show", methods={"GET"})
     */
    public function show(Parking $parking): Response
    {
        return $this->render('parking/show.html.twig', [
            'parking' => $parking,
        ]);
    }

      /**
     * @Route("/detail/{id}", name="parking_detail_front")
     */
    public function showdetail(Parking $parking): Response
    {
        return $this->render('baseFront.html.twig', [
            'parking' => $parking,
        ]);
    }

 
    /**
     * @Route("/{id}/edit", name="parking_edit", methods={"GET", "POST"})
    */
    public function edit(Request $request, Parking $parking, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ParkingType::class, $parking);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_parking', [], Response::HTTP_SEE_OTHER);
        }

     return $this->render('parking/edit.html.twig', [
            'parking' => $parking,
            'form' => $form->createView(),
        ]);
    }
  
    /** 
     * @Route("/{id}", name="parking_delete", methods={"POST"})
     */
    public function delete(Request $request, Parking $parking, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$parking->getId(), $request->request->get('_token'))) {
            $entityManager->remove($parking);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_parking', [], Response::HTTP_SEE_OTHER);
    }

/**
     * @Route("/tri/parking", name="parking_tri")
     */
    public function Tri(Request $request,ParkingRepository $repository): Response
    {
        // Retrieve the entity manager of Doctrine
        $order=$request->get('type');
        if($order== "Croissant"){
            $parkings = $repository->tri_asc();
        }
        else {
            $parkings = $repository->tri_desc();
        }
        // Render the twig view
        return $this->render('parking/index.html.twig', [
            'parkings' => $parkings
        ]);
}


/**
     * @Route("/recherche/parking", name="parking_search")
     */
    public function recherche(Request $request, ParkingRepository $parkingRepository){
        $data=$request->get('data');
        $parking=$parkingRepository->reche($data);
        return $this->render('parking/index.html.twig', [
            'parkings' =>  $parking,


        ]);


        

    }





}
