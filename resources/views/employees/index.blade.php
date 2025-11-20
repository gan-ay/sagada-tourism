<!DOCTYPE html>
<html>
<head>
    <title>Employees</title>
</head>
<body>

<h2>Employees</h2>

<a href="{{ route('employees.create') }}">Add Employee</a>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Position</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>

    @foreach($employees as $employee)
    <tr>
        <td>{{ $employee->name }}</td>
        <td>{{ $employee->position }}</td>
        <td>{{ $employee->email }}</td>
        <td>
            <a href="{{ route('employees.edit', $employee->id) }}">Edit</a>

            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>



</body>
</html>
