<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lucky_Money extends CI_Controller {

    /**
     *红包列表
     */
	public function index()
	{
		$this->load->model('LuckyMoney');
		$data['title'] = "红包";
		$data['all_lucky_money'] = $this->LuckyMoney->find();

		$this->load->view('lucky_money/list', $data);
	}
    /**
     *添加红包
     */
    public function add()
    {
        $data['total_amount'] = $_POST['total_amount'];
        $data['quantity'] = $_POST['quantity'];
        $data2= $_POST['one_amount'];
          $this->db->insert('lucky_money', $data);
        redirect('lucky_money/index');
    }

    /**
     *查看红包
     */
    public function show($id=null)
    {
        $this->load->model('LuckyMoney');
        $this->load->model('LuckyMoneyPackage');
        $data['title'] = "查看红包";
        $data['lucky_money'] = $this->LuckyMoney->find_by_id($id);
        $data['lucky_money_package'] = $this->LuckyMoneyPackage->find_by_fk($id);
        $data['lucky_money_package_count'] = $this->LuckyMoneyPackage->count($id);
        $data['lucky_money_package_count_amount'] = $this->LuckyMoneyPackage->count_amount($id);
        $this->load->view('lucky_money/single', $data);
    }
    /**
     *领取红包
     */
    public function receive($id=null)
    {
        $this->load->model('LuckyMoney');
        $this->load->model('LuckyMoneyPackage');
        $lucky_money= $this->LuckyMoney->find_by_id($id);

        $lucky_money_package_count = $this->LuckyMoneyPackage->count($id);
        $lucky_money_package_count_amount = $this->LuckyMoneyPackage->count_amount($id);

        $total=$lucky_money->total_amount - $lucky_money_package_count_amount;  //余额
        $num=$lucky_money->quantity - $lucky_money_package_count;  //剩余次数
        $min=0.01;

        if ($num>1){
            $safe_total=($total-($num)*$min)/($num);
            $money=mt_rand($min*100,$safe_total*100)/100;
            $data['lucky_money_id']= $id;
            $data['amount']= $money;
            $data['uid']=1 ;
            $this->db->insert('lucky_money_package', $data);
        } elseif ($num ==1){
            $money=$total;
            $data['lucky_money_id']= $id;
            $data['amount']= $money;
            $data['uid']=1 ;
            $this->db->insert('lucky_money_package', $data);
        }

        redirect('lucky_money/show/'.$id);
    }
}

