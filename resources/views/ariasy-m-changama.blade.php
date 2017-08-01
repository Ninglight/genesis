
@component('pages.app')

    @slot('title')
        Ariasy M’Changama | Tandem
    @endslot

    @slot('top')

        @component('organisms.nav', ['type' => 'blue'])

        @endcomponent

    @endslot

    @slot('main')

        @component('templates.profil', ['name' => 'Ariasy M’Changama', 'speciality' => 'Neuropsychologue', 'class' => 'aria', 'tel' => '06 26 81 10 31', 'mail' => 'ariasy.nchanhama@psytandem.fr'])

            @slot('content')

                <p>Elle détient une maitrise en Neuropsychologie et Psychologie cognitive de l’Université Paris Descartes.
                    Ses différentes expériences professionnelles, notamment en hôpital et en cabinet, l’ont amené
                    à prendre en charge des patients de tout âge présentant :</p>
                <ul class="list-bullet">
                    <li>un AVC</li>
                    <li>une tumeur cérébrale</li>
                    <li>des troubles de l’attention et de la concentration</li>
                    <li>des troubles de la mémoire</li>
                    <li>des troubles anxieux</li>
                    <li>des troubles dépressifs</li>
                    <li>une maladie neurodégénérative (Sclérose en plaque, Alzheimer, Parkinson…)</li>
                </ul>

                <p>Elle exerce actuellement en libéral en intervention au domicile du patient sur Paris et la banlieue
                    ouest ainsi qu’à la clinique Saint Louis de Poissy.</p>

                <p>Elle participe également à des protocoles de recherche à l’hôpital de la Pitié Salpêtrière à l’institut
                    de la mémoire.</p>

                <p>Ariasy M’Changama est spécialisée dans l‘évaluation et la prise en charge des 6 à 25 ans ayant des
                    troubles cognitifs. Dans ce cadre, elle propose des évaluations, de la remédiation et des suivis
                    au travers d’entretiens et bilans neuropsychologiques. Ces bilans permettent de faire le point
                    sur les capacités intellectuelles et les fonctions cognitives à travers des batteries de tests
                    neuropsychologiques choisies en fonction de la nature de la demande, de l’objectif poursuivi
                    et des hypothèses cliniques.</p>
                 
            @endslot

        @endcomponent

        

    @endslot

@endcomponent