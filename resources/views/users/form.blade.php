<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTTP Methods Form</title>
</head>
<body>
    <h2>GET method</h2>
    <form action="{{ url('/get-data') }}" method="GET">
        <input type="text" name="name" placeholder="Enter name">
        <input type="text" name="email" placeholder="Enter email">
        <button type="submit">Send GET</button>
    </form>

    <h2>POST method</h2>
    <form action="{{ url('/post-data') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter name">
        <input type="text" name="email" placeholder="Enter email">
        <button type="submit">Send POST</button>
    </form>

    <h2>DELETE method</h2>
    <form action="{{ url('/delete-data') }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="text" name="id" placeholder="Enter ID to delete">
        <button type="submit">Send DELETE</button>
    </form>

    <h2>PUT method</h2>
    <form action="{{ url('/put-data') }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" placeholder="Enter new name">
        <input type="text" name="email" placeholder="Enter new email">
        <button type="submit">Send PUT</button>
    </form>

    <h2>PATCH method</h2>
    <form action="{{ url('/patch-data') }}" method="POST">
        @csrf
        @method('PATCH')
        <input type="text" name="email" placeholder="Enter new email">
        <button type="submit">Send PATCH</button>
    </form>
</body>
</html>
