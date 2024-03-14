<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $questions = [
            [
              "question"=> "Quel est le nom de la colline la plus célèbre de Lyon ?",
              "answers"=> [
                [
                  "answer"=> "La Croix-Rousse",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "La Duchère",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Fourvière",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Part-Dieu",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel monument antique domine la ville et offre une vue panoramique ?",
              "answers"=> [
                [
                  "answer"=> "La Basilique Notre-Dame de Fourvière",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Gros Horloge",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Confluence",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Musée des Confluences",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel est le nom des restaurants traditionnels lyonnais ?",
              "answers"=> [
                [
                  "answer"=> "Les Auberges",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Les Bouchons",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Les Cafés",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Les Bistros",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel célèbre plat sucré est originaire de Lyon ?",
              "answers"=> [
                [
                  "answer"=> "La Ratatouille",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Truffe noire",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Salade Lyonnaise",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Tarte aux pralines",
                  "is_correct"=> true
                ]
              ]
            ],
            [
              "question"=> "Quel fleuve traverse la ville et la divise en deux ?",
              "answers"=> [
                [
                  "answer"=> "La Saône",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Rhône",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Durance",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "L'Isère",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel quartier historique est inscrit au patrimoine mondial de l'UNESCO ?",
              "answers"=> [
                [
                  "answer"=> "La Confluence",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Part-Dieu",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Vieux Lyon",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "La Croix-Rousse",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "De quel personnage célèbre la statue se trouve sur la place Bellecour ?",
              "answers"=> [
                [
                  "answer"=> "Louis XIV",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Napoléon Bonaparte",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Victor Hugo",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Jean de La Fontaine",
                  "is_correct"=> true
                ]
              ]
            ],
            [
              "question"=> "Quel est le nom du célèbre quartier des affaires et du shopping de Lyon ?",
              "answers"=> [
                [
                  "answer"=> "La Confluence",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Part-Dieu",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Vieux Lyon",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Croix-Rousse",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel grand événement annuel se déroule chaque année à Lyon ?",
              "answers"=> [
                [
                  "answer"=> "Le Festival de Cannes",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Fête de la Musique",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Foire de Paris",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Biennale de Lyon",
                  "is_correct"=> true
                ]
              ]
            ],
            [
              "question"=> "Quel est le nom du célèbre parc animalier et botanique de Lyon ?",
              "answers"=> [
                [
                  "answer"=> "Le Parc de la Tête d'Or",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Jardin des Plantes",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Parc Chambord",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Parc naturel régional du Pilat",
                  "is_correct"=> false
                ]
              ]
                ],
            [
              "question"=> "Quel est le nom du quartier moderne connu pour ses gratte-ciels et ses institutions internationales ?",
              "answers"=> [
                [
                  "answer"=> "La Confluence",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "La Part-Dieu",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Vieux Lyon",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Croix-Rousse",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel musée retrace l'histoire de la ville et expose des vestiges gallo-romains ?",
              "answers"=> [
                [
                  "answer"=> "Le Musée des Confluences",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Musée des Beaux-Arts",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Musée gallo-romain de Fourvière",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Musée Miniature et Cinéma",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel festival international de cinéma se déroule chaque année à Lyon ?",
              "answers"=> [
                [
                  "answer"=> "Le Festival de Cannes",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Festival Lumière",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "La Fête du Cinéma",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Festival du film francophone",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quelle spécialité culinaire lyonnaise est composée de quenelles et d'une sauce béchamel ?",
              "answers"=> [
                [
                  "answer"=> "La Salade Lyonnaise",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Gratin dauphinois",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Gâteau de voyage",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Saucisson brioché",
                  "is_correct"=> true
                ]
              ]
            ],
            [
              "question"=> "Quel pont historique relie la Presqu'île au Vieux Lyon ?",
              "answers"=> [
                [
                  "answer"=> "Le Pont de la Guillotière",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Pont Bonaparte",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Pont Saint-Vincent",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Pont Raymond Poincaré",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "De quel style architectural est la Cathédrale Saint-Jean-Baptiste de Lyon ?",
              "answers"=> [
                [
                  "answer"=> "Roman",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Gothique",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Renaissance",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Baroque",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel jardin public offre une vue imprenable sur la ville et ses environs ?",
              "answers"=> [
                [
                  "answer"=> "Le Parc de la Tête d'Or",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Jardin des Plantes",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Parc de Miribel",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Parc Chambord",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel quartier dynamique est connu pour sa vie nocturne et ses bars branchés ?",
              "answers"=> [
                [
                  "answer"=> "La Confluence",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Part-Dieu",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Vieux Lyon",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Quartier des Terreaux",
                  "is_correct"=> true
                ]
              ]
            ],
            [
              "question"=> "Quelle spécialité sucrée lyonnaise est parfumée à la fleur d'oranger ?",
              "answers"=> [
                [
                  "answer"=> "La Praline",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Brioche aux pralines",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Tarte aux pralines",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Coucou de Lyon",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel événement annuel rassemble des milliers de coureurs dans les rues de Lyon ?",
              "answers"=> [
                [
                  "answer"=> "Le Marathon de Paris",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Marathon du Beaujolais",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Saint-Tricat",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "La Course des Lumières",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quelle est la devise officielle de la ville de Lyon ?",
              "answers"=> [
                [
                  "answer"=> "\"Ut fortiter sic fideliter\"",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "\"Toujours fidèle\"",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "\"Lyon, ville Lumière\"",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "\"Labor omnia vincit\"",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel est le nom du stade de football de Lyon ?",
              "answers"=> [
                [
                  "answer"=> "Le Parc Olympique Lyonnais",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Stade de Gerland",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Matmut Atlantique",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Groupama Stadium",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quelle personnalité célèbre est née à Lyon et a marqué l'histoire de la ville ?",
              "answers"=> [
                [
                  "answer"=> "Victor Hugo",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Antoine de Saint-Exupéry",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Jean-Baptiste Perrin",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Les frères Lumière",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel quartier est connu pour ses traboules, ces passages secrets reliant les immeubles ?",
              "answers"=> [
                [
                  "answer"=> "La Confluence",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Part-Dieu",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Vieux Lyon",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "La Croix-Rousse",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel monument romain est l'un des vestiges les mieux conservés de la ville ?",
              "answers"=> [
                [
                  "answer"=> "Le Temple d'Auguste et de Livie",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Théâtre antique",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Les Amphithéâtres romains",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "L'Odéon",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "De quel style architectural est l'Hôtel de Ville de Lyon ?",
              "answers"=> [
                [
                  "answer"=> "Roman",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Gothique",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Renaissance",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Baroque",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel quartier abrite de nombreux ateliers d'artisans et de boutiques de créateurs ?",
              "answers"=> [
                [
                  "answer"=> "La Confluence",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Part-Dieu",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Croix-Rousse",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Vieux Lyon",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel événement gastronomique annuel met à l'honneur la cuisine lyonnaise ?",
              "answers"=> [
                [
                  "answer"=> "La Fête des Lumières",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Biennale de Lyon",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Beaujolais Nouveau",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Les Nuits Sonores",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quelle spécialité fromagère est originaire de la région lyonnaise ?",
              "answers"=> [
                [
                  "answer"=> "Le Bleu d'Auvergne",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Comté",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Saint-Marcellin",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Reblochon",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel personnage historique a fondé la ville de Lyon en 43 av. J.-C. ?",
              "answers"=> [
                [
                  "answer"=> "Jules César",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Auguste",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Tibère",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Caligula",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quelle place centrale accueille la statue de Louis XIV et des événements importants ?",
              "answers"=> [
                [
                  "answer"=> "La Place Bellecour",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "La Place des Terreaux",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Place Carnot",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Place Saint-Jean",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel quartier est connu pour ses pentes et ses traboules, et offre une vue panoramique sur la ville ?",
              "answers"=> [
                [
                  "answer"=> "La Confluence",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Part-Dieu",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Croix-Rousse",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Vieux Lyon",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel musée est consacré à l'histoire de la soie et de son industrie à Lyon ?",
              "answers"=> [
                [
                  "answer"=> "Le Musée des Confluences",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Musée des Beaux-Arts",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Musée des Tissus et des Arts Décoratifs",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Musée Miniature et Cinéma",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel festival de musiques du monde se déroule chaque année à Lyon ?",
              "answers"=> [
                [
                  "answer"=> "Les Nuits Sonores",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Festival Lumière",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Festival Unlimited",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Les Francofolies",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quelle spécialité culinaire lyonnaise est composée de tripes de bœuf farcies ?",
              "answers"=> [
                [
                  "answer"=> "La Salade Lyonnaise",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Gratin dauphinois",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Saucisson brioché",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Les Tripoux à la lyonnaise",
                  "is_correct"=> true
                ]
              ]
            ],
            [
              "question"=> "Quel pont moderne relie la Presqu'île à la Confluence ?",
              "answers"=> [
                [
                  "answer"=> "Le Pont de la Guillotière",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Pont Bonaparte",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Pont Saint-Vincent",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Pont Raymond Poincaré",
                  "is_correct"=> true
                ]
              ]
            ],
            [
              "question"=> "Quel style architectural est caractéristique du quartier du Vieux Lyon ?",
              "answers"=> [
                [
                  "answer"=> "Roman",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Gothique",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Renaissance",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Baroque",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel jardin botanique abrite une grande variété de plantes et de fleurs ?",
              "answers"=> [
                [
                  "answer"=> "Le Parc de la Tête d'Or",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Jardin des Plantes",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Parc de Miribel",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Parc Chambord",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel quartier étudiant est connu pour son ambiance festive et ses nombreux bars ?",
              "answers"=> [
                [
                  "answer"=> "La Confluence",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Part-Dieu",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Vieux Lyon",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Quartier des Cordeliers",
                  "is_correct"=> true
                ]
              ]
            ],
            [
              "question"=> "Quelle spécialité sucrée lyonnaise est parfumée à la pistache ?",
              "answers"=> [
                [
                  "answer"=> "La Praline",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Brioche aux pralines",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Tarte aux pralines",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Coucou de Lyon",
                  "is_correct"=> true
                ]
              ]
            ],
            [
              "question"=> "Quel événement sportif international se déroule tous les quatre ans à Lyon ?",
              "answers"=> [
                [
                  "answer"=> "Le Marathon de Paris",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Tour de France",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Coupe du Monde de football",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Les Jeux Olympiques",
                  "is_correct"=> true
                ]
              ]
            ],
            [
              "question"=> "Quelle est la devise latine de la famille de Guise, liée à l'histoire de Lyon ?",
              "answers"=> [
                [
                  "answer"=> "\"Ut fortiter sic fideliter\"",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "\"Toujours fidèle\"",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "\"Lyon, ville Lumière\"",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "\"Qui s'y frotte s'y pique\"",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quelle spécialité culinaire lyonnaise est composée de quenelles de brochet et d'une sauce Nantua ?",
              "answers"=> [
                [
                  "answer"=> "La Salade Lyonnaise",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Gratin dauphinois",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Saucisson brioché",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Gratin de brochet à la Nantua",
                  "is_correct"=> true
                ]
              ]
            ],
            [
              "question"=> "Quel quartier est connu pour ses restaurants traditionnels et ses bouchons lyonnais ?",
              "answers"=> [
                [
                  "answer"=> "La Confluence",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Part-Dieu",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Vieux Lyon",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "La Croix-Rousse",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel musée est consacré à l'histoire de la ville et à son patrimoine gallo-romain ?",
              "answers"=> [
                [
                  "answer"=> "Le Musée des Confluences",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Musée gallo-romain de Fourvière",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Musée des Beaux-Arts",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Musée des Tissus et des Arts Décoratifs",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel festival de littérature se déroule chaque année à Lyon ?",
              "answers"=> [
                [
                  "answer"=> "Les Nuits Sonores",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Festival Lumière",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Salon du Livre de Lyon",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Les Francofolies",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quelle spécialité sucrée lyonnaise est composée de pâte feuilletée et de crème pâtissière ?",
              "answers"=> [
                [
                  "answer"=> "La Praline",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Brioche aux pralines",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Tarte aux pralines",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Gâteau Praliné",
                  "is_correct"=> true
                ]
              ]
            ],
            [
              "question"=> "Quel grand centre commercial est situé dans le quartier de la Part-Dieu ?",
              "answers"=> [
                [
                  "answer"=> "La Confluence",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Part-Dieu",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Vieux Lyon",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Centre Commercial Aéroville",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel est le nom du village médiéval situé sur les hauteurs de Lyon ?",
              "answers"=> [
                [
                  "answer"=> "Fourvière",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Sainte-Genève",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Oingt",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Condrieu",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel style architectural est caractéristique du quartier de la Confluence ?",
              "answers"=> [
                [
                  "answer"=> "Roman",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Gothique",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Renaissance",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Contemporain",
                  "is_correct"=> true
                ]
              ]
            ],
            [
              "question"=> "Quel parc animalier héberge des animaux du monde entier ?",
              "answers"=> [
                [
                  "answer"=> "Le Parc de la Tête d'Or",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Jardin des Plantes",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Parc de Miribel",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Parc Chambord",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel quartier est connu pour ses nombreux étudiants et ses campus universitaires ?",
              "answers"=> [
                [
                  "answer"=> "La Confluence",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Part-Dieu",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Quartier des Cordeliers",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Quartier de Gerland",
                  "is_correct"=> true
                ]
              ]
            ],
            [
              "question"=> "Quelle spécialité sucrée lyonnaise est parfumée à la fleur d'oranger et au rhum ?",
              "answers"=> [
                [
                  "answer"=> "La Praline",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Brioche aux pralines",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Tarte aux pralines",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Saint-Genix",
                  "is_correct"=> true
                ]
              ]
            ],
            [
              "question"=> "Quel événement culturel majeur se déroule tous les deux ans à Lyon ?",
              "answers"=> [
                [
                  "answer"=> "La Biennale de Lyon",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Festival Lumière",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Salon du Livre de Lyon",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Les Nuits Sonores",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel est le nom du célèbre tunnel romain reliant la Presqu'île à la Croix-Rousse ?",
              "answers"=> [
                [
                  "answer"=> "Le Pont de la Guillotière",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Tunnel Traboule",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Pont Bonaparte",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Pont Raymond Poincaré",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel quartier est connu pour ses ateliers de soieries et son savoir-faire artisanal ?",
              "answers"=> [
                [
                  "answer"=> "La Confluence",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Part-Dieu",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Croix-Rousse",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Vieux Lyon",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel festival de danse contemporaine se déroule chaque année à Lyon ?",
              "answers"=> [
                [
                  "answer"=> "Les Nuits Sonores",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Festival Lumière",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Biennale de la Danse",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Les Francofolies",
                  "is_correct"=> false
                ]
              ]
            ],

              [
                "question"=> "Quel est le nom du quartier moderne connu pour ses gratte-ciels et ses institutions internationales ?",
                "answers"=> [
                  [
                    "answer"=> "La Confluence",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "La Part-Dieu",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Vieux Lyon",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Croix-Rousse",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel musée retrace l'histoire de la ville et expose des vestiges gallo-romains ?",
                "answers"=> [
                  [
                    "answer"=> "Le Musée des Confluences",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Musée des Beaux-Arts",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Musée gallo-romain de Fourvière",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Musée Miniature et Cinéma",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel festival international de cinéma se déroule chaque année à Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "Le Festival de Cannes",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Festival Lumière",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "La Fête du Cinéma",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Festival du film francophone",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quelle spécialité culinaire lyonnaise est composée de quenelles et d'une sauce béchamel ?",
                "answers"=> [
                  [
                    "answer"=> "La Salade Lyonnaise",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Gratin dauphinois",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Gâteau de voyage",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Saucisson brioché",
                    "is_correct"=> true
                  ]
                ]
              ],
              [
                "question"=> "Quel pont historique relie la Presqu'île au Vieux Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "Le Pont de la Guillotière",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Pont Bonaparte",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Pont Saint-Vincent",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Pont Raymond Poincaré",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "De quel style architectural est la Cathédrale Saint-Jean-Baptiste de Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "Roman",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Gothique",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Renaissance",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Baroque",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel jardin public offre une vue imprenable sur la ville et ses environs ?",
                "answers"=> [
                  [
                    "answer"=> "Le Parc de la Tête d'Or",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Jardin des Plantes",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Parc de Miribel",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Parc Chambord",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel quartier dynamique est connu pour sa vie nocturne et ses bars branchés ?",
                "answers"=> [
                  [
                    "answer"=> "La Confluence",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Part-Dieu",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Vieux Lyon",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Quartier des Terreaux",
                    "is_correct"=> true
                  ]
                ]
              ],
              [
                "question"=> "Quelle spécialité sucrée lyonnaise est parfumée à la fleur d'oranger ?",
                "answers"=> [
                  [
                    "answer"=> "La Praline",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Brioche aux pralines",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Tarte aux pralines",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Coucou de Lyon",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel événement annuel rassemble des milliers de coureurs dans les rues de Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "Le Marathon de Paris",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Marathon du Beaujolais",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Saint-Tricat",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "La Course des Lumières",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quelle est la devise officielle de la ville de Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "\"Ut fortiter sic fideliter\"",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "\"Toujours fidèle\"",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "\"Lyon, ville Lumière\"",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "\"Labor omnia vincit\"",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel est le nom du stade de football de Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "Le Parc Olympique Lyonnais",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Stade de Gerland",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Matmut Atlantique",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Groupama Stadium",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quelle personnalité célèbre est née à Lyon et a marqué l'histoire de la ville ?",
                "answers"=> [
                  [
                    "answer"=> "Victor Hugo",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Antoine de Saint-Exupéry",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Jean-Baptiste Perrin",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Les frères Lumière",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel quartier est connu pour ses traboules, ces passages secrets reliant les immeubles ?",
                "answers"=> [
                  [
                    "answer"=> "La Confluence",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Part-Dieu",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Vieux Lyon",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "La Croix-Rousse",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel monument romain est l'un des vestiges les mieux conservés de la ville ?",
                "answers"=> [
                  [
                    "answer"=> "Le Temple d'Auguste et de Livie",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Théâtre antique",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Les Amphithéâtres romains",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "L'Odéon",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "De quel style architectural est l'Hôtel de Ville de Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "Roman",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Gothique",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Renaissance",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Baroque",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel quartier abrite de nombreux ateliers d'artisans et de boutiques de créateurs ?",
                "answers"=> [
                  [
                    "answer"=> "La Confluence",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Part-Dieu",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Croix-Rousse",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Vieux Lyon",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel événement gastronomique annuel met à l'honneur la cuisine lyonnaise ?",
                "answers"=> [
                  [
                    "answer"=> "La Fête des Lumières",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Biennale de Lyon",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Beaujolais Nouveau",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Les Nuits Sonores",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quelle spécialité fromagère est originaire de la région lyonnaise ?",
                "answers"=> [
                  [
                    "answer"=> "Le Bleu d'Auvergne",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Comté",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Saint-Marcellin",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Reblochon",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel personnage historique a fondé la ville de Lyon en 43 av. J.-C. ?",
                "answers"=> [
                  [
                    "answer"=> "Jules César",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Auguste",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Tibère",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Caligula",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quelle place centrale accueille la statue de Louis XIV et des événements importants ?",
                "answers"=> [
                  [
                    "answer"=> "La Place Bellecour",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "La Place des Terreaux",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Place Carnot",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Place Saint-Jean",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel quartier est connu pour ses pentes et ses traboules, et offre une vue panoramique sur la ville ?",
                "answers"=> [
                  [
                    "answer"=> "La Confluence",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Part-Dieu",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Croix-Rousse",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Vieux Lyon",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel musée est consacré à l'histoire de la soie et de son industrie à Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "Le Musée des Confluences",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Musée des Beaux-Arts",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Musée des Tissus et des Arts Décoratifs",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Musée Miniature et Cinéma",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel festival de musiques du monde se déroule chaque année à Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "Les Nuits Sonores",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Festival Lumière",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Festival Unlimited",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Les Francofolies",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quelle spécialité culinaire lyonnaise est composée de tripes de bœuf farcies ?",
                "answers"=> [
                  [
                    "answer"=> "La Salade Lyonnaise",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Gratin dauphinois",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Saucisson brioché",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Les Tripoux à la lyonnaise",
                    "is_correct"=> true
                  ]
                ]
              ],
              [
                "question"=> "Quel pont moderne relie la Presqu'île à la Confluence ?",
                "answers"=> [
                  [
                    "answer"=> "Le Pont de la Guillotière",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Pont Bonaparte",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Pont Saint-Vincent",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Pont Raymond Poincaré",
                    "is_correct"=> true
                  ]
                ]
              ],
              [
                "question"=> "Quel style architectural est caractéristique du quartier du Vieux Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "Roman",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Gothique",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Renaissance",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Baroque",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel jardin botanique abrite une grande variété de plantes et de fleurs ?",
                "answers"=> [
                  [
                    "answer"=> "Le Parc de la Tête d'Or",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Jardin des Plantes",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Parc de Miribel",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Parc Chambord",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel quartier étudiant est connu pour son ambiance festive et ses nombreux bars ?",
                "answers"=> [
                  [
                    "answer"=> "La Confluence",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Part-Dieu",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Vieux Lyon",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Quartier des Cordeliers",
                    "is_correct"=> true
                  ]
                ]
              ],
              [
                "question"=> "Quelle spécialité sucrée lyonnaise est parfumée à la pistache ?",
                "answers"=> [
                  [
                    "answer"=> "La Praline",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Brioche aux pralines",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Tarte aux pralines",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Coucou de Lyon",
                    "is_correct"=> true
                  ]
                ]
              ],
              [
                "question"=> "Quel événement sportif international se déroule tous les quatre ans à Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "Le Marathon de Paris",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Tour de France",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Coupe du Monde de football",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Les Jeux Olympiques",
                    "is_correct"=> true
                  ]
                ]
              ],
              [
                "question"=> "Quelle est la devise latine de la famille de Guise, liée à l'histoire de Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "\"Ut fortiter sic fideliter\"",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "\"Toujours fidèle\"",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "\"Lyon, ville Lumière\"",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "\"Qui s'y frotte s'y pique\"",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quelle spécialité culinaire lyonnaise est composée de quenelles de brochet et d'une sauce Nantua ?",
                "answers"=> [
                  [
                    "answer"=> "La Salade Lyonnaise",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Gratin dauphinois",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Saucisson brioché",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Gratin de brochet à la Nantua",
                    "is_correct"=> true
                  ]
                ]
              ],
              [
                "question"=> "Quel quartier est connu pour ses restaurants traditionnels et ses bouchons lyonnais ?",
                "answers"=> [
                  [
                    "answer"=> "La Confluence",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Part-Dieu",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Vieux Lyon",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "La Croix-Rousse",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel musée est consacré à l'histoire de la ville et à son patrimoine gallo-romain ?",
                "answers"=> [
                  [
                    "answer"=> "Le Musée des Confluences",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Musée gallo-romain de Fourvière",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Musée des Beaux-Arts",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Musée des Tissus et des Arts Décoratifs",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel festival de littérature se déroule chaque année à Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "Les Nuits Sonores",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Festival Lumière",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Salon du Livre de Lyon",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Les Francofolies",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quelle spécialité sucrée lyonnaise est composée de pâte feuilletée et de crème pâtissière ?",
                "answers"=> [
                  [
                    "answer"=> "La Praline",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Brioche aux pralines",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Tarte aux pralines",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Gâteau Praliné",
                    "is_correct"=> true
                  ]
                ]
              ],
              [
                "question"=> "Quel grand centre commercial est situé dans le quartier de la Part-Dieu ?",
                "answers"=> [
                  [
                    "answer"=> "La Confluence",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Part-Dieu",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Vieux Lyon",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Centre Commercial Aéroville",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel est le nom du village médiéval situé sur les hauteurs de Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "Fourvière",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Sainte-Genève",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Oingt",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Condrieu",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel style architectural est caractéristique du quartier de la Confluence ?",
                "answers"=> [
                  [
                    "answer"=> "Roman",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Gothique",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Renaissance",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Contemporain",
                    "is_correct"=> true
                  ]
                ]
              ],
              [
                "question"=> "Quel parc animalier héberge des animaux du monde entier ?",
                "answers"=> [
                  [
                    "answer"=> "Le Parc de la Tête d'Or",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Jardin des Plantes",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Parc de Miribel",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Parc Chambord",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel quartier est connu pour ses nombreux étudiants et ses campus universitaires ?",
                "answers"=> [
                  [
                    "answer"=> "La Confluence",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Part-Dieu",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Quartier des Cordeliers",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Quartier de Gerland",
                    "is_correct"=> true
                  ]
                ]
              ],
              [
                "question"=> "Quelle spécialité sucrée lyonnaise est parfumée à la fleur d'oranger et au rhum ?",
                "answers"=> [
                  [
                    "answer"=> "La Praline",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Brioche aux pralines",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Tarte aux pralines",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Saint-Genix",
                    "is_correct"=> true
                  ]
                ]
              ],
              [
                "question"=> "Quel événement culturel majeur se déroule tous les deux ans à Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "La Biennale de Lyon",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Festival Lumière",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Salon du Livre de Lyon",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Les Nuits Sonores",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel est le nom du célèbre tunnel romain reliant la Presqu'île à la Croix-Rousse ?",
                "answers"=> [
                  [
                    "answer"=> "Le Pont de la Guillotière",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Tunnel Traboule",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Pont Bonaparte",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Pont Raymond Poincaré",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel quartier est connu pour ses ateliers de soieries et son savoir-faire artisanal ?",
                "answers"=> [
                  [
                    "answer"=> "La Confluence",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Part-Dieu",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Croix-Rousse",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Vieux Lyon",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel festival de danse contemporaine se déroule chaque année à Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "Les Nuits Sonores",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Festival Lumière",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Biennale de la Danse",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Les Francofolies",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quelle est la spécialité culinaire la plus célèbre de Lyon, servie dans les bouchons lyonnais ?",
                "answers"=> [
                  [
                    "answer"=> "La Salade Lyonnaise",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Gratin dauphinois",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Saucisson brioché",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Bœuf à la lyonnaise",
                    "is_correct"=> true
                  ]
                ]
              ],
              [
                "question"=> "De quel royaume antique la ville de Lyon était-elle la capitale ?",
                "answers"=> [
                  [
                    "answer"=> "Les Gaulois",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Les Romains",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Les Burgondes",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Les Francs",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel empereur romain a séjourné à Lyon et y a fait construire un palais ?",
                "answers"=> [
                  [
                    "answer"=> "Jules César",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Auguste",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Tibère",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Caligula",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel événement historique important s'est déroulé à Lyon en 1672 ?",
                "answers"=> [
                  [
                    "answer"=> "La prise de la ville par les troupes françaises",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La signature du traité de Lyon",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La révolte des Canuts",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "La construction du Pont de la Guillotière",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel personnage célèbre a été emprisonné à la prison de Saint-Joseph à Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "Jean-Baptiste Molière",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Voltaire",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Olympe de Gouges",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Victor Hugo",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel monument historique de Lyon est classé au patrimoine mondial de l'UNESCO ?",
                "answers"=> [
                  [
                    "answer"=> "La Basilique Notre-Dame de Fourvière",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Vieux Lyon",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Musée des Confluences",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Parc de la Tête d'Or",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quelle est la devise officielle de la ville de Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "\"Ut fortiter sic fideliter\"",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "\"Toujours fidèle\"",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "\"Lyon, ville Lumière\"",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "\"Labor omnia vincit\"",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel quartier de Lyon est connu pour ses traboules, ces passages secrets ?",
                "answers"=> [
                  [
                    "answer"=> "La Confluence",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Part-Dieu",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Vieux Lyon",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "La Croix-Rousse",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel musée retrace l'histoire de la ville et expose des vestiges gallo-romains ?",
                "answers"=> [
                  [
                    "answer"=> "Le Musée des Confluences",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Musée gallo-romain de Fourvière",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Musée des Beaux-Arts",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Musée des Tissus et des Arts Décoratifs",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quelle fête traditionnelle célèbre les lumignons et la Vierge Marie à Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "La Fête des Lumières",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "La Fête du Beaujolais Nouveau",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Saint-Jean",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Les Assises de Lyon",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel personnage historique a fondé l'imprimerie à Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "Gutenberg",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Gutemberg",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Geoffroy Tory",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Robert Estienne",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quelle spécialité culinaire lyonnaise est composée de quenelles et d'une sauce béchamel ?",
                "answers"=> [
                  [
                    "answer"=> "La Salade Lyonnaise",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Gratin dauphinois",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Saucisson brioché",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Saucisson à la lyonnaise",
                    "is_correct"=> true
                  ]
                ]
              ],
              [
                "question"=> "Quel plat sucré lyonnais est parfumé à la fleur d'oranger ?",
                "answers"=> [
                  [
                    "answer"=> "La Praline",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Brioche aux pralines",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Tarte aux pralines",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Coucou de Lyon",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quelle spécialité fromagère est originaire de la région lyonnaise ?",
                "answers"=> [
                  [
                    "answer"=> "Le Bleu d'Auvergne",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Comté",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Saint-Marcellin",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Reblochon",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel vin rouge est produit dans les environs de Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "Le Beaujolais",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Côtes du Rhône",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Hermitage",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Châteauneuf-du-Pape",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quelle est la boisson traditionnelle des bouchons lyonnais ?",
                "answers"=> [
                  [
                    "answer"=> "Le Beaujolais",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Côtes du Rhône",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Perrier",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Citron pressé",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel marché en plein air est réputé pour ses produits frais et locaux ?",
                "answers"=> [
                  [
                    "answer"=> "Le Marché Saint-Antoine",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Marché du Quai Saint-Vincent",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Marché de la Confluence",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Marché de la Croix-Rousse",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quelle spécialité culinaire lyonnaise est composée de tripes de bœuf farcies ?",
                "answers"=> [
                  [
                    "answer"=> "La Salade Lyonnaise",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Gratin dauphinois",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Saucisson brioché",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Les Tripoux à la lyonnaise",
                    "is_correct"=> true
                  ]
                ]
              ],
              [
                "question"=> "Quelle fête gastronomique annuelle met à l'honneur la cuisine lyonnaise ?",
                "answers"=> [
                  [ "answer"=> "La Fête des Lumières", "is_correct"=> false ],
                  [ "answer"=> "La Biennale de Lyon", "is_correct"=> false ],
                  [ "answer"=> "Beaujolais Nouveau", "is_correct"=> true ],
                  [ "answer"=> "Les Nuits Sonores", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle spécialité sucrée lyonnaise est composée de pâte feuilletée et de crème pâtissière ?",
                "answers"=> [
                  [ "answer"=> "La Praline", "is_correct"=> false ],
                  [ "answer"=> "La Brioche aux pralines", "is_correct"=> false ],
                  [ "answer"=> "La Tarte aux pralines", "is_correct"=> false ],
                  [ "answer"=> "Le Gâteau Praliné", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quel plat typique lyonnais est servi dans une cocotte en fonte ?",
                "answers"=> [
                  [ "answer"=> "La Salade Lyonnaise", "is_correct"=> false ],
                  [ "answer"=> "Le Gratin dauphinois", "is_correct"=> false ],
                  [ "answer"=> "Le Murgon", "is_correct"=> true ],
                  [ "answer"=> "Le Saucisson brioché", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle colline offre une vue panoramique sur la ville de Lyon ?",
                "answers"=> [
                  [ "answer"=> "La Confluence", "is_correct"=> false ],
                  [ "answer"=> "La Part-Dieu", "is_correct"=> false ],
                  [ "answer"=> "Fourvière", "is_correct"=> true ],
                  [ "answer"=> "La Croix-Rousse", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel monument religieux domine la ville et est accessible par un funiculaire ?",
                "answers"=> [
                  [ "answer"=> "La Basilique Notre-Dame de Fourvière", "is_correct"=> true ],
                  [ "answer"=> "Le Gros Horloge", "is_correct"=> false ],
                  [ "answer"=> "La Cathédrale Saint-Jean-Baptiste", "is_correct"=> false ],
                  [ "answer"=> "Le Musée des Confluences", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel jardin public abrite une grande variété de plantes et de fleurs ?",
                "answers"=> [
                  [ "answer"=> "Le Parc de la Tête d'Or", "is_correct"=> true ],
                  [ "answer"=> "Le Jardin des Plantes", "is_correct"=> false ],
                  [ "answer"=> "Le Parc de Miribel", "is_correct"=> false ],
                  [ "answer"=> "Le Parc Chambord", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel pont moderne relie la Presqu'île à la Confluence ?",
                "answers"=> [
                  [ "answer"=> "Le Pont de la Guillotière", "is_correct"=> false ],
                  [ "answer"=> "Le Pont Bonaparte", "is_correct"=> false ],
                  [ "answer"=> "Le Pont Saint-Vincent", "is_correct"=> false ],
                  [ "answer"=> "Le Pont Raymond Poincaré", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quel quartier est connu pour ses pentes et ses traboules ?",
                "answers"=> [
                  [ "answer"=> "La Confluence", "is_correct"=> false ],
                  [ "answer"=> "La Part-Dieu", "is_correct"=> false ],
                  [ "answer"=> "La Croix-Rousse", "is_correct"=> true ],
                  [ "answer"=> "Le Vieux Lyon", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel musée est consacré à l'histoire de la soie et de son industrie à Lyon ?",
                "answers"=> [
                  [ "answer"=> "Le Musée des Confluences", "is_correct"=> false ],
                  [ "answer"=> "Le Musée gallo-romain de Fourvière", "is_correct"=> false ],
                  [ "answer"=> "Le Musée des Beaux-Arts", "is_correct"=> false ],
                  [ "answer"=> "Le Musée des Tissus et des Arts Décoratifs", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quel stade de football accueille les matchs de l'Olympique Lyonnais ?",
                "answers"=> [
                  [ "answer"=> "Le Parc Olympique Lyonnais", "is_correct"=> true ],
                  [ "answer"=> "Le Stade de Gerland", "is_correct"=> false ],
                  [ "answer"=> "Le Matmut Atlantique", "is_correct"=> false ],
                  [ "answer"=> "Le Groupama Stadium", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle place centrale accueille la statue de Louis XIV et des événements importants ?",
                "answers"=> [
                  [ "answer"=> "La Place Bellecour", "is_correct"=> true ],
                  [ "answer"=> "La Place des Terreaux", "is_correct"=> false ],
                  [ "answer"=> "La Place Carnot", "is_correct"=> false ],
                  [ "answer"=> "La Place Saint-Jean", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel quartier étudiant est connu pour son ambiance festive et ses nombreux bars ?",
                "answers"=> [
                  [ "answer"=> "La Confluence", "is_correct"=> false ],
                  [ "answer"=> "La Part-Dieu", "is_correct"=> false ],
                  [ "answer"=> "Le Quartier des Cordeliers", "is_correct"=> true ],
                  [ "answer"=> "Le Quartier de Gerland", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel village médiéval situé sur les hauteurs de Lyon est célèbre pour ses maisons en pierre ?",
                "answers"=> [
                  [ "answer"=> "Fourvière", "is_correct"=> false ],
                  [ "answer"=> "Sainte-Genève", "is_correct"=> false ],
                  [ "answer"=> "Oingt", "is_correct"=> true ],
                  [ "answer"=> "Condrieu", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel festival de cinéma international se déroule chaque année à Lyon ?",
                "answers"=> [
                  [ "answer"=> "Les Nuits Sonores", "is_correct"=> false ],
                  [ "answer"=> "Le Festival Lumière", "is_correct"=> true ],
                  [ "answer"=> "Le Salon du Livre de Lyon", "is_correct"=> false ],
                  [ "answer"=> "Les Francofolies", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel festival de musiques du monde a lieu chaque été à Lyon ?",
                "answers"=> [
                  [ "answer"=> "Les Nuits Sonores", "is_correct"=> true ],
                  [ "answer"=> "Le Festival Lumière", "is_correct"=> false ],
                  [ "answer"=> "Le Salon du Livre de Lyon", "is_correct"=> false ],
                  [ "answer"=> "Les Francofolies", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel festival de littérature se déroule chaque année à Lyon ?",
                "answers"=> [
                  [ "answer"=> "Les Nuits Sonores", "is_correct"=> false ],
                  [ "answer"=> "Le Festival Lumière", "is_correct"=> false ],
                  [ "answer"=> "Le Salon du Livre de Lyon", "is_correct"=> true ],
                  [ "answer"=> "Les Francofolies", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel festival de danse contemporaine se tient tous les deux ans à Lyon ?",
                "answers"=> [
                  [ "answer"=> "Les Nuits Sonores", "is_correct"=> false ],
                  [ "answer"=> "Le Festival Lumière", "is_correct"=> false ],
                  [ "answer"=> "La Biennale de la Danse", "is_correct"=> true ],
                  [ "answer"=> "Les Francofolies", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel grand centre commercial est situé dans le quartier de la Part-Dieu ?",
                "answers"=> [
                  [ "answer"=> "La Confluence", "is_correct"=> false ],
                  [ "answer"=> "La Part-Dieu", "is_correct"=> true ],
                  [ "answer"=> "Le Vieux Lyon", "is_correct"=> false ],
                  [ "answer"=> "Le Centre Commercial Aéroville", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel musée est consacré à l'histoire de la résistance et de la déportation pendant la Seconde Guerre mondiale ?",
                "answers"=> [
                  [ "answer"=> "Le Musée des Confluences", "is_correct"=> false ],
                  [ "answer"=> "Le Musée national de la Résistance et de la Déportation", "is_correct"=> true ],
                  [ "answer"=> "Le Musée des Beaux-Arts", "is_correct"=> false ],
                  [ "answer"=> "Le Musée des Tissus et des Arts Décoratifs", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel quartier est connu pour ses nombreux ateliers d'artisans et de boutiques de créateurs ?",
                "answers"=> [
                  [ "answer"=> "La Confluence", "is_correct"=> false ],
                  [ "answer"=> "La Part-Dieu", "is_correct"=> false ],
                  [ "answer"=> "La Croix-Rousse", "is_correct"=> true ],
                  [ "answer"=> "Le Vieux Lyon", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel événement sportif international se déroule tous les quatre ans à Lyon ?",
                "answers"=> [
                  [ "answer"=> "Le Marathon de Paris", "is_correct"=> false ],
                  [ "answer"=> "Le Tour de France", "is_correct"=> false ],
                  [ "answer"=> "La Coupe du Monde de football", "is_correct"=> false ],
                  [ "answer"=> "Les Jeux Olympiques", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quelle spécialité sucrée lyonnaise est parfumée à la pistache ?",
                "answers"=> [
                  [ "answer"=> "La Praline", "is_correct"=> false ],
                  [ "answer"=> "La Brioche aux pralines", "is_correct"=> false ],
                  [ "answer"=> "La Tarte aux pralines", "is_correct"=> false ],
                  [ "answer"=> "Le Coucou de Lyon", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quel est le nom du célèbre tunnel romain reliant la Presqu'île à la Croix-Rousse ?",
                "answers"=> [
                  [ "answer"=> "Le Pont de la Guillotière", "is_correct"=> false ],
                  [ "answer"=> "Le Tunnel Traboule", "is_correct"=> true ],
                  [ "answer"=> "Le Pont Bonaparte", "is_correct"=> false ],
                  [ "answer"=> "Le Pont Raymond Poincaré", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel est le nom du fleuve qui traverse la ville de Lyon ?",
                "answers"=> [
                  [ "answer"=> "La Saône", "is_correct"=> true ],
                  [ "answer"=> "Le Rhône", "is_correct"=> false ],
                  [ "answer"=> "La Loire", "is_correct"=> false ],
                  [ "answer"=> "L'Isère", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "De quel département français la ville de Lyon est-elle la capitale ?",
                "answers"=> [
                  [ "answer"=> "L'Isère", "is_correct"=> false ],
                  [ "answer"=> "Le Rhône", "is_correct"=> true ],
                  [ "answer"=> "La Loire", "is_correct"=> false ],
                  [ "answer"=> "La Savoie", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle est la population approximative de la ville de Lyon ?",
                "answers"=> [
                  [ "answer"=> "400 000 habitants", "is_correct"=> false ],
                  [ "answer"=> "500 000 habitants", "is_correct"=> false ],
                  [ "answer"=> "600 000 habitants", "is_correct"=> true ],
                  [ "answer"=> "700 000 habitants", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Comment se nomme l'aéroport international de Lyon ?",
                "answers"=> [
                  [ "answer"=> "Aéroport Lyon-Saint-Exupéry", "is_correct"=> true ],
                  [ "answer"=> "Aéroport Marseille-Provence", "is_correct"=> false ],
                  [ "answer"=> "Aéroport Nice Côte d'Azur", "is_correct"=> false ],
                  [ "answer"=> "Aéroport de Genève", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quels sont les principaux moyens de transport en commun à Lyon ?",
                "answers"=> [
                  [ "answer"=> "Métro, tramway, bus", "is_correct"=> true ],
                  [ "answer"=> "Train, RER, bus", "is_correct"=> false ],
                  [ "answer"=> "Métro, bus", "is_correct"=> false ],
                  [ "answer"=> "Tramway, bus", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle est la langue officielle parlée à Lyon ?",
                "answers"=> [
                  [ "answer"=> "Français", "is_correct"=> true ],
                  [ "answer"=> "Anglais", "is_correct"=> false ],
                  [ "answer"=> "Espagnol", "is_correct"=> false ],
                  [ "answer"=> "Italien", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle est la devise utilisée en France ?",
                "answers"=> [
                  [ "answer"=> "Le Franc", "is_correct"=> false ],
                  [ "answer"=> "Le Mark", "is_correct"=> false ],
                  [ "answer"=> "L'Euro", "is_correct"=> true ],
                  [ "answer"=> "Le Franc suisse", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel est le climat à Lyon ?",
                "answers"=> [
                  [ "answer"=> "Tropical", "is_correct"=> false ],
                  [ "answer"=> "Océanique tempéré", "is_correct"=> true ],
                  [ "answer"=> "Méditerranéen", "is_correct"=> false ],
                  [ "answer"=> "Continental", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quels sont les codes postaux de Lyon ?",
                "answers"=> [
                  [ "answer"=> "69001 à 69009", "is_correct"=> true ],
                  [ "answer"=> "38000", "is_correct"=> false ],
                  [ "answer"=> "13000", "is_correct"=> false ],
                  [ "answer"=> "75000", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel est le nom du quartier d'affaires de Lyon ?",
                "answers"=> [
                  [ "answer"=> "La Confluence", "is_correct"=> true ],
                  [ "answer"=> "La Part-Dieu", "is_correct"=> false ],
                  [ "answer"=> "La Croix-Rousse", "is_correct"=> false ],
                  [ "answer"=> "Le Vieux Lyon", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle est la spécialité culinaire salée la plus célèbre de Lyon ?",
                "answers"=> [
                  [ "answer"=> "La Salade Lyonnaise", "is_correct"=> false ],
                  [ "answer"=> "Le Gratin dauphinois", "is_correct"=> false ],
                  [ "answer"=> "Le Saucisson brioché", "is_correct"=> false ],
                  [ "answer"=> "Le Bœuf à la lyonnaise", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quelle est l'équipe de football professionnelle de Lyon ?",
                "answers"=> [
                  [ "answer"=> "L'Olympique Lyonnais", "is_correct"=> true ],
                  [ "answer"=> "L'Olympique de Marseille", "is_correct"=> false ],
                  [ "answer"=> "L'AS Saint-Étienne", "is_correct"=> false ],
                  [ "answer"=> "Le Paris Saint-Germain", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel est le nom du célèbre chef cuisinier lyonnais triplement étoilé Michelin ?",
                "answers"=> [
                  [ "answer"=> "Paul Bocuse", "is_correct"=> true ],
                  [ "answer"=> "Alain Ducasse", "is_correct"=> false ],
                  [ "answer"=> "Pierre Gagnaire", "is_correct"=> false ],
                  [ "answer"=> "Michel Guérard", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle est la devise latine de la famille de Guise, liée à l'histoire de Lyon ?",
                "answers"=> [
                  [ "answer"=> "\"Ut fortiter sic fideliter\"", "is_correct"=> true ],
                  [ "answer"=> "\"Toujours fidèle\"", "is_correct"=> false ],
                  [ "answer"=> "\"Lyon, ville Lumière\"", "is_correct"=> false ],
                  [ "answer"=> "\"Qui s'y frotte s'y pique\"", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel nom est donné au funiculaire reliant la Croix-Rousse au bas de la colline ?",
                "answers"=> [
                  [ "answer"=> "Le Funiculaire de Fourvière", "is_correct"=> false ],
                  [ "answer"=> "Le Métro de Lyon", "is_correct"=> true ],
                  [ "answer"=> "Le Tramway de Croix-Rousse", "is_correct"=> false ],
                  [ "answer"=> "Le Bus de Fourvière", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle est la manifestation culturelle la plus importante de la ville de Lyon ?",
                "answers"=> [
                  [ "answer"=> "La Fête des Lumières", "is_correct"=> false ],
                  [ "answer"=> "La Biennale de Lyon", "is_correct"=> true ],
                  [ "answer"=> "Le Salon du Livre de Lyon", "is_correct"=> false ],
                  [ "answer"=> "Les Nuits Sonores", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle est la ville jumelle de Lyon aux États-Unis ?",
                "answers"=> [
                  [ "answer"=> "New York", "is_correct"=> false ],
                  [ "answer"=> "San Francisco", "is_correct"=> false ],
                  [ "answer"=> "Washington D.C.", "is_correct"=> false ],
                  [ "answer"=> "Montréal", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quel est le nom du personnage historique célèbre né à Lyon ?",
                "answers"=> [
                  [ "answer"=> "Antoine de Saint-Exupéry", "is_correct"=> true ],
                  [ "answer"=> "Victor Hugo", "is_correct"=> false ],
                  [ "answer"=> "Jean-Paul Sartre", "is_correct"=> false ],
                  [ "answer"=> "Simone de Beauvoir", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle est la particularité architecturale du quartier du Vieux Lyon ?",
                "answers"=> [
                  [ "answer"=> "Style roman", "is_correct"=> false ],
                  [ "answer"=> "Style gothique", "is_correct"=> true ],
                  [ "answer"=> "Style Renaissance", "is_correct"=> false ],
                  [ "answer"=> "Style contemporain", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel musée d'art moderne et contemporain est situé sur les docks de la Saône ?",
                "answers"=> [
                  [ "answer"=> "Le Musée des Confluences", "is_correct"=> true ],
                  [ "answer"=> "Le Musée gallo-romain de Fourvière", "is_correct"=> false ],
                  [ "answer"=> "Le Musée des Beaux-Arts", "is_correct"=> false ],
                  [ "answer"=> "Le Musée des Tissus et des Arts Décoratifs", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle place arborée est un lieu de rencontre et de détente en plein cœur de la ville ?",
                "answers"=> [
                  [ "answer"=> "La Place Bellecour", "is_correct"=> false ],
                  [ "answer"=> "La Place des Terreaux", "is_correct"=> false ],
                  [ "answer"=> "La Place Carnot", "is_correct"=> true ],
                  [ "answer"=> "La Place Saint-Jean", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel quartier abrite de nombreux restaurants et bars branchés ?",
                "answers"=> [
                  [ "answer"=> "La Confluence", "is_correct"=> false ],
                  [ "answer"=> "La Part-Dieu", "is_correct"=> false ],
                  [ "answer"=> "Le Quartier des Cordeliers", "is_correct"=> false ],
                  [ "answer"=> "Le Quartier de la Guillotière", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quel parc zoologique présente des animaux du monde entier ?",
                "answers"=> [
                  [ "answer"=> "Le Parc de la Tête d'Or", "is_correct"=> true ],
                  [ "answer"=> "Le Jardin des Plantes", "is_correct"=> false ],
                  [ "answer"=> "Le Parc de Miribel", "is_correct"=> false ],
                  [ "answer"=> "Le Parc Chambord", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel monument gothique est l'un des symboles de la ville de Lyon ?",
                "answers"=> [
                  [ "answer"=> "La Basilique Notre-Dame de Fourvière", "is_correct"=> false ],
                  [ "answer"=> "Le Gros Horloge", "is_correct"=> false ],
                  [ "answer"=> "La Cathédrale Saint-Jean-Baptiste", "is_correct"=> false ],
                  [ "answer"=> "L'Hôtel de Ville de Lyon", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quelle ancienne gare ferroviaire a été transformée en un centre commercial et de loisirs ?",
                "answers"=> [
                  [ "answer"=> "La Confluence", "is_correct"=> false ],
                  [ "answer"=> "La Part-Dieu", "is_correct"=> true ],
                  [ "answer"=> "Le Vieux Lyon", "is_correct"=> false ],
                  [ "answer"=> "La gare de Lyon Perrache", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel pont historique relie la Presqu'île à la ville de Vaulx-en-Velin ?",
                "answers"=> [
                  [ "answer"=> "Le Pont de la Guillotière", "is_correct"=> false ],
                  [ "answer"=> "Le Pont Bonaparte", "is_correct"=> false ],
                  [ "answer"=> "Le Pont Saint-Vincent", "is_correct"=> false ],
                  [ "answer"=> "Le Pont Éboulé", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quelle salle de concert accueille des concerts et des spectacles de renommée internationale ?",
                "answers"=> [
                  [ "answer"=> "La Cité Internationale", "is_correct"=> false ],
                  [ "answer"=> "Le Ninkasi", "is_correct"=> true ],
                  [ "answer"=> "Le Fuga", "is_correct"=> false ],
                  [ "answer"=> "Le Radiant", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel quartier multiculturel est connu pour ses restaurants et ses commerces du monde entier ?",
                "answers"=> [
                  [ "answer"=> "La Confluence", "is_correct"=> false ],
                  [ "answer"=> "La Part-Dieu", "is_correct"=> false ],
                  [ "answer"=> "La Croix-Rousse", "is_correct"=> false ],
                  [ "answer"=> "La Guillotière", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quelle ancienne abbaye royale est aujourd'hui un musée d'art et d'histoire ?",
                "answers"=> [
                  [ "answer"=> "L'Abbaye de Saint-Vincent-de-Paul", "is_correct"=> false ],
                  [ "answer"=> "L'Abbaye de Cluny", "is_correct"=> true ],
                  [ "answer"=> "L'Abbaye de Sénanque", "is_correct"=> false ],
                  [ "answer"=> "L'Abbaye de la Fontfroide", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle compagnie de danse contemporaine est basée à Lyon et dirigée par Carolyn Carlson ?",
                "answers"=> [
                  [ "answer"=> "Le Ballet de l'Opéra National de Lyon", "is_correct"=> true ],
                  [ "answer"=> "Le Ballet Preljocaj", "is_correct"=> false ],
                  [ "answer"=> "Le Ballet Rambert", "is_correct"=> false ],
                  [ "answer"=> "Le Ballet Nureyev", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel festival de musiques actuelles se déroule chaque année à Lyon ?",
                "answers"=> [
                  [ "answer"=> "Les Nuits Sonores", "is_correct"=> true ],
                  [ "answer"=> "Le Festival Lumière", "is_correct"=> false ],
                  [ "answer"=> "Le Salon du Livre de Lyon", "is_correct"=> false ],
                  [ "answer"=> "Les Francofolies", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel festival d'art urbain investit les rues de la ville avec des fresques et des installations ?",
                "answers"=> [
                  [ "answer"=> "La Biennale de Lyon", "is_correct"=> false ],
                  [ "answer"=> "Le Festival Lumière", "is_correct"=> false ],
                  [ "answer"=> "Le Mur", "is_correct"=> true ],
                  [ "answer"=> "Les Nuits Sonores", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel festival de photographie met à l'honneur les images du monde entier ?",
                "answers"=> [
                  [ "answer"=> "Visa pour l'image", "is_correct"=> true ],
                  [ "answer"=> "Le Salon du Livre de Lyon", "is_correct"=> false ],
                  [ "answer"=> "Les Nuits Sonores", "is_correct"=> false ],
                  [ "answer"=> "Le Festival Lumière", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle salle de spectacle accueille des opéras, des ballets et des concerts classiques ?",
                "answers"=> [
                  [ "answer"=> "Le Ninkasi", "is_correct"=> false ],
                  [ "answer"=> "Le Fuga", "is_correct"=> false ],
                  [ "answer"=> "Le Radiant", "is_correct"=> false ],
                  [ "answer"=> "L'Opéra National de Lyon", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quel est le nom du stade de rugby de Lyon ?",
                "answers"=> [
                  [ "answer"=> "Le Matmut Atlantique", "is_correct"=> false ],
                  [ "answer"=> "Le Groupama Stadium", "is_correct"=> false ],
                  [ "answer"=> "Le Stade de Gerland", "is_correct"=> false ],
                  [ "answer"=> "Le Parc Olympique Lyonnais", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quelle est la spécialité sucrée lyonnaise à base de pâte feuilletée et de crème pâtissière parfumée à la fleur d'oranger ?",
                "answers"=> [
                  [ "answer"=> "La Praline", "is_correct"=> false ],
                  [ "answer"=> "La Brioche aux pralines", "is_correct"=> false ],
                  [ "answer"=> "La Tarte aux pralines", "is_correct"=> false ],
                  [ "answer"=> "La Religieuse", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quel est le nom du personnage historique célèbre ayant vécu à Lyon et connu pour ses romans policiers ?",
                "answers"=> [
                  [ "answer"=> "Alexandre Dumas", "is_correct"=> false ],
                  [ "answer"=> "Victor Hugo", "is_correct"=> false ],
                  [ "answer"=> "Joseph Kessel", "is_correct"=> true ],
                  [ "answer"=> "Emile Zola", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle est la particularité géographique de la ville de Lyon ?",
                "answers"=> [
                  [ "answer"=> "Située au bord de la mer", "is_correct"=> false ],
                  [ "answer"=> "Entourée de montagnes", "is_correct"=> false ],
                  [ "answer"=> "Traversée par deux fleuves", "is_correct"=> true ],
                  [ "answer"=> "Capitale d'une région insulaire", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel est le nom du département voisin du Rhône ?",
                "answers"=> [
                  [ "answer"=> "L'Isère", "is_correct"=> false ],
                  [ "answer"=> "La Loire", "is_correct"=> false ],
                  [ "answer"=> "La Savoie", "is_correct"=> false ],
                  [ "answer"=> "L'Ain", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quelle est la devise officielle de la région Auvergne-Rhône-Alpes ?",
                "answers"=> [
                  [ "answer"=> "\"Ut fortiter sic fideliter\"", "is_correct"=> false ],
                  [ "answer"=> "\"Toujours fidèle\"", "is_correct"=> false ],
                  [ "answer"=> "\"Lyon, ville Lumière\"", "is_correct"=> false ],
                  [ "answer"=> "\"Foi, travail, liberté\"", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quelle est la spécialité fromagère AOP originaire de la région lyonnaise ?",
                "answers"=> [
                  [ "answer"=> "Le Bleu d'Auvergne", "is_correct"=> false ],
                  [ "answer"=> "Le Comté", "is_correct"=> false ],
                  [ "answer"=> "Le Saint-Marcellin", "is_correct"=> false ],
                  [ "answer"=> "Le Saint-Félicien", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quel est le nom du plat typique du Beaujolais, région viticole proche de Lyon ?",
                "answers"=> [
                  [ "answer"=> "La Salade Lyonnaise", "is_correct"=> false ],
                  [ "answer"=> "Le Gratin dauphinois", "is_correct"=> false ],
                  [ "answer"=> "Le Saucisson brioché", "is_correct"=> false ],
                  [ "answer"=> "La Poularde au vin rouge", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quelle est la manifestation sportive annuelle qui attire des coureurs du monde entier ?",
                "answers"=> [
                  [ "answer"=> "Le Marathon de Paris", "is_correct"=> false ],
                  [ "answer"=> "Le Tour de France", "is_correct"=> true ],
                  [ "answer"=> "La Coupe du Monde de football", "is_correct"=> false ],
                  [ "answer"=> "Les Jeux Olympiques", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel est le nom du célèbre pont romain reliant la Presqu'île à la Croix-Rousse ?",
                "answers"=> [
                  [ "answer"=> "Le Pont de la Guillotière", "is_correct"=> false ],
                  [ "answer"=> "Le Pont Bonaparte", "is_correct"=> false ],
                  [ "answer"=> "Le Pont Saint-Vincent", "is_correct"=> false ],
                  [ "answer"=> "Le Pont du Change", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quelle est la spécialité culinaire sucrée lyonnaise à base de pâte feuilletée et de pralines ?",
                "answers"=> [
                  [ "answer"=> "La Praline", "is_correct"=> false ],
                  [ "answer"=> "La Brioche aux pralines", "is_correct"=> false ],
                  [ "answer"=> "La Tarte aux pralines", "is_correct"=> true ],
                  [ "answer"=> "Le Gâteau Praliné", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel est le nom du quartier étudiant connu pour ses nombreuses bibliothèques et ses espaces verts ?",
                "answers"=> [
                  [ "answer"=> "La Confluence", "is_correct"=> false ],
                  [ "answer"=> "La Part-Dieu", "is_correct"=> false ],
                  [ "answer"=> "Le Quartier des Cordeliers", "is_correct"=> false ],
                  [ "answer"=> "Le Quartier de Villeurbanne", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quel est le nom du personnage historique célèbre ayant fondé l'imprimerie à Lyon ?",
                "answers"=> [
                  [ "answer"=> "Gutenberg", "is_correct"=> true ],
                  [ "answer"=> "Gutemberg", "is_correct"=> false ],
                  [ "answer"=> "Geoffroy Tory", "is_correct"=> false ],
                  [ "answer"=> "Robert Estienne", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle est la particularité architecturale du quartier du Vieux Lyon ?",
                "answers"=> [
                  [ "answer"=> "Style roman", "is_correct"=> false ],
                  [ "answer"=> "Style gothique", "is_correct"=> false ],
                  [ "answer"=> "Style Renaissance", "is_correct"=> true ],
                  [ "answer"=> "Style contemporain", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel est le nom du département français dont Lyon est la préfecture ?",
                "answers"=> [
                  [ "answer"=> "L'Isère", "is_correct"=> false ],
                  [ "answer"=> "Le Rhône", "is_correct"=> true ],
                  [ "answer"=> "La Loire", "is_correct"=> false ],
                  [ "answer"=> "La Savoie", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle est la devise de l'Olympique Lyonnais ?",
                "answers"=> [
                  [ "answer"=> "Ut fortiter sic fideliter", "is_correct"=> false ],
                  [ "answer"=> "Toujours fidèle", "is_correct"=> false ],
                  [ "answer"=> "Lyon, ville Lumière", "is_correct"=> false ],
                  [ "answer"=> "Nous ne lâchons jamais rien", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quelle est la spécialité fromagère produite dans le massif du Pilat, proche de Lyon ?",
                "answers"=> [
                  [ "answer"=> "Le Bleu d'Auvergne", "is_correct"=> false ],
                  [ "answer"=> "Le Comté", "is_correct"=> false ],
                  [ "answer"=> "Le Saint-Marcellin", "is_correct"=> false ],
                  [ "answer"=> "La Fourme de Montbrison", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quel est le nom du vin blanc liquoreux produit dans la région lyonnaise ?",
                "answers"=> [
                  [ "answer"=> "Le Beaujolais", "is_correct"=> false ],
                  [ "answer"=> "Le Condrieu", "is_correct"=> true ],
                  [ "answer"=> "Le Côte du Rhône", "is_correct"=> false ],
                  [ "answer"=> "Le Hermitage", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle est la manifestation culturelle gratuite qui a lieu chaque année à Lyon en décembre ?",
                "answers"=> [
                  [ "answer"=> "La Fête des Lumières", "is_correct"=> true ],
                  [ "answer"=> "Le Festival Lumière", "is_correct"=> false ],
                  [ "answer"=> "Le Salon du Livre de Lyon", "is_correct"=> false ],
                  [ "answer"=> "Les Nuits Sonores", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel est le nom du tunnel romain reliant la Presqu'île à la Croix-Rousse ?",
                "answers"=> [
                  [ "answer"=> "Le Pont de la Guillotière", "is_correct"=> false ],
                  [ "answer"=> "Le Tunnel Traboule", "is_correct"=> true ],
                  [ "answer"=> "Le Pont Bonaparte", "is_correct"=> false ],
                  [ "answer"=> "Le Pont Raymond Poincaré", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel est le nom du personnage historique célèbre né à Lyon et connu pour ses romans d'aventures ?",
                "answers"=> [
                  [ "answer"=> "Alexandre Dumas", "is_correct"=> false ],
                  [ "answer"=> "Victor Hugo", "is_correct"=> false ],
                  [ "answer"=> "Jules Verne", "is_correct"=> true ],
                  [ "answer"=> "Emile Zola", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle est la spécialité culinaire salée lyonnaise à base de quenelles et de sauce béchamel ?",
                "answers"=> [
                  [ "answer"=> "La Salade Lyonnaise", "is_correct"=> false ],
                  [ "answer"=> "Le Gratin dauphinois", "is_correct"=> false ],
                  [ "answer"=> "Le Saucisson brioché", "is_correct"=> false ],
                  [ "answer"=> "Le Gratin de quenelles", "is_correct"=> true ]
                ]
            //   NEW

                ],
                [
                    "question"=> "Comment se nomme l'aéroport international de Lyon ?",
                    "answers"=> [
                      [ "answer"=> "Aéroport Lyon-Saint-Exupéry", "is_correct"=> true ],
                      [ "answer"=> "Aéroport Marseille-Provence", "is_correct"=> false ],
                      [ "answer"=> "Aéroport Nice Côte d'Azur", "is_correct"=> false ],
                      [ "answer"=> "Aéroport de Genève", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quels sont les principaux moyens de transport en commun à Lyon ?",
                    "answers"=> [
                      [ "answer"=> "Métro, tramway, bus", "is_correct"=> true ],
                      [ "answer"=> "Train, RER, bus", "is_correct"=> false ],
                      [ "answer"=> "Métro, bus", "is_correct"=> false ],
                      [ "answer"=> "Tramway, bus", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quelle est la langue officielle parlée à Lyon ?",
                    "answers"=> [
                      [ "answer"=> "Français", "is_correct"=> true ],
                      [ "answer"=> "Anglais", "is_correct"=> false ],
                      [ "answer"=> "Espagnol", "is_correct"=> false ],
                      [ "answer"=> "Italien", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quelle est la devise utilisée en France ?",
                    "answers"=> [
                      [ "answer"=> "Le Franc", "is_correct"=> false ],
                      [ "answer"=> "Le Mark", "is_correct"=> false ],
                      [ "answer"=> "L'Euro", "is_correct"=> true ],
                      [ "answer"=> "Le Franc suisse", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel est le climat à Lyon ?",
                    "answers"=> [
                      [ "answer"=> "Tropical", "is_correct"=> false ],
                      [ "answer"=> "Océanique tempéré", "is_correct"=> true ],
                      [ "answer"=> "Méditerranéen", "is_correct"=> false ],
                      [ "answer"=> "Continental", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quels sont les codes postaux de Lyon ?",
                    "answers"=> [
                      [ "answer"=> "69001 à 69009", "is_correct"=> true ],
                      [ "answer"=> "38000", "is_correct"=> false ],
                      [ "answer"=> "13000", "is_correct"=> false ],
                      [ "answer"=> "75000", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel est le nom du quartier d'affaires de Lyon ?",
                    "answers"=> [
                      [ "answer"=> "La Confluence", "is_correct"=> true ],
                      [ "answer"=> "La Part-Dieu", "is_correct"=> false ],
                      [ "answer"=> "La Croix-Rousse", "is_correct"=> false ],
                      [ "answer"=> "Le Vieux Lyon", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quelle est la spécialité culinaire salée la plus célèbre de Lyon ?",
                    "answers"=> [
                      [ "answer"=> "La Salade Lyonnaise", "is_correct"=> false ],
                      [ "answer"=> "Le Gratin dauphinois", "is_correct"=> false ],
                      [ "answer"=> "Le Saucisson brioché", "is_correct"=> false ],
                      [ "answer"=> "Le Bœuf à la lyonnaise", "is_correct"=> true ]
                    ]
                  ],
                  [
                    "question"=> "Quelle est l'équipe de football professionnelle de Lyon ?",
                    "answers"=> [
                      [ "answer"=> "L'Olympique Lyonnais", "is_correct"=> true ],
                      [ "answer"=> "L'Olympique de Marseille", "is_correct"=> false ],
                      [ "answer"=> "L'AS Saint-Étienne", "is_correct"=> false ],
                      [ "answer"=> "Le Paris Saint-Germain", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel est le nom du célèbre chef cuisinier lyonnais triplement étoilé Michelin ?",
                    "answers"=> [
                      [ "answer"=> "Paul Bocuse", "is_correct"=> true ],
                      [ "answer"=> "Alain Ducasse", "is_correct"=> false ],
                      [ "answer"=> "Pierre Gagnaire", "is_correct"=> false ],
                      [ "answer"=> "Michel Guérard", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quelle est la devise latine de la famille de Guise, liée à l'histoire de Lyon ?",
                    "answers"=> [
                      [ "answer"=> "\"Ut fortiter sic fideliter\"", "is_correct"=> true ],
                      [ "answer"=> "\"Toujours fidèle\"", "is_correct"=> false ],
                      [ "answer"=> "\"Lyon, ville Lumière\"", "is_correct"=> false ],
                      [ "answer"=> "\"Qui s'y frotte s'y pique\"", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel nom est donné au funiculaire reliant la Croix-Rousse au bas de la colline ?",
                    "answers"=> [
                      [ "answer"=> "Le Funiculaire de Fourvière", "is_correct"=> false ],
                      [ "answer"=> "Le Métro de Lyon", "is_correct"=> true ],
                      [ "answer"=> "Le Tramway de Croix-Rousse", "is_correct"=> false ],
                      [ "answer"=> "Le Bus de Fourvière", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quelle est la manifestation culturelle la plus importante de la ville de Lyon ?",
                    "answers"=> [
                      [ "answer"=> "La Fête des Lumières", "is_correct"=> false ],
                      [ "answer"=> "La Biennale de Lyon", "is_correct"=> true ],
                      [ "answer"=> "Le Salon du Livre de Lyon", "is_correct"=> false ],
                      [ "answer"=> "Les Nuits Sonores", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quelle est la ville jumelle de Lyon aux États-Unis ?",
                    "answers"=> [
                      [ "answer"=> "New York", "is_correct"=> false ],
                      [ "answer"=> "San Francisco", "is_correct"=> false ],
                      [ "answer"=> "Washington D.C.", "is_correct"=> false ],
                      [ "answer"=> "Montréal", "is_correct"=> true ]
                    ]
                  ],
                  [
                    "question"=> "Quel est le nom du personnage historique célèbre né à Lyon ?",
                    "answers"=> [
                      [ "answer"=> "Antoine de Saint-Exupéry", "is_correct"=> true ],
                      [ "answer"=> "Victor Hugo", "is_correct"=> false ],
                      [ "answer"=> "Jean-Paul Sartre", "is_correct"=> false ],
                      [ "answer"=> "Simone de Beauvoir", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quelle est la particularité architecturale du quartier du Vieux Lyon ?",
                    "answers"=> [
                      [ "answer"=> "Style roman", "is_correct"=> false ],
                      [ "answer"=> "Style gothique", "is_correct"=> true ],
                      [ "answer"=> "Style Renaissance", "is_correct"=> false ],
                      [ "answer"=> "Style contemporain", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel musée d'art moderne et contemporain est situé sur les docks de la Saône ?",
                    "answers"=> [
                      [ "answer"=> "Le Musée des Confluences", "is_correct"=> true ],
                      [ "answer"=> "Le Musée gallo-romain de Fourvière", "is_correct"=> false ],
                      [ "answer"=> "Le Musée des Beaux-Arts", "is_correct"=> false ],
                      [ "answer"=> "Le Musée des Tissus et des Arts Décoratifs", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quelle place arborée est un lieu de rencontre et de détente en plein cœur de la ville ?",
                    "answers"=> [
                      [ "answer"=> "La Place Bellecour", "is_correct"=> false ],
                      [ "answer"=> "La Place des Terreaux", "is_correct"=> false ],
                      [ "answer"=> "La Place Carnot", "is_correct"=> true ],
                      [ "answer"=> "La Place Saint-Jean", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel quartier abrite de nombreux restaurants et bars branchés ?",
                    "answers"=> [
                      [ "answer"=> "La Confluence", "is_correct"=> false ],
                      [ "answer"=> "La Part-Dieu", "is_correct"=> false ],
                      [ "answer"=> "Le Quartier des Cordeliers", "is_correct"=> false ],
                      [ "answer"=> "Le Quartier de la Guillotière", "is_correct"=> true ]
                    ]
                  ],
                  [
                    "question"=> "Quel parc zoologique présente des animaux du monde entier ?",
                    "answers"=> [
                      [ "answer"=> "Le Parc de la Tête d'Or", "is_correct"=> true ],
                      [ "answer"=> "Le Jardin des Plantes", "is_correct"=> false ],
                      [ "answer"=> "Le Parc de Miribel", "is_correct"=> false ],
                      [ "answer"=> "Le Parc Chambord", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel monument gothique est l'un des symboles de la ville de Lyon ?",
                    "answers"=> [
                      [ "answer"=> "La Basilique Notre-Dame de Fourvière", "is_correct"=> false ],
                      [ "answer"=> "Le Gros Horloge", "is_correct"=> false ],
                      [ "answer"=> "La Cathédrale Saint-Jean-Baptiste", "is_correct"=> false ],
                      [ "answer"=> "L'Hôtel de Ville de Lyon", "is_correct"=> true ]
                    ]
                  ],
                  [
                    "question"=> "Quelle ancienne gare ferroviaire a été transformée en un centre commercial et de loisirs ?",
                    "answers"=> [
                      [ "answer"=> "La Confluence", "is_correct"=> false ],
                      [ "answer"=> "La Part-Dieu", "is_correct"=> true ],
                      [ "answer"=> "Le Vieux Lyon", "is_correct"=> false ],
                      [ "answer"=> "La gare de Lyon Perrache", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel pont historique relie la Presqu'île à la ville de Vaulx-en-Velin ?",
                    "answers"=> [
                      [ "answer"=> "Le Pont de la Guillotière", "is_correct"=> false ],
                      [ "answer"=> "Le Pont Bonaparte", "is_correct"=> false ],
                      [ "answer"=> "Le Pont Saint-Vincent", "is_correct"=> false ],
                      [ "answer"=> "Le Pont Éboulé", "is_correct"=> true ]
                    ]
                  ],
                  [
                    "question"=> "Quelle salle de concert accueille des concerts et des spectacles de renommée internationale ?",
                    "answers"=> [
                      [ "answer"=> "La Cité Internationale", "is_correct"=> false ],
                      [ "answer"=> "Le Ninkasi", "is_correct"=> true ],
                      [ "answer"=> "Le Fuga", "is_correct"=> false ],
                      [ "answer"=> "Le Radiant", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel quartier multiculturel est connu pour ses restaurants et ses commerces du monde entier ?",
                    "answers"=> [
                      [ "answer"=> "La Confluence", "is_correct"=> false ],
                      [ "answer"=> "La Part-Dieu", "is_correct"=> false ],
                      [ "answer"=> "La Croix-Rousse", "is_correct"=> false ],
                      [ "answer"=> "La Guillotière", "is_correct"=> true ]
                    ]
                  ],
                  [
                    "question"=> "Quelle ancienne abbaye royale est aujourd'hui un musée d'art et d'histoire ?",
                    "answers"=> [
                      [ "answer"=> "L'Abbaye de Saint-Vincent-de-Paul", "is_correct"=> false ],
                      [ "answer"=> "L'Abbaye de Cluny", "is_correct"=> true ],
                      [ "answer"=> "L'Abbaye de Sénanque", "is_correct"=> false ],
                      [ "answer"=> "L'Abbaye de la Fontfroide", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quelle compagnie de danse contemporaine est basée à Lyon et dirigée par Carolyn Carlson ?",
                    "answers"=> [
                      [ "answer"=> "Le Ballet de l'Opéra National de Lyon", "is_correct"=> true ],
                      [ "answer"=> "Le Ballet Preljocaj", "is_correct"=> false ],
                      [ "answer"=> "Le Ballet Rambert", "is_correct"=> false ],
                      [ "answer"=> "Le Ballet Nureyev", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel festival de musiques actuelles se déroule chaque année à Lyon ?",
                    "answers"=> [
                      [ "answer"=> "Les Nuits Sonores", "is_correct"=> true ],
                      [ "answer"=> "Le Festival Lumière", "is_correct"=> false ],
                      [ "answer"=> "Le Salon du Livre de Lyon", "is_correct"=> false ],
                      [ "answer"=> "Les Francofolies", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel festival d'art urbain investit les rues de la ville avec des fresques et des installations ?",
                    "answers"=> [
                      [ "answer"=> "La Biennale de Lyon", "is_correct"=> false ],
                      [ "answer"=> "Le Festival Lumière", "is_correct"=> false ],
                      [ "answer"=> "Le Mur", "is_correct"=> true ],
                      [ "answer"=> "Les Nuits Sonores", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel festival de photographie met à l'honneur les images du monde entier ?",
                    "answers"=> [
                      [ "answer"=> "Visa pour l'image", "is_correct"=> true ],
                      [ "answer"=> "Le Salon du Livre de Lyon", "is_correct"=> false ],
                      [ "answer"=> "Les Nuits Sonores", "is_correct"=> false ],
                      [ "answer"=> "Le Festival Lumière", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quelle salle de spectacle accueille des opéras, des ballets et des concerts classiques ?",
                    "answers"=> [
                      [ "answer"=> "Le Ninkasi", "is_correct"=> false ],
                      [ "answer"=> "Le Fuga", "is_correct"=> false ],
                      [ "answer"=> "Le Radiant", "is_correct"=> false ],
                      [ "answer"=> "L'Opéra National de Lyon", "is_correct"=> true ]
                    ]
                  ],
                  [
                    "question"=> "Quel est le nom du stade de rugby de Lyon ?",
                    "answers"=> [
                      [ "answer"=> "Le Matmut Atlantique", "is_correct"=> false ],
                      [ "answer"=> "Le Groupama Stadium", "is_correct"=> false ],
                      [ "answer"=> "Le Stade de Gerland", "is_correct"=> false ],
                      [ "answer"=> "Le Parc Olympique Lyonnais", "is_correct"=> true ]
                    ]
                  ],
                  [
                    "question"=> "Quelle est la spécialité sucrée lyonnaise à base de pâte feuilletée et de crème pâtissière parfumée à la fleur d'oranger ?",
                    "answers"=> [
                      [ "answer"=> "La Praline", "is_correct"=> false ],
                      [ "answer"=> "La Brioche aux pralines", "is_correct"=> false ],
                      [ "answer"=> "La Tarte aux pralines", "is_correct"=> false ],
                      [ "answer"=> "La Religieuse", "is_correct"=> true ]
                    ]
                  ],
                  [
                    "question"=> "Quel est le nom du personnage historique célèbre ayant vécu à Lyon et connu pour ses romans policiers ?",
                    "answers"=> [
                      [ "answer"=> "Alexandre Dumas", "is_correct"=> false ],
                      [ "answer"=> "Victor Hugo", "is_correct"=> false ],
                      [ "answer"=> "Joseph Kessel", "is_correct"=> true ],
                      [ "answer"=> "Emile Zola", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quelle est la particularité géographique de la ville de Lyon ?",
                    "answers"=> [
                      [ "answer"=> "Située au bord de la mer", "is_correct"=> false ],
                      [ "answer"=> "Entourée de montagnes", "is_correct"=> false ],
                      [ "answer"=> "Traversée par deux fleuves", "is_correct"=> true ],
                      [ "answer"=> "Capitale d'une région insulaire", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel est le nom du département voisin du Rhône ?",
                    "answers"=> [
                      [ "answer"=> "L'Isère", "is_correct"=> false ],
                      [ "answer"=> "La Loire", "is_correct"=> false ],
                      [ "answer"=> "La Savoie", "is_correct"=> false ],
                      [ "answer"=> "L'Ain", "is_correct"=> true ]
                    ]
                  ],
                  [
                    "question"=> "Quelle est la devise officielle de la région Auvergne-Rhône-Alpes ?",
                    "answers"=> [
                      [ "answer"=> "\"Ut fortiter sic fideliter\"", "is_correct"=> false ],
                      [ "answer"=> "\"Toujours fidèle\"", "is_correct"=> false ],
                      [ "answer"=> "\"Lyon, ville Lumière\"", "is_correct"=> false ],
                      [ "answer"=> "\"Foi, travail, liberté\"", "is_correct"=> true ]
                    ]
                  ],
                  [
                    "question"=> "Quelle est la spécialité fromagère AOP originaire de la région lyonnaise ?",
                    "answers"=> [
                      [ "answer"=> "Le Bleu d'Auvergne", "is_correct"=> false ],
                      [ "answer"=> "Le Comté", "is_correct"=> false ],
                      [ "answer"=> "Le Saint-Marcellin", "is_correct"=> false ],
                      [ "answer"=> "Le Saint-Félicien", "is_correct"=> true ]
                    ]
                  ],
                  [
                    "question"=> "Quel est le nom du plat typique du Beaujolais, région viticole proche de Lyon ?",
                    "answers"=> [
                      [ "answer"=> "La Salade Lyonnaise", "is_correct"=> false ],
                      [ "answer"=> "Le Gratin dauphinois", "is_correct"=> false ],
                      [ "answer"=> "Le Saucisson brioché", "is_correct"=> false ],
                      [ "answer"=> "La Poularde au vin rouge", "is_correct"=> true ]
                    ]
                  ],
                  [
                    "question"=> "Quelle est la manifestation sportive annuelle qui attire des coureurs du monde entier ?",
                    "answers"=> [
                      [ "answer"=> "Le Marathon de Paris", "is_correct"=> false ],
                      [ "answer"=> "Le Tour de France", "is_correct"=> true ],
                      [ "answer"=> "La Coupe du Monde de football", "is_correct"=> false ],
                      [ "answer"=> "Les Jeux Olympiques", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel est le nom du célèbre pont romain reliant la Presqu'île à la Croix-Rousse ?",
                    "answers"=> [
                      [ "answer"=> "Le Pont de la Guillotière", "is_correct"=> false ],
                      [ "answer"=> "Le Pont Bonaparte", "is_correct"=> false ],
                      [ "answer"=> "Le Pont Saint-Vincent", "is_correct"=> false ],
                      [ "answer"=> "Le Pont du Change", "is_correct"=> true ]
                    ]
                  ],
                  [
                    "question"=> "Quelle est la spécialité culinaire sucrée lyonnaise à base de pâte feuilletée et de pralines ?",
                    "answers"=> [
                      [ "answer"=> "La Praline", "is_correct"=> false ],
                      [ "answer"=> "La Brioche aux pralines", "is_correct"=> false ],
                      [ "answer"=> "La Tarte aux pralines", "is_correct"=> true ],
                      [ "answer"=> "Le Gâteau Praliné", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel est le nom du quartier étudiant connu pour ses nombreuses bibliothèques et ses espaces verts ?",
                    "answers"=> [
                      [ "answer"=> "La Confluence", "is_correct"=> false ],
                      [ "answer"=> "La Part-Dieu", "is_correct"=> false ],
                      [ "answer"=> "Le Quartier des Cordeliers", "is_correct"=> false ],
                      [ "answer"=> "Le Quartier de Villeurbanne", "is_correct"=> true ]
                    ]
                  ],
                  [
                    "question"=> "Quel est le nom du personnage historique célèbre ayant fondé l'imprimerie à Lyon ?",
                    "answers"=> [
                      [ "answer"=> "Gutenberg", "is_correct"=> true ],
                      [ "answer"=> "Gutemberg", "is_correct"=> false ],
                      [ "answer"=> "Geoffroy Tory", "is_correct"=> false ],
                      [ "answer"=> "Robert Estienne", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quelle est la particularité architecturale du quartier du Vieux Lyon ?",
                    "answers"=> [
                      [ "answer"=> "Style roman", "is_correct"=> false ],
                      [ "answer"=> "Style gothique", "is_correct"=> false ],
                      [ "answer"=> "Style Renaissance", "is_correct"=> true ],
                      [ "answer"=> "Style contemporain", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel est le nom du département français dont Lyon est la préfecture ?",
                    "answers"=> [
                      [ "answer"=> "L'Isère", "is_correct"=> false ],
                      [ "answer"=> "Le Rhône", "is_correct"=> true ],
                      [ "answer"=> "La Loire", "is_correct"=> false ],
                      [ "answer"=> "La Savoie", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quelle est la devise de l'Olympique Lyonnais ?",
                    "answers"=> [
                      [ "answer"=> "Ut fortiter sic fideliter", "is_correct"=> false ],
                      [ "answer"=> "Toujours fidèle", "is_correct"=> false ],
                      [ "answer"=> "Lyon, ville Lumière", "is_correct"=> false ],
                      [ "answer"=> "Nous ne lâchons jamais rien", "is_correct"=> true ]
                    ]
                  ],
                  [
                    "question"=> "Quelle est la spécialité fromagère produite dans le massif du Pilat, proche de Lyon ?",
                    "answers"=> [
                      [ "answer"=> "Le Bleu d'Auvergne", "is_correct"=> false ],
                      [ "answer"=> "Le Comté", "is_correct"=> false ],
                      [ "answer"=> "Le Saint-Marcellin", "is_correct"=> false ],
                      [ "answer"=> "La Fourme de Montbrison", "is_correct"=> true ]
                    ]
                  ],
                  [
                    "question"=> "Quel est le nom du vin blanc liquoreux produit dans la région lyonnaise ?",
                    "answers"=> [
                      [ "answer"=> "Le Beaujolais", "is_correct"=> false ],
                      [ "answer"=> "Le Condrieu", "is_correct"=> true ],
                      [ "answer"=> "Le Côte du Rhône", "is_correct"=> false ],
                      [ "answer"=> "Le Hermitage", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quelle est la manifestation culturelle gratuite qui a lieu chaque année à Lyon en décembre ?",
                    "answers"=> [
                      [ "answer"=> "La Fête des Lumières", "is_correct"=> true ],
                      [ "answer"=> "Le Festival Lumière", "is_correct"=> false ],
                      [ "answer"=> "Le Salon du Livre de Lyon", "is_correct"=> false ],
                      [ "answer"=> "Les Nuits Sonores", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel est le nom du tunnel romain reliant la Presqu'île à la Croix-Rousse ?",
                    "answers"=> [
                      [ "answer"=> "Le Pont de la Guillotière", "is_correct"=> false ],
                      [ "answer"=> "Le Tunnel Traboule", "is_correct"=> true ],
                      [ "answer"=> "Le Pont Bonaparte", "is_correct"=> false ],
                      [ "answer"=> "Le Pont Raymond Poincaré", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel est le nom du personnage historique célèbre né à Lyon et connu pour ses romans d'aventures ?",
                    "answers"=> [
                      [ "answer"=> "Alexandre Dumas", "is_correct"=> false ],
                      [ "answer"=> "Victor Hugo", "is_correct"=> false ],
                      [ "answer"=> "Jules Verne", "is_correct"=> true ],
                      [ "answer"=> "Emile Zola", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quelle est la spécialité culinaire salée lyonnaise à base de quenelles et de sauce béchamel ?",
                    "answers"=> [
                      [ "answer"=> "La Salade Lyonnaise", "is_correct"=> false ],
                      [ "answer"=> "Le Gratin dauphinois", "is_correct"=> false ],
                      [ "answer"=> "Le Saucisson brioché", "is_correct"=> false ],
                      [ "answer"=> "Le Gratin de quenelles", "is_correct"=> true ]
                    ]
                    ],
                    [
                        "question"=> "Quelle fête gastronomique annuelle met à l'honneur la cuisine lyonnaise ?",
                        "answers"=> [
                          [ "answer"=> "La Fête des Lumières", "is_correct"=> false ],
                          [ "answer"=> "La Biennale de Lyon", "is_correct"=> false ],
                          [ "answer"=> "Beaujolais Nouveau", "is_correct"=> true ],
                          [ "answer"=> "Les Nuits Sonores", "is_correct"=> false ]
                        ]
                      ],
                      [
                        "question"=> "Quelle spécialité sucrée lyonnaise est composée de pâte feuilletée et de crème pâtissière ?",
                        "answers"=> [
                          [ "answer"=> "La Praline", "is_correct"=> false ],
                          [ "answer"=> "La Brioche aux pralines", "is_correct"=> false ],
                          [ "answer"=> "La Tarte aux pralines", "is_correct"=> false ],
                          [ "answer"=> "Le Gâteau Praliné", "is_correct"=> true ]
                        ]
                      ],
                      [
                        "question"=> "Quel plat typique lyonnais est servi dans une cocotte en fonte ?",
                        "answers"=> [
                          [ "answer"=> "La Salade Lyonnaise", "is_correct"=> false ],
                          [ "answer"=> "Le Gratin dauphinois", "is_correct"=> false ],
                          [ "answer"=> "Le Murgon", "is_correct"=> true ],
                          [ "answer"=> "Le Saucisson brioché", "is_correct"=> false ]
                        ]
                      ],
                      [
                        "question"=> "Quelle colline offre une vue panoramique sur la ville de Lyon ?",
                        "answers"=> [
                          [ "answer"=> "La Confluence", "is_correct"=> false ],
                          [ "answer"=> "La Part-Dieu", "is_correct"=> false ],
                          [ "answer"=> "Fourvière", "is_correct"=> true ],
                          [ "answer"=> "La Croix-Rousse", "is_correct"=> false ]
                        ]
                      ],
                      [
                        "question"=> "Quel monument religieux domine la ville et est accessible par un funiculaire ?",
                        "answers"=> [
                          [ "answer"=> "La Basilique Notre-Dame de Fourvière", "is_correct"=> true ],
                          [ "answer"=> "Le Gros Horloge", "is_correct"=> false ],
                          [ "answer"=> "La Cathédrale Saint-Jean-Baptiste", "is_correct"=> false ],
                          [ "answer"=> "Le Musée des Confluences", "is_correct"=> false ]
                        ]
                      ],
                      [
                        "question"=> "Quel jardin public abrite une grande variété de plantes et de fleurs ?",
                        "answers"=> [
                          [ "answer"=> "Le Parc de la Tête d'Or", "is_correct"=> true ],
                          [ "answer"=> "Le Jardin des Plantes", "is_correct"=> false ],
                          [ "answer"=> "Le Parc de Miribel", "is_correct"=> false ],
                          [ "answer"=> "Le Parc Chambord", "is_correct"=> false ]
                        ]
                      ],
                      [
                        "question"=> "Quel pont moderne relie la Presqu'île à la Confluence ?",
                        "answers"=> [
                          [ "answer"=> "Le Pont de la Guillotière", "is_correct"=> false ],
                          [ "answer"=> "Le Pont Bonaparte", "is_correct"=> false ],
                          [ "answer"=> "Le Pont Saint-Vincent", "is_correct"=> false ],
                          [ "answer"=> "Le Pont Raymond Poincaré", "is_correct"=> true ]
                        ]
                      ],
                      [
                        "question"=> "Quel quartier est connu pour ses pentes et ses traboules ?",
                        "answers"=> [
                          [ "answer"=> "La Confluence", "is_correct"=> false ],
                          [ "answer"=> "La Part-Dieu", "is_correct"=> false ],
                          [ "answer"=> "La Croix-Rousse", "is_correct"=> true ],
                          [ "answer"=> "Le Vieux Lyon", "is_correct"=> false ]
                        ]
                      ],
                      [
                        "question"=> "Quel musée est consacré à l'histoire de la soie et de son industrie à Lyon ?",
                        "answers"=> [
                          [ "answer"=> "Le Musée des Confluences", "is_correct"=> false ],
                          [ "answer"=> "Le Musée gallo-romain de Fourvière", "is_correct"=> false ],
                          [ "answer"=> "Le Musée des Beaux-Arts", "is_correct"=> false ],
                          [ "answer"=> "Le Musée des Tissus et des Arts Décoratifs", "is_correct"=> true ]
                        ]
                      ],
                      [
                        "question"=> "Quel stade de football accueille les matchs de l'Olympique Lyonnais ?",
                        "answers"=> [
                          [ "answer"=> "Le Parc Olympique Lyonnais", "is_correct"=> true ],
                          [ "answer"=> "Le Stade de Gerland", "is_correct"=> false ],
                          [ "answer"=> "Le Matmut Atlantique", "is_correct"=> false ],
                          [ "answer"=> "Le Groupama Stadium", "is_correct"=> false ]
                        ]
                      ],
                      [
                        "question"=> "Quelle place centrale accueille la statue de Louis XIV et des événements importants ?",
                        "answers"=> [
                          [ "answer"=> "La Place Bellecour", "is_correct"=> true ],
                          [ "answer"=> "La Place des Terreaux", "is_correct"=> false ],
                          [ "answer"=> "La Place Carnot", "is_correct"=> false ],
                          [ "answer"=> "La Place Saint-Jean", "is_correct"=> false ]
                        ]
                      ],
                      [
                        "question"=> "Quel quartier étudiant est connu pour son ambiance festive et ses nombreux bars ?",
                        "answers"=> [
                          [ "answer"=> "La Confluence", "is_correct"=> false ],
                          [ "answer"=> "La Part-Dieu", "is_correct"=> false ],
                          [ "answer"=> "Le Quartier des Cordeliers", "is_correct"=> true ],
                          [ "answer"=> "Le Quartier de Gerland", "is_correct"=> false ]
                        ]
                      ],
                      [
                        "question"=> "Quel village médiéval situé sur les hauteurs de Lyon est célèbre pour ses maisons en pierre ?",
                        "answers"=> [
                          [ "answer"=> "Fourvière", "is_correct"=> false ],
                          [ "answer"=> "Sainte-Genève", "is_correct"=> false ],
                          [ "answer"=> "Oingt", "is_correct"=> true ],
                          [ "answer"=> "Condrieu", "is_correct"=> false ]
                        ]
                      ],
                      [
                        "question"=> "Quel festival de cinéma international se déroule chaque année à Lyon ?",
                        "answers"=> [
                          [ "answer"=> "Les Nuits Sonores", "is_correct"=> false ],
                          [ "answer"=> "Le Festival Lumière", "is_correct"=> true ],
                          [ "answer"=> "Le Salon du Livre de Lyon", "is_correct"=> false ],
                          [ "answer"=> "Les Francofolies", "is_correct"=> false ]
                        ]
                      ],
                      [
                        "question"=> "Quel festival de musiques du monde a lieu chaque été à Lyon ?",
                        "answers"=> [
                          [ "answer"=> "Les Nuits Sonores", "is_correct"=> true ],
                          [ "answer"=> "Le Festival Lumière", "is_correct"=> false ],
                          [ "answer"=> "Le Salon du Livre de Lyon", "is_correct"=> false ],
                          [ "answer"=> "Les Francofolies", "is_correct"=> false ]
                        ]
                      ],
                      [
                        "question"=> "Quel festival de littérature se déroule chaque année à Lyon ?",
                        "answers"=> [
                          [ "answer"=> "Les Nuits Sonores", "is_correct"=> false ],
                          [ "answer"=> "Le Festival Lumière", "is_correct"=> false ],
                          [ "answer"=> "Le Salon du Livre de Lyon", "is_correct"=> true ],
                          [ "answer"=> "Les Francofolies", "is_correct"=> false ]
                        ]
                      ],
                      [
                        "question"=> "Quel festival de danse contemporaine se tient tous les deux ans à Lyon ?",
                        "answers"=> [
                          [ "answer"=> "Les Nuits Sonores", "is_correct"=> false ],
                          [ "answer"=> "Le Festival Lumière", "is_correct"=> false ],
                          [ "answer"=> "La Biennale de la Danse", "is_correct"=> true ],
                          [ "answer"=> "Les Francofolies", "is_correct"=> false ]
                        ]
                      ],
                      [
                        "question"=> "Quel grand centre commercial est situé dans le quartier de la Part-Dieu ?",
                        "answers"=> [
                          [ "answer"=> "La Confluence", "is_correct"=> false ],
                          [ "answer"=> "La Part-Dieu", "is_correct"=> true ],
                          [ "answer"=> "Le Vieux Lyon", "is_correct"=> false ],
                          [ "answer"=> "Le Centre Commercial Aéroville", "is_correct"=> false ]
                        ]
                      ],
                      [
                        "question"=> "Quel musée est consacré à l'histoire de la résistance et de la déportation pendant la Seconde Guerre mondiale ?",
                        "answers"=> [
                          [ "answer"=> "Le Musée des Confluences", "is_correct"=> false ],
                          [ "answer"=> "Le Musée national de la Résistance et de la Déportation", "is_correct"=> true ],
                          [ "answer"=> "Le Musée des Beaux-Arts", "is_correct"=> false ],
                          [ "answer"=> "Le Musée des Tissus et des Arts Décoratifs", "is_correct"=> false ]
                        ]
                      ],
                      [
                        "question"=> "Quel quartier est connu pour ses nombreux ateliers d'artisans et de boutiques de créateurs ?",
                        "answers"=> [
                          [ "answer"=> "La Confluence", "is_correct"=> false ],
                          [ "answer"=> "La Part-Dieu", "is_correct"=> false ],
                          [ "answer"=> "La Croix-Rousse", "is_correct"=> true ],
                          [ "answer"=> "Le Vieux Lyon", "is_correct"=> false ]
                        ]
                      ],
                      [
                        "question"=> "Quel événement sportif international se déroule tous les quatre ans à Lyon ?",
                        "answers"=> [
                          [ "answer"=> "Le Marathon de Paris", "is_correct"=> false ],
                          [ "answer"=> "Le Tour de France", "is_correct"=> false ],
                          [ "answer"=> "La Coupe du Monde de football", "is_correct"=> false ],
                          [ "answer"=> "Les Jeux Olympiques", "is_correct"=> true ]
                        ]
                      ],
                      [
                        "question"=> "Quelle spécialité sucrée lyonnaise est parfumée à la pistache ?",
                        "answers"=> [
                          [ "answer"=> "La Praline", "is_correct"=> false ],
                          [ "answer"=> "La Brioche aux pralines", "is_correct"=> false ],
                          [ "answer"=> "La Tarte aux pralines", "is_correct"=> false ],
                          [ "answer"=> "Le Coucou de Lyon", "is_correct"=> true ]
                        ]
                      ],
                      [
                        "question"=> "Quel est le nom du célèbre tunnel romain reliant la Presqu'île à la Croix-Rousse ?",
                        "answers"=> [
                          [ "answer"=> "Le Pont de la Guillotière", "is_correct"=> false ],
                          [ "answer"=> "Le Tunnel Traboule", "is_correct"=> true ],
                          [ "answer"=> "Le Pont Bonaparte", "is_correct"=> false ],
                          [ "answer"=> "Le Pont Raymond Poincaré", "is_correct"=> false ]
                        ]
                      ],
                      [
                        "question"=> "Quel est le nom du fleuve qui traverse la ville de Lyon ?",
                        "answers"=> [
                          [ "answer"=> "La Saône", "is_correct"=> true ],
                          [ "answer"=> "Le Rhône", "is_correct"=> false ],
                          [ "answer"=> "La Loire", "is_correct"=> false ],
                          [ "answer"=> "L'Isère", "is_correct"=> false ]
                        ]
                      ],
                      [
                        "question"=> "De quel département français la ville de Lyon est-elle la capitale ?",
                        "answers"=> [
                          [ "answer"=> "L'Isère", "is_correct"=> false ],
                          [ "answer"=> "Le Rhône", "is_correct"=> true ],
                          [ "answer"=> "La Loire", "is_correct"=> false ],
                          [ "answer"=> "La Savoie", "is_correct"=> false ]
                        ]
                      ],
                      [
                        "question"=> "Quelle est la population approximative de la ville de Lyon ?",
                        "answers"=> [
                          [ "answer"=> "400 000 habitants", "is_correct"=> false ],
                          [ "answer"=> "500 000 habitants", "is_correct"=> false ],
                          [ "answer"=> "600 000 habitants", "is_correct"=> true ],
                          [ "answer"=> "700 000 habitants", "is_correct"=> false ]
                        ]
                      ],
                      [
                        "question"=> "Comment se nomme l'aéroport international de Lyon ?",
                        "answers"=> [
                          [ "answer"=> "Aéroport Lyon-Saint-Exupéry", "is_correct"=> true ],
                          [ "answer"=> "Aéroport Marseille-Provence", "is_correct"=> false ],
                          [ "answer"=> "Aéroport Nice Côte d'Azur", "is_correct"=> false ],
                          [ "answer"=> "Aéroport de Genève", "is_correct"=> false ]
                        ]
                      ],
                      [
                        "question"=> "Quels sont les principaux moyens de transport en commun à Lyon ?",
                        "answers"=> [
                          [ "answer"=> "Métro, tramway, bus", "is_correct"=> true ],
                          [ "answer"=> "Train, RER, bus", "is_correct"=> false ],
                          [ "answer"=> "Métro, bus", "is_correct"=> false ],
                          [ "answer"=> "Tramway, bus", "is_correct"=> false ]
                        ]
                      ],
                      [
                        "question"=> "Quelle est la langue officielle parlée à Lyon ?",
                        "answers"=> [
                          [ "answer"=> "Français", "is_correct"=> true ],
                          [ "answer"=> "Anglais", "is_correct"=> false ],
                          [ "answer"=> "Espagnol", "is_correct"=> false ],
                          [ "answer"=> "Italien", "is_correct"=> false ]
                        ]
                      ],
                      [
                        "question"=> "Quelle est la devise utilisée en France ?",
                        "answers"=> [
                          [ "answer"=> "Le Franc", "is_correct"=> false ],
                          [ "answer"=> "Le Mark", "is_correct"=> false ],
                          [ "answer"=> "L'Euro", "is_correct"=> true ],
                          [ "answer"=> "Le Franc suisse", "is_correct"=> false ]
                        ]
                      ],
                      [
                        "question"=> "Quelle salle de spectacle accueille des opéras, des ballets et des concerts classiques ?",
                        "answers"=> [
                          [ "answer"=> "Le Ninkasi", "is_correct"=> false ],
                          [ "answer"=> "Le Fuga", "is_correct"=> false ],
                          [ "answer"=> "Le Radiant", "is_correct"=> false ],
                          [ "answer"=> "L'Opéra National de Lyon", "is_correct"=> true ]
                        ]
                      ],
                      [
                        "question"=> "Quel est le nom du stade de rugby de Lyon ?",
                        "answers"=> [
                          [ "answer"=> "Le Matmut Atlantique", "is_correct"=> false ],
                          [ "answer"=> "Le Groupama Stadium", "is_correct"=> false ],
                          [ "answer"=> "Le Stade de Gerland", "is_correct"=> false ],
                          [ "answer"=> "Le Parc Olympique Lyonnais", "is_correct"=> true ]
                        ]
                      ],
                      [
                        "question"=> "Quelle est la spécialité sucrée lyonnaise à base de pâte feuilletée et de crème pâtissière parfumée à la fleur d'oranger ?",
                        "answers"=> [
                          [ "answer"=> "La Praline", "is_correct"=> false ],
                          [ "answer"=> "La Brioche aux pralines", "is_correct"=> false ],
                          [ "answer"=> "La Tarte aux pralines", "is_correct"=> false ],
                          [ "answer"=> "La Religieuse", "is_correct"=> true ]
                        ]
                      ],
                      [
                        "question"=> "Quel est le nom du personnage historique célèbre ayant vécu à Lyon et connu pour ses romans policiers ?",
                        "answers"=> [
                          [ "answer"=> "Alexandre Dumas", "is_correct"=> false ],
                          [ "answer"=> "Victor Hugo", "is_correct"=> false ],
                          [ "answer"=> "Joseph Kessel", "is_correct"=> true ],
                          [ "answer"=> "Emile Zola", "is_correct"=> false ]
                        ]
                      ],
                      [
                        "question"=> "Quelle est la particularité géographique de la ville de Lyon ?",
                        "answers"=> [
                          [ "answer"=> "Située au bord de la mer", "is_correct"=> false ],
                          [ "answer"=> "Entourée de montagnes", "is_correct"=> false ],
                          [ "answer"=> "Traversée par deux fleuves", "is_correct"=> true ],
                          [ "answer"=> "Capitale d'une région insulaire", "is_correct"=> false ]
                        ]
                      ],
                      [
                        "question"=> "Quel est le nom du département voisin du Rhône ?",
                        "answers"=> [
                          [ "answer"=> "L'Isère", "is_correct"=> false ],
                          [ "answer"=> "La Loire", "is_correct"=> false ],
                          [ "answer"=> "La Savoie", "is_correct"=> false ],
                          [ "answer"=> "L'Ain", "is_correct"=> true ]
                        ]
                      ],
                      [
                        "question"=> "Quelle est la devise officielle de la région Auvergne-Rhône-Alpes ?",
                        "answers"=> [
                          [ "answer"=> "\"Ut fortiter sic fideliter\"", "is_correct"=> false ],
                          [ "answer"=> "\"Toujours fidèle\"", "is_correct"=> false ],
                          [ "answer"=> "\"Lyon, ville Lumière\"", "is_correct"=> false ],
                          [ "answer"=> "\"Foi, travail, liberté\"", "is_correct"=> true ]
                        ]
                      ],
                      [
                        "question"=> "Quelle est la spécialité fromagère AOP originaire de la région lyonnaise ?",
                        "answers"=> [
                          [ "answer"=> "Le Bleu d'Auvergne", "is_correct"=> false ],
                          [ "answer"=> "Le Comté", "is_correct"=> false ],
                          [ "answer"=> "Le Saint-Marcellin", "is_correct"=> false ],
                          [ "answer"=> "Le Saint-Félicien", "is_correct"=> true ]
                        ]
                      ],
                      [
                        "question"=> "Quel est le nom du plat typique du Beaujolais, région viticole proche de Lyon ?",
                        "answers"=> [
                          [ "answer"=> "La Salade Lyonnaise", "is_correct"=> false ],
                          [ "answer"=> "Le Gratin dauphinois", "is_correct"=> false ],
                          [ "answer"=> "Le Saucisson brioché", "is_correct"=> false ],
                          [ "answer"=> "La Poularde au vin rouge", "is_correct"=> true ]
                        ]
                      ],
                      [
                        "question"=> "Quelle est la manifestation sportive annuelle qui attire des coureurs du monde entier ?",
                        "answers"=> [
                          [ "answer"=> "Le Marathon de Paris", "is_correct"=> false ],
                          [ "answer"=> "Le Tour de France", "is_correct"=> true ],
                          [ "answer"=> "La Coupe du Monde de football", "is_correct"=> false ],
                          [ "answer"=> "Les Jeux Olympiques", "is_correct"=> false ]
                        ]
                      ],
                      [
                        "question"=> "Quel est le nom du célèbre pont romain reliant la Presqu'île à la Croix-Rousse ?",
                        "answers"=> [
                          [ "answer"=> "Le Pont de la Guillotière", "is_correct"=> false ],
                          [ "answer"=> "Le Pont Bonaparte", "is_correct"=> false ],
                          [ "answer"=> "Le Pont Saint-Vincent", "is_correct"=> false ],
                          [ "answer"=> "Le Pont du Change", "is_correct"=> true ]
                        ]
                      ],
                      [
                        "question"=> "Quelle est la spécialité culinaire sucrée lyonnaise à base de pâte feuilletée et de pralines ?",
                        "answers"=> [
                          [ "answer"=> "La Praline", "is_correct"=> false ],
                          [ "answer"=> "La Brioche aux pralines", "is_correct"=> false ],
                          [ "answer"=> "La Tarte aux pralines", "is_correct"=> true ],
                          [ "answer"=> "Le Gâteau Praliné", "is_correct"=> false ]
                        ]
                      ],
                      [
                        "question"=> "Quel est le nom du quartier étudiant connu pour ses nombreuses bibliothèques et ses espaces verts ?",
                        "answers"=> [
                          [ "answer"=> "La Confluence", "is_correct"=> false ],
                          [ "answer"=> "La Part-Dieu", "is_correct"=> false ],
                          [ "answer"=> "Le Quartier des Cordeliers", "is_correct"=> false ],
                          [ "answer"=> "Le Quartier de Villeurbanne", "is_correct"=> true ]
                        ]
                      ],
                      [
                        "question"=> "Quel est le nom du personnage historique célèbre ayant fondé l'imprimerie à Lyon ?",
                        "answers"=> [
                          [ "answer"=> "Gutenberg", "is_correct"=> true ],
                          [ "answer"=> "Gutemberg", "is_correct"=> false ],
                          [ "answer"=> "Geoffroy Tory", "is_correct"=> false ],
                          [ "answer"=> "Robert Estienne", "is_correct"=> false ]
                        ]
                      ],
                      [
                        "question"=> "Quelle est la particularité architecturale du quartier du Vieux Lyon ?",
                        "answers"=> [
                          [ "answer"=> "Style roman", "is_correct"=> false ],
                          [ "answer"=> "Style gothique", "is_correct"=> false ],
                          [ "answer"=> "Style Renaissance", "is_correct"=> true ],
                          [ "answer"=> "Style contemporain", "is_correct"=> false ]
                        ]
                      ],
                      [
                        "question"=> "Quel est le nom du département français dont Lyon est la préfecture ?",
                        "answers"=> [
                          [ "answer"=> "L'Isère", "is_correct"=> false ],
                          [ "answer"=> "Le Rhône", "is_correct"=> true ],
                          [ "answer"=> "La Loire", "is_correct"=> false ],
                          [ "answer"=> "La Savoie", "is_correct"=> false ]
                        ]
                      ],




            ];

            foreach ($questions as $question) {
                $questionModel = \App\Models\Questions::create([
                    'question' => $question['question']
                ]);

                foreach ($question['answers'] as $answer) {
                    $questionModel->answers()->create($answer);
                }
            }
    }
}
