<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FinantialClass
 *
 * @author ubaldeitor
 */
namespace App\Library;


class FinantialClass {
    //put your code here
    private $year_interest; //interés anual
    private $periods;      //número de pagos
    private $loan_mount;   // monto del préstamo
    private $iva;        // iva
    private $rate_interest;    //interés del periodo sin iva
    private $rate_interest_iva; //interés del periodo más iva
    
    
    public function __construct($year_interest, $periods, $loan_mount, $iva) {
        $this->year_interest=$year_interest;
        $this->periods=$periods;
        $this->loan_mount=$loan_mount;
        $this->iva=$iva;
        $this->rate_interest=$year_interest/24;
        $this->rate_interest_iva=($year_interest/24)*(1+($iva));
        
    }
    
    
    function getLoan_mount() {
        return $this->loan_mount;
    }

    function setLoan_mount($loan_mount) {
        $this->loan_mount = $loan_mount;
    }
    
    function getYear_interest() {
        return $this->year_interest;
    }

    function getIva() {
        return $this->iva;
    }

    function getRate_interest() {
        return $this->rate_interest;
    }

    function getRate_interest_iva() {
        return $this->rate_interest_iva;
    }

    function setYear_interest($year_interest) {
        $this->year_interest = $year_interest;
    }

    function setIva($iva) {
        $this->iva = $iva;
    }

    function setRate_interest($rate_interest) {
        $this->rate_interest = $rate_interest;
    }

    function setRate_interest_iva($rate_interest_iva) {
        $this->rate_interest_iva = $rate_interest_iva;
    }

        
    public function pmt(){
        
        $pmt=(($this->rate_interest_iva*$this->loan_mount)/(1-pow((1+$this->rate_interest_iva),($this->periods*-1))));
        return $pmt;
    }
    
    public function interes_insoluto(){
        $int_ins=($this->rate_interest * $this->loan_mount);
        return $int_ins;
    }
    
    public function iva_insoluto($int_ins){
        $iva_ins=($int_ins * $this->iva);
        return $iva_ins;
    }
    
    public function amortization($pmt,$int_ins,$iva_ins){
        $amortization=  ($pmt-  $int_ins-  $iva_ins);
        return $amortization;
    }
    
    function getPeriods() {
        return $this->periods;
    }

    function setPeriods($periods) {
        $this->periods = $periods;
    }
    
    static final function create_amorti($finantialClass){        
        $amortization_table=array();
        $payment=$finantialClass->pmt();
        for($i=1;$i<=$finantialClass->getPeriods();$i++){
            $int_ins=$finantialClass->interes_insoluto();
            $iva_ins=$finantialClass->iva_insoluto($int_ins);
            $payment_without_iva=$payment-$iva_ins;
            $amorti=$finantialClass->amortization($payment, $int_ins, $iva_ins);
            array_push($amortization_table,array(
                            'num'=>$i,
                            'saldo'=>$finantialClass->getLoan_mount(),
                            'amortizacion'=>$amorti,
                            'interes_insoluto'=>$int_ins,
                            'iva_insoluto'=>$iva_ins,
                            'pago'=>$payment,
                            'pago_sin_iva'=>$payment_without_iva));
            $new_mount=($finantialClass->getLoan_mount()-$amorti);
            $finantialClass->setLoan_mount($new_mount);
            
        //print_r($finantialClass->getLoan_mount());
        }
        return $amortization_table;
        }

}        
    
