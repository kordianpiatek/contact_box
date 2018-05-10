<?php

namespace ContactBundle\Controller;

use ContactBundle\Entity\Address;
use ContactBundle\Entity\Email;
use ContactBundle\Entity\Groups;
use ContactBundle\Entity\Person;
use ContactBundle\Entity\PhoneNumber;
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

    // ALL MODIFIES GET

    /**
     * @Route("/{id}/modify" ,name="edit", methods={"GET"})
     */
    public function modifyPersonGetAction($id)
    {
        $person = $this->getDoctrine()->getRepository(Person::class)->findOneBy(['id' => $id]);
        $modifyForm = $this->createFormBuilder($person)
            ->setMethod('POST')
            ->add('name', TextType::class)
            ->add('lastname', TextType::class)
            ->add('personDescription', TextType::class)
            ->add('save', SubmitType::class)
            ->getForm();

        return $this->render('contact/edit_profile.html.twig', array('modifyForm' => $modifyForm->createView(),
            'person' => $person));
    }

    /**
     * @Route("/{id}/modify_address" , name="address_edit" , methods={"GET"} )
     */
    public function modifyAddressGetAction($id)
    {
        $person = $this->getDoctrine()->getRepository(Person::class)->findOneBy(['id' => $id]);
        $address = new Address();
        $addressForm = $this->createFormBuilder($address)
            ->setMethod('POST')
            ->add('city',TextType::class)
            ->add('street', TextType::class)
            ->add('houseNumber', NumberType::class)
            ->add('apartamentNumber', NumberType::class)
            ->add('person_id',$person->getId())
            ->add('save', SubmitType::class, ['attr' => ['class' => 'button']])
            ->getForm();

        return $this->render('contact/edit_address.html.twig', array('addressForm' => $addressForm->createView(),
            'person' => $person));
    }

    /**
     * @Route("/{id}/modify_email" , name="email_edit" , methods={"GET"} )
     */
    public function modifyEmailGetAction($id)
    {
        $person = $this->getDoctrine()->getRepository(Person::class)->findOneBy(['id' => $id]);
        $email = new Email();
        $emailForm = $this->createFormBuilder($email)
            ->setMethod('POST')
            ->add('emailAddress',TextType::class)
            ->add('type', TextType::class)
            ->add('person_id',$person->getId())
            ->add('save', SubmitType::class, [ 'attr' => ['class' => 'button']])
            ->getForm();

        return $this->render('contact/edit_email.html.twig', array('emailForm' => $emailForm->createView(),
            'person' => $person));

    }

    /**
     * @Route("/{id}/modify_phone" , name="phone_edit" , methods={"GET"})
     */
    public function modifyPhoneGetAction($id)
    {
        $person = $this->getDoctrine()->getRepository(Person::class)->findOneBy(['id' => $id]);
        $phoneNumber = new PhoneNumber();
        $phoneNumberForm = $this->createFormBuilder($phoneNumber)
            ->setMethod('POST')
            ->add('number', NumberType::class)
            ->add('type', TextType::class)
            ->add('person_id',$person->getId())
            ->add('save', SubmitType::class, ['attr' => ['class' => 'button']])
            ->getForm();

        return $this->render('contact/edit_phone.html.twig', array('phoneForm' => $phoneNumberForm->createView(),
            'person' => $person));

    }



    // ALL MODIFIES POST

    /**
     * @Route("/{id}/modify" ,name="modifyPost", methods={"POST"})
     */
    public function modifyPersonPostAction(Request $request , $id)
    {
        $person = $this->getDoctrine()->getRepository(Person::class)->findOneBy(['id' => $id]);

        $modifyForm = $this->createFormBuilder($person)
            ->setMethod('POST')
            ->add('name', TextType::class, ['attr' => ['class' => 'form']])
            ->add('lastname', TextType::class, ['attr' => ['class' => 'form']])
            ->add('personDescription', TextType::class, ['attr' => ['class' => 'form']])
            ->add('save', SubmitType::class, ['label' => 'EDIT PERSON', 'attr' => ['class' => 'button']])
            ->getForm();
        $modifyForm->handleRequest($request);
        if ($modifyForm->isSubmitted() and $modifyForm->isValid()) {
            $person = $modifyForm->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($person);
            $em->flush();
            return $this->redirectToRoute('profile', ['id' => $person->getId(),
                'person' => $person
            ]);
        }
    }

    /**
     * @Route("/{id}/modify_address" , name="modify_address_post" , methods={"POST"})
     */
    public function modifyAddressPostAction(Request $request ,$id)
    {
        $person = $this->getDoctrine()->getRepository(Person::class)->findOneBy(['id' => $id]);
        $address = new Address();
        $addressForm = $this->createFormBuilder($address)
            ->setMethod('POST')
            ->add('city',TextType::class)
            ->add('street', TextType::class)
            ->add('houseNumber', NumberType::class)
            ->add('apartamentNumber', NumberType::class)
            ->add('person_id',$person->getId())
            ->add('save', SubmitType::class, ['attr' => ['class' => 'button']])
            ->getForm();
        $addressForm->handleRequest($request);
        if ($addressForm->isSubmitted() and $addressForm->isValid()) {
            $address = $addressForm->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($address);
            $em->flush();
            return $this->redirectToRoute('profile', ['id' => $address->getId(),
                'address'=> $address
            ]);
        }
    }

    /**
     * @Route("/{id}/modify_email" , name="modify_email_post" , methods={"POST"})
     */
    public function modifyEmailPostAction(Request $request ,$id)
    {
        $person = $this->getDoctrine()->getRepository(Person::class)->findOneBy(['id' => $id]);
        $email = new Email();
        $emailForm = $this->createFormBuilder($email)
            ->setMethod('POST')
            ->add('emailAddress',TextType::class)
            ->add('type', TextType::class)
            ->add('person_id',$person->getId())
            ->add('save', SubmitType::class, [ 'attr' => ['class' => 'button']])
            ->getForm();
        $emailForm->handleRequest($request);
        if ($emailForm->isSubmitted() and $emailForm->isValid()) {
            $person = $emailForm->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($person);
            $em->flush();
            return $this->redirectToRoute('profile', ['id' => $email->getId(),
                'email' => $email
            ]);
        }
    }

    /**
     * @Route("/{id}/modify_phone" , name="modify_phone_post" , methods={"POST"})
     */
    public function modifyPhonePostAction(Request $request ,$id)
    {
        $person = $this->getDoctrine()->getRepository(Person::class)->findOneBy(['id' => $id]);
        $phoneNumber = new PhoneNumber();
        $phoneNumberForm = $this->createFormBuilder($phoneNumber)
            ->setMethod('POST')
            ->add('number', NumberType::class)
            ->add('type', TextType::class)
            ->add('person_id',$person->getId())
            ->add('save', SubmitType::class, ['attr' => ['class' => 'button']])
            ->getForm();
        $phoneNumberForm->handleRequest($request);
        if ($phoneNumberForm->isSubmitted() and $phoneNumberForm->isValid()) {
            $person = $phoneNumberForm->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($person);
            $em->flush();
            return $this->redirectToRoute('profile', ['id' => $phoneNumber->getId(),
                'phoneNumber' => $phoneNumber
            ]);
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

        return $this->render('contact/delete.html.twig', array('person' => $person));
    }

    /**
     * @Route("/{id}",name="profile", methods={"GET"})
     */
    public function showPersonAction($id)
    {
        $person = $this->getDoctrine()->getRepository(Person::class)->findOneBy(['id' => $id]);

        return $this->render('contact/profile.html.twig', array('person' => $person));
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