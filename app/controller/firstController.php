<?php
class firstController extends Controller
{
	Route::get('test',function() {
    return view('welcome');
});
}
?>