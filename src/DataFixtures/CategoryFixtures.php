<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $category = [
            1 => [
                'name' => 'CCP 1 - front end',
                'slug' => 'font-end',
                'roles' => 'ROLE_DWWM',
                'parent' => [
                    [
                        'name' => 'Module 1',
                        'roles' => 'ROLE_DWWM',
                        'slug' => 'Maquetter une application web et web mobile.',
                    ],
                    [
                        'name' => 'Module 2',
                        'roles' => 'ROLE_DWWM',
                        'slug' => 'Réaliser une interface utilisateur web statique et adaptable.',
                    ],
                    [
                        'name' => 'Module 3',
                        'roles' => 'ROLE_DWWM',
                        'slug' => 'Développer une interface utilisateur web dynamique',
                    ],
                    [
                        'name' => 'Module 4',
                        'roles' => 'ROLE_DWWM',
                        'slug' => 'Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce',
                    ],
                ],
            ],
            2 => [
                'name' => 'CCP 2 - back end',
                'slug' => 'back-end',
                'roles' => 'ROLE_DWWM',
                'parent' => [
                    [
                        'name' => 'Module 5',
                        'roles' => 'ROLE_DWWM',
                        'slug' => 'Créer une base de données',
                    ],
                    [
                        'name' => 'Module 6',
                        'roles' => 'ROLE_DWWM',
                        'slug' => 'Développer les composants d’accès aux données',
                    ],
                    [
                        'name' => 'Module 7',
                        'roles' => 'ROLE_DWWM',
                        'slug' => 'Développer la partie back-end d’une application web ou web mobile',
                    ],
                    [
                        'name' => 'Module 8',
                        'roles' => 'ROLE_DWWM',
                        'slug' => 'Elaborer et mettre en œuvre des composants dans une application de gestion de contenu ou e-commerce',
                    ],
                ],
            ],
        ];

        foreach ($category as $key => $value) {
            $category = new \App\Entity\Category();
            $category->setNom($value['name']);
            $category->setSlug($value['slug']);
            $category->setTitre($value['slug']);
            $category->setRoles($value['roles']);
            $manager->persist($category);
            $this->addReference('category_' . $key, $category);
            foreach ($value['parent'] as $keyParent => $valueParent) {
                $categoryParent = new \App\Entity\Category();
                $categoryParent->setNom($valueParent['name']);
                $categoryParent->setSlug($valueParent['slug']);
                $categoryParent->setTitre($valueParent['slug']);
                $categoryParent->setRoles($valueParent['roles']);
                $categoryParent->setParent($category);
                $manager->persist($categoryParent);
                $this->addReference('category_' . $key . '_' . $keyParent, $categoryParent);
            }
        }

        $manager->flush();
    }
}
