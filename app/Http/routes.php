<?php

use Illuminate\Http\Request;

use HoneyHope\Http\Requests;
use HoneyHope\Http\Controllers\Controller;
use HoneyHope\Models\TblProducto;

Route::resource('Login','CtrLogin'); 
Route::resource('Admin', 'CtrAdmin');
Route::resource('Users','CtrUsuarios');
Route::resource('Compras', 'CtrCompras'); 
Route::resource('Empresas', 'CtrEmpresas'); 
Route::resource('Sucursales', 'CtrSucursal');
Route::resource('Conexiones', 'CtrConexion');
Route::resource('Productos', 'CtrProductos');
Route::resource('Apiarios', 'CtrApiario'); 
Route::resource('Miel', 'CtrMiel');   
Route::resource('Capc', 'CtrCapacidad');   
Route::resource('Cargo', 'CtrCargo');
Route::resource('TUser', 'CtrlTipoUser');   
Route::resource('Presentacion', 'CtrPresentacion');
Route::resource('TEmpresa', 'CtrTEmpresa');   
Route::resource('TProducto', 'Ctr_TipoProd');
Route::resource('imagespro', 'CtrImagePro');
Route::resource('cardsinicio', 'CtrCardInicio');
Route::resource('misionvision', 'CtrMyV');
Route::resource('nuestrassucursales', 'CtrNSucursales');
Route::get('logout', 'CtrLogin@logout');
Route::resource('/', 'CtrInicio');
Route::get('Nosotros', 'CtrInicio@nosotros');
Route::get('Visitanos','CtrInicio@visitanos');
/*Route::get('Inicio', 'CtrInicio@index');
*/
Route::get('usercomb', 'CtrUsuarios@Combos');
Route::get('ttuser', 'CtrlTipoUser@tabla');
Route::get('tablecargo', 'CtrCargo@table');
Route::get('tableemp', 'CtrTEmpresa@table');
Route::get('empcombo', 'CtrEmpresas@Combos');
Route::get('emptable', 'CtrEmpresas@table');
Route::get('prestable', 'CtrPresentacion@table');
Route::get('captable', 'CtrCapacidad@table');
Route::get('apitable', 'CtrApiario@table');
Route::get('apicombo', 'CtrApiario@Combo');
Route::get('mieltable', 'CtrMiel@table');
Route::get('mielcombo', 'CtrMiel@combo');
Route::get('compratable', 'CtrCompras@table');
Route::get('compracombo', 'CtrCompras@combo');
Route::get('tabletipo', 'Ctr_TipoProd@table');
Route::get('tableproductos', 'CtrProductos@table');
Route::get('combosproductos', 'CtrProductos@combos');
Route::get('comboimg', 'CtrImagePro@combo');
Route::post('uploadimgpro', 'CtrImagePro@subirimagen');
Route::get('tableimgs', 'CtrImagePro@table');
Route::post('uploaduser', 'CtrUsuarios@subirimagen');
Route::get('tableusers', 'CtrUsuarios@table');
Route::get('tableinicio', 'CtrCardInicio@table');
Route::get('tablemyv', 'CtrMyV@table');
Route::get('tablensuc', 'CtrNSucursales@table');
Route::get('combonsuc', 'CtrNSucursales@combo');
Route::post('uploadimgnsuc', 'CtrNSucursales@subirimagen');

//Producto publicos

Route::get('CatProduct','CtrCataProductos@index');


Route::get('producto/{slug}',[
	'as'=> 'product-detail',
	'uses'=>'CtrCataProductos@show'
	]);

Route::get('hola','CartController@hola');

Route::bind('producto',function($slug){
	 return TblProducto::where('Vch_IdProducto',$slug)->first();
});

//Carrito
Route::get('cart/show', [
	'as' => 'cart-show',
	'uses' => 'CartControllers@show'
]);


//Carrito

Route::get('cart/add/{producto}', [
	'as' => 'cart-add',
	'uses' => 'CartControllers@add'
]); 

Route::get('cart/delete/{producto}', [
	'as' =>'cart-delete',
	'uses' => 'CartControllers@delete'
]);

Route::get('cart/trash', [
	'as'=>'cart-trash',
	'uses'=>'CartControllers@trash'
]);

Route::get('cart/update/{producto}/{quantity}',[
	'as'=>'cart-update',
	'uses'=>'CartControllers@update'
]);

Route::get('order-detail',[
	//'middleware'=>'auth',
	'as'=>'order-detail',
	'uses'=>'CartControllers@orderDetail'
]);





//Autenticacion

Route::get('auth/login',[
	'as'=>'login-get',
	'uses'=>'Auth\AuthController@getLogin'
	]);

Route::post('auth/login',[
	'as'=>'login-post',
	'uses'=>'Auth\AuthController@postLogin'
	]);

Route::get('auth/logout',[
	'as'=>'logout',
	'uses'=>'Auth\AuthController@getLogout'
	]);

//registrar
Route::get('auth/register',[
	'as'=>'register-get',
	'uses'=>'Auth\AuthController@getRegister'
	]);

Route::post('auth/register',[
	'as'=>'register-post',
	'uses'=>'Auth\AuthController@postRegister'
	]);