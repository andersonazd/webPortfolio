<?php

namespace App\Http\Controllers;

use App\Mail\contactoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;

class PaginaPrincipalController extends Controller
{
        public function index(){

            return Inertia::render('Principal/Inicio');
            
        }

        public function LandingPage(){

            return Inertia::render('Principal/Index');
            
        }        
        
        public function Proyectos(){

            return Inertia::render('Principal/Proyectos');
            
        }

        public function quienSoy(){

            return Inertia::render('Principal/QuienSoy');
            
        }

        public function contacto(){
            
            return Inertia::render('Principal/Contacto');

        }

        public function enviarMensaje(Request $request){
                    
            $data = ['name' => $request->name,
            'email' => $request->email,
            'informacion' => $request->informacion,];
            
            Mail::to('aatehortua929@gmail.com')->send(new contactoMail($data));
            
        }
}
