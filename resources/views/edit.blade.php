<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200 flex justify-center items-center h-screen">
    <div class="bg-white rounded-lg shadow-lg w-96 px-8 py-10">
        <h1 class="text-2xl font-bold mb-6">Edit Student</h1>
        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="student_id" class="block text-sm font-medium text-gray-700">Student ID:</label>
                <input type="text" id="student_id" name="student_id" value="{{ $student->student_id }}"
                    class="mt-1 p-2 rounded-md border border-gray-400 w-full">
            </div>
            <div class="mb-4">
                <label for="first_name" class="block text-sm font-medium text-gray-700">First Name:</label>
                <input type="text" id="first_name" name="first_name" value="{{ $student->first_name }}"
                    class="mt-1 p-2 rounded-md border border-gray-400 w-full">
            </div>
            <div class="mb-4">
                <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name:</label>
                <input type="text" id="last_name" name="last_name" value="{{ $student->last_name }}"
                    class="mt-1 p-2 rounded-md border border-gray-400 w-full">
            </div>
            {{-- <div class="mb-4">
                <label for="course" class="block text-sm font-medium text-gray-700">Course:</label>
                <input type="text" id="course" name="course" value="{{ $student->course }}"
                    class="mt-1 p-2 rounded-md border border-gray-400 w-full">
            </div> --}}
            <div class="mb-4">
                <label for="course" class="block text-sm font-medium text-gray-700">Course:</label>
                <select id="course" name="course" class="mt-1 p-2 rounded-md border border-gray-400 w-full">
                    <option value="BSIS" @if($student->course == 'BSIS') selected @endif>BSIS</option>
                    <option value="BSIT" @if($student->course == 'BSIT') selected @endif>BSIT</option>
                    <option value="BSCS" @if($student->course == 'BSCS') selected @endif>BSCS</option>
                    <option value="BSEMC" @if($student->course == 'BSEMC') selected @endif>BSEMC</option>
                </select>
            </div>

            <button type="submit"
                class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 w-full mt-2">Update</button>
        </form>
    </div>
</body>

</html>
