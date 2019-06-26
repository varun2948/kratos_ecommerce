@extends('layout.app')
@section('content')

<main class="site-main site-login">

            <div class="container">

                <ol class="breadcrumb-page">

                    <li><a href="#">Home </a></li>

                    <li class="active"><a href="#">Login</a></li>

                </ol>

            </div>

            <div class="customer-login">

                <div class="container">

                    <div class="row">

                        <div class="col-sm-6">

                            <h5 class="title-login">Log in to your account</h5>

                            <p class="p-title-login">Wellcome to your account.</p>

                            <form class="login" method="post">

                                <p class="form-row form-row-wide">

                                    <label>Username or Email Address:<span class="required"></span></label>

                                    <input type="text" value="" name="username" placeholder="Type your username or email address" class="input-text">

                                </p>

                                <p class="form-row form-row-wide">

                                    <label>Password:<span class="required"></span></label>

                                    <input type="password" name="password" placeholder="************" class="input-text">

                                </p>

                                <ul class="inline-block">

                                    <li><label class="inline" ><input type="checkbox"><span class="input"></span>Remember me</label></li>

                                </ul>

                                <a href="#" class="forgot-password">Forgotten password?</a>


                                <p class="form-row">

                                    <input type="submit" value="Login" name="Login" class="button-submit">

                                </p>

                            </form>

                        </div>

                        <div class="col-sm-6 border-after">

                            <h5 class="title-login">Great an account</h5>

                            <p class="p-title-login">Fersonal infomation</p>

                            <form class="register" method="post">

                                <p class="form-row form-row-wide col-md-6 padding-left">

                                    <label>Fist name<span class="required">*</span></label>

                                    <input type="text" value="" name="text" placeholder="Fist name" class="input-text">

                                </p>

                                <p class="form-row form-row-wide col-md-6 padding-right">

                                    <label>Middle Name/Initial<span class="required"></span></label>

                                    <input type="text" value="" name="text" class="input-text">

                                </p>

                                <p class="form-row form-row-wide">

                                    <label>Last name<span class="required">*</span></label>

                                    <input type="text" name="text" placeholder="Last name" class="input-text">

                                </p>

                                <p class="form-row form-row-wide">

                                    <label>Email Address<span class="required">*</span></label>

                                    <input type="email" name="email" placeholder="Email address" class="input-text">

                                </p>

                                <ul>

                                    <li><label class="inline" ><input type="checkbox"><span class="input"></span>Sign Up for Newsletter</label></li>

                                </ul>

                                <h5 class="title-login title-login-bottom">Login Information</h5>

                                <p class="form-row form-row-wide col-md-6 padding-left">

                                    <label>Password:<span class="required"></span></label>

                                    <input type="password" name="password" class="input-text">

                                </p>

                                <p class="form-row form-row-wide col-md-6 padding-right">

                                    <label>Confirm Password<span class="required">*</span></label>

                                    <input type="password" name="password" class="input-text">

                                </p>

                                <p class="form-row">

                                    <input type="submit" value="Submit" name="Submit" class="button-submit">

                                </p>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

		</main>
@endsection
