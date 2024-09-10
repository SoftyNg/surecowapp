<?php

class Home extends Trongate{

public function index(): void {
	$data['view_module'] = 'home';
	$data['view_file'] = 'home';
	$this->template('surecow', $data);
	}


	public function login(): void {
		$data['view_module'] = 'home';
		$data['view_file'] = 'login';
		$this->template('surecow', $data);
		}

		public function register(): void {
			$data['view_module'] = 'home';
			$data['view_file'] = 'register';
			$this->template('surecow', $data);
			}

}