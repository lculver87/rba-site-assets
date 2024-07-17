<div class="sticky-top">
    <!-- Nav bar with logo and links, shadowed and sticky to top -->
    <nav class="navbar navbar-expand-lg navbar-light shadow py-3 bg-white">
        <div class="container">
            <a class="navbar-brand me-3 py-0" href="index.php">
                <img src="<?php echo $BASE_URL;?>/site-assets/template/assets/logo.svg" height="50" alt="logo" class="d-inline-block align-top" />
            </a>
            <div class="text-bluegrey fs-5 d-none d-xxl-inline border-start border-royalblue border-0 border-2 ps-3">
                Royal Society of<br/>
                British Artists
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse py-5 py-lg-0 text-center " id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item d-flex mx-auto">
                        <a class="nav-link text-royalblue text-uppercase fw-medium mx-2 draw-line royalblue" href="members.html">MEMBERS</a>
                    </li>
                    <li class="nav-item d-flex mx-auto">
                        <a class="nav-link text-royalblue text-uppercase fw-medium mx-2 draw-line royalblue" href="about.html">ABOUT</a>
                    </li>
                    <li class="nav-item d-flex mx-auto">
                        <a class="nav-link text-royalblue text-uppercase fw-medium mx-2 draw-line royalblue" href="exhibitions.html">EXHIBITIONS</a>
                    </li>
                    <li class="nav-item d-flex mx-auto">
                        <a class="nav-link text-royalblue text-uppercase fw-medium mx-2 draw-line royalblue" href="rome-scholarship.html">SCHOLARSHIP</a>
                    </li>
                    <li class="nav-item d-flex mx-auto">
                        <a class="nav-link text-royalblue text-uppercase fw-medium mx-2 draw-line royalblue" href="news.html">NEWS</a>
                    </li>
                    <li class="nav-item d-flex mx-auto">
                        <button class="nav-link text-royalblue text-uppercase fw-medium mx-2 draw-line royalblue cursor-pointer toggleSearchBar"><span class="icon icon-magnifier me-2"></span> Search</button>
                    </li> 
                </ul>
            </div>
            <button class="btn btn-ctagreen text-white fw-medium d-none d-lg-inline" type="button"><span class="icon icon-cart me-2"></span> BUY ART</button>
        </div>
    </nav>

    <!-- Search bar -->
    <div class="container-fluid bg-light opacity-0 h-0" id="search-container">
        <div class="container">
            <div class="row py-3">
                <div class="col-12 d-flex">
                    <input class="form-control fs-5" type="search" placeholder="Search artists or artwork" aria-label="Search">
                    <button class="btn btn-royalblue text-white fw-medium fs-5 rounded-0 px-4 py-3"><span class="icon icon-magnifier"></span></button>
                    <button type="button" class="btn text-white fw-medium fs-5 rounded-0 px-4 py-4 btn-close toggleSearchBar" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    function toggleSearchBar(){
        if($("#search-container").hasClass('h-0')){
            $('#search-container').removeClass('h-0 opacity-0');

            //animate js the search field container
            $('#search-container').animate({
                height: '100%',
                opacity: 1
            }, 500, function(){
                //focus on the search field
                $('#search-container input').focus();
            });
        }else{
            //animate js the search field container
            $('#search-container').animate({
                height: '0',
                opacity: 0
            }, 500, function(){
                $('#search-container').addClass('h-0 opacity-0');
            });
        }
    }


    $('.toggleSearchBar').click(function(){
        toggleSearchBar();
    });
</script>