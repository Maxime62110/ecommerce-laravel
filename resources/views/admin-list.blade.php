@extends('layouts.base2')

@section('content2')

        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="dashboard.html">
                                    <span data-feather="home"></span>
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="admin-list.html">
                                    <span data-feather="file"></span>
                                    Produits
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">
                                    <span data-feather="file"></span>
                                    Retour
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Produits</h1>
                        <a class="btn btn-primary" href="">Créer un produit</a>
                    </div>

                    <div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prix</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>
                                        <img width="80" src="https://dummyimage.com/600x400/55595c/fff" alt="">
                                    </td>
                                    <td>Produit</td>
                                    <td>10,99 €</td>
                                    <td>
                                        <a class="btn btn-primary">Modifier</a>
                                        <a class="btn btn-danger">Supprimer</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>
                                        <img width="80" src="https://dummyimage.com/600x400/55595c/fff" alt="">
                                    </td>
                                    <td>Produit</td>
                                    <td>10,99 €</td>
                                    <td>
                                        <a class="btn btn-primary">Modifier</a>
                                        <a class="btn btn-danger">Supprimer</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
        </div>
        @endsection

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
    </body>
</html>