<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="Css/main.css">
    <link rel="stylesheet" href="Css/Scroll.css">

</head>

<body>

    <header class="Title">
        <div class="ground">
            <ul>
                <li id="Difer">
                    <img src="images/logo.png" alt="" srcset="">
                </li>
                <li onclick='location.href="Home.php"'>
                    <a href="Home.php">HOME</a>
                </li>
                <li onclick='location.href="SignIn.php"'>
                    <a href="SignIn.php">SIGN IN</a>
                </li>
                <li onclick='location.href="Manager.php"'>
                    <a href="Manager.php">MANAGER EMPLOYEE</a>
                </li>
                <li onclick='location.href="Registration.php"'>
                    <a href="Registration.php">REGISTRATION</a>
                </li>
            </ul>
        </div>
    </header>

    <div class="slide" style="position:relative;top:180px;overflow:hidden;">
        <div class="ground_silde">
            <div class="one_slide run">
                <img src="images/Slide_1.jpg" alt="" srcset="" class="img_slide">
                <div class="text_slide">
                    <h1 class="h1_text_slide">Welcome!</h1>
                    <p class="text1_slide">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia at perspiciatis unde soluta quis labore! Consectetur veniam
                        amet voluptatem, quibusdam enim accusantium repellendus laudantium excepturi et modi voluptatibus,
                        perferendis veritatis.

                    </p>
                </div>
            </div>
            <div class="one_slide ">
                <img src="images/Slide_2.jpg" alt="" srcset="" class="img_slide">
                <div class="text_slide">
                    <h1 class="h1_text_slide">Welcome!</h1>
                    <p class="text1_slide">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, cupiditate omnis a, natus architecto atque quam similique
                        magnam, culpa ipsa nam sequi! Ullam, modi. Facere assumenda unde repudiandae illum quos.
                    </p>
                </div>
            </div>
            <div class="one_slide">
                <img src="images/Slide_3.jpg" alt="" srcset="" class="img_slide">
                <div class="text_slide">
                    <h1 class="h1_text_slide">Welcome!</h1>
                    <p class="text1_slide">
                        If you go in this website you can John Manager Employee or something good in here Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Accusantium, numquam eveniet excepturi deserunt reprehenderit quas commodi temporibus
                        molestiae reiciendis, nemo vitae est assumenda dignissimos fugit nulla. Dicta facilis beatae molestias?
                    </p>
                </div>
            </div>

            <div class="two_btn">
                <i class="fa fa-chevron-left btnsd" aria-hidden="true" id="btn1"></i>
                <i class="fa fa-chevron-right btnsd" aria-hidden="true" id="btn2"></i>
            </div>
            <div class="three_btn">
                <button class="btn btn-primary btns"></button>
                <button class="btn btn-primary btns"></button>
                <button class="btn btn-primary btns"></button>
            </div>
        </div>
    </div>
    <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="images/card_1.jpg" alt="">
            <div class="card-body">
                <h3 class="card-title">Manager Employee</h3>
                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, necessitatibus repellat placeat sapiente
                    exercitationem vel. Ex illo dolorem ab excepturi delectus veritatis quas a temporibus! Molestias ipsum
                    aperiam iste nostrum.</p>
                <table class="table" style="width:100%;">
                    <thead class="thead">
                        <tr class="tr">
                            <th class="th">id</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Name</th>
                            <th>Powerfull</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="td" scope="row">1</td>
                            <td>nguyenthevinh2@gmail.com</td>
                            <td>chunga123</td>
                            <td>The Vinh</td>
                            <td>Admin</td>
                        </tr>
                        <tr>
                            <td scope="row">2</td>
                            <td>nguyenthevinh3@gmail.com</td>
                            <td>chunga1234</td>
                            <td>The Vinh @</td>
                            <td>Admin</td>
                        </tr>
                        <tr>
                            <td scope="row">3</td>
                            <td>nguyenthevinh4@gmail.com</td>
                            <td>chunga12345</td>
                            <td>The Vinh1@</td>
                            <td>Employee</td>
                        </tr>
                        <tr>
                            <td scope="row">4</td>
                            <td>nguyenthevinh5@gmail.com</td>
                            <td>chunga123456</td>
                            <td>The Vinh2@</td>
                            <td>Member</td>
                        </tr>
                    </tbody>
                </table>ca
            </div>
        </div>
        <div class="card">
            <div class="row">
                <div class="col-sm-6">
                    <img src="images/card_2.jpg" alt="" srcset="" style="width:100%;height:100%;">
                </div>
                <div class="col-sm-6">
                    <img src="images/card_3.jpg" alt="" srcset="" style="width:100%;height:100%;">
                </div>
            </div>
            <div class="card-body">
                <h3 class="card-title">Manager Teacher</h3>
                <p class="card-text">other you can manager all teacher,Veniam quam optio fugit laborum! Labore totam repudiandae natus quaerat
                    facere quae deserunt suscipit, omnis iure dolor ea dolorem sit veritatis. Atque.</p>
                <div class="form-group">
                    <input type="email" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Password">
                </div>
                <button class="btn btn-warning" id="button-card" action="Home.php">Learn More</button>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="text-card">
                            <h5>Setting Anywhere</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <img src="images/up_1.jpg" alt="" srcset="" class="img-card">
                    </div>
                    <div class="col-sm-4">
                        <img src="images/4.jpg" alt="" srcset="" class="img-card">

                        <p class="text-card">
                            Lorem Quis soluta aliquam blanditiis neque voluptatibus accusamus porro odit possimus earum est. Sed, explicabo omnis nulla
                            labore molestiae impedit eum? Excepturi, ipsa?
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-card">
                            <h4>Manager Class</h4>
                            <p class="text-card-small">Lorem Iste molestias fuga ut necessitatibus eum. Id nihil eos quos molestiae harum, alias perferendis
                                illo dolorum, expedita hic aliquid, ipsum nisi facere!</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="body">

        <div class="row rows">
            <div class="col-sm-6">
                <h1 class="title-rows">
                    Book Manager
                </h1>
                <p class="text-rows">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae expedita iusto quod. Est et veritatis quis? Architecto
                    sunt unde vero quaerat voluptate quasi expedita vitae quibusdam culpa, perferendis, quia iste.
                </p>
            </div>
            <div class="col-sm-6">
                <img src="images/book1.jpg" alt="" srcset="" class="img-body">
            </div>
        </div>

        <div class="row rows">
            <div class="col-sm-6">
                <img src="images/book2.jpg" alt="" srcset="" class="img-body">
            </div>
            <div class="col-sm-6">
                <h1 class="title-rows">
                    Buy Book
                </h1>
                <p class="text-rows">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae expedita iusto quod. Est et veritatis quis? Architecto
                    sunt unde vero quaerat voluptate quasi expedita vitae quibusdam culpa, perferendis, quia iste.
                </p>
            </div>
        </div>

        <div class="row rows">
            <div class="col-sm-6">
                <h1 class="title-rows">
                    Link Book
                </h1>
                <p class="text-rows">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae expedita iusto quod. Est et veritatis quis? Architecto
                    sunt unde vero quaerat voluptate quasi expedita vitae quibusdam culpa, perferendis, quia iste.
                </p>
            </div>
            <div class="col-sm-6">
                <img src="images/book3.jpg" alt="" srcset="" class="img-body">
            </div>
        </div>
    </div>
    <footer>
        <div class="title-footer">
            <h1 class="Design">Website Design</h1>
            <p class="text-footer">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident excepturi aliquid, asperiores tempora fugiat rerum beatae
                doloremque quam placeat fugit nesciunt quo inventore et. Tempora modi eius nobis architecto mollitia!
            </p>
            <div class="icon">
                <i class="fa fa-facebook-official" aria-hidden="true"></i>
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <i class="fa fa-github" aria-hidden="true"></i>
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
            </div>
            <small>Webkit @ by The Vinh </small>
        </div>
    </footer>
    <script src="Jquery/Scroll.js"></script>
    <script src="Jquery/main.js"></script>
</body>

</html>