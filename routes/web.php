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

    //como eu faria para pegar a loja de um usuário

    //$user = \App\User::find(4);
    //dd($user->store());
    //dd($user->store()->count()); //o objeto único (store) se for collection de dados (objetos)

    //Pegar os produtos de uma loja

   // $loja = \App\Store::find(1);
    //dd($loja->products()); //$loja->products()->where('id',1)->get();

    //pegar as lojas de uma categoria de uma loja?
  //  $categoria=\App\Category::find(1);
   // $categoria->products;


    //Criar uma loja para um usuário
    //$user = \App\User::find(10);
    //$store = $user->store()->create([
        //'name'=>'Loja Teste',
        //'description'=>'Loja Teste de produtos de informática',
        //'mobile_phone'=>'(98)-98205-5555 ',
        //'phone'=>'3246-cala-a-boca-e-nao-chateia',
      //  'slug'=>'Loja-teste'
    //]);

    //dd($store);

    //Criar um produto para uma loja
    //$store = \App\Store::find(41);
   // $product = $store->products()->create([
    //    'name' => 'Notebook Dell',
    //    'description' =>'Core I5 10GB',
    //    'body' => 'Qualquer coisa',
    //    'price' => 2999.90,
    //    'slug' => 'notebook-dell',

//]);

    //dd($product);



    //Criar uma categoria

//    $category = \App\Category::create([
//       'name' => 'Games',
//        'description' => null,
//        'slug' => 'games'

//    ]);
//    $category = \App\Category::create([
//        'name' => 'Notebooks',
//        'description' => null,
//        'slug' => 'notebooks'

//  ]);

   // return \App\Category::all();



    //Adicionar um produto para uma categoria ou vice-versa

    //$product = \App\Product::find(40);

    //dd($product->Categories()->sync([2]));

    //$product = \App\Product::find(40);


    //return $product->categories;

});
//Route::get - Usado para recuperação
//Route::post - Usado para criação 
//Route::put - Usado para atualização
//Route::patch - Usado para atualização
//Route::delete - Usado para remoção
//Route::options - Usado para retornar quais cabeçalhos aquela rota específica corresponde

Route::get('/admin/stores', 'Admin\\StoreController@index');