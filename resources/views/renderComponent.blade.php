@extends('welcome')

@section('content')
<h1>how we render a component ?</h1>
<p>in our eaxample here we have 2 component "Buttons" and "Links"</p>
<p>to use button we type &lt;x-and_the_bladeFileName /&gt;  </p>
<x-buttons title="button"/>
<p>to use input component that exist under form under components we type &lt;x-folderNAme_and_the_bladeFile /&gt;  </p>
<x-form.input />
<p>to use inline links component  &lt;x-className /&gt;  </p>
<x-Links />
<p><a href="/passData">how to pss data to component</p>
@endsection