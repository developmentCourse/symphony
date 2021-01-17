<?php
namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @MongoDB\Document(repositoryClass="AppBundle\Repository\ClienteRepository")
  */
class Cliente{
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
    protected $apPaterno;
    /**
     * @MongoDB\Field(type="string")
     */
    protected $apMaterno;
    /**
     * @MongoDB\Field(type="string")
     */
    protected $email;
    /**
     * @MongoDB\Field(type="string")
     */
    protected $celular;
    /**
     * @MongoDB\Field(type="string")
     */
    protected $sexo;
    /**
     * @MongoDB\Field(type="integer")
     */
    protected $edad;

    /**
     * @MongoDB\ReferenceMany(targetDocument="Proyecto", mappedBy="cliente")
     */
    protected $proyectos;

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
     * Set apPaterno
     *
     * @param string $apPaterno
     * @return $this
     */
    public function setApPaterno($apPaterno)
    {
        $this->apPaterno = $apPaterno;
        return $this;
    }

    /**
     * Get apPaterno
     *
     * @return string $apPaterno
     */
    public function getApPaterno()
    {
        return $this->apPaterno;
    }

    /**
     * Set apMaterno
     *
     * @param string $apMaterno
     * @return $this
     */
    public function setApMaterno($apMaterno)
    {
        $this->apMaterno = $apMaterno;
        return $this;
    }

    /**
     * Get apMaterno
     *
     * @return string $apMaterno
     */
    public function getApMaterno()
    {
        return $this->apMaterno;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set celular
     *
     * @param string $celular
     * @return $this
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;
        return $this;
    }

    /**
     * Get celular
     *
     * @return string $celular
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     * @return $this
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
        return $this;
    }

    /**
     * Get sexo
     *
     * @return string $sexo
     */
    public function getSexo()
    {
        return $this->sexo;
    }
    public function __construct()
    {
        $this->proyectos = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add proyecto
     *
     * @param AppBundle\Document\Proyecto $proyecto
     */
    public function addProyecto(\AppBundle\Document\Proyecto $proyecto)
    {
        $this->proyectos[] = $proyecto;
    }

    /**
     * Remove proyecto
     *
     * @param AppBundle\Document\Proyecto $proyecto
     */
    public function removeProyecto(\AppBundle\Document\Proyecto $proyecto)
    {
        $this->proyectos->removeElement($proyecto);
    }

    /**
     * Get proyectos
     *
     * @return \Doctrine\Common\Collections\Collection $proyectos
     */
    public function getProyectos()
    {
        return $this->proyectos;
    }

    /**
     * Set edad
     *
     * @param integer $edad
     * @return $this
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
        return $this;
    }

    /**
     * Get edad
     *
     * @return integer $edad
     */
    public function getEdad()
    {
        return $this->edad;
    }
}
