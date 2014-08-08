<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Index extends CI_Controller {

		/*重载父类中的构造方法*/
		public function __construct() {
			parent::__construct();
		}

		/*显示后台首页 如果已经绑定显示信息*/
		public function index () {
			$this->load->view('index');
		}
	}