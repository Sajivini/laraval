<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We Are Desingers</title>
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>
<body>
    <div class="wrapper">
        <div class="formcontent">
            <a href="register.html">Companies </a>
            <a href="SignUp.html">Employees </a>
        </div>

        <div class="modal">
            <form action="{{ route('post.create') }}" class="modal-content" method="POST">
                @csrf
                <div class="container">
                    @if(Session::has('deatils_created'))
                        <div role="alert"> 
                            {{ session::get('deatils_created')}}
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="username">Name</label>
                        <input type="text" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Adderess</label>
                        <input type="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="telephone">Telephone</label>
                        <input type="tel" name="telephone" required>
                    </div>
                    <div class="form-group">
                        <label for="logo">Logo of the Company</label>
                        <input type="file" name="logo" required>
                    </div>
                    <div class="form-group">
                        <label for="coverImage">Cover Image</label>
                        <input type="file" name="coverImage" required>
                    </div>
                    <div class="form-group">
                        <label for="websiteLink">Website Link</label>
                        <input type="url" name="websiteLink" required>
                    </div>
                    <button type="submit" class="button-login"> 
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>