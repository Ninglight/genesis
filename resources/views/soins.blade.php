@component('templates.care', [
    'title' => 'Nos soins & tarifs',
    'subtitle' => 'Parcours de soin',

    'list1' => [
        'type' => 'icon',
        'items' => [
            'item1' => [
                'icon' => 'icons/armchair.svg',
                'title' => 'Premier entretien - 80 €',
                'content' => "  <p>Suite à la prise de contact Tandem vous propose un premier entretien mené conjointement par la psychologue
                                et la neuropsychologue, afin d'évaluer les besoins et analyser la demande.</p>
                                <p>Suite au premier entretien, Tandem peut vous préconiser une évaluation psychologique ou neuropsychologique,
                                ou directement une prise en charge si les bilans ont été effectués.</p>"
            ],
            'item2' => [
                'icon' => 'icons/medical-result.svg',
                'title' => 'Bilan - à partir de 250 €',
                'content' => "  <p>Le bilan psychologique a pour objectif d’évaluer le fonctionnement psychique de l’enfant à un moment
                                    donné de son développement, à la fois au niveau intellectuel et au niveau affectif. Il se compose
                                    de différents tests (intelligence, aptitudes, personnalité) et d’entretiens cliniques qui permettent
                                    de comprendre le fonctionnement de l’enfant afin de pouvoir cibler les potentialités, les éventuelles
                                    difficultés et de proposer une prise en charge la plus adaptée possible. Le bilan est ainsi un
                                    bon outil de prévention et participe au projet de soin/suivi proposé par l’équipe Tandem.</p>
                                <p>Le bilan neuropsychologique permet d’évaluer les capacités cérébrales en fonction du contexte et
                                    de la situation. Il se divise en trois parties :</p>
                                <h4>1. L’ENTRETIEN</h4>
                                <p>Il se déroule lui-même en 2 parties : avec les parents dans un premier temps, afin de mieux cerner
                                    le cadre de vie de l’enfant et son développement. La deuxième partie se faisant avec l’enfant
                                    seul. Cet entretien va permettre de définir le cadre de votre demande ainsi que de comprendre
                                    ce qui vous a amené à consulter.</p>
                                <h4>2 - L’ÉVALUATION CLINIQUE</h4>
                                <p>Elle peut se dérouler sur plusieurs séances. C’est un examen agrémenté de tests multiples qui vont
                                    permettre une évaluation précise de toutes les capacités intellectuelles telles que :</p>
                                <ul class='list-bullet'>
                                    <li>le fonctionnement intellectuel global</li>
                                    <li>la mémoire et les capacités d’apprentissage</li>
                                    <li>les capacités attentionnelles et de concentration</li>
                                    <li>les différentes fonctions de haut niveau (telles que la capacité à passer d’une tache à une autre
                                        ou de planifier/catégoriser/programmer etc.)</li>
                                    <li>l’orientation</li>
                                    <li>les capacités visuelles et constructives</li>
                                    <li>les capacités de coordination et d’adaptation des mouvements</li>
                                    <li>le langage (expression écrite/orale, compréhension…)</li>
                                </ul>
                                <h4>3 - LE COMPTE RENDU ET L’ENTRETIEN DE RESTITUTION</h4>
                                <p>Un document rassemblant l’ensemble des informations obtenues durant l’entretien préliminaire et l’évaluation
                                    clinique est remis lors d’un entretien final. Des préconisations thérapeutiques pourront être
                                    proposées suite à l’analyse et l’interprétation des résultats obtenus.</p>
                                <p>Ce compte rendu pourra également être remis directement au médecin traitant ou au spécialiste de
                                    votre choix en ayant fait la demande (pédopsychiatre, neurologue…).</p>"
            ]
        ],
        'contentBottom' => "Tandem vous accompagne pour le suivi et la prise en charge de votre enfant ainsi qu'au cours du dépistage d'un trouble ou de difficultés, de même afin de suivre l'évolution de votre enfant. Une prise en charge précoce permet de prévenir d'éventuelles difficultés."

    ],

    'block1' => [
        'type' => 'blue',
        'title' => 'Suite au(x) bilan(s), nous pouvons vous réorienter vers d’autres spécialités :',
        'content' => "Orthophoniste, Psychomotricien, Ergothérapeute, Pedopsychiatre …"
    ],

    'list2' => [
        'type' => 'icon',
        'items' => [
            'item1' => [
                'icon' => 'icons/first-aid-kit.svg',
                'title' => 'Préconisation et prise en charge - à partir de 50 €',
                'content' => "  <h4>SUIVI PSYCHOLOGIQUE</h4>
                                <p>Entretien clinique : fréquence du suivi variable en fonction des besoins.</p>
                                <h4>REMÉDIATION COGNITIVE</h4>
                                <p>Séance hebdomadaire de 45 minutes. Durée : selon l’évolution.</p>
                                <h4>EDUCATION THÉRAPEUTIQUE</h4>
                                <p>Trouble des apprentissages, hyperactivité, trouble du spectre autistique…</p>
                                <h4>GUIDANCE PARENTALE</h4>
                                <p>Séance hebdomadaire de 1 à 2 heures.</p>"
            ]
        ]

    ],

    'block2' => [
        'type' => 'blue',
        'icon' => 'icons/conjoint.svg',
        'content' => "Possibilité d’effectué des entretiens d ‘évolution accompagné du conjoint."
    ],

    'block3' => [
        'type' => 'white',
        'title' => "Nous vous avons convaincu de travailler avec nous ?",
        'subtitle' => "N’hésitez pas à nous contactez pour plus d’information ou pour un premier entretien !",
        'button' => "Contactez-nous",
        'url' => 'contact'
        
    ]
])

@endcomponent