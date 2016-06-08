<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lucky_Money extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


    /**
     *红包列表
     */
	public function index()
	{
		$this->load->model('lucky_money_model');
		$data['title'] = "红包";
		$data['lucky_money'] = $this->lucky_money_model->getAllLuckyMoney();

		$this->load->view('lucky_money', $data);
	}
    /**
     *添加红包
     */
    public function add()
    {
        $this->load->model('lucky_money_model');
        $data['title'] = "红包";
        $data['lucky_money'] = $this->lucky_money_model->getAllLuckyMoney();

        $this->load->view('lucky_money', $data);
    }

    /**
     *生成红包分配
     */
    public function generate_all()
    {
        $this->load->model('lucky_money_model');
        $data['title'] = "生成红包";
        $data['lucky_money'] = $this->lucky_money_model->getAllLuckyMoney();

        $this->load->view('lucky_money', $data);
    }
    /**
     *生成单个红包分配
     */
    public function generate_one()
    {
        $this->load->model('lucky_money_model');
        $data['title'] = "生成红包";
        $data['lucky_money'] = $this->lucky_money_model->getAllLuckyMoney();

        $this->load->view('lucky_money', $data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */