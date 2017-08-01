<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pedido
 *
 * @ORM\Table(name="pedido")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PedidoRepository")
 */
class Pedido
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
     *
     * @ORM\ManyToOne(targetEntity="Cliente")
     *
     */
    private $cliente;

    /**
     *
     *
     * @ORM\ManyToOne(targetEntity="Plato")
     */
    private $plato;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;


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
     * Set cliente
     *
     * @param integer $cliente
     *
     * @return Pedido
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return int
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set plato
     *
     * @param integer $plato
     *
     * @return Pedido
     */
    public function setPlato($plato)
    {
        $this->plato = $plato;

        return $this;
    }

    /**
     * Get plato
     *
     * @return int
     */
    public function getPlato()
    {
        return $this->plato;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return Pedido
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
}

