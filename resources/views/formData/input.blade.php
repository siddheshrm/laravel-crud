<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Project | Enter details</title>
</head>

<body>
    <script>
    function redirectToList() {
        // window.location = 'index';
        window.location.href = '{{ route("form.index") }}';
    }
    </script>

    <div id="container">
        <form method="post" action="{{route('form.save')}}">
            @csrf
            @method('post')

            <h1>Enter data below</h1><br>

            <!-- Name -->
            <div class="form-control">
                <label for="name">Name<span style="color: red;">*</span> - </label>
                <input type="text" name="name" placeholder="Enter your name" required />
            </div><br>

            <!-- Contact -->
            <div class="form-control">
                <label for="contact">Contact<span style="color: red;">*</span> - </label>
                <input type="tel" name="contact" placeholder="Enter your contact" required />
            </div><br>

            <!-- Email -->
            <div class="form-control">
                <label for="email">Email<span style="color: red;">*</span> - </label>
                <input type="email" name="email" placeholder="Enter your email" />
            </div><br>

            <!-- Gender -->
            <div class="form-control">
                <label for="gender">Gender<span style="color: red;">*</span> - </label>
                <input type="radio" name="gender" value="Male" id="g1" required> Male
                <input type="radio" name="gender" value="Female" id="g2" required> Female
                <input type="radio" name="gender" value="Other" id="g3" required> Other
            </div>
            <br>

            <!-- Location -->
            <div class="form-control">
                <label for="location">Location - </label>
                <select name="location">
                    <option value="Thane" default>Thane</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="New Mumbai">New Mumbai</option>
                </select>
            </div><br>

            <!-- Message -->
            <div class="form-control">
                <label for="message">Message<span style="color: red;">*</span> - </label>
                <textarea type="text" name="message" rows="5" cols="20" placeholder="Enter your message"></textarea>
            </div><br>

            <!-- Submit button -->
            <div class="form-control">
                <button type="submit" name="submit">Save data</button>
            </div><br>

        </form>
        <!-- See data button -->
        <div class="form-control">
            <button onclick="redirectToList()">See all data</button>
        </div>

        <div>
            @if($errors -> any())
                <ul>
                    @foreach($errors -> all() as $error)
                    <li>{{$error}}</li>                
                @endforeach
                </ul>
            @endif
        </div>
    </div>
</body>

</html>