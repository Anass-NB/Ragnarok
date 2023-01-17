<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Home | All posts</title>
</head>

<body>
  <div class="container mx-auto ">
    <div class="">
      <form action="{{ route('store_post') }}" method="POST">
        @csrf
        <label class=" ">
          <span class="block text-sm font-medium text-slate-700">Name</span>
          <input name="name" type="text" style="border: 1px solid blue">
        </label>
        <br>
        <label class=" ">
          <span class="block text-sm font-medium text-slate-700">Image</span>
          <input name="image" id="myfile" type="file" style="border: 1px solid red">
        </label>
        <br>
        <input style="border: 2px solid green" type="submit" value="Add">
      </form>
    </div>
  </div>
  
</body>

</html>
