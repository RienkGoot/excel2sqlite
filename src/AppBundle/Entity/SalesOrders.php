<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SalesOrders
 *
 * @ORM\Table(name="salesorders")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SalesOrdersRepository")
 */
class SalesOrders
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
     * @var float
     *
     * @ORM\Column(name="orderdate", type="float")
     */
    private $orderdate;

    /**
     * @var int
     *
     * @ORM\Column(name="region", type="integer")
     */
    private $region;

    /**
     * @var int
     *
     * @ORM\Column(name="rep", type="integer")
     */
    private $rep;

    /**
     * @var int
     *
     * @ORM\Column(name="item", type="integer")
     */
    private $item;

    /**
     * @var int
     *
     * @ORM\Column(name="units", type="integer")
     */
    private $units;

    /**
     * @var float
     *
     * @ORM\Column(name="unit_cost", type="float")
     */
    private $unitCost;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float")
     */
    private $total;

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
     * Set orderdate
     *
     * @param \DateTime $orderdate
     *
     * @return Import
     */
    public function setOrderdate($orderdate)
    {
        $this->orderdate = $orderdate;

        return $this;
    }

    /**
     * Get orderdate
     *
     * @return \DateTime
     */
    public function getOrderdate()
    {
        return $this->orderdate;
    }

    /**
     * Set region
     *
     * @param integer $region
     *
     * @return Import
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return integer
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set rep
     *
     * @param integer $rep
     *
     * @return Import
     */
    public function setRep($rep)
    {
        $this->rep = $rep;

        return $this;
    }

    /**
     * Get rep
     *
     * @return integer
     */
    public function getRep()
    {
        return $this->rep;
    }

    /**
     * Set item
     *
     * @param integer $item
     *
     * @return Import
     */
    public function setItem($item)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return integer
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set units
     *
     * @param integer $units
     *
     * @return Import
     */
    public function setUnits($units)
    {
        $this->units = $units;

        return $this;
    }

    /**
     * Get units
     *
     * @return integer
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * Set unitCost
     *
     * @param float $unitCost
     *
     * @return Import
     */
    public function setUnitCost($unitCost)
    {
        $this->unitCost = $unitCost;

        return $this;
    }

    /**
     * Get unitCost
     *
     * @return float
     */
    public function getUnitCost()
    {
        return $this->unitCost;
    }

    /**
     * Set total
     *
     * @param float $total
     *
     * @return Import
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }
}
