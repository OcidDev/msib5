<nav class="navbar navbar-expand-lg bg-primary bg-body-tertiary" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand mb-0 h1" href="{{ route('home') }}">Ocid Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('category.index') }}">Caetogories</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('product.index') }}"> Products</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('cart.index') }}"><i class="fa-solid me-2 fa-cart-shopping"></i>Cart</a>
            </li>
        </ul>
        </div>
    </div>
</nav>

