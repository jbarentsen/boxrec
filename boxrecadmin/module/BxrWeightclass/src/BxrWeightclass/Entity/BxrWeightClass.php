<?php

namespace BxrWeightclass\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BxrWeightClass
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BxrWeightclass\Entity\BxrWeightClassRepository")
 */
class BxrWeightClass
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

	
}
