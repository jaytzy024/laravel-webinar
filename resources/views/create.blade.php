<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student</title>
</head>
<body>
    <h1>Create Student</h1>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <label for="first_name">Student ID:</label>
        <input type="text" id="student_id" name="student_id"><br>
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name"><br>
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name"><br>
        <label for="course">Course:</label>
        <input type="text" id="course" name="course"><br>
        <button type="submit">Create</button>
    </form>
</body>
</html>
