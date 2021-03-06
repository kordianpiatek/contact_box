<?php

namespace ContactBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table(name="person")
 * @ORM\Entity(repositoryClass="ContactBundle\Repository\PersonRepository")
 */
class Person
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="personDescription", type="string", length=255)
     */
    private $personDescription;

    /**
     * @ORM\OneToMany(targetEntity="Address", mappedBy="person")
     */
    private $addresses;
    /**
     * @ORM\OneToMany(targetEntity="PhoneNumber", mappedBy="person")
     */
    private $phoneNumbers;
    /**
     * @ORM\OneToMany(targetEntity="Email", mappedBy="person")
     */
    private $emails;

    public function __construct()
    {
        $this->addresses = new ArrayCollection();
        $this->emails = new ArrayCollection();
        $this->phoneNumbers = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Person
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Person
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set personDescription
     *
     * @param string $personDescription
     *
     * @return Person
     */
    public function setPersonDescription($personDescription)
    {
        $this->personDescription = $personDescription;

        return $this;
    }

    /**
     * Get personDescription
     *
     * @return string
     */
    public function getPersonDescription()
    {
        return $this->personDescription;
    }

    /**
     * Set phoneNumber
     *
     * @param \ContactBundle\Entity\PhoneNumber $phoneNumber
     *
     * @return Person
     */
    public function setPhoneNumber(PhoneNumber $phoneNumber)
    {
        $this->phoneNumbers[] = $phoneNumber;
        return $this;
    }

    /**
     * Get phoneNumbers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPhoneNumbers()
    {
        return $this->phoneNumbers;
    }
    /**
     * Set email
     *
     * @param \ContactBundle\Entity\Email $email
     *
     * @return Person
     */
    public function setEmail(Email $emailAddress)
    {
        $this->emails[] = $emailAddress;
        return $this;
    }

    /**
     * Get emails
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEmails()
    {
        return $this->emails;
    }
    /**
     * Set address
     *
     * @param \ContactBundle\Entity\Address $address
     *
     * @return Person
     */
    public function setAddress(Address $address)
    {
        $this->addresses[] = $address;
        return $this;
    }

    /**
     * Get addresses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAddresses()
    {
        return $this->addresses;
    }
}

