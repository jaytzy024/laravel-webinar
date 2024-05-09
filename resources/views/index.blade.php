<x-app-layout>

    @if (Auth::user()->role == 'teacher')
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Students</title>
        </head>

        <body>
            <div class="px-20 mt-6">
                <h1 class="text-2xl font-bold mb-3">Students</h1>
                <a href="{{ route('students.create') }}" class="px-4 py-2 bg-green-500 text-white rounded-xl">Create New
                    Student</a>
            </div>
            {{-- <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Course</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->course }}</td>
                    <td>
                        <a href="{{ route('students.edit', $student->id) }}">Edit</a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table> --}}

            <div class="flex flex-col">
                <div class="overflow-x-auto px-10 py-4">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-hidden rounded-xl">
                            <table
                                class="min-w-full text-center text-sm font-light text-surface dark:text-white shadow-lg">
                                <thead
                                    class="border-b border-neutral-200 bg-[#472397] font-medium text-white dark:border-white/10">
                                    <tr>
                                        <th scope="col" class=" px-6 py-4">ID</th>
                                        <th scope="col" class=" px-7 py-4">First Name</th>
                                        <th scope="col" class=" px-7 py-4">Last Name</th>
                                        <th scope="col" class=" px-7 py-4">Course</th>
                                        <th scope="col" class=" px-3 py-4">Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($students as $student)
                                        <tr class="border-b border-neutral-200 bg-white dark:border-white/10">
                                            <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $student->id }}</td>
                                            <td class="whitespace-nowrap px-7 py-4">{{ $student->first_name }}</td>
                                            <td class="whitespace-nowrap px-7 py-4">{{ $student->last_name }}</td>
                                            <td class="whitespace-nowrap px-7 py-4">{{ $student->course }}</td>
                                            <td class="whitespace-nowrap px-3 py-4 flex justify-center gap-2">
                                                <a href="{{ route('students.edit', $student->id) }}"
                                                    class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-xl">Edit</a>
                                                <form action="{{ route('students.destroy', $student->id) }}"
                                                    method="POST"
                                                    class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-xl">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </body>

        </html>

    @endif

</x-app-layout>
