<?php

namespace App\Http\Controllers;

use Auth, Exception, View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class RoomController extends Controller
{
    

    public function index()
    {  
            return view('/home/index');
    }

    protected function getMatrix(Request $request)
    {
        $response = [
            'status'    => 'ok',
            'message'   => 'exito',
            'data'      => []
        ];
        $file          = Storage::disk('local')->get($request->file('file')->store('avatars'));
        $matrixContent = $this->matrixValidate($file);
        
        if(is_array($matrixContent)){
            $data['lights'] = $matrixContent;
            $view           = View::make('home.partials.index', $data);
            $data['lights'] = $this->getLightBulbs($matrixContent);
            $viewLight      = View::make('home.partials.index', $data);

            $response['data']['room_html']       = $view->render();
            $response['data']['room_lights_html'] = $viewLight->render();
        }else{
            $response = [
                'status'    => 'error',
                'message'   => 'Hay un error en la matriz, pueden ser letras, matriz no proporcional o espacios extras, intente de nuevo.',

            ];
            return response()->json($response);
        }
        
        return response()->json($response);
    }

    protected function matrixValidate($file){
        $data    = explode("\r\n", $file);
        $matrix  = [];

        foreach ($data as $valRow) {
            $row = str_split(str_replace(',', ' ',$valRow));
            $tempArray = [];
            foreach($row as $val){
                if($val !== " " ){
                    if($val == "0" || $val == "1"){
                        $tempArray[] = $val;
                    }else{
                        return -1;
                    }
                }   
            }
            $matrix[] = $tempArray;
        }

        $rows        = count($matrix);
        $nCols       = 0;
        $errorLenght = 0;
        
        for($i = 0; $i < $rows; $i++){
            if($i == 0){
                $nCols = count($matrix[$i]);
            }
        
            if($nCols < count($matrix[$i]) || $nCols > count($matrix[$i]) ){
                $errorLenght++; 
            }  
        }
        
        if($errorLenght > 0)
            return -1;

        return $matrix;
    }

    protected function getLightBulbs($matrix)
    {

        for ($i = 0; $i < count($matrix); $i++) {
            for ($j = 0; $j < count($matrix[0]); $j++) {

                if ($matrix[$i][$j] == 0) {
                    $matrix[$i][$j] = "LightBulb";
                    for ($k = $j + 1; $k < count($matrix[0]); $k++) {
                        if ($matrix[$i][$k] == 0) {
                            $matrix[$i][$k] = 2;
                        }
                        if ($matrix[$i][$k] == 1) {
                            break;
                        }
                    }
                    for ($k = $i + 1; $k < count($matrix); $k++) {
                        if ($matrix[$k][$j] == 0) {
                            $matrix[$k][$j] = 2;
                        }
                        if ($matrix[$k][$j] == 1) {
                            break;
                        }
                    }
                }
            }
        }

        return $matrix;
    }
}

