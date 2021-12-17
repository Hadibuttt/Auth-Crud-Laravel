<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <a style="color:white;" href="/dashboard" class="navbar-brand">Admin Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      <a style="border:1px solid white;color:white;" class="nav-item nav-link">Welcome, {{Auth::user()->name;}}</a>
        <a style="border:1px solid white;color:white;" class="nav-item nav-link" href="/dashboard/add-product">Add Product</a>
        <a style="border:1px solid white;color:white;" class="nav-item nav-link" href="/logout">Logout</a>
      </div>
    </div>
  </nav>