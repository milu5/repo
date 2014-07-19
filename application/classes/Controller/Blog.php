<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Blog extends Controller {

	public function action_index()
	{

		$posts = ORM::factory('Post')->find_all();
		$this->response->body($posts[0]->body);

		/*
		$res = DB::query(Database::SELECT, "SELECT * FROM kohana_posts");
		$res = $res->execute();
		print_r($res->as_array());
		*/
	}
} // End Welcome
