<?php

class Contact extends CI_Controller
{
    public function index()
    {
        $data = [
            'active' => 'contact'
        ];
        $this->layout->load('frontend/index', 'frontend/menu/contact-view', $data);
    }
}
