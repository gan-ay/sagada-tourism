<!DOCTYPE html>
<html>
<head>
    <title>Edit Employee</title>
</head>
<body>

<h1>Edit Employee</h1>

<<form action="{{ route('employees.update', $employee->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Name</label>
    <input type="text" name="name" value="{{ $employee->name }}">

    <label>Position</label>
    <input type="text" name="position" value="{{ $employee->position }}">

    <label>Email</label>
    <input type="email" name="email" value="{{ $employee->email }}">

    <button type="submit">Update</button>
</form>


<a href="{{ route('employees.index') }}">Back</a>

</body>
</html>
