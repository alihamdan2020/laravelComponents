@extends('welcome')

@section('content')
@include('partials/header')
<h1>how to create a component ???</h1>
<h2>button as an example</h2>
<h3>first method</h3>
<p>first of all, in terminal the follwong command "php artisan make:component Buttons"</p>
<p>this command create uder views as folder components, under that folder a buttons.blade.php file <b>and under app\views we have Buttons.php</p>
<hr>
<h2>link as an example inline component</h2>
<p><b><i>as we notice above the class Buttons is seperted of Buttons.blade.php, in order to create a class that contains the blade we type "php artisan make:component Links --inline" in this case under app\views we have the class Links and contains the blade links at the end of file app\views\links with notw that no views called links.blade.php as another componet</i></b></p>

<h3>method number 2</h3>
<p>no need to use artisan, i can under views create folder components and create a blade file as normal way</p>
<p>now i will create under componets folder Form under form i will create input.blade.php</p>
<p><a href="/render-component">how we render a component</a></p>
@endsection('content')