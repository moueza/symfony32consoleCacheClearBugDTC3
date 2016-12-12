<?php

namespace tests\OC\UserBundle\Entity;

use OC\UserBundle\Entity\Echeance;

//use ..\OC\UserBundle\Entity  ;
//..\\src\OC\UserBundle\Entity;
class EcheanceTest extends \PHPUnit_Framework_TestCase {

    public function testnthecheanceInscritsToDateV1() {
        $eche = new Echeance();
        $result = $eche->nthecheanceNbintervalsToDate(1, 1);
        // assert that your calculator added the numbers correctly!
        $dateMust = $eche->getTo();
        $this->assertEquals($dateMust, $result);
    }

    public function testnthecheanceInscritsToDateV2() {
        $eche = new Echeance();
        $result = $eche->nthecheanceNbintervalsToDate(1, 2);
        // assert that your calculator added the numbers correctly!
        $dateMust = $eche->getFrom()->add(new \DateInterval("P77D"));
        $this->assertEquals($dateMust, $result);
    }

    //////////////////////

    public function testGetDeltaDays2V1() {
        $eche = new Echeance();
        $from = new \DateTime('2016-12-11');
        //$to = new \DateTime('2017-05-14');
        $to = new \DateTime('2016-12-11');

        $result = $eche->getDeltaDays2($from, $to);

        // assert that your calculator added the numbers correctly!
        $dateMust = 0;
        $this->assertEquals($dateMust, $result);
    }

    public function testGetDeltaDays2V2() {
        $eche = new Echeance();
        $from = new \DateTime('2016-12-11');
        //$to = new \DateTime('2017-05-14');
        //$to =   
        $d2 = new \DateTime('2016-12-11');
        $d2->add(new \DateInterval('P' . 3 . 'D'));
        // new \DateTime('   DateTime('today +1 year   ');

        $result = $eche->getDeltaDays2($from, $d2);

        // assert that your calculator added the numbers correctly!
        $dateMust = 3;
        $this->assertEquals($dateMust, $result);
    }
    
     public function testnumberecheancesToDate4N(){
          $eche = new Echeance();
        $from = new \DateTime('2016-12-11');
        //$to = new \DateTime('2017-05-14');
        //$to =   
        $d2 = new \DateTime('2016-12-16');
       // $d2->add(new \DateInterval('P' . 3 . 'D'));
        // new \DateTime('   DateTime('today +1 year   ');

        $result = $eche->numberecheancesToDate4N(2,5,$from,$d2);

        // assert that your calculator added the numbers correctly!
        $dateMust =  new \DateTime('2016-12-13');
        $this->assertEquals($dateMust, $result);  
     }
     
     }
