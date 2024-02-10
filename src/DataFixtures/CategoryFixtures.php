<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $faker = \Faker\Factory::create('fr_FR');

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
                        'parent' => [
                            [
                                'name' => 'Analyser un cahier des charges',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Analyser un cahier des charges',
                            ],
                            [
                                'name' => 'Définir la structure de la page web',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Définir la structure de la page web',
                            ],
                            [
                                'name' => 'Réaliser une maquette statique',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Réaliser une maquette statique',
                            ],
                            [
                                'name' => 'Projet',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Projet0'
                            ]
                        ],
                    ],
                    [
                        'name' => 'Module 2',
                        'roles' => 'ROLE_DWWM',
                        'slug' => 'Réaliser une interface utilisateur web statique et adaptable.',
                        'parent' => [
                            [
                                'name' => 'Introduction aux Interfaces Utilisateur Web',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Introduction aux Interfaces Utilisateur Web',
                            ], 
                            [
                                'name' => 'Technologies Front-End',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Technologies Front-End',
                            ],
                            [
                                'name' => 'Conception Responsive',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Conception Responsive',
                            ],
                            [
                                'name' => 'Création d\'une Interface Utilisateur Web Simple',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Création d\'une Interface Utilisateur Web Simple'
                            ],
                            [
                                'name' => 'Création d\'une Interface Utilisateur Web Complexe',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Création d\'une Interface Utilisateur Web Complexe'
                            ],
                            [
                                'name' => 'Accessibilité et Bonnes Pratiques',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Accessibilité et Bonnes Pratiques'
                            ],
                            [
                                'name' => 'Outils et Débogage',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Outils et Débogage'
                            ],
                            [
                                'name' => 'Projet',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Projet'
                            ],
                        ],
                    ],
                    [
                        'name' => 'Module 3',
                        'roles' => 'ROLE_DWWM',
                        'slug' => 'Développer une interface utilisateur web dynamique',
                        'parent' => [
                            [
                                'name' => 'HTML5 et CSS3 Avancé',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'HTML5 et CSS3 Avancé',
                            ],
                            [
                                'name' => 'JavaScript et DOM Manipulation',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'JavaScript',
                            ],
                            [
                                'name' => 'Frameworks Frontend',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Frameworks Frontend',
                            ],
                            [
                                'name' => 'Sécurité',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Sécurité'
                            ],
                            [
                                'name' => 'Optimisation des Performances',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Optimisation des Performances'
                            ],
                            [
                                'name' => 'Projet',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Projet'
                            ],
                        ],
                    ],
                    [
                        'name' => 'Module 4',
                        'roles' => 'ROLE_DWWM',
                        'slug' => 'Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce',
                        'parent' => [
                            [
                                'name' => 'Introduction à WordPress ou WooCommerce',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'CMS',
                            ],
                            [
                                'name' => 'Intégration HTML/CSS avec WordPress/WooCommerce',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Intégration HTML/CSS avec WordPress/WooCommerce',
                            ],
                            [
                                'name' => 'Optimisation et test',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Optimisation et test'
                            ],
                            [
                                'name' => 'projet et déploiement',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'projet et déploiement'
                            ],
                        ],
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
                        'parent' => [
                            [
                                'name' => 'Introduction aux bases de données et SGBD',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Introduction aux bases de données et SGBD',
                            ],
                            [
                                'name' => 'Conception du schéma de base de données',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Conception du schéma de base de données',
                            ],
                            [
                                'name' => 'Création de tables et contraintes',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Création de tables et contraintes',
                            ],
                            [
                                'name' => 'Manipulation des données',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Manipulation des données'
                            ],
                            [
                                'name' => 'Optimisation et gestion de la base de données',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Optimisation et gestion de la base de données'
                            ],
                            [
                                'name' => 'Projet pratique',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Projet pratique'
                            ],
                            [
                                'name' => 'Documentation et démo finale',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Documentation et démo finale'
                            ],
                        ],
                    ],
                    [
                        'name' => 'Module 6',
                        'roles' => 'ROLE_DWWM',
                        'slug' => 'Développer les composants d’accès aux données',
                        'parent' => [
                            [
                                'name' => 'Introduction à PHP',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Introduction à PHP',
                                'parent' => [
                                    [
                                        'name' => 'PHP procédural',
                                        'roles' => 'ROLE_DWWM',
                                        'slug' => 'PHP procédural',
                                    ],
                                    [
                                        'name' => 'PHP orienté objet',
                                        'roles' => 'ROLE_DWWM',
                                        'slug' => 'PHP orienté objet',
                                    ],
                                    [
                                        'name' => 'Framwork PHP',
                                        'roles' => 'ROLE_DWWM',
                                        'slug' => 'Framwork PHP',
                                    ],
                                ],
                            ],
                            [
                                'name' => 'Connexion à une base de données',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Connexion à une base de données',
                            ],
                            [
                                'name' => 'Requêtes SQL',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Requêtes SQL',
                            ],
                            [
                                'name' => 'Gestion des erreurs',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Gestion des erreurs'
                            ],
                            [
                                'name' => 'Projet pratique',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Projet pratique'
                            ],
                            [
                                'name' => 'Documentation et démo finale',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Documentation et démo finale'
                            ],
                        ],
                    ],
                    [
                        'name' => 'Module 7',
                        'roles' => 'ROLE_DWWM',
                        'slug' => 'Développer la partie back-end d’une application web ou web mobile',
                        'parent' => [
                            [
                                'name' => 'Fondamentaux du développement back-end',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Fondamentaux du développement back-end',
                            ],
                            [
                                'name' => 'Concepts de serveur et API',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Concepts de serveur et API',
                            ],
                            [
                                'name' => 'Configuration d\'un serveur local',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Configuration d\'un serveur local',
                            ],
                            [
                                'name' => 'Création du premier serveur',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Création du premier serveur'
                            ],
                            [
                                'name' => 'Création de routes et gestion des requêtes HTTP',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Création de routes et gestion des requêtes HTTP'
                            ],
                            [
                                'name' => 'Implémentation de la logique métier',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Implémentation de la logique métier'
                            ],
                            [
                                'name' => 'Sécurité des API',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Sécurité des API'
                            ],
                            [
                                'name' => 'Authentification et autorisation',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Authentification et autorisation'
                            ],
                            [
                                'name' => 'Écriture de tests',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Écriture de tests'
                            ],
                            [
                                'name' => 'Débogage et optimisation',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Débogage et optimisation'
                            ],
                            [
                                'name' => 'projet',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'projet'
                            ],
                            [
                                'name' => 'Implémentation du projet',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Implémentation du projet'
                            ],
                            [
                                'name' => 'Documentation et Démo Finale',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Documentation et Démo Finale'
                            ],
                        ],
                    ],
                    [
                        'name' => 'Module 8',
                        'roles' => 'ROLE_DWWM',
                        'slug' => 'Elaborer et mettre en œuvre des composants dans une application de gestion de contenu ou e-commerce',
                        'parent' => [
                            [
                                'name' => 'Introduction à WordPress ou WooCommerce',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Introduction à WordPress ou WooCommerce',
                            ],
                            [
                                'name' => 'Création de thème',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Création de thème',
                            ],
                            [
                                'name' => 'Création de plugin',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Création de plugin',
                            ],
                            [
                                'name' => 'Optimisation et test',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Optimisation et test'
                            ],
                            [
                                'name' => 'projet et déploiement',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'projet et déploiement'
                            ],
                        ],
                    ],
                ],
            ],
            3 => [
                'name' => 'logiciel',
                'roles' => 'ROLE_DWWM',
                'slug' => 'logiciel',
                'parent' => [
                    [
                        'name' => 'PC',
                        'roles' => 'ROLE_DWWM',
                        'slug' => 'PC',
                        'parent' => [
                            [
                                'name' => 'VSCode',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'VSCode',
                            ],
                            [
                                'name' => 'WAMP - Laragon',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'WAMP - Laragon',
                            ],
                            [
                                'name' => 'GitHub',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'GitHub',
                            ],
                            [
                                'name' => 'Composer',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'Composer',
                            ],
                            [
                                'name' => 'NodeJS',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'nodejs'
                            ],
                            [
                                'name' => 'Docker',
                                'roles' => 'ROLE_DWWM',
                                'slug' => 'docker'
                            ]
                        ] 
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
            $category->setDescription($faker->paragraph(5, true));
            $manager->persist($category);
            if (isset($value['parent'])) {
                foreach ($value['parent'] as $key2 => $value2) {
                    $category2 = new \App\Entity\Category();
                    $category2->setNom($value2['name']);
                    $category2->setSlug($value2['slug']);
                    $category2->setTitre($value2['slug']);
                    $category2->setRoles($value2['roles']);
                    $category2->setParent($category);
                    $category2->setDescription($faker->paragraph(10, true));
                    $manager->persist($category2);
                    if (isset($value2['parent'])) {
                        foreach ($value2['parent'] as $key3 => $value3) {
                            $category3 = new \App\Entity\Category();
                            $category3->setNom($value3['name']);
                            $category3->setSlug($value3['slug']);
                            $category3->setTitre($value3['slug']);
                            $category3->setRoles($value3['roles']);
                            $category3->setParent($category2);
                            $category3->setDescription($faker->paragraph(10, true));
                            $manager->persist($category3);
                                $article = new Article();
                                $article->setNom($faker->sentence());
                                $article->setSlug($faker->slug());
                                $article->setCour($faker->paragraph(10, true));
                                $article->setCat($category3);
                                $manager->persist($article); 
                                    $article1 = new Article();
                                    $article1->setNom($faker->sentence());
                                    $article1->setSlug($faker->slug());
                                    $article1->setCour($faker->paragraph(10, true));
                                    $article1->setParent($article);
                                    $manager->persist($article1);
                                        $article2 = new Article();
                                        $article2->setNom($faker->sentence());
                                        $article2->setSlug($faker->slug());
                                        $article2->setCour($faker->paragraph(10, true));
                                        $article2->setParent($article1);
                                        $manager->persist($article2);
                            if (isset($value3['parent'])) {
                                foreach ($value3['parent'] as $key4 => $value4) {
                                    $category4 = new \App\Entity\Category();
                                    $category4->setNom($value4['name']);
                                    $category4->setSlug($value4['slug']);
                                    $category4->setTitre($value4['slug']);
                                    $category4->setRoles($value4['roles']);
                                    $category4->setParent($category3);
                                    $category4->setDescription($faker->paragraph(10, true));
                                    $manager->persist($category4);   
                                        $article = new Article();
                                        $article->setNom($value4['name']);
                                        $article->setSlug($value4['slug']);
                                        $article->setCour($faker->paragraph(10, true));
                                        $article->setCat($category4);
                                        $manager->persist($article);                                 
                                }
                            }
                        }
                    }
                }
            }
        }

        $manager->flush();
    }
}
