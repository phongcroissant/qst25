<?php

namespace App\Vue;

use App\Utilitaire\Vue_Composant;

class Vue_ModifierMaTable extends Vue_Composant
{

    /**
     * @param mixed $data
     */
    public function __construct(mixed $data)
    {
        $this->data = $data;
    }

    function donneTexte(): string
    {
        $str= "
        <h1>Vous modifiez un enregistrement de ma table !</h1>
        <div  style='    width: 50%;    display: block;    margin: auto;'> 
            <form method='post'>
                <input type='hidden' name='case' value ='maTable'>
                <input type='hidden' name='action' value ='enregistrerModifier'>
                <input type='hidden' name='id' value ='".$this->data["id"]."'>
                <label for='nom'>Nom</label>
                <input type='text' name='nom' value='".$this->data["nom"]."'><br>
                <label for='prenom'>Prenom</label>
                <input type='text' name='prenom' value='".$this->data["prenom"]."'><br>
                <label for='motdepasse'>Mot de passe</label>
                <input type='text' name='motdepasse' value='".$this->data["motdepasse"]."'><br>
                <button type='submit' > Modifier</button>
            </form>
        </div>
        ";
        return $str ;
    }
}