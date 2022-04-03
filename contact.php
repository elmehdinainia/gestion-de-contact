<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <header class="p-2 bg-dark text-white">
        <div class="container-fluid">
      
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link  text-secondary  text-light p-1 fs-4">Contact list</a></li>

                </ul>

                <div class="text-end">
                    <button type="button" class="btn btn-outline-light fs-5" style="border: none;color: gray">Alex</button>
                    <button type="button" class="btn btn-outline-light fs-5" style="border: none;color: gray">contacts</button>
                    <button type="button" class="btn btn-outline-light fs-5" style="border: none;color: gray">Logout</button>


                </div>
            </div>
        </div>
    </header>
    <div class="container mt-2">
        <h2 class="pb-3">contacts</h2>
        <h4>class list:</h4>
        <p>no contact</p>
        <h3>Add contact</h3>
        <form class="row g-3">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Name</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Phone</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Email</label>
                <input type="text" class="form-control" id="inputAddress" >
            </div>
            <div class="col-12">
                <label for="exampleFormControlTextarea1" class="form-label">Adress</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <!-- script bootstrap -->
</body>

</html>