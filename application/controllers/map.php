<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Map extends CI_Controller {
		/*显示后台首页 如果已经绑定显示信息*/
		public function index () {
			//需要数据格式
		    $position = array(
		    				array(
		    					'title' => '大上海',
					    		'content'=>'大上海美食城',
					    		'point'=>'113.675304|34.761708',
					    		'isOpen'=>0,
					    		'icon'=> array(
					    				'w'=>23,
					    				'h'=>25,
					    				'l'=>46,
					    				't'=>21,
					    				'x'=>9,
					    				'lb'=>12
					    			)
		    				),
		    				array(
		    					'title' => '银座时代',
					    		'content'=>'银座时代广场A座',
					    		'point'=>'113.676436|34.763888',
					    		'isOpen'=>0,
					    		'icon'=> array(
					    				'w'=>23,
					    				'h'=>25,
					    				'l'=>46,
					    				't'=>21,
					    				'x'=>9,
					    				'lb'=>12
					    			)
		    				)
		    			);
		    $json = json_encode($position);
		   	$data['position'] = $json;
			$this->load->view('map',$data);
		}
	}