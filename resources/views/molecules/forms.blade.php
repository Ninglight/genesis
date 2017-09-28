@if ($type == 'contact')
    <div class="row">
        <div class="input-field col s12 l6">
            <input id="first_name" type="text" class="validate">
            <label for="first_name">Prénom</label>
        </div>
        <div class="input-field col s12 l6">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Nom</label>
        </div>
        <div class="input-field col s12 l6">
            <input id="tel" type="tel" class="validate">
            <label for="tel">N° de téléphone</label>
        </div>
        <div class="input-field col s12 l6">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
        </div>
        <div class="input-field col s12">
            <textarea id="content" class="materialize-textarea"></textarea>
            <label for="content">Message</label>
        </div>
    </div>
    <div class="row right-align">
        <button class="btn waves-effect waves-light btn-submit" type="submit" name="action">Envoyer
            <i class="material-icons right">send</i>
        </button>
    </div>
@endif