<?php

namespace App\Http\Controllers;

use App\Animal;
use App\Publicacao;
use App\Racas;
use App\Usuario;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    function getAllPublicacaoMonths(){
        $publicacao_meses_array = array();
        $datas_publicacao = Publicacao::orderBy('created_at', 'ASC')->pluck('created_at');
        $datas_publicacao = json_decode($datas_publicacao);
        if (!empty($datas_publicacao)) {
            foreach ($datas_publicacao as $unf_datas) {
                $datas = new DateTime($unf_datas);
                $mes_numero = $datas->format('m');
                $mes_nome = $datas->format('M');
                $usuario_publicacao_array[$mes_numero] = $mes_nome;
            }
            return ($usuario_publicacao_array);
        }
    }

    function getMonthlyPublicacaoCount($mes)
    {
        $monthly_publicacao_count = Publicacao::whereMonth('created_at', $mes)->get()->count();
        return $monthly_publicacao_count;
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

        //PEGANDO DADOS DAS PUBLICAÇÕES

        $monthly_publicacao_count_array = array();
        $publicacao_meses_array = $this->getAllPublicacaoMonths();
        $meses_publicacao_array = array();
        if (!empty($publicacao_meses_array)) {
            foreach ($publicacao_meses_array as $mes_numero => $mes_nome) {
                $monthly_publicacao_count = $this->getMonthlyPublicacaoCount($mes_numero);
                array_push($monthly_publicacao_count_array, $monthly_publicacao_count);
                array_push($meses_publicacao_array, $mes_nome);
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
        $racas=Racas::all();
        $usuario = session()->get("Usuario");
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
            /*----------------------*/
            'animais_pelo_curto' => Animal::where('pelagem','=','curto')->get()->count(),
            'animais_pelo_medio' => Animal::where('pelagem','=','medio')->get()->count(),
            'animais_pelo_longo' => Animal::where('pelagem','=','longo')->get()->count(),
            'animais_pequenos' => Animal::where('porte','=','pequeno')->get()->count(),
            'animais_medios' => Animal::where('porte','=','medio')->get()->count(),
            'animais_grandes' => Animal::where('porte','=','grande')->get()->count(),
            'animais_cachorro' =>DB::table('animals')->join('raca','animals.id_raca','=','raca.id')->join('especies','raca.id_especie','=','especies.id')->where('especies.id','=',1)->get()->count(),
            'animais_gato'=>DB::table('animals')->join('raca','animals.id_raca','=','raca.id')->join('especies','raca.id_especie','=','especies.id')->where('especies.id','=',2)->get()->count(),
            'total_publicacao' => Publicacao::count(),
            'meses_publicacao' => $meses_publicacao_array,
            /*----------------------*/
            'meses_usuarios' => $meses_nome__usuario_array,
            'meses_animal' => $meses_nome_animal_array,
            'usuarios' => $monthly_user_count_array,
            'publicacao' => $monthly_publicacao_count_array,
            'animais' => $monthly_animal_count_array,
            'total_usuarios' => Usuario::count(),
            'total_animais' => Animal::count(),




        );
        return view('/dashboard')->with(['dados' => $monthly_data_array,"racas"=>$racas,"usuario"=>$usuario]);
    }


}
