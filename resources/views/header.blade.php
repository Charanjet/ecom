<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
    $total= ProductController::cartItem();
}

?>
<header>
    <div class="px-3 py-2 bg-dark text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="#" class="nav-link text-secondary">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"></use></svg>
                Home
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"></use></svg>
                Dashboard
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#table"></use></svg>
                Orders
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"></use></svg>
                Products
              </a>
            </li>
            <li>
              <a href="/cart" class="nav-link text-white">
                <i class="fa-solid fa-cart-shopping"></i>({{$total}})
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="px-3 py-2 border-bottom mb-3">
      <div class="container d-flex flex-wrap justify-content-center">
        <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto w-50" action="/search">
          <div class="input-group mb-3">
            <input type="search" name="search" class="form-control main-search" placeholder="Search..." aria-label="Search" aria-describedby="basic-addon2">
            <button type="submit" class="input-group-text" id="basic-addon2">Search</button>
          </div>
        </form>

        <div class="text-end">
          @if(session()->get('user'))
            <a href="/logout" class="btn btn-light text-dark me-2">Logout</a>
          @else
            <a href="/login" class="btn btn-light text-dark me-2">Login</a>
          @endif
        </div>
      </div>
    </div>
  </header>