<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contact Us at anytime</h1>

    <form action="{{ route('contact') }}" method="post">
        @csrf 
        <input type="text" name="name" placeholder="Name" id="">
        <input type="email" name="email" placeholder="Email" id="">
        <textarea name="" id="" cols="30" rows="10" placeholder="Your Query"></textarea>
        <input type="submit" value="Submit">
    </form>
</body>
</html>