<?php

namespace Alishov\Portmanat;

use Illuminate\Http\Request;
use Alishov\Portmanat\Model\Pmdata;
use Illuminate\Support\Facades\Log;
use Alishov\Portmanat\Model\Payment;

/**
 * Description of Portmanat
 *
 * @author Emin
 */
class Portmanat {
    
    private $p_id;
    private $s_id;
    private $o_id;
    private $transaction;
    private $amount;
    private $hash;
    private $test;
    private $method;
    private $key;
    
    public function __construct() {
        $this->p_id = request("p_id",NULL);
        $this->s_id = request("s_id",NULL);
        $this->o_id = request("o_id",NULL);
        $this->transaction = request("transaction",NULL);
        $this->amount = request("amount",NULL);
        $this->hash = request("hash",NULL);
        $this->test = request("test",NULL);
        $this->method = request("method",NULL);
        $this->key = config("portmanat.key");
    }
    
    public function pmdata() {
        return new Pmdata($this->p_id, $this->s_id, $this->o_id, $this->transaction, $this->amount, $this->hash, $this->test, $this->method);
    }
    
    public function check($arr) {
        $hash = strtoupper(md5($this->p_id.$this->s_id.$this->o_id.$this->transaction.$this->key));
        if($hash != $this->hash){
            echo 0;exit;
        }
        
        if($arr['test'] === FALSE){
            if($this->test() == TRUE){
                echo 1;exit;
            }
        }
        
        if($arr['file_log'] ===TRUE){
            Log::info($this->pmdata());
        }
        
        if($arr['db_log'] ===TRUE){
            Payment::insert($this->pmdata()->insert());
        }
        
    }
    
    public function test() {
        return ($this->test == 1) ? TRUE : FALSE;
    }
    
    
    
}
