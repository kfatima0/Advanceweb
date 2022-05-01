
<html>

    <head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    </head>
    
    <body style="background-color:#63E5D9" > 
    <div class = "container">
    <br><br>
    
    <h2>Log In</h2>
    <br>
    <form action= "{{route('login')}}" class="form-group" method = "post">
        {{csrf_field()}}
        <div class ="col-md-4 form-group">
        <span>Email</span>
        <input type="text" name="email" placeholder="Enter your email" value ="{{old('email')}}" class = "form-control">
        @error('email')
            <span class = "text-danger">{{$message}}</span>
        @enderror
        </div>
        <br>

        <div class ="col-md-4 form-group">
            <span>Password</span>
            <input type="text" name="password" placeholder="Enter your password" value = "{{old('password')}}" class = "form-control">
            @error('password')
                <span class = "text-danger">{{$message}}</span>
            @enderror
        </div>

        <br>
        <input type = "submit" class="btn btn-primary" value = "Login"> <br> </form>
    </div>
    </body>
</html>