<?php
namespace AppBundle\Repository;

use Doctrine\ODM\MongoDB\DocumentRepository;
class ClienteRepository extends DocumentRepository{
    public function buscarPorGenero($genero){
        $clientes = $this->createQueryBuilder()
            ->field('sexo')->equals($genero)
            ->getQuery()
            ->execute()
            ;
        return $clientes;
    }
    public function buscarPorGeneroyEdad($genero, $edad){
        $clientes = $this->createQueryBuilder()
            ->field('sexo')->equals($genero)
            ->field('edad')->gt($edad)
            ->sort('apPaterno','ASC')
            ->sort('apMaterno','ASC')
            ->sort('nombre','ASC')
            ->select('nombre','apPaterno')
            ->getQuery()
            ->execute()
        ;
        return $clientes;
    }
    public function buscarPorGeneroyEdadA($genero, $edad){
        $clientes = $this->createAggregationBuilder();
        $clientes->match()->field('sexo')->equals($genero);
        $clientes->match()->field('edad')->gt($edad);
        $clientes
            ->lookup('Proyecto')
            ->alias('Proyecto')
            ->localField('_id')
            ->foreignField('cliente')
            ->unwind('$Proyecto')
            ;
        //$clientes->match()->field('Proyecto.nombre')->equals('Proyecto5');
        $clientes->sort('Proyecto.nombre','DESC');
        return $clientes->execute();
    }
}
