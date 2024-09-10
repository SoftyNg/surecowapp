<?php

class App extends Trongate{


    public function login(): void {
        $data['view_module'] = 'App';
        $data['view_file'] = 'login';
        $this->template('surecow_admin', $data);
        }
    
    public function register(): void {
        $data['view_module'] = 'App';
        $data['view_file'] = 'register';
        $this->template('surecow_admin', $data);
        }
    
    }