<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
         $dimension = NULL;
         return view('home', ["dimension"=>$dimension]);
    }

    public function BuscarPalabra($id)
    {
        $dimension = $id;
        $contador  = 0;
        $comparar  = array("O", "I", "E");

        $matriz3 =  array(
                    array("O", "I", "E"),
                    array("I", "I", "X"),
                    array("E", "X", "E") 
                    );
        
         $matriz1 = array("E", "I", "O", "I", "E",
                          "I", "O", "E", "I", "O"
                          );

         $matriz5 = array(
                    array("E", "A", "E", "A", "E"),
                    array("A", "I", "I", "I", "A"),
                    array("E", "I", "O", "I", "E"),
                    array("A", "I", "I", "I", "A"),
                    array("E", "A", "E", "A", "E")
                    );
         $matriz7 = array(
                    array("O", "X"),
                    array("I", "O"),
                    array("E", "X"),
                    array("I", "I"),
                    array("O", "X"), 
                    array("I", "E"),
                    array("E", "X")
                    );
         
         if($dimension == 3){
                foreach ($matriz3 as $value1) {
                    foreach ($value1 as $value2) {
                        foreach ($comparar as $value3) {
                            if ($value3 == $value2){
                            $contador=$contador+1;
                            }
                        }
                    }
                }


         }

         elseif ($dimension == 1) {
             foreach ($matriz1 as $value1) {
                    foreach ($comparar as $value2) {
                        if ($value1 == $value2){
                            $contador=$contador+1;
                            }
                    }
                }
         }

         elseif ($dimension == 5) {
             foreach ($matriz5 as $value1) {
                    foreach ($value1 as $value2) {
                        foreach ($comparar as $value3) {
                            if ($value3 == $value2){
                            $contador=$contador+1;
                            }
                        }
                    }
                }
         }

         elseif ($dimension == 7) {
             foreach ($matriz7 as $value1) {
                    foreach ($value1 as $value2) {
                        foreach ($comparar as $value3) {
                            if ($value3 == $value2){
                            $contador=$contador+1;
                            }
                        }
                    }
                }
         }

        return view('show', ["dimension"=>$dimension, "contador"=>$contador] );

    }


}
