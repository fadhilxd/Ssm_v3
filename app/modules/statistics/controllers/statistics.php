<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class statistics extends MX_Controller {
	public $tb_users;
	public $tb_tickets;
	public $tb_ticket_messages;
	public $tb_categories;
	public $tb_services;
	public $tb_orders;
	public $tb_news;
	public $api_key;
	public $uid;
	public $columns;

	public function __construct(){
		parent::__construct();
		$this->load->model(get_class($this).'_model', 'model');

		$this->tb_users 		    = USERS;
		$this->tb_categories 		= CATEGORIES;
		$this->tb_services   		= SERVICES;
		$this->tb_orders     		= ORDER;
		$this->tb_tickets     		= TICKETS;
		$this->tb_ticket_messages   = TICKET_MESSAGES;
		$this->tb_news       		= NEWS;

		$this->columns = array(
			"desc"        	 => lang('Description'),
			"type"           => lang("Type"),
			"created"        => lang("Start"),
			"expiry"         => lang("Expiry"),
			"status"         => lang("Status"),
			"action"         => lang('Action'),
		);
		
	}

	public function index(){
		$data = array(
			"module"         => get_class($this),
			"data_log"       => $this->model->get_data_logs(),
		);
		$this->template->build("index", $data);
	}

	public function ajax_notification($ids = ""){
		set_cookie("news_annoucement", "clicked", 21600);
		$news = $this->model->get_news_by_ajax();
		$data = array(
			"module"     => get_class($this),
			"news"       => $news
		);
		$this->load->view("ajax_news", $data);
	}

}



