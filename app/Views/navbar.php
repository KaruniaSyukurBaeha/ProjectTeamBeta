<nav class="navbar navbar-dark navbar-expand-lg bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#"><img src="/assets/images/betalogo.png" alt="Beta Logo"
                class="img-responsive" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
            aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/dashboard/index">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/items">Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/purchases">
                        Purchase</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sales">Sales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/users">User</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/suppliers">Suppliers</a></li>
                        <li><a class="dropdown-item" href="/customers">Customers</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ml-auto">
                    <form action="/sessions/logout" method="post">
                        <button type="submit"
                            class="btn btn-link nav-link"><?= current_user() == NULL ? "-" : current_user()['name'] ?> |
                            Keluar</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>