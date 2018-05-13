<?php

namespace ContactBundle\Controller;

use ContactBundle\Entity\Address;
use ContactBundle\Entity\Email;
use ContactBundle\Entity\Groups;
use ContactBundle\Entity\Person;
use ContactBundle\Entity\PhoneNumber;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class PersonController extends Controller
{
    // NEW PERSON

    /**
     * @Route("/new" ,name="new_person", methods={"GET"})
     */
    public function newPersonGetAction()
    {
        $person = new Person();
        $form = $this->createFormBuilder($person)
            ->setMethod('POST')
            ->add('name', TextType::class, ['attr' => ['class' => 'form']])
            ->add('lastname', TextType::class, ['attr' => ['class' => 'form']])
            ->add('personDescription', TextType::class, ['attr' => ['class' => 'form']])
            ->add('save', SubmitType::class, ['label' => 'ADD NEW PERSON', 'attr' => ['class' => 'button']])
            ->getForm();
        return $this->render('contact/new_person.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/new" , methods={"POST"})
     */
    public function newPersonPostAction(Request $request)
    {
        $person = new Person();
        $form = $this->createFormBuilder($person)
            ->setMethod('POST')
            ->add('name', TextType::class, ['attr' => ['class' => 'form']])
            ->add('lastname', TextType::class, ['attr' => ['class' => 'form']])
            ->add('personDescription', TextType::class, ['attr' => ['class' => 'form']])
            ->add('save', SubmitType::class, ['label' => 'ADD NEW PERSON', 'attr' => ['class' => 'button']])
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() and $form->isValid()){
            $person=$form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($person);
            $em->flush();
            return $this->redirectToRoute('profile', ['id' => $person->getId()]);
        }else{
            echo "Błąd";
        }
    }

    /**
     * @Route("/{id}/delete", name="delete" , methods={"GET"})
     */
    public function deletePersonAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $person = $em->getRepository(Person::class)->findOneBy(['id' => $id]);
        $em->remove($person);
        $em->flush();

        return $this->redirectToRoute('profile' , ['id' => $person->getId()]);
    }

    /**
     * @Route("/{id}",name="profile", methods={"GET"})
     */
    public function showPersonAction($id)
    {
        $person = $this->getDoctrine()->getRepository(Person::class)->findOneBy(['id' => $id]);
        $address = $this->getDoctrine()->getRepository(Address::class)->findOneBy(['person' => $id]);
        $phone = $this->getDoctrine()->getRepository(PhoneNumber::class)->findOneBy(['person'=> $id]);
        $email = $this->getDoctrine()->getRepository(Email::class)->findOneBy(['person'=> $id]);
        return $this->render('contact/profile.html.twig', array('person' => $person,
            'address'=>$address,
            'phone'=>$phone,
            'email'=>$email
        ));
    }

    /**
     * @Route("/" ,name="home", methods={"GET"})
     */
    public function showAllPeople()
    {
        $people = $this->getDoctrine()->getRepository(Person::class)->findAll();

        return $this->render('default/index.html.twig', array('people' => $people));
    }

    /**
     * @Route("/groups" , name="groups", methods={"GET"})
     */
    public function showAllGroups()
    {
        $groups = $this->getDoctrine()->getRepository(Groups::class)->findAll();
        return $this->render('contact/groups.html.twig', array('groups' => $groups));
    }

}