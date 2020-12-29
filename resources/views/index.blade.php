@extends('app')
<style>
table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top: 30px;
}

 td,  th {
  border: 1px solid #ddd;
  padding: 8px;
}

 tr:nth-child(even){background-color: #f2f2f2;}

 tr:hover {background-color: #ddd;}

 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

.add{
    text-decoration: none;
    color: #4CAF50;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 24px;
    border: solid 2px #000000;
    width: 70px;
    text-align: center;

}

.edit{
    text-decoration: none;
    color: #008CBA;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 17px;
    width: 70px;
    text-align: center;
}

.delete{
    text-decoration: none;
    color: #f44336;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 17px;
    width: 70px;
    text-align: center;
}
</style>
@section('content')
    <a class="add" href="create">Add</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <td>{{ $car->id }}</td>
                    <td>{{ $car->name }}</td>
                    <td>{{ date("Y") - $car->registration_year }}</td>
                    <td>
                        <a  class ="edit"href="/edit/{{ $car->id }}"> Edit </a>
                    </td>
                    <td>
                        <a class="delete" href="/destroy/{{ $car->id }}"> Delete </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
