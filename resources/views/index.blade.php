<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bookstore</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans">
  @include('partials.header')

  <div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-8 text-center text-gray-800">Book List</h1>

    <div class="overflow-x-auto">
      <table class="w-full bg-white rounded-lg overflow-hidden shadow-md">
        <thead class="bg-gray-200">
          <tr>
            <th class="px-6 py-3 text-left text-sm font-medium text-gray-800 uppercase tracking-wider">ISBN</th>
            <th class="px-6 py-3 text-left text-sm font-medium text-gray-800 uppercase tracking-wider">Title</th>
            <th class="px-6 py-3 text-left text-sm font-medium text-gray-800 uppercase tracking-wider">Author</th>
            <th class="px-6 py-3 text-left text-sm font-medium text-gray-800 uppercase tracking-wider">Description</th>
            <th class="px-6 py-3 text-left text-sm font-medium text-gray-800 uppercase tracking-wider">Date Published</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          @foreach ($books as $book)
          <tr class="hover:bg-gray-100 transition-colors duration-200">
            <td class="px-6 py-4 whitespace-nowrap">{{ $book->isbn }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $book->title }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $book->author }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $book->description }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $book->date_published }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  @include('partials.footer')
</body>
</html>