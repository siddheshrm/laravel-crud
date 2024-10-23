<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Project | Show data</title>
</head>

<body>

    <button onclick="redirectToIndex()">Add new data</button><br><br>
    <script>
        function redirectToIndex() {
            window.location.href = '{{ route("form.input") }}';
        }
    </script>

    @if($all_data->isEmpty())
        <p>Nothing to display</p>
    @else
        <table class="display" border="1">
            
            <thead>
                <th style="width: 60px;">Sr. no.</th>
                <th style="width: 200px;">Name</th>
                <th style="width: 200px;">Contact</th>
                <th style="width: 200px;">Email</th>
                <th style="width: 200px;">Gender</th>
                <th style="width: 200px;">Location</th>
                <th style="width: 500px;">Message</th>
                <th colspan='3' style="width: 100px;">Action</th>
            </thead>

            @foreach($all_data as $show_data)
                <tr>
                    <td>{{$show_data->id}}</td>
                    <td>{{$show_data->name}}</td>
                    <td>{{$show_data->contact}}</td>
                    <td>{{$show_data->email}}</td>
                    <td>{{$show_data->gender}}</td>
                    <td>{{$show_data->location}}</td>
                    <td>{{$show_data->message}}</td>
                    <td>
                        <button>
                            <a href="{{ route('form.edit', ['form' => $show_data ]) }}" onclick="return confirm('Are you sure to update?')">Update</a>
                        </button>
                    </td>
                    <td>
                        <form method="post" action="{{ route('form.delete', ['form' => $show_data]) }}" onsubmit="return confirm('Are you sure to delete?')">
                            @csrf
                            @method('delete')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
    @endif

</body>

</html>