<?php
/**
 * Created by PhpStorm.
 * User: lorine
 * Date: 08-12-20
 * Time: 18:03
 */

use PHPUnit\Framework\TestCase;

require "vendor/autoload.php";
require "controllers/PositiviteController.php";


class PositivityControllerTest extends TestCase
{

    private $positivite;

    public function setUp(): void
    {
        parent::setUp();
        $this->positivite = new PositiviteController();
    }

    public function test0MotPositifAttendu0()
    {
        $resultat = $this->positivite->analyserMessageEtCompterNbrMots("je tape n'importe quoi");
        $this->assertEquals(0, $resultat);
        $messageAffiche = $this->positivite->afficherResultatMessage($resultat);
        $this->assertEquals("neutre", $messageAffiche);
    }

    public function test1MotPositifAttendu()
    {
        $resultat = $this->positivite->analyserMessageEtCompterNbrMots("bon");
        $this->assertEquals(1, $resultat);
        $messageAffiche = $this->positivite->afficherResultatMessage($resultat);
        $this->assertEquals("correct", $messageAffiche);
    }

    public function test2MotPositifAttendu2()
    {
        $resultat = $this->positivite->analyserMessageEtCompterNbrMots("bon adorable");
        $this->assertEquals(2, $resultat);
        $messageAffiche = $this->positivite->afficherResultatMessage($resultat);
        $this->assertEquals("correct", $messageAffiche);
    }

    public function test3MotPositifAttendu3()
    {
        $resultat = $this->positivite->analyserMessageEtCompterNbrMots("bon adorable gentil");
        $this->assertEquals(3, $resultat);
        $messageAffiche = $this->positivite->afficherResultatMessage($resultat);
        $this->assertEquals("bon", $messageAffiche);
    }

    public function test4MotPositifAttendu4()
    {
        $resultat = $this->positivite->analyserMessageEtCompterNbrMots("bon adorable gentil cool");
        $this->assertEquals(4, $resultat);
        $messageAffiche = $this->positivite->afficherResultatMessage($resultat);
        $this->assertEquals("bon", $messageAffiche);
    }

    public function test5MotPositifAttendu5()
    {
        $resultat = $this->positivite->analyserMessageEtCompterNbrMots("bon adorable gentil cool super");
        $this->assertEquals(5, $resultat);
        $messageAffiche = $this->positivite->afficherResultatMessage($resultat);
        $this->assertEquals("très bon", $messageAffiche);
    }

    public function test6MotPositifAttendu6()
    {
        $resultat = $this->positivite->analyserMessageEtCompterNbrMots("bon adorable gentil cool super heureux");
        $this->assertEquals(6, $resultat);
        $messageAffiche = $this->positivite->afficherResultatMessage($resultat);
        $this->assertEquals("franchement positif", $messageAffiche);
    }

    public function test7MotPositifAttendu7()
    {
        $resultat = $this->positivite->analyserMessageEtCompterNbrMots("bon adorable gentil cool super heureux idéal");
        $this->assertEquals(7, $resultat);
        $messageAffiche = $this->positivite->afficherResultatMessage($resultat);
        $this->assertEquals("franchement positif", $messageAffiche);
    }

    public function test8MotPositifAttendu8()
    {
        $resultat = $this->positivite->analyserMessageEtCompterNbrMots("bon adorable gentil cool super heureux idéal chance");
        $this->assertEquals(8, $resultat);
        $messageAffiche = $this->positivite->afficherResultatMessage($resultat);
        $this->assertEquals("franchement positif", $messageAffiche);
    }

    public function test9MotPositifAttendu9()
    {
        $resultat = $this->positivite->analyserMessageEtCompterNbrMots("bon adorable gentil cool super heureux idéal chance excellent");
        $this->assertEquals(9, $resultat);
        $messageAffiche = $this->positivite->afficherResultatMessage($resultat);
        $this->assertEquals("excellent", $messageAffiche);
    }

    public function test10MotPositifAttendu10()
    {
        $resultat = $this->positivite->analyserMessageEtCompterNbrMots("bon adorable gentil cool super heureux idéal chance excellent divin");
        $this->assertEquals(10, $resultat);
        $messageAffiche = $this->positivite->afficherResultatMessage($resultat);
        $this->assertEquals("parfait", $messageAffiche);
    }

    public function test11MotPositifAttendu11()
    {
        $resultat = $this->positivite->analyserMessageEtCompterNbrMots("bon adorable gentil cool super heureux idéal chance excellent divin polis");
        $this->assertEquals(11, $resultat);
        $messageAffiche = $this->positivite->afficherResultatMessage($resultat);
        $this->assertEquals("parfait", $messageAffiche);
    }

    public function test12MotPositifAttendu12()
    {
        $resultat = $this->positivite->analyserMessageEtCompterNbrMots("bon adorable gentil cool super heureux idéal chance excellent divin polis coeur");
        $this->assertEquals(12, $resultat);
        $messageAffiche = $this->positivite->afficherResultatMessage($resultat);
        $this->assertEquals("parfait", $messageAffiche);
    }


}
