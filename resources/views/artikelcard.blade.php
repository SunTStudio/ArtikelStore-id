<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body style="background-color:rgb(243, 244, 246);">
    <section id="nav">
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container-fluid ms-5">
                <a class="navbar-brand text-secondary p-2" href="#">ArtikelStore.id</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    
                    <li class="nav-item">
                    <a class="nav-link text-secondary p-2" href="{{ route('artikel.card') }}">Artikel</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-secondary p-2" href="{{ route('artikel.show') }}">Manage</a>
                    </li>
                </ul>
                </div>
            </div>
            </nav>
    </section>

    <section id="konten" class="mt-5" >
        <div class="container">
            <div class="row justify-content-center">
                <div class="col rounded bg-white p-5 m-2 shadow" >
                    <p class="fw-bold text-center pb-5 h3"><span style="color:#6C757D;">Artikel</span><span style="color:rgb(224, 224, 73);">Store</span><span style="color:#6C757D;" class="span">.ID</span></p>
                    <div class="row">
                        @foreach ($data as $items )
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $items->name }}</h5>
                                <p class="card-text m-0">Deskripsi :</p>
                                <p class="card-text">{{ $items->deskripsi }}</p>
                                <span class="p-2 fw-bold bg-warning rounded d-inline" style="font-size: 0.7rem;">{{ $items->tag->name_tag }}</span>
                                <a href="#" class="btn btn-secondary float-end ms-2">Lihat Artikel</a> 
                            </div>
                            </div>
                        </div>
                        @endforeach
                        </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>