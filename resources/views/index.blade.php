@extends('welcome')

@section('content')
@include('partials/header')
<h1>how to create a component ???</h1>
<h2>button as an example</h2>
<p>first of all, in terminal the follwong command "php artisan make:component Buttons"</p>
<p>this command create uder views as folder components, under that folder a buttons.blade.php file <b>and under app\views we have Buttons.php</p>
<p><b><i>as we notice above the class Buttons is seperted of Buttons.blade.php, in order to create a class that contains the blade we type "php artisan make:component Links --inline" in this case under app\views we have the class Links and contains the blade links at the end of file</i></b></p>
@endsection('content')