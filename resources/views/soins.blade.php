
@component('pages.app')

    @slot('title')
        Nos soins & tarifs - Parcours de soin | Tandem
    @endslot

    @slot('top')

        @component('organisms.nav', ['type' => 'white'])

        @endcomponent

        @component('organisms.header', [
            'type' => 'second', 
            'bg' => 'care', 
            'title' => 'Nos soins & tarifs', 
            'subtitle' => 'Parcours de soin'
        ])

        @endcomponent

    @endslot

    @slot('main')


        @component('organisms.list', [
            'type' => 'icon',
            'icon1' => 'icons/armchair.svg',
            'title1' => 'Premier entretien - 80 €',
            'icon' => 'icons/medical-result.svg',
            'title' => 'de 6 à 11 ans',
        ])

        @slot('content1')

            Suite à la prise de contact Tandem vous propose un premier entretien mené conjointement par la psychologue et la neuropsychologue, afin d'évaluer les besoins et analyser la demande. Suite au premier entretien, Tandem peut vous préconiser une évaluation psychologique ou neuropsychologique, ou directement une prise en charge si les bilans ont été effectués.

        @endslot

        @slot('content2')

            <p>Le bilan psychologique a pour objectif d’évaluer le fonctionnement psychique de l’enfant à un moment
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
                votre choix en ayant fait la demande (pédopsychiatre, neurologue…).</p>

        @endslot

        @endcomponent


        @component('organisms.block', [
            'type' => 'blue',
            'title' => 'Suite au(x) bilan(s), nous pouvons vous réorienter vers d’autres spécialités :',
            'content' => "Orthophoniste, Psychomotricien, Ergothérapeute, Pedopsychiatre …"
        ])

        @endcomponent


        @component('organisms.list', [
            'type' => 'icon',
            'icon1' => 'icons/armchair.svg',
            'title1' => 'Préconisation et prise en charge - à partir de 50 €'
            ]

            @slot('content1')

                <h3>PRÉCONISATION ET PRISE EN CHARGE - à partir de 50 €</h3>
                <p></p>
                <h4>SUIVI PSYCHOLOGIQUE</h4>
                <p>Entretien clinique : fréquence du suivi variable en fonction des besoins.</p>
                <h4>REMÉDIATION COGNITIVE</h4>
                <p>Séance hebdomadaire de 45 minutes. Durée : selon l’évolution.</p>
                <h4>EDUCATION THÉRAPEUTIQUE</h4>
                <p>Trouble des apprentissages, hyperactivité, trouble du spectre autistique…</p>
                <h4>GUIDANCE PARENTALE</h4>
                <p>Séance hebdomadaire de 1 à 2 heures.</p>

            @endslot
        ])

        @endcomponent

        @component('organisms.block', [
            'type' => 'blue',
            'icon' => 'icons/conjoint.svg',
            'content' => "Possibilité d’effectué des entretiens d ‘évolution accompagné du conjoint."
        ])

        @endcomponent

        @component('organisms.block', [
            'type' => 'white',
            'title' => "Nous vous avons convaincu de travailler avec nous ?",
            'subtitle' => "N’hésitez pas à nous contactez pour plus d’information ou pour un premier entretien !",
            'button' => "Contactez-nous",
            
        ])

        @endcomponent

        <div class="container section center-align">
            <div class="list-care">
                <div class="row item-care">
                    <div class="col s12 m3 l2 item-care-img">
                        <img src="icons/armchair.svg" alt="">
                    </div>
                    <div class="col s12 m9 l10 item-care-content">
                        <h3>PREMIER ENTRETIEN - 80 €</h3>
                        <p>Suite à la prise de contact Tandem vous propose un premier entretien mené conjointement par la psychologue
                            et la neuropsychologue, afin d'évaluer les besoins et analyser la demande.</p>
                        <p>Suite au premier entretien, Tandem peut vous préconiser une évaluation psychologique ou neuropsychologique,
                            ou directement une prise en charge si les bilans ont été effectués.</p>
                    </div>
                </div>
                <div class="row item-care">
                    <div class="col s12 m3 l2 item-care-img">
                        <img src="icons/medical-result.svg" alt="">
                    </div>
                    <div class="col s12 m9 l10 item-care-content">
                        <h3>BILAN - A PARTIR DE 250 €</h3>
                        <p>Le bilan psychologique a pour objectif d’évaluer le fonctionnement psychique de l’enfant à un moment
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
                            votre choix en ayant fait la demande (pédopsychiatre, neurologue…).</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="support section">
            <div class="container section center-align">
                <h3 class="white-text">Suite au(x) bilan(s), nous pouvons vous réorienter vers d’autres spécialités : </h3>
                <p>Orthophoniste, Psychomotricien, Ergothérapeute, Pedopsychiatre …</p>
            </div>
        </div>

        <div class="container section center-align">
            <div class="list-care">
                <div class="row item-care">
                    <div class="col s12 m3 l2 item-care-img">
                        <img src="icons/first-aid-kit.svg" alt="">
                    </div>
                    <div class="col s12 m9 l10 item-care-content">
                        <h3>PRÉCONISATION ET PRISE EN CHARGE - à partir de 50 €</h3>
                        <p></p>
                        <h4>SUIVI PSYCHOLOGIQUE</h4>
                        <p>Entretien clinique : fréquence du suivi variable en fonction des besoins.</p>
                        <h4>REMÉDIATION COGNITIVE</h4>
                        <p>Séance hebdomadaire de 45 minutes. Durée : selon l’évolution.</p>
                        <h4>EDUCATION THÉRAPEUTIQUE</h4>
                        <p>Trouble des apprentissages, hyperactivité, trouble du spectre autistique…</p>
                        <h4>GUIDANCE PARENTALE</h4>
                        <p>Séance hebdomadaire de 1 à 2 heures.</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="support">
            <div class="container section center-align">
                <div class="row item-care center-align">
                    <img src="icons/conjoint.svg" alt="">
                    <p>Possibilité d’effectué des entretiens d ‘évolution accompagné du conjoint.</p>
                </div>
            </div>
        </div>

        <div class="container section center-align">
            <div class="section">
                <h3 class="title-contact">Nous vous avons convaincu de travailler avec nous ?</h3>
                <span class="subtitle-contact">N’hésitez pas à nous contactez pour plus d’information ou pour un premier entretien !</span><br>
                <a href="contact.html"><button class="waves-effect waves-light btn">Contactez-nous</button></a>
            </div>
        </div>

    @endslot

@endcomponent






       








    <main>
        






    </main>

    <footer>
        <a href="index.html" class="brand-logo"><img src="icons/logo-inner-shadow.svg" alt=""></a>
        <p>
            © Tandem - 2017
        </p>
    </footer>




    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript" src="js/init.js"></script>
</body>

</html>