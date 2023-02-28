<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>app</title>
	@vite('resources/css/app.css')
</head>
<body>
	

  <form action="/create-post" method="POST" class="p-4 flex flex-col space-y-4">

    @csrf

    <h1 class="text-3xl font-bold">
      create post
    </h1>
  
    <hr />

    <textarea name="content" id="" cols="40" rows="7" 
    class="self-start p-6 rounded-2xl ring ring-sky-600 focus:ring-sky-700 outline-none">

    </textarea>
    
  
    <button type="submit" href="/create-post" class="self-start inline-block text-2xl px-6 py-2 bg-sky-800 text-gray-200 hover:bg-sky-900 rounded-xl hover:ring-2 hover:shadow-md hover:shadow-slate-500 transition  hover:-translate-y-0.5 transform">
      create new post
    </button>
  </form>

</body>
</html>