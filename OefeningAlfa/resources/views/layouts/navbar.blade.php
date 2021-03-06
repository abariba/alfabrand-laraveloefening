<nav class="site-header py-1 navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container d-flex< flex-md-row justify-content-between"><!-- flex-column -->
    <a class="py-2 nav-link" href="http://127.0.0.1:8000">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto text-center">


                    <li class="nav-item"><a class="nav-link py-2 d-none d-md-inline-block" href="/dames">Producten</a></li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1:8000">Home <span class="sr-only">(current)</span></a>
                </li> --}}
                {{-- <li class="nav-item">
                    <div class="dropdown show">
                        <a class="btn dropdown-toggle " href="/dames" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Dames
                        </a>
                      
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="/dames">Dames</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown show">
                        <a class="btn dropdown-toggle " href="/heren" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Heren
                        </a>
                      
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <!--<a class="nav-link" href="/product/1">Kinderen</a>-->
                    <div class="dropdown show">
                        <a class="btn dropdown-toggle " href="/kinderen" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Kinderen
                        </a>
                      
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </li> --}}
                <li class="nav-item">
                        <a class="nav-link" href="/comments">Test 1</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="/shop">Test 2</a>
                </li>
            </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <div class="dropdown">
                                <button class="btn btn-dark  " type="button"   aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-heart"></i>
                                </button>

                                <button class="btn btn-dark dropdown-toggle shopping-cart" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-shopping-basket"><span class="badge">0</span></i>
                                </button>


                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="/cart">To shoppingcart</a>
                                </div>
                              </div>
                              
                        
                    </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link py-2 d-none d-md-inline-block" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link py-2 d-none d-md-inline-block" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

        </div>
    </div>
  </nav>
