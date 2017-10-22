<?php 
    // ADDS THE HEADER AND NAVIGATION
    $pageTitle = 'Library';
    include('header.php');
?>

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

<?php
    // ADD THE FOOTER
    include('footer.php');
?>