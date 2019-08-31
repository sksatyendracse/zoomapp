<div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{url('about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('contact')}}">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ __('messages.communtications') }}
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="portfolio-1-col.html">{{ __('messages.Mobile_Accessories') }}</a>
              <a class="dropdown-item" href="portfolio-2-col.html">{{ __('messages.Recharges') }}</a>
              <a class="dropdown-item" href="portfolio-3-col.html">{{ __('messages.Photocopies') }}</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ __('messages.Electricals') }}
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="blog-home-1.html">{{ __('messages.Electricals_Servies') }}</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ __('messages.stationaries') }}
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="portfolio-1-col.html">{{ __('messages.Office_Use') }}</a>
              <a class="dropdown-item" href="portfolio-2-col.html">{{ __('messages.All_Types_Books') }}</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('aarhoan')}}">{{ __('messages.Aarohan_Classes') }}</a>
          </li>
         
        </ul>
      </div>