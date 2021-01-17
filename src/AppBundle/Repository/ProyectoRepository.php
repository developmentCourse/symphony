<?php
namespace AppBundle\Repository;

use Doctrine\ODM\MongoDB\DocumentRepository;
class ProyectoRepository extends DocumentRepository{
    public function buscarPorCliente($cliente){
        $proyectos = $this->createQueryBuilder()
            ->field('cliente')->references($cliente)
            ->getQuery()
            ->execute()
        ;
        return $proyectos;
    }
}
