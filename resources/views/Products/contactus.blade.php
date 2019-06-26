@extends('layout.app')
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.5.1/leaflet.css">
@endsection
@section('content')

<main class="site-main contact-us">

            <div class="container">

                <ol class="breadcrumb-page">

                    <li><a href="{{url('/contact')}}">Home </a></li>

                    <li class="active"><a href="{{url('/contact')}}">Contact Us</a></li>

                </ol>

            </div>

            <div class="container">

                <div class="row">

                    <div class="contact-map full-width">
                            <div id="map" style="width: 1745px; height: 375px"></div>

                    </div>

                    <form class="form-contact" action="#" method="post">

                        <div class="col-md-5">

                            <div class="contact-info">

                                <h5 class="title-contact">Leave a Message</h5>

                                <p class="form-row form-row-wide">

                                    <label>Name<span class="required">*</span></label>

                                    <input type="text" value="" name="text" placeholder="Fist name" class="input-text">

                                </p>

                                <p class="form-row form-row-wide">

                                    <label>Email<span class="required">*</span></label>

                                    <input type="email" value="" name="text" placeholder="Fist name" class="input-text">

                                </p>

                                <p class="form-row form-row-wide">

                                    <label>Number Phone<span class="required"></span></label>

                                    <input type="text" value="" name="text" placeholder="Fist name" class="input-text">

                                </p>

                            </div>

                        </div>

                        <div class="col-md-4">

                            <p class="form-row form-row-wide form-text">

                                <label>Comment<span class="required"></span></label>

                                <textarea aria-invalid="false" class="textarea-control" rows="5" cols="40" name="message"></textarea>

                            </p>

                            <p class="form-row">

                                <input type="submit" value="Submit" name="Submit" class="button-submit">

                            </p>

                        </div>

                    </form>

                    <div class="col-md-3 contact-detail">

                        <h5 class="title-contact">Contact Detail</h5>

                        <div class="contacts-info ">
                            <div class="contact-icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                            <h4 class="title-info">Email</h4>
                            <div class="info-detail"> deepak.pradhan048@gmail.com</div>
                        </div>
                        <div class="contacts-info ">
                            <div class="contact-icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                            <h4 class="title-info">Phone</h4>
                            <div class="info-detail">9845662948</div>
                        </div>
                        <div class="contacts-info ">
                            <div class="contact-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                            <h4 class="title-info">Mail Office</h4>
                            <div class="info-detail">Samakhusi,Kathmandu,Nepal</div>
                        </div>

                    </div>

                </div>

            </div>

		</main>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.5.1/leaflet.js"></script>
<script>
    var map = L.map('map').setView([27.740108, 85.316373], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([27.740108, 85.316373]).addTo(map)
        .bindPopup('Current Location Of My Office.<br>.')
        .openPopup();
</script>
@endsection

