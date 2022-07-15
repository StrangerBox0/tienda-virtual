<?php
class Principal extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    public function index()
    {
        
    }
    public function about()
    {
        $data['title'] = 'Nuestro equipo';
        $this->views->getView('principal', "about", $data);
    }
    public function shop()
    {
        $data['title'] = 'Nuestros productos';
        $this->views->getView('principal', "shop", $data);
    }
    public function detail($id_producto)
    {
        $data['title'] = '------------';
        $this->views->getView('principal', "detail", $data);
    }
    public function contactos()
    {
        $data['title'] = 'Nuestros Contactos';
        $this->views->getView('principal', "contact", $data);
    }
}