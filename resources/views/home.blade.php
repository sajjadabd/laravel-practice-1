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
  <h1 class="text-2xl">
    home
  </h1>

  <hr class="m-4" />

  <section class="flex flex-col space-y-16">
    @foreach ( $posts as $post )
      <p >
        {{ $post->content }}
      </p>
    @endforeach
  </section>

</body>
</html>