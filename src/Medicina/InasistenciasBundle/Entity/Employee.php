<?php

namespace Medicina\InasistenciasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="employee")
 */
class Employee
{
	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id;

 	/**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\Column(type="string")
     */
    protected $last_name;

    /**
     * @ORM\ManyToOne(targetEntity="Office", inversedBy="employees")
     * @ORM\JoinColumn(name="office_id", referencedColumnName="id")
     */
    protected $office;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Employee
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
     * Set last_name
     *
     * @param string $lastName
     * @return Employee
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;

        return $this;
    }

    /**
     * Get last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set positiom
     *
     * @param string $positiom
     * @return Employee
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get positiom
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    public function __toString() {
        return $this->getLastName() ? : "Empleado";
    }

    /**
     * Set office
     *
     * @param \Medicina\InasistenciasBundle\Entity\Office $office
     * @return Employee
     */
    public function setOffice(\Medicina\InasistenciasBundle\Entity\Office $office = null)
    {
        $this->office = $office;

        return $this;
    }

    /**
     * Get office
     *
     * @return \Medicina\InasistenciasBundle\Entity\Office 
     */
    public function getOffice()
    {
        return $this->office;
    }
}
