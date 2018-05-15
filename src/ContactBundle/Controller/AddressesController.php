<?php

namespace ContactBundle\Controller;

use ContactBundle\Entity\Address;
use ContactBundle\Entity\Email;
use ContactBundle\Entity\Person;
use ContactBundle\Entity\PhoneNumber;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class AddressesController extends Controller
{
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
            ->add('save', SubmitType::class, ['attr' => ['class' => 'button']])
            ->getForm();
        $addressForm->handleRequest($request);
        if ($addressForm->isSubmitted() && $addressForm->isValid()) {
            $address = $addressForm->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($address->setPerson($person));
            $em->flush();
            return $this->redirectToRoute('profile', ['id' => $person->getId()]);
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
            ->add('save', SubmitType::class, [ 'attr' => ['class' => 'button']])
            ->getForm();
        $emailForm->handleRequest($request);
        if ($emailForm->isSubmitted() && $emailForm->isValid()) {
            $email = $emailForm->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($email->setPerson($person));
            $em->flush();
            return $this->redirectToRoute('profile', ['id' => $person->getId()]);
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
            ->add('save', SubmitType::class, ['attr' => ['class' => 'button']])
            ->getForm();
        $phoneNumberForm->handleRequest($request);
        if ($phoneNumberForm->isSubmitted() && $phoneNumberForm->isValid()) {
            $phone = $phoneNumberForm->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($phone->setPerson($person));
            $em->flush();
            return $this->redirectToRoute('profile', ['id' => $person->getId()]);
        }
    }

}
