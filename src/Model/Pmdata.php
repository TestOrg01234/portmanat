<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Alishov\Portmanat\Model;

/**
 * Description of Pmdata
 *
 * @author Emin
 */
class Pmdata {
    
    private $p_id;
    private $s_id;
    private $o_id;
    private $transaction;
    private $amount;
    private $hash;
    private $test;
    private $method;
    
    function __construct($p_id, $s_id, $o_id, $transaction, $amount, $hash, $test, $method) {
        $this->p_id = $p_id;
        $this->s_id = $s_id;
        $this->o_id = $o_id;
        $this->transaction = $transaction;
        $this->amount = $amount;
        $this->hash = $hash;
        $this->test = $test;
        $this->method = $method;
    }

    function getPid() {
        return $this->p_id;
    }

    function getSid() {
        return $this->s_id;
    }

    function getOid() {
        return $this->o_id;
    }

    function getTransaction() {
        return $this->transaction;
    }

    function getAmount() {
        return $this->amount;
    }

    function getHash() {
        return $this->hash;
    }

    function getTest() {
        return $this->test;
    }

    function getMethod() {
        return $this->method;
    }

    function setPid($p_id) {
        $this->p_id = $p_id;
    }

    function setSid($s_id) {
        $this->s_id = $s_id;
    }

    function setOid($o_id) {
        $this->o_id = $o_id;
    }

    function setTransaction($transaction) {
        $this->transaction = $transaction;
    }

    function setAmount($amount) {
        $this->amount = $amount;
    }

    function setHash($hash) {
        $this->hash = $hash;
    }

    function setTest($test) {
        $this->test = $test;
    }

    function setMethod($method) {
        $this->method = $method;
    }
    
    
    
    public function insert() {
        return  [
            'p_id' => $this->p_id,
            's_id' => $this->s_id,
            'o_id' => $this->o_id,
            'transaction' => $this->transaction,
            'amount' => $this->amount,
            'test' => $this->test,
            'method' => $this->method
        ];
    }
    
    public function __toString() {
        return json_encode([
            'p_id' => $this->p_id,
            's_id' => $this->s_id,
            'o_id' => $this->o_id,
            'transaction' => $this->transaction,
            'amount' => $this->amount,
            'test' => $this->test,
            'method' => $this->method
        ]);
    }
}
