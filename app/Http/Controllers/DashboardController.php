<?php

namespace App\Http\Controllers;

use App\Animal;
use App\Usuario;
use DateTime;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function getAllUserMonths(){
    $usuario_meses_array = array();
    $datas_usuarios = Usuario::orderBy('created_at', 'ASC')->pluck('created_at');
    $datas_usuarios = json_decode($datas_usuarios);
    if (!empty($datas_usuarios)) {
        foreach ($datas_usuarios as $unf_datas) {
            $datas = new DateTime($unf_datas);
            $mes_numero = $datas->format('m');
            $mes_nome = $datas->format('M');
            $usuario_meses_array[$mes_numero] = $mes_nome;
        }
        return ($usuario_meses_array);
    }
}

    function getMonthlyUserCount($mes)
    {
        $monthly_user_count = Usuario::whereMonth('created_at', $mes)->get()->count();
        return $monthly_user_count;
    }

    function getAllAnimalMonths(){
        $animal_meses_array = array();
        $datas_animais = Animal::orderBy('created_at', 'ASC')->pluck('created_at');
        $datas_animais = json_decode($datas_animais);
        if (!empty($datas_animais)) {
            foreach ($datas_animais as $unf_datas) {
                $datas = new DateTime($unf_datas);
                $mes_numero = $datas->format('m');
                $mes_nome = $datas->format('M');
                $animal_meses_array[$mes_numero] = $mes_nome;
            }
            return ($animal_meses_array);
        }
    }

    function getMonthlyAnimalCount($mes)
    {
        $monthly_animal_count = Animal::whereMonth('created_at', $mes)->get()->count();
        return $monthly_animal_count;
    }


    function getMonthlyAllData()
    {
        //PEGANDO DADOS DOS USUARIOS

        $monthly_user_count_array = array();
        $usuario_meses_array = $this->getAllUserMonths();
        $meses_nome__usuario_array = array();
        if (!empty($usuario_meses_array)) {
            foreach ($usuario_meses_array as $mes_numero => $mes_nome) {
                $monthly_user_count = $this->getMonthlyUserCount($mes_numero);
                array_push($monthly_user_count_array, $monthly_user_count);
                array_push($meses_nome__usuario_array, $mes_nome);
            }
        }

        //PEGANDO DADOS DOS ANIMAIS

        $monthly_animal_count_array = array();
        $animal_meses_array = $this->getAllAnimalMonths();
        $meses_nome_animal_array = array();
        if (!empty($animal_meses_array)) {
            foreach ($animal_meses_array as $mes_numero => $mes_nome) {
                $monthly_animal_count = $this->getMonthlyAnimalCount($mes_numero);
                array_push($monthly_animal_count_array, $monthly_animal_count);
                array_push($meses_nome_animal_array, $mes_nome);
            }
        }

        $monthly_data_array = array(
            'animais_vacinados' => Animal::where('vacinacao','=','sim')->get()->count(),
            'animais_nao_vacinados' => Animal::where('vacinacao','=','nao')->get()->count(),
            'animais_nao_sei' => Animal::where('vacinacao','=','nao_sei')->get()->count(),
            'animais_castrados' => Animal::where('catracao','=','nao')->get()->count(),
            'animais_nao_castrados' => Animal::where('catracao','=','sim')->get()->count(),
            'animais_nao_sei_castrados' => Animal::where('catracao','=','nao_sei')->get()->count(),
            'animais_machos' => Animal::where('sexo','=','macho')->get()->count(),
            'animais_femeas' => Animal::where('sexo','=','femea')->get()->count(),
            'animais_pretos' => Animal::where('cor','=','preto')->get()->count(),
            'animais_brancos' => Animal::where('cor','=','branco')->get()->count(),
            'animais_dourados' => Animal::where('cor','=','dourado')->get()->count(),
            'animais_creme' => Animal::where('cor','=','creme')->get()->count(),
            'animais_amarelo' => Animal::where('cor','=','amarelo')->get()->count(),
            'animais_chocolate' => Animal::where('cor','=','chocolate')->get()->count(),
            'animais_mestico' => Animal::where('cor','=','mestico')->get()->count(),
            'meses_usuarios' => $meses_nome__usuario_array,
            'meses_animal' => $meses_nome_animal_array,
            'usuarios' => $monthly_user_count_array,
            'animais' => $monthly_animal_count_array,
            'total_usuarios' => Usuario::count(),
            'total_animais' => Animal::count(),

        );
        return view('/dashboard')->with(['dados' => $monthly_data_array]);
        }


}
