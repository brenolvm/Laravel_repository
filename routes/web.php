<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $helloWorld = 'Hello World';
    return view('welcome', compact('helloWorld'));
});


Route::get('/model',function(){
    //$products= \App\Product::all(); //select * from products

    //$user = new \App\User();
    //$user= \App\User::find(1);
    //$user->name ='Usuario teste edit';

    //$user->save();
    //return \App\User::where('name', 'Lorenzo Cronin Sr.')->first(); //select from * users where name 'Lorenzo Cronin Sr.'

    //\App\User::all(); - retorna todos os usuários
    //\App\User::find(3) - retorna o usuário com base no id

    //return $products;
    //\App\User::paginate(10);- paginar dados com o laravel
    //return

//    $user= \App\User::create([
//        'name' => 'Taldo Lima',
//        'email' => 'taldolima@taldo.com',
//        'password' => bcrypt('12345678910')
//    ]);


    //Mass Update
    //$user = \App\User::find(83);
    //$user->update([
    //    'name' => 'Atualizando com Mass Update'
    //]); //true or false
//dd($user);
    return \App\User::all();

});
