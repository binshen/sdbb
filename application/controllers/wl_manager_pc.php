<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 外联经理控制器
 * 
 * @package		app
 * @subpackage	core
 * @category	controller
 * @author		yaobin<645894453@qq.com>
 *
 */
class Wl_manager_pc extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        if(!$this->session->userdata('username')){
        	redirect('login');
        }else{
        	if($this->session->userdata('admin_group') === '1')
	        	redirect('admin_pc');//管理员
            if($this->session->userdata('admin_group') === '2')
	        	redirect('kf_manager_pc');//客服经理
	        if($this->session->userdata('admin_group') === '3')
	        	redirect('user_pc');//业务员
	        if($this->session->userdata('admin_group') === '5')
	        	redirect('md_manager_pc');//门店经理
        }
		$projects = $this->sysconfig_model->get_projects();
		$this->cismarty->assign('admin_group',$this->session->userdata('admin_group'));
        $this->cismarty->assign('projects',$projects);
        $this->cismarty->assign('flag','d');
        $this->cismarty->assign('rel_name',$this->session->userdata('rel_name'));
        $data = $this->user_model->get_wl_data();
    	$this->cismarty->assign('all_count',$data);
    }
    
    //默认首页
    public function index()
    {
        $list = $this->user_model->list_company_wl();
    	$this->cismarty->assign('list',$list);
    	$this->cismarty->display('pc/wl_manager.html');
    }
    
    public function add_company(){
    	$this->cismarty->display('pc/add_company.html');
    }
    
    public function save_company(){
    	$rs = $this->user_model->save_company();
    	if($rs == '1'){
    		$this->show_message('保存成功',site_url('wl_manager_pc/index'),'1');
    	}else if($rs == '-1'){
    		$this->show_message('改账号已经存在！','','1');
    	}else{
    		$this->show_message('保存失败','','1');
    	}
    }
    
    function get_company($id){
    	$data = $this->user_model->get_company($id);
    	echo json_encode($data);
    }
    
    public function huoyue($type = 1){
    	$data = $this->user_model->wl_huoyue($type);
    	$this->cismarty->assign('data',$data);
    	$this->cismarty->display('pc/wl_huoyue.html');
    }
    
    public function main_list(){
    	$data = $this->sysconfig_model->main_list();
    	$this->cismarty->assign('data',$data);
    	$this->cismarty->display('pc/main_list.html');
    }
	
}

/* End of file index.php */
/* Location: ./application/controllers/default.php */