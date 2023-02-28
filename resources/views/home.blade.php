<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite('resources/css/app.css')
</head>
<body class="p-8">
  
  <a href="/create-post" class="inline-block text-2xl px-6 py-2 bg-sky-800 text-gray-200 hover:bg-sky-900 rounded-xl hover:ring-2 hover:shadow-md hover:shadow-slate-500 transition  hover:-translate-y-0.5 transform">
    create new post
  </a>
  

  <hr class="m-4" />

  <section class="flex flex-col space-y-4">
    @foreach ( $posts as $post )
      <p >
        {{ $post->content }}
      </p>
    @endforeach
  </section>

</body>
</html>