<?php

namespace App\Controller;

use App\Entity\AgentService;
use App\Form\AgentServiceType;
use App\Repository\AgentServiceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/agent/service")
 */
class AgentServiceController extends AbstractController
{
    /**
     * @Route("/", name="app_agent_service", methods={"GET"})
     */
    public function index(AgentServiceRepository $agentServiceRepository): Response
    {
        return $this->render('agent_service/index.html.twig', [
            'agent_services' => $agentServiceRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_agent_service_new", methods={"GET", "POST"})
     */
    public function new(Request $request, AgentServiceRepository $agentServiceRepository): Response
    {
        $agentService = new AgentService();
        $form = $this->createForm(AgentServiceType::class, $agentService);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $agentServiceRepository->add($agentService);
            return $this->redirectToRoute('app_agent_service', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('agent_service/new.html.twig', [
            'agent_service' => $agentService,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_agent_service_show", methods={"GET"})
     */
    public function show(AgentService $agentService): Response
    {
        return $this->render('agent_service/show.html.twig', [
            'agent_service' => $agentService,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_agent_service_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, AgentService $agentService, AgentServiceRepository $agentServiceRepository): Response
    {
        $form = $this->createForm(AgentServiceType::class, $agentService);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $agentServiceRepository->add($agentService);
            return $this->redirectToRoute('app_agent_service', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('agent_service/edit.html.twig', [
            'agent_service' => $agentService,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_agent_service_delete", methods={"POST"})
     */
    public function delete(Request $request, AgentService $agentService, AgentServiceRepository $agentServiceRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$agentService->getId(), $request->request->get('_token'))) {
            $agentServiceRepository->remove($agentService);
        }

        return $this->redirectToRoute('app_agent_service', [], Response::HTTP_SEE_OTHER);
    }
}
