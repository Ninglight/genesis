@component('templates.index', [
    'mark' => 'Tandem',
    'title' => 'Prise en charge psychologique de 3 à 25 ans',
    'intro' => 'L’équipe Tandem propose une prise en charge psychologique mobile sur les communes de <span class="strong">La Garenne-Colombes</span> et <span class="strong">Le Chesnay</span>.',

    'list1' => [
        'type' => 'icon',
        'title' => 'Pourquoi faire appel à nous ?',
        'contentTop' => "Tandem accompagne et suit l’enfant tout au long de son développement et jusqu’au début de l’âge adulte (de 3 à 25 ans).",
        'items' => [
            'item1' => [
                'icon' => 'icons/baby.svg',
                'title' => 'à partir de 3 ans',
                'content' => "Pour des retards de développement (trouble du sommeil, trouble du langage, de la communication, etc.), des problèmes de séparation au moment d'aller à l'école, de concentration, de socialisation, etc."
            ],
            'item2' => [
                'icon' => 'icons/child.svg',
                'title' => 'de 6 à 11 ans',
                'content' => "Pour des difficultés d'ordre scolaire, d'immaturité, d'autonomie, d'adaptation, etc."
            ],
            'item3' => [
                'icon' => 'icons/teen.svg',
                'title' => 'de 12 à 15 ans',
                'content' => "Pour des problèmes liés à l'adolescence : des troubles du comportement alimentaire, des troubles d'opposition, de l'agressivité, etc."
            ],
            'item4' => [
                'icon' => 'icons/adult.svg',
                'title' => 'de 16 à 25 ans',
                'content' => "Pour des difficultés de concentration et de mise au travail, des difficultés liées à l'orientation, des conflits parents/enfants, d'opposition face a l'autorité, liées à la sexualité, etc."
            ]
        ],
        'contentBottom' => "Tandem vous accompagne pour le suivi et la prise en charge de votre enfant ainsi qu'au cours du dépistage d'un trouble ou de difficultés, de même afin de suivre l'évolution de votre enfant. Une prise en charge précoce permet de prévenir d'éventuelles difficultés.",
    ],

    'block1' => [
        'type' => 'bg',
        'content' => "Tandem se déplace au domicile, à l’école ou en structure, pour une prise en charge au plus près des besoins, afin d’éviter la déstabilisation possible de l’environnement hospitalier. L’introduction d’une aide adaptée directement au domicile permet d’améliorer la qualité de vie de l’enfant dans son environnement familial au quotidien."
    ],

    'list2' => [
        'type' => 'profil',
        'title' => 'Qui sommes-nous ?',
        'contentTop' => 'Tandem accompagne et suit l’enfant tout au long de son développement et jusqu’au début de l’âge adulte (de 3 à 25 ans).',
        'items' => [
            'ariasy' => [
                'name' => 'Ariasy M’Changama',
                'speciality' => 'Neuropsychologue',
                'url' => "ariasy-m-changama",
                'class' => "aria"
            ],
            'catherine' => [
                'name' => 'Catherine Hoareau',
                'speciality' => 'Psychologue clinicienne',
                'url' => "catherine-hoareau",
                'class' => "cath"
            ]
        ],
        'contentBottom' => 'Ces deux spécialités vont :
                            <ul class="list-bullet">
                                <li>Permettre l’exploration de différentes sphères psychologiques par deux professionnelles aux pratiques
                                    complémentaires
                                </li>
                                <li>Apporter deux regards différents sur la situation avec deux approches différentes.</li>
                            </ul>'
    ],

    'block2' => [
        'type' => 'blue',
        'title' => "Globalement, nous prenons en charge",
        'button' => 'Découvrez la prise en charge détaillées',
        'url' => 'soins',
        'items' => [
            'item1' => 'Les maladies / antécédents neurologiques (épilepsie, traumatisme crânien, accident vasculaire cérébral, etc.)',
            'item2' => 'Les troubles psychologiques (anxiété, angoisse, phobie, problèmes familiaux)',
            'item3' => 'Les troubles psychiatriques (psychoses)',
            'item4' => 'Les différents troubles des apprentissages',
            'item5' => 'Les troubles envahissants du développement',
            'item6' => 'Les troubles des fonctions cognitives',
        ]
    ],

    'block3' => [
        'type' => 'white',
        'title' => "Nous vous avons convaincu de travailler avec nous ?",
        'subtitle' => "N’hésitez pas à nous contactez pour plus d’information ou pour un premier entretien !",
        'button' => "Contactez-nous",
        'url' => "contact"
        
    ]
])

@endcomponent