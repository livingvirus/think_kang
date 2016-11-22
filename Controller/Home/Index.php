<?php
namespace Controller\Home;

class Index {
	public function index() {
		$Index = new \View\Home\Index;
		return $Index->index();
	}
	public function test() {

	}
}
