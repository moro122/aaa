<?php

class Controller_Tweet extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Tweet &raquo; Index';
		$this->template->content = View::forge('tweet/index', $data);
	}

	public function action_about()
	{
		$this->template->title = 'お店のご紹介';
		$data["title"]= $this->template->title;
		$this->template->content = View::forge('tweet/about',$data);
	}
		public function action_order()
	{
		$this->template->title = 'オーダーキッド家具';
		$data["title"]= $this->template->title;
		$this->template->content = View::forge('tweet/order',$data);
	}

	public function action_tyumon()
	{
		$this->template->title = '注文家具';
		$data["title"]= $this->template->title;
		$this->template->content = View::forge('tweet/tyumon',$data);
	}

		public function action_dekki()
	{
		$this->template->title = 'ウッドデッキ';
		$data["title"]= $this->template->title;
		$this->template->content = View::forge('tweet/dekki',$data);
	}

	public function action_wood()
	{
		$this->template->title = '木工教室';
		$data["title"]= $this->template->title;
		$this->template->content = View::forge('tweet/wood',$data);
	}
		
		public function action_Contact()
	{
		$this->template->title = 'お問い合わせ';
		$data["title"]= $this->template->title;
		$this->template->content = View::forge('otoiawase/create',$data);
	}

}
