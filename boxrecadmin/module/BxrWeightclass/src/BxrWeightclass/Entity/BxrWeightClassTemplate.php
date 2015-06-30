<?php

namespace BxrWeightClass\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BxrWeightClassTemplate
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BxrWeightClass\Entity\BxrWeightClassTemplateRepository")
 */
class BxrWeightClassTemplate
{
	/**
	 * @var integer
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	public $id;
	
	/**
	 * @var Char
	 *
	 * @ORM\Column(name="name", type="Char")
	 */
	public $name;
	
	/**
	 * @var Char
	 *
	 * @ORM\Column(name="weightclass", type="Char")
	 */
	public $weightclass;

	

	/**
	 * Constructor
	 */
	public function __construct()
	{
	}

	/**
	 * Gets id
	 * 
	 * @return integer
	 */
	public function getId() 
	{
		return $this->id;
	}
	
	/**
	 * Gets name
	 * 
	 * @return Char
	 */
	public function getName() 
	{
		return $this->name;
	}
	
	/**
	 * Sets name
	 * 
	 * @param Char $name
	 * 
	 * @return $this
	 */
	public function setName(Char $name) 
	{
		$this->name = $name;
	
		return $this;
	}
	
	/**
	 * Gets weightclass
	 * 
	 * @return Char
	 */
	public function getWeightclass() 
	{
		return $this->weightclass;
	}
	
	/**
	 * Sets weightclass
	 * 
	 * @param Char $weightclass
	 * 
	 * @return $this
	 */
	public function setWeightclass(Char $weightclass) 
	{
		$this->weightclass = $weightclass;
	
		return $this;
	}

	
}
