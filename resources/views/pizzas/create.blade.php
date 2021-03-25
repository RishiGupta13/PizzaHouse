@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
<h1>Create a new Pizza</h1>
<form action="/pizzas" method="POST">
@csrf
<label for="name">Your name:</label>
<input type="text" id="name" name="name">
<label for="type">Choose Pizza Type:</label>
<select name="type" id="type">
<option value="margarita">Margarita</option>
<option value="hawaiian">Hawaiian</option>
<option value="veg supreme">veg supreme</option>
<option value="volcano">Volcano</option>


</select>



<label for="base">Choose Pizza Base:</label>
<select name="base" id="base">
<option value="cheese crust">Cheese Crust</option>
<option value="garlic crust">garlic crust</option>
<option value="thin & crispy">Thin & Crispy</option>
<option value="thick">Thick</option>


</select>

<fieldset>
<label>Extra Toppings:</label>
<input type="checkbox" name="toppings" value="mushrooms">Mushrooms</br>
<input type="checkbox" name="toppings" value="peppers">Peppers</br>
<input type="checkbox" name="toppings" value="garlic">Garlic</br>
<input type="checkbox" name="toppings" value="olive">Olive</br>


</fieldset>

<input type="submit" value="Order Pizza">
</form>
</div>
@endsection