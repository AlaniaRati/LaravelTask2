@extends('app')
<style>
    input{
      width: 100%;
      display: block;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      background-color: #3CBC8D;
      color: white;
    }
    button{
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      cursor: pointer;
    }
    
    
</style>

@section('content')
    <form action="/store" method="POST">
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
        <input name="name" type="text" placeholder="name" required maxlength="100">
        <input name="make" type="text" placeholder="make" required maxlength="100">
        <input name="model" type="text" placeholder="model" requiredmaxlength="100">
        <input name="license_number" type="text" placeholder="license_number" required maxlength="100">
        <input name="registration_year" type="number" placeholder="registration_year" required max="2020">
        <input name="weight" type="number" placeholder="weight" required>
        <button type="submit">Add</button>
    </form>
@endsection
