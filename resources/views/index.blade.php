@extends('layouts.main')

@section('container')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="CoolAdmin/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Content section 1-->
        <section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="admin/images/icon/english.jpeg" style="max-width: 80%; height: auto;" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4" style="color: deeppink">English Homework Assistance</h2>
                            <p>Our team of experienced English tutors is ready to assist you with a wide range of tasks, including essay writing, literary analysis, grammar refinement, and more. Whether you're a high school student crafting an essay or a college student polishing your research paper, our experts can provide guidance and constructive feedback to elevate your writing to the next level.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 2-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="admin/images/icon/code.jpeg" style="max-width: 80%; height: auto;" alt="..." /></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4" style="color: deeppink">Mathematics Homework Assistance</h2>
                            <p>From algebraic equations to calculus conundrums, our mathematics tutors are equipped to tackle any mathematical challenge you throw their way. We break down complex problems into simple, digestible steps, ensuring you not only understand the solution but also grasp the underlying concepts. Whether it's homework, exam preparation, or concept clarification, we've got your mathematical needs covered.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 3-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="admin/images/icon/math.jpeg" style="max-width: 80%; height: auto;" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4" style="color: deeppink">Coding Homework Assistance</h2>
                            <p>Embarking on a coding journey can be overwhelming, but our team of skilled programmers is here to guide you through the intricacies of coding assignments. Whether you're working on Python, Java, HTML, or any other programming language, we provide assistance in debugging, code optimization, and overall understanding of coding principles. Our goal is to empower you to write clean, efficient code and build a strong foundation for your programming skills.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="container px-5"><p class="m-0 text-center text-white small">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
@endsection