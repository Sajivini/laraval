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
            <div>
                <h2>All Details</h2>
            </div>
            @if(Session::has('Detail_deleted'))
                <div class="alert alert-sucesss" role="alert">
                    {{ Session::get('Detail_deleted') }}
                </div>
            @endif
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Logo</th>
                        <th>Cover Image</th>
                        <th>Website Link</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Details as $post)
                        <tr>
                            <td>{{$post->username}}</td>
                            <td>{{$post->email}}</td>
                            <td>{{$post->telephone}}</td>
                            <td>{{$post->logo}}</td>
                            <td>{{$post->coverImage}}</td>
                            <td>{{$post->websiteLink}}</td>
                            <a href="/Delete_details/{{ $id }}">Delete</a>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>