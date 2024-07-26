@extends('welcome')

@section('content')
<h1>how we pass data to a componet</h1>
<p>in our example we have button, but this button change its <code>title</code> in different usage</p>
<p>so the first thing is go to Buttons class under app\views and create a public variable let say $title</p>
<p>and in the constructor we pass the same name of variable ($title)as parameter and inside of it[go to class Buttons and see the constructor]</p>
<p>recommended name all the releated to paramter as same name</p>
<p><x-Buttons title="submit"/> </p>
<p><x-Buttons title="cancel"/> </p>

<h1>display all users</h1>
@foreach($allUsers as $user)
    <x-person-info :user="$user" />
@endforeach
<p>
    <a href="/render-component">previous page</a>
</p>

@endsection