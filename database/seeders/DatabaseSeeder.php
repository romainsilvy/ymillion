<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $questions = [
            [
                'question' => 'What is the capital of France?',
                'answers' => [
                    [
                        'answer' => 'Paris',
                        'is_correct' => true
                    ],
                    [
                        'answer' => 'London',
                        'is_correct' => false
                    ],
                    [
                        'answer' => 'Madrid',
                        'is_correct' => false
                    ],
                    [
                        'answer' => 'Berlin',
                        'is_correct' => false
                    ]
                ]
            ],
            [
                'question' => 'What is the capital of Spain?',
                'answers' => [
                    [
                        'answer' => 'Paris',
                        'is_correct' => false
                    ],
                    [
                        'answer' => 'London',
                        'is_correct' => false
                    ],
                    [
                        'answer' => 'Madrid',
                        'is_correct' => true
                    ],
                    [
                        'answer' => 'Berlin',
                        'is_correct' => false
                    ]
                ]
            ],
            [
                'question' => 'What is the capital of Germany?',
                'answers' => [
                    [
                        'answer' => 'Paris',
                        'is_correct' => false
                    ],
                    [
                        'answer' => 'London',
                        'is_correct' => false
                    ],
                    [
                        'answer' => 'Madrid',
                        'is_correct' => false
                    ],
                    [
                        'answer' => 'Berlin',
                        'is_correct' => true
                    ]
                ]
            ],
            [
                'question' => 'What is the capital of Italy?',
                'answers' => [
                    [
                        'answer' => 'Paris',
                        'is_correct' => false
                    ],
                    [
                        'answer' => 'London',
                        'is_correct' => false
                    ],
                    [
                        'answer' => 'Rome',
                        'is_correct' => true
                    ],
                    [
                        'answer' => 'Berlin',
                        'is_correct' => false
                    ]
                ]
            ],
            [
                'question' => 'What is the capital of Portugal?',
                'answers' => [
                    [
                        'answer' => 'Paris',
                        'is_correct' => false
                    ],
                    [
                        'answer' => 'Lisbon',
                        'is_correct' => true
                    ],
                    [
                        'answer' => 'Madrid',
                        'is_correct' => false
                    ],
                    [
                        'answer' => 'Berlin',
                        'is_correct' => false
                    ]
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
