<?php

namespace App\Controller\Prof;

use App\Entity\Document;
use App\Form\DocumentType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DocumentController extends AbstractController
{
    /**
     * @Route("/prof/document", name="prof_document")
     */
    public function index(Request $request): Response
    {
        $user = $this->getUser();
        // $em = $this->getDoctrine()->getManager();

        //ajout document

        $document = new Document();
        $formDoc = $this->createForm(DocumentType::class,$document);
        $formDoc->handleRequest($request);

        if ($formDoc->isSubmitted() && $formDoc->isValid()){
            $document->setUser($user);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($document);
            $entityManager->flush();
            $this->AddFlash('success','Ajout document avec succès');
        }

        return $this->render('prof/document/index.html.twig', [
            'user'=>$user,
            'controller_name' => 'DocumentController',
            'form_doc'=>$formDoc->createView(),
        ]);
    }
    /**
     * @Route("/prof/document/{id}", name="prof_document_supprimer", methods={"GET","POST"})
     */
    public function supprimer(Document $document): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($document);
        $entityManager->flush();
        return $this->redirectToRoute('prof_document');
    }
}
