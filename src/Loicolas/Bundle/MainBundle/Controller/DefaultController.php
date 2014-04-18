<?php

namespace Loicolas\Bundle\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Loicolas\Bundle\MainBundle\Entity\Contact;
use Loicolas\Bundle\MainBundle\Form\ContactType;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('LoicolasMainBundle:Default:index.html.twig', array());
    }
    
    public function contactAction(Request $request)
    {
        $contact = new Contact();
       
        $form = $this->createForm(new ContactType($contactSubjects), $contact);
        
        $form->handleRequest($request);

        if ($form->isValid()) {
            // perform some action, such as saving the task to the database
            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();            
            
            $message = \Swift_Message::newInstance()
                ->setSubject('[Loicolas.fr] - Nouveau message')
                ->setFrom( array( $contact->getEmail() => $contact->getFirstname(). ' ' .$contact->getName()  ) )
                ->setTo( 'loicolas@gmail.com' )
                ->setBody(
                    $this->renderView(
                        'LoicolasMainBundle:Mail:contact.txt.twig',
                        array('contact' => $contact)
                    )
                )
                ;
                $this->get('mailer')->send($message);
            
            return $this->redirect($this->generateUrl('loicolas_main_contact_send'));
        }
        return $this->render('LoicolasMainBundle:Default:contact.html.twig', array('form' => $form->createView()));
    }
    
    public function contactSendAction()
    {
        return $this->render('LoicolasMainBundle:Default:contact_send.html.twig');
    }
}
