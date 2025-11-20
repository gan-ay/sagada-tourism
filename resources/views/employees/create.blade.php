<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
</head>
<body>

<h1>Add Employee</h1>

<form action="{{ route('employees.store') }}" method="POST">
    @csrf
    <label>Name</label>
    <input type="text" name="name">

    <label>Position</label>
    <input type="text" name="position">

    <label>Email</label>
    <input type="email" name="email">

    <button type="submit">Save</button>
</form>
