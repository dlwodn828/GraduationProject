<?php
class Needsmodel extends CI_Model{
    function __construct() {
		// Call the Model constructor
		parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url'));
    }
    
    function index(){
        
    }

    function showNeedsList(){
        // 현재 등록된 needs 
        $this->needs=$this->session->userdata('Needs');

        if(!$this->session->userdata('AdminType')){ //아이일 때
            $this->writerid=$this->session->userdata('AdminId');
        }else{ // 부모일 때
            $this->writerid=$this->session->userdata('AdminPtn');
        }
        $this->bid=$this->session->userdata('AdminBid');
        
        $this->sQuery="SELECT distinct * from tbl_needs where writerid='".$this->writerid."'";
        $this->needsList=$this->db->query($this->sQuery)->result_array();
        $needsList['needsList']=$this->needsList;

        $this->sQuery="SELECT price from tbl_needs where writerid='".$this->writerid."'";
        $this->needsPrice=$this->db->query($this->sQuery)->row();
        if($this->needsPrice){
            $this->sQuery="SELECT price as p from tbl_needs where writerid='".$this->writerid."'";
            $this->needsPrice=$this->db->query($this->sQuery)->row()->p;
        }

        $this->sQuery="SELECT walletbalance as wb from tbl_user where userid='".$this->writerid."'";
        $this->wBalance=$this->db->query($this->sQuery)->row()->wb;
        $needsList['wBalance']=$this->wBalance;
        
        //저금통에 있는 돈
        // $this->sQuery="SELECT sum(p.bbalance) as sum01 from tbl_piggybank as p join tbl_needs as n on p.bid=n.bid where p.bid = '".$this->bid."' and p.regdate > n.regdate";
        // $this->pb= $this->db->query($this->sQuery)->row()->sum01;
        // $needsList['bBalance']=$this->pb; // 저금통에 있는 돈
        $this->sQuery="SELECT bbalance as pb from tbl_piggybank where bid='".$this->bid."' and nidx='".$this->needs."'";
        $this->pb=$this->db->query($this->sQuery)->row()->pb;
        $needsList['bBalance']=$this->pb; // 저금통에 있는 돈
        /*
        piggybank대신 sTransaction을 이용한다. (두 테이블의 내용이 일치한다.) -> 아니지, 그냥 피기뱅크에서 값만 가져오면된다.
        그리고 위의 쿼리문을 돌리고 난 후 바로 bBalance를 piggybank에 update하기로한다.
        (즉, wallet과 piggybank는 update를 이용해서 무조건 한 값만 가지고 있고, savingTransaction과 pinmoneyTransaction 이 모든 내역을 가지고 있는것으로!)
         */
        
        if($this->pb==NULL){
            $needsList['bBalance']=0;
        }
        

        $needsList['isDone']=FALSE;
        if($this->needsPrice==$this->pb){
            $needsList['isDone']=TRUE;
        }else{
            $neeedsList['isDone']=FALSE;
        }
        
        return $needsList;        
    }


    // Needs 추가(아이만 호출 가능)
    function addNeeds(){
        
        // 새로운 Needs 등록
        $this->contents=$this->input->post('contents');
        $this->price=$this->input->post('price');
        $this->writerid=$this->session->userdata('AdminId');
        $this->bid=$this->session->userdata('AdminBid');
        $this->sQuery="INSERT into tbl_needs(contents, price, writerid, bid) values ('".$this->contents."', '".$this->price."', '".$this->writerid."', '".$this->bid."')";
        $this->db->query($this->sQuery);
        
        // 추가된 Needs를 세션에 추가
        $this->sQuery="SELECT nidx from tbl_needs where writerid='".$this->writerid."'";
        $this->nidx=$this->db->query($this->sQuery)->row()->nidx;
        $newdata=array('Needs'=>$this->nidx);
        $this->session->set_userdata($newdata);
        $this->bQuery="UPDATE tbl_piggybank SET nidx='".$this->nidx."' where bid='".$this->bid."'";
        $this->db->query($this->bQuery);
        redirect('/Main2/needs', 'refresh');
    
    }

    function deleteNeeds(){
        $this->nidx=$this->input->post('nidx');
        $this->sQuery="DELETE from tbl_needs where nidx='".$this->nidx."'";
        $this->db->query($this->sQuery);
        //미션 지우기

        //pinmoneyT 지우기 
        redirect('/Main2/needs','refresh');
    }
}