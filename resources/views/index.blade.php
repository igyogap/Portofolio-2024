<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://kit.fontawesome.com/a40c3b3cc0.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="{{ url('css/main/main.css') }}">
    <title>Yoga Pramana | Portofolio</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">
                    <img src="image/Logo.svg" alt="" width="30" height="24">
                </a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <div class="d-flex nav-timezone">
                    <div class="nav-item-address">Bali, Indonesia</div>
                    <div class="nav-item-time"><?= date("H:i");?></div>
                </div>
            </div>
        </div>
    </nav>

    <!-- HOME -->
    <div class="container">
        <div class="row home">
            <div class="col-md-6 home-header">
                <div>Hello, I’m Yoga <br>Pramana</div>
            </div>
            <div class="col-md-6">
                <div class="row home-header">
                    <div class="col-md-12">Full-Stack Developer
                        <br>Based in Bali, Indonesia.</div>
                </div>
                <div class="row home-description">
                    <div class="col-md-12"> Passionate creating a great website and bot telegram </div>
                </div>
                <div class="home-button">
                    <a href="{{ route('downloadResume') }}" class="btn home-button-resume mt-2" type="button">Resume   <i class="ms-2 fas fa-file-alt"></i></a>
                    <button class="btn home-button-mywork mt-2" type="button">See My Work</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END HOME -->

    <!-- ABOUT -->
    <div class="about pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 about-profile">
                    <img class="m-5" src="{{ asset('storage/' . $about->image) }}" alt="" srcset="">
                </div>
                <div class="col-md-6 p-lg-5 about-description">
                    <h2 class="about-title">About Me</h2>
                    <div class="about-description">{{ $about->description; }}</div>
                </div>
            </div>
            <div class="row">
                <h1 class="col-md-12 about-title-skill text-center">Skill</h1>
                <div class="col-md-8 mx-auto about-skill">
                    <div class="row about-skill-image justify-content-center">
                        @foreach ($tools as $index => $skill)
                            @if (($index / 6) % 2 == 0)
                                <div class="{{ $index % 2 == 0 ? 'odd' : 'even' }} btn col-md-2 d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#{{ $skill->slug }}Modal">
                                    <img src="{{ asset('storage/' . $skill->image) }}" class="rounded" alt="">
                                    {{-- <?= $index ?> --}}
                                </div>
                            @else
                                <div class="{{ $index % 2 == 0 ? 'even' : 'odd' }} btn col-md-2 d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#{{ $skill->slug }}Modal">
                                    <img src="{{ asset('storage/' . $skill->image) }}" class="rounded" alt="">
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- SKILL MODAL -->
        @foreach ($tools as $index => $skill)
        <div class="modal fade" id="{{ $skill->slug }}Modal" tabindex="-1" aria-labelledby="pythonModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title text-center" id="staticBackdropLabel"><img src="{{ asset('storage/' . $skill->image) }}" class="card-img-top" alt="...">  {{ $skill->name }}</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">I use Python, a versatile and user-friendly programming language, for creating Telegram bots and web scraping</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- END ABOUT -->
    <!-- SERVICE -->
    <div class="service">
        <div class="container">
            <h1 class="mt-5 mb-3 service-title text-center">Service</h1>
            <div class="row d-flex justify-content-center">
                @foreach ($service as $services)
                <div class="col-md-6 mb-mb-4">
                    <div class="card shadow p-3 mb-5 rounded">
                        <div class="card-body">
                            <h5 class="card-title">{{ $services->title }}</h5>
                            <ul>
                                @foreach ($services->description as $description)
                                    <li>{{ $description['description'] }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- END SERVICE -->

    <!-- PORTFOLIO -->

    <div class="portfolio">
        <div class="container">
            <h1 class="text-center ">Portfolio</h1>
            <div class="row">

            </div>
        </div>
    </div>

    <!-- END PORTFOLIO -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>