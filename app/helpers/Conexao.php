<?php


use Illuminate\Support\Facades\DB;


if(!function_exists("testeConexao")){
function testeConexao(){
    try {
        DB::connection()->getPdo();
    } catch (\Exception $e) {
       return abort("404");
    }
}
}
