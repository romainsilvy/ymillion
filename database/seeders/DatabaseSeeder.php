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
                ["answer"=> "La Confluence", "is_correct"=> true],
                ["answer"=> "La Part-Dieu", "is_correct"=> false],
                ["answer"=> "Le Vieux Lyon", "is_correct"=> false],
                ["answer"=> "La Croix-Rousse", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "Quel musée retrace l'histoire de la ville et expose des vestiges gallo-romains ?",
              "answers"=> [
                ["answer"=> "Le Musée des Confluences", "is_correct"=> false],
                ["answer"=> "Le Musée des Beaux-Arts", "is_correct"=> false],
                ["answer"=> "Le Musée gallo-romain de Fourvière", "is_correct"=> true],
                ["answer"=> "Le Musée Miniature et Cinéma", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "Quel festival international de cinéma se déroule chaque année à Lyon ?",
              "answers"=> [
                ["answer"=> "Le Festival de Cannes", "is_correct"=> false],
                ["answer"=> "Le Festival Lumière", "is_correct"=> true],
                ["answer"=> "La Fête du Cinéma", "is_correct"=> false],
                ["answer"=> "Le Festival du film francophone", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "Quelle spécialité culinaire lyonnaise est composée de quenelles et d'une sauce béchamel ?",
              "answers"=> [
                ["answer"=> "La Salade Lyonnaise", "is_correct"=> false],
                ["answer"=> "Le Gratin dauphinois", "is_correct"=> false],
                ["answer"=> "Le Gâteau de voyage", "is_correct"=> false],
                ["answer"=> "Le Saucisson brioché", "is_correct"=> true]
              ]
            ],
            [
              "question"=> "Quel pont historique relie la Presqu'île au Vieux Lyon ?",
              "answers"=> [
                ["answer"=> "Le Pont de la Guillotière", "is_correct"=> false],
                ["answer"=> "Le Pont Bonaparte", "is_correct"=> false],
                ["answer"=> "Le Pont Saint-Vincent", "is_correct"=> true],
                ["answer"=> "Le Pont Raymond Poincaré", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "De quel style architectural est la Cathédrale Saint-Jean-Baptiste de Lyon ?",
              "answers"=> [
                ["answer"=> "Roman", "is_correct"=> false],
                ["answer"=> "Gothique", "is_correct"=> true],
                ["answer"=> "Renaissance", "is_correct"=> false],
                ["answer"=> "Baroque", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "Quel jardin public offre une vue imprenable sur la ville et ses environs ?",
              "answers"=> [
                ["answer"=> "Le Parc de la Tête d'Or", "is_correct"=> false],
                ["answer"=> "Le Jardin des Plantes", "is_correct"=> false],
                ["answer"=> "Le Parc de Miribel", "is_correct"=> true],
                ["answer"=> "Le Parc Chambord", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "Quel quartier dynamique est connu pour sa vie nocturne et ses bars branchés ?",
              "answers"=> [
                ["answer"=> "La Confluence", "is_correct"=> false],
                ["answer"=> "La Part-Dieu", "is_correct"=> false],
                ["answer"=> "Le Vieux Lyon", "is_correct"=> false],
                ["answer"=> "Le Quartier des Terreaux", "is_correct"=> true]
              ]
            ],
            [
              "question"=> "Quelle spécialité sucrée lyonnaise est parfumée à la fleur d'oranger ?",
              "answers"=> [
                ["answer"=> "La Praline", "is_correct"=> false],
                ["answer"=> "La Brioche aux pralines", "is_correct"=> false],
                ["answer"=> "La Tarte aux pralines", "is_correct"=> true],
                ["answer"=> "Le Coucou de Lyon", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "Quel événement annuel rassemble des milliers de coureurs dans les rues de Lyon ?",
              "answers"=> [
                ["answer"=> "Le Marathon de Paris", "is_correct"=> false],
                ["answer"=> "Le Marathon du Beaujolais", "is_correct"=> false],
                ["answer"=> "La Saint-Tricat", "is_correct"=> true],
                ["answer"=> "La Course des Lumières", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "Quelle est la devise officielle de la ville de Lyon ?",
              "answers"=> [
                ["answer"=> "\"Ut fortiter sic fideliter\"", "is_correct"=> true],
                ["answer"=> "\"Toujours fidèle\"", "is_correct"=> false],
                ["answer"=> "\"Lyon, ville Lumière\"", "is_correct"=> false],
                ["answer"=> "\"Labor omnia vincit\"", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "Quel est le nom du stade de football de Lyon ?",
              "answers"=> [
                ["answer"=> "Le Parc Olympique Lyonnais", "is_correct"=> true],
                ["answer"=> "Le Stade de Gerland", "is_correct"=> false],
                ["answer"=> "Le Matmut Atlantique", "is_correct"=> false],
                ["answer"=> "Le Groupama Stadium", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "Quelle personnalité célèbre est née à Lyon et a marqué l'histoire de la ville ?",
              "answers"=> [
                ["answer"=> "Victor Hugo", "is_correct"=> false],
                ["answer"=> "Antoine de Saint-Exupéry", "is_correct"=> false],
                ["answer"=> "Jean-Baptiste Perrin", "is_correct"=> true],
                ["answer"=> "Les frères Lumière", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "Quel quartier est connu pour ses traboules, ces passages secrets reliant les immeubles ?",
              "answers"=> [
                ["answer"=> "La Confluence", "is_correct"=> false],
                ["answer"=> "La Part-Dieu", "is_correct"=> false],
                ["answer"=> "Le Vieux Lyon", "is_correct"=> true],
                ["answer"=> "La Croix-Rousse", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "Quel monument romain est l'un des vestiges les mieux conservés de la ville ?",
              "answers"=> [
                ["answer"=> "Le Temple d'Auguste et de Livie", "is_correct"=> false],
                ["answer"=> "Le Théâtre antique", "is_correct"=> true],
                ["answer"=> "Les Amphithéâtres romains", "is_correct"=> false],
                ["answer"=> "L'Odéon", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "De quel style architectural est l'Hôtel de Ville de Lyon ?",
              "answers"=> [
                ["answer"=> "Roman", "is_correct"=> false],
                ["answer"=> "Gothique", "is_correct"=> false],
                ["answer"=> "Renaissance", "is_correct"=> true],
                ["answer"=> "Baroque", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "Quel quartier abrite de nombreux ateliers d'artisans et de boutiques de créateurs ?",
              "answers"=> [
                ["answer"=> "La Confluence", "is_correct"=> false],
                ["answer"=> "La Part-Dieu", "is_correct"=> false],
                ["answer"=> "La Croix-Rousse", "is_correct"=> true],
                ["answer"=> "Le Vieux Lyon", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "Quel événement gastronomique annuel met à l'honneur la cuisine lyonnaise ?",
              "answers"=> [
                ["answer"=> "La Fête des Lumières", "is_correct"=> false],
                ["answer"=> "La Biennale de Lyon", "is_correct"=> false],
                ["answer"=> "Beaujolais Nouveau", "is_correct"=> true],
                ["answer"=> "Les Nuits Sonores", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "Quelle spécialité fromagère est originaire de la région lyonnaise ?",
              "answers"=> [
                ["answer"=> "Le Bleu d'Auvergne", "is_correct"=> false],
                ["answer"=> "Le Comté", "is_correct"=> false],
                ["answer"=> "Le Saint-Marcellin", "is_correct"=> true],
                ["answer"=> "Le Reblochon", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "Quel personnage historique a fondé la ville de Lyon en 43 av. J.-C. ?",
              "answers"=> [
                ["answer"=> "Jules César", "is_correct"=> true],
                ["answer"=> "Auguste", "is_correct"=> false],
                ["answer"=> "Tibère", "is_correct"=> false],
                ["answer"=> "Caligula", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "Quelle place centrale accueille la statue de Louis XIV et des événements importants ?",
              "answers"=> [
                ["answer"=> "La Place Bellecour", "is_correct"=> true],
                ["answer"=> "La Place des Terreaux", "is_correct"=> false],
                ["answer"=> "La Place Carnot", "is_correct"=> false],
                ["answer"=> "La Place Saint-Jean", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "Quel quartier est connu pour ses pentes et ses traboules, et offre une vue panoramique sur la ville ?",
              "answers"=> [
                ["answer"=> "La Confluence", "is_correct"=> false],
                ["answer"=> "La Part-Dieu", "is_correct"=> false],
                ["answer"=> "La Croix-Rousse", "is_correct"=> true],
                ["answer"=> "Le Vieux Lyon", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "Quel musée est consacré à l'histoire de la soie et de son industrie à Lyon ?",
              "answers"=> [
                ["answer"=> "Le Musée des Confluences", "is_correct"=> false],
                ["answer"=> "Le Musée des Beaux-Arts", "is_correct"=> false],
                ["answer"=> "Le Musée des Tissus et des Arts Décoratifs", "is_correct"=> true],
                ["answer"=> "Le Musée Miniature et Cinéma", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "Quel festival de musiques du monde se déroule chaque année à Lyon ?",
              "answers"=> [
                ["answer"=> "Les Nuits Sonores", "is_correct"=> false],
                ["answer"=> "Le Festival Lumière", "is_correct"=> false],
                ["answer"=> "Le Festival Unlimited", "is_correct"=> true],
                ["answer"=> "Les Francofolies", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "Quelle spécialité culinaire lyonnaise est composée de tripes de bœuf farcies ?",
              "answers"=> [
                ["answer"=> "La Salade Lyonnaise", "is_correct"=> false],
                ["answer"=> "Le Gratin dauphinois", "is_correct"=> false],
                ["answer"=> "Le Saucisson brioché", "is_correct"=> false],
                ["answer"=> "Les Tripoux à la lyonnaise", "is_correct"=> true]
              ]
            ],
            [
              "question"=> "Quel pont moderne relie la Presqu'île à la Confluence ?",
              "answers"=> [
                ["answer"=> "Le Pont de la Guillotière", "is_correct"=> false],
                ["answer"=> "Le Pont Bonaparte", "is_correct"=> false],
                ["answer"=> "Le Pont Saint-Vincent", "is_correct"=> false],
                ["answer"=> "Le Pont Raymond Poincaré", "is_correct"=> true]
              ]
            ],
            [
              "question"=> "Quel style architectural est caractéristique du quartier du Vieux Lyon ?",
              "answers"=> [
                ["answer"=> "Roman", "is_correct"=> false],
                ["answer"=> "Gothique", "is_correct"=> false],
                ["answer"=> "Renaissance", "is_correct"=> true],
                ["answer"=> "Baroque", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "Quel jardin botanique abrite une grande variété de plantes et de fleurs ?",
              "answers"=> [
                ["answer"=> "Le Parc de la Tête d'Or", "is_correct"=> false],
                ["answer"=> "Le Jardin des Plantes", "is_correct"=> true],
                ["answer"=> "Le Parc de Miribel", "is_correct"=> false],
                ["answer"=> "Le Parc Chambord", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "Quel quartier étudiant est connu pour son ambiance festive et ses nombreux bars ?",
              "answers"=> [
                ["answer"=> "La Confluence", "is_correct"=> false],
                ["answer"=> "La Part-Dieu", "is_correct"=> false],
                ["answer"=> "Le Vieux Lyon", "is_correct"=> false],
                ["answer"=> "Le Quartier des Cordeliers", "is_correct"=> true]
              ]
            ],
            [
              "question"=> "Quelle spécialité sucrée lyonnaise est parfumée à la pistache ?",
              "answers"=> [
                ["answer"=> "La Praline", "is_correct"=> false],
                ["answer"=> "La Brioche aux pralines", "is_correct"=> false],
                ["answer"=> "La Tarte aux pralines", "is_correct"=> false],
                ["answer"=> "Le Coucou de Lyon", "is_correct"=> true]
              ]
            ],
            [
              "question"=> "Quel événement sportif international se déroule tous les quatre ans à Lyon ?",
              "answers"=> [
                ["answer"=> "Le Marathon de Paris", "is_correct"=> false],
                ["answer"=> "Le Tour de France", "is_correct"=> false],
                ["answer"=> "La Coupe du Monde de football", "is_correct"=> false],
                ["answer"=> "Les Jeux Olympiques", "is_correct"=> true]
              ]
            ],
            [
              "question"=> "Quelle est la devise latine de la famille de Guise, liée à l'histoire de Lyon ?",
              "answers"=> [
                ["answer"=> "\"Ut fortiter sic fideliter\"", "is_correct"=> true],
                ["answer"=> "\"Toujours fidèle\"", "is_correct"=> false],
                ["answer"=> "\"Lyon, ville Lumière\"", "is_correct"=> false],
                ["answer"=> "\"Qui s'y frotte s'y pique\"", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "Quelle spécialité culinaire lyonnaise est composée de quenelles de brochet et d'une sauce Nantua ?",
              "answers"=> [
                ["answer"=> "La Salade Lyonnaise", "is_correct"=> false],
                ["answer"=> "Le Gratin dauphinois", "is_correct"=> false],
                ["answer"=> "Le Saucisson brioché", "is_correct"=> false],
                ["answer"=> "Le Gratin de brochet à la Nantua", "is_correct"=> true]
              ]
            ],
            [
              "question"=> "Quel quartier est connu pour ses restaurants traditionnels et ses bouchons lyonnais ?",
              "answers"=> [
                ["answer"=> "La Confluence", "is_correct"=> false],
                ["answer"=> "La Part-Dieu", "is_correct"=> false],
                ["answer"=> "Le Vieux Lyon", "is_correct"=> true],
                ["answer"=> "La Croix-Rousse", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "Quel musée est consacré à l'histoire de la ville et à son patrimoine gallo-romain ?",
              "answers"=> [
                ["answer"=> "Le Musée des Confluences", "is_correct"=> false],
                ["answer"=> "Le Musée gallo-romain de Fourvière", "is_correct"=> true],
                ["answer"=> "Le Musée des Beaux-Arts", "is_correct"=> false],
                ["answer"=> "Le Musée des Tissus et des Arts Décoratifs", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "Quel festival de littérature se déroule chaque année à Lyon ?",
              "answers"=> [
                ["answer"=> "Les Nuits Sonores", "is_correct"=> false],
                ["answer"=> "Le Festival Lumière", "is_correct"=> false],
                ["answer"=> "Le Salon du Livre de Lyon", "is_correct"=> true],
                ["answer"=> "Les Francofolies", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "Quelle spécialité sucrée lyonnaise est composée de pâte feuilletée et de crème pâtissière ?",
              "answers"=> [
                ["answer"=> "La Praline", "is_correct"=> false],
                ["answer"=> "La Brioche aux pralines", "is_correct"=> false],
                ["answer"=> "La Tarte aux pralines", "is_correct"=> false],
                ["answer"=> "Le Gâteau Praliné", "is_correct"=> true]
              ]
            ],
            [
              "question"=> "Quel grand centre commercial est situé dans le quartier de la Part-Dieu ?",
              "answers"=> [
                ["answer"=> "La Confluence", "is_correct"=> false],
                ["answer"=> "La Part-Dieu", "is_correct"=> true],
                ["answer"=> "Le Vieux Lyon", "is_correct"=> false],
                ["answer"=> "Le Centre Commercial Aéroville", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "Quel est le nom du village médiéval situé sur les hauteurs de Lyon ?",
              "answers"=> [
                ["answer"=> "Fourvière", "is_correct"=> false],
                ["answer"=> "Sainte-Genève", "is_correct"=> false],
                ["answer"=> "Oingt", "is_correct"=> true],
                ["answer"=> "Condrieu", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "Quel style architectural est caractéristique du quartier de la Confluence ?",
              "answers"=> [
                ["answer"=> "Roman", "is_correct"=> false],
                ["answer"=> "Gothique", "is_correct"=> false],
                ["answer"=> "Renaissance", "is_correct"=> false],
                ["answer"=> "Contemporain", "is_correct"=> true]
              ]
            ],
            [
              "question"=> "Quel parc animalier héberge des animaux du monde entier ?",
              "answers"=> [
                ["answer"=> "Le Parc de la Tête d'Or", "is_correct"=> true],
                ["answer"=> "Le Jardin des Plantes", "is_correct"=> false],
                ["answer"=> "Le Parc de Miribel", "is_correct"=> false],
                ["answer"=> "Le Parc Chambord", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "Quel quartier est connu pour ses nombreux étudiants et ses campus universitaires ?",
              "answers"=> [
                ["answer"=> "La Confluence", "is_correct"=> false],
                ["answer"=> "La Part-Dieu", "is_correct"=> false],
                ["answer"=> "Le Quartier des Cordeliers", "is_correct"=> false],
                ["answer"=> "Le Quartier de Gerland", "is_correct"=> true]
              ]
            ],
            [
              "question"=> "Quelle spécialité sucrée lyonnaise est parfumée à la fleur d'oranger et au rhum ?",
              "answers"=> [
                ["answer"=> "La Praline", "is_correct"=> false],
                ["answer"=> "La Brioche aux pralines", "is_correct"=> false],
                ["answer"=> "La Tarte aux pralines", "is_correct"=> false],
                ["answer"=> "Le Saint-Genix", "is_correct"=> true]
              ]
            ],
            [
              "question"=> "Quel événement culturel majeur se déroule tous les deux ans à Lyon ?",
              "answers"=> [
                ["answer"=> "La Biennale de Lyon", "is_correct"=> true],
                ["answer"=> "Le Festival Lumière", "is_correct"=> false],
                ["answer"=> "Le Salon du Livre de Lyon", "is_correct"=> false],
                ["answer"=> "Les Nuits Sonores", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "Quel est le nom du célèbre tunnel romain reliant la Presqu'île à la Croix-Rousse ?",
              "answers"=> [
                ["answer"=> "Le Pont de la Guillotière", "is_correct"=> false],
                ["answer"=> "Le Tunnel Traboule", "is_correct"=> true],
                ["answer"=> "Le Pont Bonaparte", "is_correct"=> false],
                ["answer"=> "Le Pont Raymond Poincaré", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "Quel quartier est connu pour ses ateliers de soieries et son savoir-faire artisanal ?",
              "answers"=> [
                ["answer"=> "La Confluence", "is_correct"=> false],
                ["answer"=> "La Part-Dieu", "is_correct"=> false],
                ["answer"=> "La Croix-Rousse", "is_correct"=> true],
                ["answer"=> "Le Vieux Lyon", "is_correct"=> false]
              ]
            ],
            [
              "question"=> "Quel festival de danse contemporaine se déroule chaque année à Lyon ?",
              "answers"=> [
                ["answer"=> "Les Nuits Sonores", "is_correct"=> false],
                ["answer"=> "Le Festival Lumière", "is_correct"=> false],
                ["answer"=> "La Biennale de la Danse", "is_correct"=> true],
                ["answer"=> "Les Francofolies", "is_correct"=> false]
              ]
            ],
              [
                "question"=> "Quel est le nom du quartier moderne connu pour ses gratte-ciels et ses institutions internationales ?",
                "answers"=> [
                  ["answer"=> "La Confluence", "is_correct"=> true],
                  ["answer"=> "La Part-Dieu", "is_correct"=> false],
                  ["answer"=> "Le Vieux Lyon", "is_correct"=> false],
                  ["answer"=> "La Croix-Rousse", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "Quel musée retrace l'histoire de la ville et expose des vestiges gallo-romains ?",
                "answers"=> [
                  ["answer"=> "Le Musée des Confluences", "is_correct"=> false],
                  ["answer"=> "Le Musée des Beaux-Arts", "is_correct"=> false],
                  ["answer"=> "Le Musée gallo-romain de Fourvière", "is_correct"=> true],
                  ["answer"=> "Le Musée Miniature et Cinéma", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "Quel festival international de cinéma se déroule chaque année à Lyon ?",
                "answers"=> [
                  ["answer"=> "Le Festival de Cannes", "is_correct"=> false],
                  ["answer"=> "Le Festival Lumière", "is_correct"=> true],
                  ["answer"=> "La Fête du Cinéma", "is_correct"=> false],
                  ["answer"=> "Le Festival du film francophone", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "Quelle spécialité culinaire lyonnaise est composée de quenelles et d'une sauce béchamel ?",
                "answers"=> [
                  ["answer"=> "La Salade Lyonnaise", "is_correct"=> false],
                  ["answer"=> "Le Gratin dauphinois", "is_correct"=> false],
                  ["answer"=> "Le Gâteau de voyage", "is_correct"=> false],
                  ["answer"=> "Le Saucisson brioché", "is_correct"=> true]
                ]
              ],
              [
                "question"=> "Quel pont historique relie la Presqu'île au Vieux Lyon ?",
                "answers"=> [
                  ["answer"=> "Le Pont de la Guillotière", "is_correct"=> false],
                  ["answer"=> "Le Pont Bonaparte", "is_correct"=> false],
                  ["answer"=> "Le Pont Saint-Vincent", "is_correct"=> true],
                  ["answer"=> "Le Pont Raymond Poincaré", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "De quel style architectural est la Cathédrale Saint-Jean-Baptiste de Lyon ?",
                "answers"=> [
                  ["answer"=> "Roman", "is_correct"=> false],
                  ["answer"=> "Gothique", "is_correct"=> true],
                  ["answer"=> "Renaissance", "is_correct"=> false],
                  ["answer"=> "Baroque", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "Quel jardin public offre une vue imprenable sur la ville et ses environs ?",
                "answers"=> [
                  ["answer"=> "Le Parc de la Tête d'Or", "is_correct"=> false],
                  ["answer"=> "Le Jardin des Plantes", "is_correct"=> false],
                  ["answer"=> "Le Parc de Miribel", "is_correct"=> true],
                  ["answer"=> "Le Parc Chambord", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "Quel quartier dynamique est connu pour sa vie nocturne et ses bars branchés ?",
                "answers"=> [
                  ["answer"=> "La Confluence", "is_correct"=> false],
                  ["answer"=> "La Part-Dieu", "is_correct"=> false],
                  ["answer"=> "Le Vieux Lyon", "is_correct"=> false],
                  ["answer"=> "Le Quartier des Terreaux", "is_correct"=> true]
                ]
              ],
              [
                "question"=> "Quelle spécialité sucrée lyonnaise est parfumée à la fleur d'oranger ?",
                "answers"=> [
                  ["answer"=> "La Praline", "is_correct"=> false],
                  ["answer"=> "La Brioche aux pralines", "is_correct"=> false],
                  ["answer"=> "La Tarte aux pralines", "is_correct"=> true],
                  ["answer"=> "Le Coucou de Lyon", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "Quel événement annuel rassemble des milliers de coureurs dans les rues de Lyon ?",
                "answers"=> [
                  ["answer"=> "Le Marathon de Paris", "is_correct"=> false],
                  ["answer"=> "Le Marathon du Beaujolais", "is_correct"=> false],
                  ["answer"=> "La Saint-Tricat", "is_correct"=> true],
                  ["answer"=> "La Course des Lumières", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "Quelle est la devise officielle de la ville de Lyon ?",
                "answers"=> [
                  ["answer"=> "\"Ut fortiter sic fideliter\"", "is_correct"=> true],
                  ["answer"=> "\"Toujours fidèle\"", "is_correct"=> false],
                  ["answer"=> "\"Lyon, ville Lumière\"", "is_correct"=> false],
                  ["answer"=> "\"Labor omnia vincit\"", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "Quel est le nom du stade de football de Lyon ?",
                "answers"=> [
                  ["answer"=> "Le Parc Olympique Lyonnais", "is_correct"=> true],
                  ["answer"=> "Le Stade de Gerland", "is_correct"=> false],
                  ["answer"=> "Le Matmut Atlantique", "is_correct"=> false],
                  ["answer"=> "Le Groupama Stadium", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "Quelle personnalité célèbre est née à Lyon et a marqué l'histoire de la ville ?",
                "answers"=> [
                  ["answer"=> "Victor Hugo", "is_correct"=> false],
                  ["answer"=> "Antoine de Saint-Exupéry", "is_correct"=> false],
                  ["answer"=> "Jean-Baptiste Perrin", "is_correct"=> true],
                  ["answer"=> "Les frères Lumière", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "Quel quartier est connu pour ses traboules, ces passages secrets reliant les immeubles ?",
                "answers"=> [
                  ["answer"=> "La Confluence", "is_correct"=> false],
                  ["answer"=> "La Part-Dieu", "is_correct"=> false],
                  ["answer"=> "Le Vieux Lyon", "is_correct"=> true],
                  ["answer"=> "La Croix-Rousse", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "Quel monument romain est l'un des vestiges les mieux conservés de la ville ?",
                "answers"=> [
                  ["answer"=> "Le Temple d'Auguste et de Livie", "is_correct"=> false],
                  ["answer"=> "Le Théâtre antique", "is_correct"=> true],
                  ["answer"=> "Les Amphithéâtres romains", "is_correct"=> false],
                  ["answer"=> "L'Odéon", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "De quel style architectural est l'Hôtel de Ville de Lyon ?",
                "answers"=> [
                  ["answer"=> "Roman", "is_correct"=> false],
                  ["answer"=> "Gothique", "is_correct"=> false],
                  ["answer"=> "Renaissance", "is_correct"=> true],
                  ["answer"=> "Baroque", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "Quel quartier abrite de nombreux ateliers d'artisans et de boutiques de créateurs ?",
                "answers"=> [
                  ["answer"=> "La Confluence", "is_correct"=> false],
                  ["answer"=> "La Part-Dieu", "is_correct"=> false],
                  ["answer"=> "La Croix-Rousse", "is_correct"=> true],
                  ["answer"=> "Le Vieux Lyon", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "Quel événement gastronomique annuel met à l'honneur la cuisine lyonnaise ?",
                "answers"=> [
                  ["answer"=> "La Fête des Lumières", "is_correct"=> false],
                  ["answer"=> "La Biennale de Lyon", "is_correct"=> false],
                  ["answer"=> "Beaujolais Nouveau", "is_correct"=> true],
                  ["answer"=> "Les Nuits Sonores", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "Quelle spécialité fromagère est originaire de la région lyonnaise ?",
                "answers"=> [
                  ["answer"=> "Le Bleu d'Auvergne", "is_correct"=> false],
                  ["answer"=> "Le Comté", "is_correct"=> false],
                  ["answer"=> "Le Saint-Marcellin", "is_correct"=> true],
                  ["answer"=> "Le Reblochon", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "Quel personnage historique a fondé la ville de Lyon en 43 av. J.-C. ?",
                "answers"=> [
                  ["answer"=> "Jules César", "is_correct"=> true],
                  ["answer"=> "Auguste", "is_correct"=> false],
                  ["answer"=> "Tibère", "is_correct"=> false],
                  ["answer"=> "Caligula", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "Quelle place centrale accueille la statue de Louis XIV et des événements importants ?",
                "answers"=> [
                  ["answer"=> "La Place Bellecour", "is_correct"=> true],
                  ["answer"=> "La Place des Terreaux", "is_correct"=> false],
                  ["answer"=> "La Place Carnot", "is_correct"=> false],
                  ["answer"=> "La Place Saint-Jean", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "Quel quartier est connu pour ses pentes et ses traboules, et offre une vue panoramique sur la ville ?",
                "answers"=> [
                  ["answer"=> "La Confluence", "is_correct"=> false],
                  ["answer"=> "La Part-Dieu", "is_correct"=> false],
                  ["answer"=> "La Croix-Rousse", "is_correct"=> true],
                  ["answer"=> "Le Vieux Lyon", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "Quel musée est consacré à l'histoire de la soie et de son industrie à Lyon ?",
                "answers"=> [
                  ["answer"=> "Le Musée des Confluences", "is_correct"=> false],
                  ["answer"=> "Le Musée des Beaux-Arts", "is_correct"=> false],
                  ["answer"=> "Le Musée des Tissus et des Arts Décoratifs", "is_correct"=> true],
                  ["answer"=> "Le Musée Miniature et Cinéma", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "Quel festival de musiques du monde se déroule chaque année à Lyon ?",
                "answers"=> [
                  ["answer"=> "Les Nuits Sonores", "is_correct"=> false],
                  ["answer"=> "Le Festival Lumière", "is_correct"=> false],
                  ["answer"=> "Le Festival Unlimited", "is_correct"=> true],
                  ["answer"=> "Les Francofolies", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "Quelle spécialité culinaire lyonnaise est composée de tripes de bœuf farcies ?",
                "answers"=> [
                  ["answer"=> "La Salade Lyonnaise", "is_correct"=> false],
                  ["answer"=> "Le Gratin dauphinois", "is_correct"=> false],
                  ["answer"=> "Le Saucisson brioché", "is_correct"=> false],
                  ["answer"=> "Les Tripoux à la lyonnaise", "is_correct"=> true]
                ]
              ],
              [
                "question"=> "Quel pont moderne relie la Presqu'île à la Confluence ?",
                "answers"=> [
                  ["answer"=> "Le Pont de la Guillotière", "is_correct"=> false],
                  ["answer"=> "Le Pont Bonaparte", "is_correct"=> false],
                  ["answer"=> "Le Pont Saint-Vincent", "is_correct"=> false],
                  ["answer"=> "Le Pont Raymond Poincaré", "is_correct"=> true]
                ]
              ],
              [
                "question"=> "Quel style architectural est caractéristique du quartier du Vieux Lyon ?",
                "answers"=> [
                  ["answer"=> "Roman", "is_correct"=> false],
                  ["answer"=> "Gothique", "is_correct"=> false],
                  ["answer"=> "Renaissance", "is_correct"=> true],
                  ["answer"=> "Baroque", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "Quel jardin botanique abrite une grande variété de plantes et de fleurs ?",
                "answers"=> [
                  ["answer"=> "Le Parc de la Tête d'Or", "is_correct"=> false],
                  ["answer"=> "Le Jardin des Plantes", "is_correct"=> true],
                  ["answer"=> "Le Parc de Miribel", "is_correct"=> false],
                  ["answer"=> "Le Parc Chambord", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "Quel quartier étudiant est connu pour son ambiance festive et ses nombreux bars ?",
                "answers"=> [
                  ["answer"=> "La Confluence", "is_correct"=> false],
                  ["answer"=> "La Part-Dieu", "is_correct"=> false],
                  ["answer"=> "Le Vieux Lyon", "is_correct"=> false],
                  ["answer"=> "Le Quartier des Cordeliers", "is_correct"=> true]
                ]
              ],
              [
                "question"=> "Quelle spécialité sucrée lyonnaise est parfumée à la pistache ?",
                "answers"=> [
                  ["answer"=> "La Praline", "is_correct"=> false],
                  ["answer"=> "La Brioche aux pralines", "is_correct"=> false],
                  ["answer"=> "La Tarte aux pralines", "is_correct"=> false],
                  ["answer"=> "Le Coucou de Lyon", "is_correct"=> true]
                ]
              ],
              [
                "question"=> "Quel événement sportif international se déroule tous les quatre ans à Lyon ?",
                "answers"=> [
                  ["answer"=> "Le Marathon de Paris", "is_correct"=> false],
                  ["answer"=> "Le Tour de France", "is_correct"=> false],
                  ["answer"=> "La Coupe du Monde de football", "is_correct"=> false],
                  ["answer"=> "Les Jeux Olympiques", "is_correct"=> true]
                ]
              ],
              [
                "question"=> "Quelle est la devise latine de la famille de Guise, liée à l'histoire de Lyon ?",
                "answers"=> [
                  ["answer"=> "\"Ut fortiter sic fideliter\"", "is_correct"=> true],
                  ["answer"=> "\"Toujours fidèle\"", "is_correct"=> false],
                  ["answer"=> "\"Lyon, ville Lumière\"", "is_correct"=> false],
                  ["answer"=> "\"Qui s'y frotte s'y pique\"", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "Quelle spécialité culinaire lyonnaise est composée de quenelles de brochet et d'une sauce Nantua ?",
                "answers"=> [
                  ["answer"=> "La Salade Lyonnaise", "is_correct"=> false],
                  ["answer"=> "Le Gratin dauphinois", "is_correct"=> false],
                  ["answer"=> "Le Saucisson brioché", "is_correct"=> false],
                  ["answer"=> "Le Gratin de brochet à la Nantua", "is_correct"=> true]
                ]
              ],
              [
                "question"=> "Quel quartier est connu pour ses restaurants traditionnels et ses bouchons lyonnais ?",
                "answers"=> [
                  ["answer"=> "La Confluence", "is_correct"=> false],
                  ["answer"=> "La Part-Dieu", "is_correct"=> false],
                  ["answer"=> "Le Vieux Lyon", "is_correct"=> true],
                  ["answer"=> "La Croix-Rousse", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "Quel musée est consacré à l'histoire de la ville et à son patrimoine gallo-romain ?",
                "answers"=> [
                  ["answer"=> "Le Musée des Confluences", "is_correct"=> false],
                  ["answer"=> "Le Musée gallo-romain de Fourvière", "is_correct"=> true],
                  ["answer"=> "Le Musée des Beaux-Arts", "is_correct"=> false],
                  ["answer"=> "Le Musée des Tissus et des Arts Décoratifs", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "Quel festival de littérature se déroule chaque année à Lyon ?",
                "answers"=> [
                  ["answer"=> "Les Nuits Sonores", "is_correct"=> false],
                  ["answer"=> "Le Festival Lumière", "is_correct"=> false],
                  ["answer"=> "Le Salon du Livre de Lyon", "is_correct"=> true],
                  ["answer"=> "Les Francofolies", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "Quelle spécialité sucrée lyonnaise est composée de pâte feuilletée et de crème pâtissière ?",
                "answers"=> [
                  ["answer"=> "La Praline", "is_correct"=> false],
                  ["answer"=> "La Brioche aux pralines", "is_correct"=> false],
                  ["answer"=> "La Tarte aux pralines", "is_correct"=> false],
                  ["answer"=> "Le Gâteau Praliné", "is_correct"=> true]
                ]
              ],
              [
                "question"=> "Quel grand centre commercial est situé dans le quartier de la Part-Dieu ?",
                "answers"=> [
                  ["answer"=> "La Confluence", "is_correct"=> false],
                  ["answer"=> "La Part-Dieu", "is_correct"=> true],
                  ["answer"=> "Le Vieux Lyon", "is_correct"=> false],
                  ["answer"=> "Le Centre Commercial Aéroville", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "Quel est le nom du village médiéval situé sur les hauteurs de Lyon ?",
                "answers"=> [
                  ["answer"=> "Fourvière", "is_correct"=> false],
                  ["answer"=> "Sainte-Genève", "is_correct"=> false],
                  ["answer"=> "Oingt", "is_correct"=> true],
                  ["answer"=> "Condrieu", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "Quel style architectural est caractéristique du quartier de la Confluence ?",
                "answers"=> [
                  ["answer"=> "Roman", "is_correct"=> false],
                  ["answer"=> "Gothique", "is_correct"=> false],
                  ["answer"=> "Renaissance", "is_correct"=> false],
                  ["answer"=> "Contemporain", "is_correct"=> true]
                ]
              ],
              [
                "question"=> "Quel parc animalier héberge des animaux du monde entier ?",
                "answers"=> [
                  ["answer"=> "Le Parc de la Tête d'Or", "is_correct"=> true],
                  ["answer"=> "Le Jardin des Plantes", "is_correct"=> false],
                  ["answer"=> "Le Parc de Miribel", "is_correct"=> false],
                  ["answer"=> "Le Parc Chambord", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "Quel quartier est connu pour ses nombreux étudiants et ses campus universitaires ?",
                "answers"=> [
                  ["answer"=> "La Confluence", "is_correct"=> false],
                  ["answer"=> "La Part-Dieu", "is_correct"=> false],
                  ["answer"=> "Le Quartier des Cordeliers", "is_correct"=> false],
                  ["answer"=> "Le Quartier de Gerland", "is_correct"=> true]
                ]
              ],
              [
                "question"=> "Quelle spécialité sucrée lyonnaise est parfumée à la fleur d'oranger et au rhum ?",
                "answers"=> [
                  ["answer"=> "La Praline", "is_correct"=> false],
                  ["answer"=> "La Brioche aux pralines", "is_correct"=> false],
                  ["answer"=> "La Tarte aux pralines", "is_correct"=> false],
                  ["answer"=> "Le Saint-Genix", "is_correct"=> true]
                ]
              ],
              [
                "question"=> "Quel événement culturel majeur se déroule tous les deux ans à Lyon ?",
                "answers"=> [
                  ["answer"=> "La Biennale de Lyon", "is_correct"=> true],
                  ["answer"=> "Le Festival Lumière", "is_correct"=> false],
                  ["answer"=> "Le Salon du Livre de Lyon", "is_correct"=> false],
                  ["answer"=> "Les Nuits Sonores", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "Quel est le nom du célèbre tunnel romain reliant la Presqu'île à la Croix-Rousse ?",
                "answers"=> [
                  ["answer"=> "Le Pont de la Guillotière", "is_correct"=> false],
                  ["answer"=> "Le Tunnel Traboule", "is_correct"=> true],
                  ["answer"=> "Le Pont Bonaparte", "is_correct"=> false],
                  ["answer"=> "Le Pont Raymond Poincaré", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "Quel quartier est connu pour ses ateliers de soieries et son savoir-faire artisanal ?",
                "answers"=> [
                  ["answer"=> "La Confluence", "is_correct"=> false],
                  ["answer"=> "La Part-Dieu", "is_correct"=> false],
                  ["answer"=> "La Croix-Rousse", "is_correct"=> true],
                  ["answer"=> "Le Vieux Lyon", "is_correct"=> false]
                ]
              ],
              [
                "question"=> "Quel festival de danse contemporaine se déroule chaque année à Lyon ?",
                "answers"=> [
                  ["answer"=> "Les Nuits Sonores", "is_correct"=> false],
                  ["answer"=> "Le Festival Lumière", "is_correct"=> false],
                  ["answer"=> "La Biennale de la Danse", "is_correct"=> true],
                  ["answer"=> "Les Francofolies", "is_correct"=> false]
                ]
              ]
        ];

        for ($i=0; $i < 60; $i++) {
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
}
