<?php

namespace EcoJob\RecruteurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use EcoJob\RecruteurBundle\Entity\Offre;
use EcoJob\RecruteurBundle\Form\OffreType;
use Elastica\Query\BoolQuery;
use Elastica\Query\Match;
use Elastica\Query\QueryString;
use Elastica\Query;
use Symfony\Component\HttpFoundation\Response;
use EcoJob\RecruteurBundle\Model\OffreSearch;

class RecruteurController extends Controller {

    public function indexAction() {
        return $this->render('EcoJobRecruteurBundle:Recruteur:index.html.twig');
    }

    public function listAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $offres = $this->getUser()->getOffres();
        return $this->render('EcoJobRecruteurBundle:Recruteur:list.html.twig', array('offres' => $offres));
    }

    public function showAction(Offre $offre) {
        return $this->render('EcoJobRecruteurBundle:Recruteur:show.html.twig', array('offre' => $offre));
    }

    public function editAction(offre $offre, Request $request) {
        $form = $this->createForm(new OffreType(), $offre);
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $offre->setModificationValided(false);
                $em->flush();
                return $this->redirect($this->generateUrl('eco_job_recruteur_offre_list')
                );
            }
        }
        return $this->render('EcoJobRecruteurBundle:Recruteur:edit.html.twig', array('form' => $form->createView()));
    }

    public function deleteAction(offre $offre, Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $em->remove($offre);
        $em->flush();
        return $this->redirect($this->generateUrl('eco_job_recruteur_offre_list'));
    }

    public function createAction(Request $request) {
        $offre = new Offre();
        $form = $this->createForm(new OffreType(), $offre);
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($offre);
                $this->getUser()->addOffre($offre);
                $em->flush();
                return $this->redirect($this->generateUrl('eco_job_recruteur_offre_list')
                );
            }
        }
        return $this->render('EcoJobRecruteurBundle:Recruteur:create.html.twig', array('form' => $form->createView()));
    }
    public function searchAction(Request $request) {
        $keywords = $request->request->get('keywords');
        $contrat = $request->request->get('contrat');
        $experience = $request->request->get('experience');

        $em = $this->getDoctrine()->getManager();
        $results = $em->getRepository('EcoJobRecruteurBundle:Offre')->search($keywords, $contrat, $experience);
        $mines = $this->getUser()->getPostuled();
        for($i=0;$i<count($mines);$i++)
        {
            if(($key = array_search($mines[$i], $results, TRUE)) !== FALSE) {
                 $results[$key]->setAdded(true);
            }
        }
        $html = $this->renderView('EcoJobRecruteurBundle:Recruteur:result.html.twig', array(
            'offres' => $results));
        $response = new Response(json_encode(array("html" => $html)));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    public function doSearchAction() {
        $em = $this->getDoctrine()->getManager();
        $results = $em->getRepository('EcoJobRecruteurBundle:Offre')->findBy(array('valid' => true,'suspendu' => false));
        $mines = $this->getUser()->getPostuled();
        $added = [];
        for($i=0;$i<count($mines);$i++)
        {
            if(($key = array_search($mines[$i], $results, TRUE)) !== FALSE) {
                 $results[$key]->setAdded(true);
            }
        }        
        return $this->render('EcoJobRecruteurBundle:Recruteur:search.html.twig', array(
            'offres' => $results,'added'=>$added));
    }
    public function candidatureListeAction(Request $request){
        $user_id = $this->getUser()->getId();
        return $this->render('EcoJobRecruteurBundle:Recruteur:candidatures.html.twig', array(
            'user_id' => $user_id
        ));
    }

    public function recruteurOffreListAction( $id, $offset,Request $request) {
        $limit = 10;
        $offset = $offset * $limit - $limit;
        $offres = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('EcoJobRecruteurBundle:Offre')
                        ->findROArray($id,$offset);
        $serializer = $this->get('jms_serializer');
        $response = $serializer->serialize($offres,'json');
        return new Response($response);
    }

    /**
     * Offer's Candidatures template
     * @param Offre $offre
     * @param Request $request
     * @return Response
     */
    public function candidatureTemplateAction($id, Request $request) {
        if($request->isXmlHttpRequest()) {
            $limit = 10;
            $offset = 1;
            $offset = $offset * $limit - $limit;
            $candidatures = $this->getDoctrine()
                ->getManager()
                ->getRepository('EcoJobCandidatBundle:Candidature')
                ->findOffreCandidatures($id, $offset);
            return $this->render('EcoJobRecruteurBundle:Recruteur:xhrCandidatureTemplate.html.twig',array('candidatures' => $candidatures,
                'offreId' => $id));
        }
    }

    public function offreCandidaturesAction($id, $offset ,Request $request) {
        $limit = 10;
        $offset = $offset * $limit - $limit;
        $candidatures = $this->getDoctrine()
                             ->getManager()
                             ->getRepository('EcoJobCandidatBundle:Candidature')
                             ->findOffreCandidatures($id, $offset);
        $serializer = $this->get('jms_serializer');
        $response = $serializer->serialize($candidatures,'json');
        return new Response($response);
    }

    public function candidatureDetailAction($id,Request $request) {
        $candidature = $this->getDoctrine()->getManager()->getRepository('EcoJobCandidatBundle:Candidature')->find($id);
        return $this->render('EcoJobRecruteurBundle:Recruteur:candidature-detail.html.twig',array('candidature' => $candidature));
    }
    public function banquecvAction(Request $request){
        
        return $this->render('EcoJobRecruteurBundle:Recruteur:banquecv.html.twig');
    }
    public function searchAjaxAction(Request $request) {
        $keywords = $request->request->get('keywords');
        $contrat = $request->request->get('contrat');
        $experience = $request->request->get('experience');
        $offset = $request->request->get('offset');
        $limit = $request->request->get('limit');
        $serializer = $this->container->get('jms_serializer');
        $em = $this->getDoctrine()->getManager();
        $results = $em->getRepository('EcoJobRecruteurBundle:Offre')->search($keywords, $contrat, $experience,$offset, $limit);
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            $mines = $this->getUser()->getPostuled();
            for ($i = 0; $i < count($mines); $i++) {
                if (($key = array_search($mines[$i], $results, TRUE)) !== FALSE) {
                    $results[$key]->setAdded(true);
                }
            }
        }
        $res = $serializer->serialize($results, 'json');
        return new Response($res);
    }    
}
