<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrianguloController extends Controller
{
    public function index()
    {
        $triangle = [
//            Resultado = 26
            [6],[3,5],[9,7,1],[4,6,8,4]

//            Resultado = 18
//            [6], [3, 5], [9, 7, 1]

//            Resultado = 11
//            [6],[3,5]

//            Resultado = 18
//            [6],[3,5],[9,1,3],[4,6,1,4]

//            Resultado = 20
//            [6],[3,5],[9,1,3],[4,6,6,4]

//            Resultado = 4
//            [1],[1,1],[1,1,1],[1,1,1,1]

//            Resultado = 3
//            [1],[1,1],[1,1,1]
        ];

        $value = $triangle[0][0];
        $valuePosition = 0;

        for ($l = 1; $l < sizeof($triangle); $l++) {
            $firstValue = $triangle[$l][$valuePosition];
            $secondValue = $triangle[$l][$valuePosition + 1];

            ($firstValue > $secondValue) ? $value += $firstValue : $value += $secondValue AND $valuePosition += 1;
        }
        echo $value;
    }
}
