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
                    <div class="nav-item-time">06:00</div>
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
                    <button class="btn home-button-resume mt-2" type="button">Resume   <i class="ms-2 fas fa-file-alt"></i></button>
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
                <div class="col-md-12 about-skill">
                    <div class="row justify-content-center">
                        <div class="odd btn col-md-2 d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#pythonModal">
                            <img src="/image/python.svg" class="rounded" alt="">
                        </div>
                        <div class="even btn col-md-2 d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#boostrapModal">
                            <img src="/image/boostrap.svg" class="rounded" alt="">
                        </div>
                        <div class="odd btn col-md-2 d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#codeigniterModal">
                            <img src="/image/ci.svg" class="rounded" alt="">
                        </div>
                        <div class="even btn col-md-2 d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#illustratorModal">
                            <img src="/image/ilustrator.svg" class="rounded" alt="">
                        </div>
                        <div class="odd btn col-md-2 d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#mysqlModal">
                            <img src="/image/mysql.svg" class="rounded" alt="">
                        </div>
                        <div class="even btn col-md-2 d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#canvaModal">
                            <img src="/image/canva.svg" class="rounded" alt="">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="even btn last col-md-2 d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#htmlModal">
                            <img src="/image/html.svg" class="rounded" alt="">
                        </div>
                        <div class="odd btn col-md-2 d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#phpModal">
                            <img src="/image/php.svg" class="rounded" alt="">
                        </div>
                        <div class="even btn col-md-2 d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#photoshopModal">
                            <img src="/image/photoshop.svg" class="rounded" alt="">
                        </div>
                        <div class="odd btn  col-md-2 d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#cssModal">
                            <img src="/image/css.svg" class="rounded" alt="">
                        </div>
                        <div class="even btn  col-md-2 d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#figmaModal">
                            <img src="/image/figma.svg" class="rounded" alt="">
                        </div>
                        <div class="odd btn  col-md-2 d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#jsModal">
                            <img src="/image/js.svg" class="rounded" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SKILL MODAL -->
        <div class="modal fade" id="pythonModal" tabindex="-1" aria-labelledby="pythonModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title text-center" id="staticBackdropLabel"><img src="/image/python.svg" class="card-img-top" alt="..."> Python</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">I use Python, a versatile and user-friendly programming language, for creating Telegram bots and web scraping</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="boostrapModal" tabindex="-1" aria-labelledby="boostrapModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title text-center" id="staticBackdropLabel"><img src="/image/boostrap.svg" class="card-img-top" alt="..."> Boostrap</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">Bootstrap is a popular framework to style interfaces with pre-designed components and responsive layouts for attractive, mobile-friendly web pages.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="codeigniterModal" tabindex="-1" aria-labelledby="codeigniterModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title text-center" id="staticBackdropLabel"><img src="/image/ci.svg" class="card-img-top" alt="..."> Codeigniter</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">CodeIgniter is a PHP framework. Specifically, I use CodeIgniter 4 for making website admin panels and developing APIs.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="illustratorModal" tabindex="-1" aria-labelledby="illustratorModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title text-center" id="staticBackdropLabel"><img src="/image/ilustrator.svg" class="card-img-top" alt="..."> Adobe Illustrator</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">Adobe Illustrator is a design application. I use this app for designing vectors, like logos or flyer designs.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="mysqlModal" tabindex="-1" aria-labelledby="mysqlModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title text-center" id="staticBackdropLabel"><img src="/image/mysql.svg" class="card-img-top" alt="..."> MySQL</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">For data processing, I use MySQL because it is one of the open-source RDBMS.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="canvaModal" tabindex="-1" aria-labelledby="canvaModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title text-center" id="staticBackdropLabel"><img src="/image/canva.svg" class="card-img-top" alt="..."> Canva</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">Canva is a graphic design platform, I use Canva to make simple designs like photo collages.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="htmlModal" tabindex="-1" aria-labelledby="htmlModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title text-center" id="staticBackdropLabel"><img src="/image/html.svg" class="card-img-top" alt="..."> HTML</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">HTML (Hypertext Markup Language) is the basic language I use to create websites. It structures web pages by defining text, images, links, and more.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="phpModal" tabindex="-1" aria-labelledby="phpModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title text-center" id="staticBackdropLabel"><img src="/image/php.svg" class="card-img-top" alt="..."> PHP</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">PHP (Hypertext Preprocessor) is a language I use to enable communication between a website and its database.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="photoshopModal" tabindex="-1" aria-labelledby="photoshopModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title text-center" id="staticBackdropLabel"><img src="/image/photoshop.svg" class="card-img-top" alt="..."> Photoshop</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">Adobe Photoshop is an application for graphic design. I use it for editing photos or compressing photo resolution.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="cssModal" tabindex="-1" aria-labelledby="cssModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title text-center" id="staticBackdropLabel"><img src="/image/css.svg" class="card-img-top" alt="..."> CSS</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">Cascading Style Sheets (CSS) is a programming language for styling view of website.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="figmaModal" tabindex="-1" aria-labelledby="figmaModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title text-center" id="staticBackdropLabel"><img src="/image/figma.svg" class="card-img-top" alt="..."> Figma</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">Figma is an application for UI/UX design. I use Figma to create user interfaces for websites or mobile views and then to create prototypes for user experience.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="jsModal" tabindex="-1" aria-labelledby="jsModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title text-center" id="staticBackdropLabel"><img src="/image/js.svg" class="card-img-top" alt="..."> Javascript</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">JavaScript is a programming language I use to manipulate websites, load data, and add animations</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END ABOUT -->
    <!-- SERVICE -->
    <div class="service">
        <div class="container">
            <h1 class="mt-5 mb-3 service-title text-center">Service</h1>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 mb-mb-4">
                    <div class="card shadow p-3 mb-5 rounded">
                        <div class="card-body">
                            <h5 class="card-title">Website Development</h5>
                            <ul>
                                <li>Creation of new, custom websites</li>
                                <li>Ongoing website maintenance and support</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-mb-4">
                    <div class="card shadow p-3 mb-5  rounded">
                        <div class="card-body">
                            <h5 class="card-title">API Services</h5>
                            <ul>
                                <li>Development of new APIs</li>
                                <li>Seamless integration with existing systems</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-mb-4">
                    <div class="card shadow p-3 mb-5  rounded">
                        <div class="card-body">
                            <h5 class="card-title">Telegram Bot Development</h5>
                            <ul>
                                <li>Custom Telegram bot creation</li>
                                <li>Maintenance and updates</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-mb-4">
                    <div class="card shadow p-3 mb-5  rounded">
                        <div class="card-body">
                            <h5 class="card-title">Web Scraping and Automation</h5>
                            <ul>
                                <li>Automated website scraping</li>
                                <li>Comprehensive report generation</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-mb-4">
                    <div class="card shadow p-3 mb-5  rounded">
                        <div class="card-body">
                            <h5 class="card-title">UI/UX Design</h5>
                            <ul>
                                <li>User interface (UI) design for mobile and web apps</li>
                                <li>Prototyping and user experience (UX) enhancements</li>
                            </ul>
                        </div>
                    </div>
                </div>
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