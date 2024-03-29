<?php

use PHPUnit\Framework\TestCase;

require '../includes/class.pdogsb.inc.php';
//require '../includes/fct.inc.php';

/**
 * Generated by PHPUnit_SkeletonGenerator on 2018-10-19 at 08:25:52.
 */
class PdoGsbTest extends PHPUnit\Framework\TestCase {

    /**
     * @var PdoGsb
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new PdoGsb;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers PdoGsb::__destruct
     * @todo   Implement test__destruct().
     */
    public function test__destruct() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers PdoGsb::getPdoGsb
     * @todo   Implement testGetPdoGsb().
     */
    public function testGetPdoGsb() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers PdoGsb::getInfosVisiteur
     * @todo   Implement testGetInfosVisiteur().
     */
    public function testGetInfosVisiteur() {
        // Remove the following lines when you implement this test.
        $pdo = PdoGsb::getPdoGsb();

        $this->assertEquals(["id" => "1",
            "nom" => "adminV",
            "prenom" => 'admin',
            "mdp" => "$2y$10" . "$" . "nShARmzUlGInDjfL2b4P6" . ".GzqeMNPOOghXmg/GIjWhOeeJLle3vcK",
            0 => "1",
            1 => "adminV",
            2 => 'admin',
            3 => "$2y$10" . "$" . "nShARmzUlGInDjfL2b4P6" . ".GzqeMNPOOghXmg/GIjWhOeeJLle3vcK"],
                $pdo->getInfosVisiteur("adminv", "admin"));
        $this->assertEquals(["id" => "a17",
            "nom" => "Andre",
            "prenom" => 'David',
            "mdp" => "$2y$10" . "$" . "mjtTAWPkBlcABnD8kWmmfuxCDAxpCLRl3gr2NQQvbaoMikKXZxNXO",
            0 => "a17",
            1 => "Andre",
            2 => 'David',
            3 => "$2y$10" . "$" . "mjtTAWPkBlcABnD8kWmmfuxCDAxpCLRl3gr2NQQvbaoMikKXZxNXO"],
                $pdo->getInfosVisiteur("dandre", "oppg5"));
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers PdoGsb::getInfosComptable
     * @todo   Implement testGetInfosComptable().
     */
    public function testGetInfosComptable() {
        $pdo = PdoGsb::getPdoGsb();

        $this->assertEquals(["id" => "1",
            "nom" => "Comptable",
            "prenom" => 'comptable',
            "mdp" => "$2y$10" . "$" . "VGsqPuNhY13IDPY.sp5Ow.RpMZLwJSY8GbARjk.r64ebi0mbOq0mS",
            0 => "1",
            1 => "Comptable",
            2 => 'comptable',
            3 => "$2y$10" . "$" . "VGsqPuNhY13IDPY.sp5Ow.RpMZLwJSY8GbARjk.r64ebi0mbOq0mS"],
                $pdo->getInfosComptable("adminc", "admin"));
    }

    /**
     * @covers PdoGsb::getNomPrenomVisiteur
     * @todo   Implement testGetNomPrenomVisiteur().
     */
    public function testGetNomPrenomVisiteur() {
        $pdo = PdoGsb::getPdoGsb();

        $this->assertEquals([0 => [
                0 => "adminV",
                1 => 'admin',
                "nom" => "adminV",
                "prenom" => 'admin']
                ],
                $pdo->getNomPrenomVisiteur(1));

        $this->assertEquals([0 => [
                0 => "Bunisset",
                1 => 'Francis',
                "nom" => "Bunisset",
                "prenom" => 'Francis']
                ],
                $pdo->getNomPrenomVisiteur('b19'));
    }

    /**
     * @covers PdoGsb::getListeVisiteur
     * @todo   Implement testGetListeVisiteur().
     */
    public function testGetListeVisiteur() {
        $pdo = PdoGsb::getPdoGsb();
        $this->assertEquals(28, count($pdo->getListeVisiteur()));
    }

    /**
     * @covers PdoGsb::getLstVisiteurParEtatFiche
     * @todo   Implement testGetLstVisiteurParEtatFiche().
     */
    public function testGetLstVisiteurParEtatFiche() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers PdoGsb::getInfosFicheParEtat
     * @todo   Implement testGetInfosFicheParEtat().
     */
    public function testGetInfosFicheParEtat() {
        $pdo = PdoGsb::getPdoGsb();
        $this->assertEquals(64, count($pdo->getInfosFicheParEtat('RB')));
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers PdoGsb::getInfosFicheParEtat
     * @todo   Implement testGetInfosFicheParEtat($etat)().
     */
    public function testGetLesFraisHorsForfait() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers PdoGsb::getNbjustificatifs
     * @todo   Implement testGetNbjustificatifs().
     */
    public function testGetNbjustificatifs() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers PdoGsb::getLesFraisForfait
     * @todo   Implement testGetLesFraisForfait().
     */
    public function testGetLesFraisForfait() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers PdoGsb::getLesIdFrais
     * @todo   Implement testGetLesIdFrais().
     */
    public function testGetLesIdFrais() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers PdoGsb::majFraisForfait
     * @todo   Implement testMajFraisForfait().
     */
    public function testMajFraisForfait() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers PdoGsb::majNbJustificatifs
     * @todo   Implement testMajNbJustificatifs().
     */
    public function testMajNbJustificatifs() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers PdoGsb::estPremierFraisMois
     * @todo   Implement testEstPremierFraisMois().
     */
    public function testEstPremierFraisMois() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers PdoGsb::dernierMoisSaisi
     * @todo   Implement testDernierMoisSaisi().
     */
    public function testDernierMoisSaisi() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers PdoGsb::creeNouvellesLignesFrais
     * @todo   Implement testCreeNouvellesLignesFrais().
     */
    public function testCreeNouvellesLignesFrais() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers PdoGsb::creeNouveauFraisHorsForfait
     * @todo   Implement testCreeNouveauFraisHorsForfait().
     */
    public function testCreeNouveauFraisHorsForfait() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers PdoGsb::supprimerFraisHorsForfait
     * @todo   Implement testSupprimerFraisHorsForfait().
     */
    public function testSupprimerFraisHorsForfait() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers PdoGsb::getLesMoisDisponibles
     * @todo   Implement testGetLesMoisDisponibles().
     */
    public function testGetLesMoisDisponibles() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers PdoGsb::getLesInfosFicheFrais
     * @todo   Implement testGetLesInfosFicheFrais().
     */
    public function testGetLesInfosFicheFrais() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers PdoGsb::majEtatFicheFrais
     * @todo   Implement testMajEtatFicheFrais().
     */
    public function testMajEtatFicheFrais() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

}
