<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3a5db8322b.js" crossorigin="anonymous"></script>
    <link rel='stylesheet' href='style.css'/>
    <title>Login area</title>
</head>
<body>
    <div id="loginarea" class="container" style="width: 280px; margin-top: 200px; border: 2px solid #f3f3f3; border-radius: 15px; -webkit-box-shadow: 10px 10px 9px 0px rgba(199,189,199,1); -moz-box-shadow: 10px 10px 9px 0px rgba(199,189,199,1); box-shadow: 10px 10px 9px 0px rgba(199,189,199,1);">

        <div style="padding: 10px">
            <form>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </form>

            <div>
                <button type="submit" class="btn btn-sm btn-success">Log in</button>
            </div>
            
        </div>

    </div>
</body>
</html>