<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * DetallePedido
 *
 * @ORM\Table(name="detalle_pedido")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DetallePedidoRepository")
 */
class DetallePedido
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
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;

    /**
     *
     * @ManyToOne(targetEntity="Pedido", inversedBy="detalles")
     * @ORM\JoinColumn(name="pedido_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $pedido;

	/**
	 *
	 * @ManyToOne(targetEntity="Plato")
	 */
    private $plato;


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
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return DetallePedido
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return int
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set pedido
     *
     * @param \AppBundle\Entity\Pedido $pedido
     *
     * @return DetallePedido
     */
    public function setPedido(\AppBundle\Entity\Pedido $pedido = null)
    {
        $this->pedido = $pedido;

        return $this;
    }

    /**
     * Get pedido
     *
     * @return \AppBundle\Entity\Pedido
     */
    public function getPedido()
    {
        return $this->pedido;
    }

    /**
     * Set plato
     *
     * @param \AppBundle\Entity\Plato $plato
     *
     * @return DetallePedido
     */
    public function setPlato(\AppBundle\Entity\Plato $plato = null)
    {
        $this->plato = $plato;

        return $this;
    }

    /**
     * Get plato
     *
     * @return \AppBundle\Entity\Plato
     */
    public function getPlato()
    {
        return $this->plato;
    }
}
