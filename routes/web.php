<?php




Route::get('users','UserController@index')->name('users');
Route::get('numbers','PhoneController@index')->name('numbers');
/*Route::get('contact/us','helloController@contact')->name('contact');
Route::get('about/us','helloController@about')->name('about');*/
Route::get('/','UserController@welcome');


/*
//posts crud are here
Route::get('students','StudentContriller@create')->name('students');
Route::get('/','StudentContriller@index')->name('students.all');
Route::post('store.student','StudentContriller@store')->name('store.student');
Route::get('viewStudent/{id}','StudentContriller@show');
Route::get('deleteStudent/{id}','StudentContriller@destroy');
Route::get('editStudent/{id}','StudentContriller@edit');
Route::post('updateStudent/{id}','StudentContriller@update');




Route::post('store/post','PostController@StorePost')->name('store.post');
Route::get('all/post','PostController@AllPost')->name('all.post');
Route::get('view/post/{id}','PostController@show');
Route::get('delete/post/{id}','PostController@DeletePost');
Route::get('edit/post/{id}','PostController@EditPost');
Route::post('update/post/{id}','PostController@UpdatePost');
*/


