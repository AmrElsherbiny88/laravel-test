<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css" rel="stylesheet"/>

    <title>Document</title>
</head>

<style>
    body {
        background-color: rgb(28, 28, 28);
        color: white;
    }

    .add-inp {
        border: none;
        border-radius: 5px;
        overflow: hidden;
        outline: none;
        width: 350px;
    }

    /* Table layout styles */
    table {
        table-layout: auto;
        width: 100%;
        word-wrap: break-word;
        white-space: normal;
    }

    th, td {
        word-wrap: break-word;
        white-space: normal;
        max-width: 200px; /* Adjust as needed */
    }

    /* Ensure the table is responsive */
    @media (max-width: 768px) {
        .table {
            display: block;
            overflow-x: auto;
            white-space: nowrap;
        }
    }
</style>

<body class="body">

    <h1 class="text-center mt-5 mb-5">Portfolio projects Data</h1>

    <form action="{{route('Add')}}" method="POST" class="text-center">
        @csrf
        <label>Title</label>
        <br>
        <input class="add-inp" type="text" name="title">
        <br>
        <label>Body</label>
        <br>
        <textarea class="add-inp mb-3" name="body"></textarea>
        <br>
        <button type="submit" class="btn btn-primary">Add project</button>
    </form>

    <table class="table radiu mt-5 mb-5">
        <thead>
        <tr >
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
            <th scope="col">Time</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($post as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->title}}</td>
                <td>{{$item->body}}</td>
                <td>{{$item->created_at}}</td>
                <td>
                    <form action="{{route('delete', $item->id)}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <!-- MDB -->
    <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.umd.min.js"
    ></script>
</body>
</html>
