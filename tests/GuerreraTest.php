<?php

use PHPUnit\Framework\TestCase;
include './src/Guerrera.php';

class GuerreraTest extends TestCase {

    public function testHeridaLeveVive() {
       
        #Se probará el efecto de una herida leve a una guerrera con puntos de vida suficientes para sobrevivir al ataque
        #Se tendrá que probar que la vida es mayor que 0 y además que su situación es viva
        $objeto = new Guerrera('Juanita');
        $objeto->heridaLeve();
        $this->assertEquals(90, $objeto->getVida());
        $this->assertEquals('viva', $objeto->getSituacion());
    }

    public function testHeridaLeveMuere() {
       
        #Se probará el efecto de una herida leve a una guerrera con puntos de vida insuficientes para sobrevivir al ataque
        #Se tendrá que probar que la vida es menor que 0 y además que su situación es muerta

    }

    public function testHeridaGrave() {
       
        #Se probará el efecto de una herida grave a una guerrera con una situación de viva.
        #Se tendrá que probar que la vida es 0 y además que su situación es limbo

    }
    
    public function testPocimaRevive() {
       
        #Se probará el efecto de administrar una pócima a una Enana muerta pero con una vida mayor que -10 y menor que 0
        #Se tendrá que probar que la vida es mayor que 0 y que su situación ha cambiado a viva

    }

    public function testPocimaExtraLimbo() {
       
        #Se probará el efecto de administrar una pócima Extra a una Enana en el limbo.
        #Se tendrá que probar que la vida es 50 y la situación ha cambiado a viva.

    }
}


?>