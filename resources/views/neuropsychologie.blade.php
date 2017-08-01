@component('templates.speciality', [
    'typeHeader' => 'second', 
    'title' => 'La Neuropsychologie',
    'subtitle' => 'Nos spécialités', 
    'url' => 'psychologie-clinique', 
    'nameProfil' => 'Ariasy M’Changama',
    'specialityProfil' => 'Neuropsychologue',
    'urlProfil' => 'ariasy-m-changama,
    'classProfil' => 'aria',
])

    @slot('content')

        <p>Il y a près de cinq mille ans en Egypte, le lien entre le cerveau et la commande des parties du corps
            avait été notée, une lésion du cerveau pouvant être la cause d’un signe observée à distance.</p>
        <p>La première utilisation du terme neuropsychologie remonte aux années 1950. La neuropsychologie est une
            discipline au carrefour de la science et de la psychologie. Elle étudie donc les rapports entre le
            comportement, la personnalité, les émotions, les capacités intellectuelles et les fonctions cérébrales.</p>
        <p>Le rôle du neuropsychologue consiste à tester et comparer les performances déficitaires du patient avec
            les performances normales pour un même groupe d’âge. La démarche est précise. Il ne s’agit pas seulement
            de savoir si un patient réussit ou non à une épreuve, mais de savoir quels types d’erreurs il commet
            et quels sont les facteurs auxquels le déficit est sensible.</p>
        <p>La neuropsychologie cognitive :</p>
        <ul class="list-bullet">
            <li>S’appuie sur un modèle précis de traitement de l’information.</li>
            <li>Elle recherche la « lésion fonctionnelle » responsable des troubles (diagnostic cognitif) ; elle
                se base sur l’utilisation d’une méthodologie précise.</li>
            <li>Elle propose un programme précis et contrôlé de rééducation.</li>
        </ul>

    @endslot

@endcomponent