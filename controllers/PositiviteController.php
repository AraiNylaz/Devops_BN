<?php

class PositiviteController
{

    public function __construct()
    {

    }

    public function run()
    {


        if (!empty($_POST)) {
            $nbrMotMessage = $this->analyserMessageEtCompterNbrMots($_POST['textePositif']);
            $resultat = $this->afficherResultatMessage($nbrMotMessage);

        }


        require_once(CHEMIN_VUES . 'positivite.php');
    }

    /**
     * @param $messageATraiter : le message qui va être traité
     * @return int : le nombre de mots positifs dans le message
     * un tableau est déjà pré-rempli avec des mots positifs
     * la fonction strpos ne compte que 1 seule fois chaque mot positif (pas de doublons)
     */
    public function analyserMessageEtCompterNbrMots($messageATraiter): int
    {
        $tableau = Array("cordial", "bon", "génial", "cool", "super", "parfait", "harmonieux", "heureux", "joie", "idéal", "magnifique", "content", "bonté", "amour",
            "beau", "humain", "favorable", "merveille", "gentil", "charitable", "coeur", "généreux", "philanthrope", "altruiste", 'sensible', "bien veillant",
            "clément", "polis", "excellent", "exemplaire", "divin", "adorable", "morale", "digne", "chance", "Cordial", "Bon", "Génial", "Cool", "Super",
            "Parfait", "Harmonieux", "Heureux", "Joie", "Idéal", "Magnifique", "Content", "Bonté", "Amour",
            "Beau", "Humain", "Favorable", "Merveille", "Gentil", "Charitable", "Coeur", "Généreux", "Philanthrope",
            "Altruiste", 'Sensible', "Bien veillant", "Clément", "Polis", "Excellent", "Exemplaire", "Divin", "Adorable",
            "Morale", "Digne", "Chance");

        $nbrMot = 0;
        if (empty($messageATraiter)) {
            $notification = 'Entrez un message';
        } else {
            // la fonction strpos n'analyse que à partir du second char
            $message = " " . $messageATraiter;
            for ($i = 0; $i < count($tableau); $i++) {
                if (strpos($message, $tableau[$i])) {
                    $nbrMot++;
                }
            }
        }
        return $nbrMot;
    }

    /**
     * @param int $nbrMotMessage : le nombre de mots positif du message
     * @return string : le résultat obtenu pour le message
     */
    public function afficherResultatMessage(int $nbrMotMessage): string
    {
        if ($nbrMotMessage == 0) {
            return "neutre";
        }
        if ($nbrMotMessage == 1 || $nbrMotMessage == 2) {
            return "correct";
        }
        if ($nbrMotMessage == 3 || $nbrMotMessage == 4) {
            return "bon";
        }
        if ($nbrMotMessage == 5) {
            return "très bon";
        }
        if ($nbrMotMessage == 6 || $nbrMotMessage == 7 || $nbrMotMessage == 8) {
            return "franchement positif";
        }
        if ($nbrMotMessage == 9) {
            return "excellent";
        }
        if ($nbrMotMessage >= 10) {
            return "parfait";
        }

    }


}