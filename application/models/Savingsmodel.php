<?php
class Savingsmodel extends CI_Model{
    function __construct() {
		// Call the Model constructor
      parent::__construct();
      $this->load->database();
    }
    
    function index(){
        
    }
    function showSavingsList(){

    }

    function saveMoney(){
        $this->pinmoney=$this->input->post('pinmoney');
        // $this->wBalance=$this->input->post('wBalance');
        $this->bid=$this->session->userdata('AdminBid');
        $this->cid=$this->session->userdata('AdminId');
        $this->pid=$this->session->userdata('AdminPtn');
        $this->nidx=$this->session->userdata('Needs');
        // $this->cwalletBalance=$this->wBalance-$this->pinmoney;

/** 여기가 뱌껴야한다. 저금을 하는 기능이니까 sTransaction에 추가를 먼저 한다. 그리고 거기 있는 것을 sum(amount)해서 update해버린다.(-1000가능) */
        // 지갑에 있는 돈 빼기
        
        //child_walletBal - 
        $this->sQuery1="UPDATE tbl_user SET walletbalance = walletbalance-'".$this->pinmoney."' where userid='".$this->cid."'";
        $this->sQuery2="UPDATE tbl_piggybank SET bbalance = bbalance+'".$this->pinmoney."' where bid='".$this->bid."' and nidx='".$this->nidx."'";
        $this->sQuery3="INSERT INTO tbl_transactions(cid,pid,bid,amount,types,nidx) values ('".$this->cid."', '".$this->pid."', '".$this->bid."', '".$this->pinmoney."', 1, '".$this->nidx."')";
        // $this->sQuery1="UPDATE tbl_user set walletbalance='".$this->cwalletBalance."' where userid='".$this->cid."'";
        // $this->sQuery2="INSERT INTO tbl_piggybank(bid,bbalance) values('".$this->bid."', '".$this->pinmoney."')";
        // $this->sQuery3="INSERT INTO tbl_transactions(tfrom,tto,amount) values('".$this->cid."', '".$this->bid."', '".$this->pinmoney."')";
        // $this->db->trans_start();
        // if($this->cwalletBalance >= 0){
          $this->db->query($this->sQuery1);
          $this->db->query($this->sQuery2);
          $this->db->query($this->sQuery3);
        // }
        // $this->db->trans_complete();
    
        redirect('/Main2/savings','refresh');
    }
    

}