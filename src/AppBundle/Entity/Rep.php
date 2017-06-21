<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rep
 *
 * @ORM\Table(name="rep")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RepRepository")
 */
class Rep
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
     * @var int
     *
     * @ORM\Column(name="repid", type="integer")
     */
    private $repid;

    /**
     * @var string
     *
     * @ORM\Column(name="rep", type="string", length=255)
     */
    private $rep;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;


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
     * Set repid
     *
     * @param integer $repid
     *
     * @return Rep
     */
    public function setRepid($repid)
    {
        $this->repid = $repid;

        return $this;
    }

    /**
     * Get repid
     *
     * @return int
     */
    public function getRepid()
    {
        return $this->repid;
    }

    /**
     * Set rep
     *
     * @param string $rep
     *
     * @return Rep
     */
    public function setRep($rep)
    {
        $this->rep = $rep;

        return $this;
    }

    /**
     * Get rep
     *
     * @return string
     */
    public function getRep()
    {
        return $this->rep;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Rep
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }
}
