<header id="site_header">
@include('partials.header_top')
    <div class="menu">
        <div class="container">
        @include('partials.logo')
                <div class="list">
                    <ul>
                    <li><a href="#">CHARACTERS</a></li>
                    <li><a href="{{route('comics')}}">COMICS</a></li>
                    <li><a href="">MOVIES</a></li>
                    <li><a href="#">TV</a></li>
                    <li><a href="#">GAMES</a></li>
                    <li><a href="#">COLLECTIBLES</a></li>
                    <li><a href="#">VIDEOS</a></li>
                    <li><a href="#">FANS</a></li>
                    <li><a href="#">NEWS</a></li>
                    <li><a href="#">SHOP <i class="fas fa-sort-down"></i></a></li>
                </ul>
                </div>
                <!-- /.list -->
                <div class="search">
                    <a class="list_active" href="#">Search <i class="fas fa-search"></i></a>
                </div>
                  <!-- /.search -->
        </div>
          <!-- /.container -->
    </div>
      <!-- /.menu -->

</header>
