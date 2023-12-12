@extends('partials.main')
@section('container')
    <div class="container content-wrapper">
        <h2>
            <center>Contact</center>
        </h2>
        <br>
        <div class="d-flex justify-content-center">
        <div class="row mt-2">
            <div class="col-lg-12">
                <div class="info">
                    <div class="address">
                        <h4>Location:</h4>
                        <p>Malang, Indonesia</p>
                    </div>
                    <div class="email">
                        <h4>Email:</h4>
                        <p>theprediksi@gmail.com</p>
                    </div>
                    <div class="phone">
                        <h4>Call:</h4>
                        <p>+6285672809</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 mt-5 mt-lg-0">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                            required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                            required>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <br>
                <div class="text-center"><button type="button" class="btn btn-outline-info">Send Message</button></div>
            </form>
        </div>
    </div>

    </div>
@endsection
