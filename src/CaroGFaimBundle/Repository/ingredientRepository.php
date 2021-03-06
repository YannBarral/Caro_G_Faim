<?php

namespace CaroGFaimBundle\Repository;

use \CaroGFaimBundle\Entity\ingredientExtended;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;

/**
 * ingredientRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ingredientRepository extends EntityRepository
{
    /**
     * Finds all "ingredients" and order them by "libelle"
     *
     * @return array The entities.
     */
    public function findAll()
    {
        return $this->findBy(array(), array("libelle" => "ASC"));
    }

    /**
     * Finds all ingredients sorted by categories
     */

    public function findAllIngredientsByCategories()
    {
        $em = $this->getEntityManager();

        $query = $em->createQuery(
            "SELECT cat, ings, plats
             FROM CaroGFaimBundle:categorie cat
             JOIN cat.ingredients ings
             LEFT JOIN ings.apparaitre_plats plats
             ORDER BY cat.libelle ASC, ings.libelle ASC"
        );
        $results = $query->getResult();
        return $results;

    }

}
