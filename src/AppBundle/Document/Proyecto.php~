<?php
namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @MongoDB\Document(repositoryClass="AppBundle\Repository\ProyectoRepository")
  */
class Proyecto{
    /**
     * @MongoDB\Id
     */
    protected $id;
    /**
     * @MongoDB\Field(type="string")
     */
    protected $nombre;
    /**
     * @MongoDB\Field(type="string")
     */
    protected $descripcion;
    /**
     * @MongoDB\Field(type="float")
     */
    protected $precio;

    /**
     * @MongoDB\ReferenceOne(targetDocument="Cliente", storeAs="id", inversedBy="proyectos")
     */
    protected $cliente;



    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return $this
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string $nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return $this
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string $descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set precio
     *
     * @param float $precio
     * @return $this
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
        return $this;
    }

    /**
     * Get precio
     *
     * @return float $precio
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set cliente
     *
     * @param AppBundle\Document\Cliente $cliente
     * @return $this
     */
    public function setCliente(\AppBundle\Document\Cliente $cliente)
    {
        $this->cliente = $cliente;
        return $this;
    }

    /**
     * Get cliente
     *
     * @return AppBundle\Document\Cliente $cliente
     */
    public function getCliente()
    {
        return $this->cliente;
    }
}
