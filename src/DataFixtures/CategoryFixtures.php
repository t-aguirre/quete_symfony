<?php

namespace App\DataFixtures;

use App\Entity\Category; // entité à manipuler
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    const CATEGORIES = [
        'Action',
        'Aventure',
        'Animation',
        'Fantastique',
        'Horreur',
    ];

    public function load(ObjectManager $manager): void //méthode load appelée lors du chargement des fixtures
    {
        // $category = new Category(); //instanciation d'un nouvel objet Category
        // $category->setName('Horreur'); //définition du nom de cette nouvelle catégorie
        // $manager->persist($category); //dit à Doctrine de prendre en compte l'objet $category qui a été instancié
        // $manager->flush(); //permet d'exécuter toutes les requêtes SQL. Doctrine comprend qu'il doit faire un INSERT en base de données pour ajouter la nouvelle catégorie

        //création de la boucle
        foreach (self::CATEGORIES as $key => $categoryName) {
            $category = new Category();
            $category->setName($categoryName);
            $manager->persist($category);
        }
        $manager->flush();
    }
}
