<?php

class Home extends Trongate{

public function index(): void {
	$data['view_module'] = 'home';
	$data['view_file'] = 'home';
	$this->template('surecow', $data);
	}



}