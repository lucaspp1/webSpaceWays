<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>web_spaceways</title>
    <link rel="icon" href="/content/img/spaceApps.ico" />
    
    <link rel="stylesheet" href="/content/lib/bootstrap/dist/css/bootstrap.min.css"/>
    
    <link rel="stylesheet" href="/content/css/site.css" />
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-dark bg-dark border-bottom box-shadow mb-3">
            <div class="container">
                
                <a class="navbar-brand" asp-area="" asp-controller="Home" asp-action="Index"><img src="img/tns-ship-small.png" class="ml-0 mr-3" style="max-width: 50px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse d-sm-inline-flex flex-sm-row-reverse">
                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/index">Home</a>
                        </li>
                        <?php
                            session_start();
                            if(@$_SESSION["Login"] != null){
                        ?>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="/login">Sign In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="/register">Sign Up</a>
                            </li>
                        <?php
                            }else{
                        ?>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="/form/">Form</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="/simulation">Simulation</a>
                            </li>
                        <?php
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <main role="main" class="pb-3">
                        
            <div class="text-center">
                <h1 class="display-4">Sign In</h1>
                <p>
                    <a href="https://getbootstrap.com/docs/4.0/components/forms/">https://getbootstrap.com/docs/4.0/components/forms/</a>
                </p>
                <p>
                    <form>
                        <div class="form-group text-left">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group text-left">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary my-2">Submit</button>
                    </form>
                </p>
            </div>

        </main>
    </div>

    <!-- Footer -->
    <footer class="page-footer font-small bg-dark stylish-color-dark bgFooterCustom text-light pt-4">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4 mr-auto">

                    <!-- Content -->
                    <h1>Neptune Rebels</h1>
                    <p>Sleeping doesn't get any XP.</p>

                </div>

                <hr class="clearfix w-100 d-md-none">

            </div>
            <!-- Grid row -->
        </div>

    </footer>
    <!-- Footer -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"
                asp-fallback-src="~/lib/jquery/dist/jquery.min.js"
                asp-fallback-test="window.jQuery"
                crossorigin="anonymous"
                integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"
                asp-fallback-src="~/lib/bootstrap/dist/js/bootstrap.bundle.min.js"
                asp-fallback-test="window.jQuery && window.jQuery.fn && window.jQuery.fn.modal"
                crossorigin="anonymous"
                integrity="sha256-E/V4cWE4qvAeO5MOhjtGtqDzPndRO1LBk8lJ/PR7CA4=">
        </script>
    <script src="~/js/site.js" asp-append-version="true"></script>
</body>
</html>
