<!DOCTYPE html>
<html lang="en">
    <head>
        <title>smart library</title>
        <meta charset="utf-8">

        <!-- CSS -->
        <!-- bootstrap css https://getbootstrap.com/ -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

        <!-- OPEN ICONIC https://useiconic.com/open/ -->
        <link rel="stylesheet" href="open-iconic/css/open-iconic-bootstrap.css">
        <!-- <i class="oi oi-name" title="name" aria-hidden="true"></i> --> 
        
        <!-- Material icons https://material.io/icons/ -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" type="text/css" href="css/material_icons.css">
        <!-- example: <i class="material-icons md-48">name</i> -->

        <link rel="stylesheet" type="text/css" href="css/googlemap.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <!-- Javascript -->
        <!-- Jquery 3.2.1 -->
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

        <!-- Popper -->
        <script type="text/javascript" src="js/Popper.js"></script>

        <!-- bootstrap https://getbootstrap.com/ -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

        <script type="text/javascript" src="js/main.js"></script>

    </head>
    <body>
        <!-- Menu here -->
        <div class="pos-f-t fixed-top" id="menubar">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <img src="images/logo.png" width="200px"  alt="logo">
                </a>  
                
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">Search</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="favorites.php">Favourite</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Location</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">City One</a>
                                <a class="dropdown-item" href="#">City Two</a>
                                <a class="dropdown-item" href="#">City Three</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="collapse" id="navbarToggleExternalContent">

                <div class="row">

                    <div class="bg-dark p-4 col col-12">

                        <form class="form-inline">

                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <div class="input-group-addon"><i class="oi oi-magnifying-glass" title="magnifying-glass" aria-hidden="true"></i>&nbsp;Search</div>
                                <input type="text" class="form-control" placeholder="key word">
                            </div>


                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <div class="input-group-addon"><i class="oi oi-wifi" title="wifi" aria-hidden="true"></i>&nbsp;Wi-Fi</div>
                                <select class="custom-select">
                                    <option selected>Choose...</option>
                                    <option value="1">yes</option>
                                    <option value="2">no</option>
                                </select>
                            </div>

                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <div class="input-group-addon"><i class="oi oi-clock" title="clock" aria-hidden="true"></i>&nbsp;Open Hour</div>
                                <select class="custom-select">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <div class="input-group-addon"><i class="oi oi-map" title="map" aria-hidden="true"></i>&nbsp;Distance</div>
                                <select class="custom-select">
                                    <option selected>Choose...</option>
                                    <option value="1">&lt;500m</option>
                                    <option value="2">500m - 1000m</option>
                                    <option value="3">1km - 3km</option>
                                    <option value="3">&gt;3km</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-outline-warning">Submit</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>

        <!-- Content here -->
        <div class="container-fluid frame" id="wrapper">

            <div class="table-container col col-12">    

                <div class="row my-2">

                    <div class="col">
                        <button type="button" class="btn btn-outline-secondary btn-round">edit</button>
                    </div>

                </div>
     
                <div class="row my-2">
                    <div class="col col-3">
                        <figure class="figure">
                            <a href="detail.php">
                            <img src="images/Asia Pacific Design Library.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                            <figcaption class="figure-caption text-center">Asia Pacific Design Library</figcaption>
                            </a>
                        </figure>                    
                    </div>
                    <div class="col col-3">
                        <figure class="figure">
                            <img src="images/Brisbane Square Library.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                            <figcaption class="figure-caption text-center">Brisbane Square Library</figcaption>
                        </figure>                    
                    </div>                    
                    <div class="col col-3">
                        <figure class="figure">
                            <img src="images/New Farm Library.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                            <figcaption class="figure-caption text-center">New Farm Library</figcaption>
                        </figure>                    
                    </div>                    
                    <div class="col col-3">
                        <figure class="figure">
                            <img src="images/QUT Gardens Point Library.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                            <figcaption class="figure-caption text-center">QUT Gardens Point Library</figcaption>
                        </figure>                    
                    </div>                
                </div>
                <div class="row my-2">
                    <div class="col col-3">
                        <figure class="figure">
                            <img src="images/State Library of QLD.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                            <figcaption class="figure-caption text-center">State Library of QLD</figcaption>
                        </figure>                    
                    </div>
                    <div class="col col-3">
                   
                    </div>                    
                    <div class="col col-3">
                   
                    </div>                    
                    <div class="col col-3">
                  
                    </div>                
                </div>

                <div class="row my-2">  
                    <div class="col">     
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-end">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">1</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>

        </div>

        <!-- Footer here -->
        <footer class="footer">
            <div class="container">
                <span class="text-muted">This is footer.</span>
            </div>
        </footer>


    </body>
</html>