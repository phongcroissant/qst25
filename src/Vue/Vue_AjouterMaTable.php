<?php

namespace App\Vue;

use App\Utilitaire\Vue_Composant;

class Vue_AjouterMaTable extends Vue_Composant
{
    private string $msgErreur;

    public function __construct( string $msgErreur ="")
    {
        $this->msgErreur=$msgErreur;
    }

    function donneTexte(): string
    {
        $str= "
<h1>Ajouter un enregistrement</h1>
<div  style='    width: 50%;    display: block;    margin: auto;'> 
<form>
    <table> 
        <tr> <td>id</td><td>Automatique !</td> </tr>
         <tr>    <td>nom</td><td> <input type='text' name='nom'> </td></tr>
        <tr>     <td>prenom</td> <td> <input type='text' name='prenom'> </td></tr>
        <tr>     <td>motdepasse</td> <td> <input type='password' name='motdepasse'> </td></tr>
    </table>
    <input type='hidden' name='case' value ='maTable'>
    <button type='submit' name = 'action' value='enregistrerAjouter'> Ajouter !!</button>
    </form>
</div>
        $this->msgErreur
    ";
        return $str ;
    }
}