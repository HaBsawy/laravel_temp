<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 14-Jun-19
 * Time: 08:04
 */?>

@extends('dashboard.index')

@section('content')

    @push('css')
        <link rel="stylesheet" href="{{ url('css/jquery.steps.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_UI_Elements.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style_Forms.css') }}" />
    @endpush

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Basic Wizard</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div id="example-basic">
                            <h3>Keyboard</h3>
                            <section>
                                <p>Lorem ipsum dolor sit amet, facer velit at per, possit accusamus vim an. Cu vel possit dolorum. Elit placerat molestiae mea ne.Ex has movet ornatus, ei usu latine scripta molestiae. Sea ex aeterno adversarium, te ferri errem noluisse quo, meis civibus ea est. Sit in quas nostrud,</p>
                            </section>
                            <h3>Effects</h3>
                            <section>
                                <p>Ex has movet ornatus, ei usu latine scripta molestiae. Sea ex aeterno adversarium,Lorem ipsum dolor sit amet, facer velit at per, possit accusamus vim an. Cu vel possit dolorum. Elit placerat molestiae mea ne te ferri errem noluisse quo, meis civibus ea est. Sit in quas nostrud,</p>
                            </section>
                            <h3>Pager</h3>
                            <section>
                                <p>eam aliquip probatus complectitur ei. Sale omnes persius sea ut, repudiare mnesarchum te nec. Ei ubique veritus mediocrem eos. Mel at per, possit accusamus vim an. Cu vel possit dolorum. Elit placerat molestiae mea ne te ferri errem noluisse quo, meis civibus ea est viris delectus recteque ad, mei persius suavitate ad.</p>
                            </section>
                            <h3>Pager</h3>
                            <section>
                                <p>KeyboardEffectsPagerPager
                                    Quo epicurei perfecto instructior id, semper verear virtute te has. Mucius oblique vis ne, ius ei erat nonumes necessitatibus..</p>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="float-left">
                        <h6 class="panel-title">Advanced Form Wizard</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <form id="example-advanced-form" action="#">
                            <h3>Signup</h3>
                            <fieldset id="example-advanced-form-p-0" role="tabpanel" aria-labelledby="example-advanced-form-h-0" class="body current" aria-hidden="false">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-wrap">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="fas fa-user"></i></div>
                                                    <input type="text" class="form-control required" name="Username" id="exampleInputuname" placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="fas fa-envelope-open"></i></div>
                                                    <input type="email" class="form-control required" id="exampleInputEmail" name="email" placeholder="Enter email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="fas fa-lock"></i></div>
                                                    <input id="password-2" type="password" class="form-control required" name="password" placeholder="Enter password">
                                                </div>
                                            </div>
                                            <div class="form-group mb-0">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="fas fa-lock"></i></div>
                                                    <input type="password" class="form-control required" id="confirm-2" name="confirm" placeholder="confirm password">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <h3>Shipping</h3>
                            <fieldset id="example-advanced-form-p-1" role="tabpanel" aria-labelledby="example-advanced-form-h-1" class="body" aria-hidden="true" style="display: none;">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-wrap">
                                            <div class="form-group">
                                                <label class="control-label mb-10" for="exampleCountry">country:</label>
                                                <select id="exampleCountry" class="form-control required" name="country">
                                                    <option value="1">India</option>
                                                    <option value="2">Australia</option>
                                                    <option value="3">USA</option>
                                                    <option value="4">Japan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6 col-xs-12">
                                                        <label class="control-label mb-10" for="firstName">first name:</label>
                                                        <input id="firstName" type="text" name="first_name" class="form-control required" value="">
                                                    </div>
                                                    <div class="span1"></div>
                                                    <div class="col-md-6 col-xs-12">
                                                        <label class="control-label mb-10" for="lastName">last name:</label>
                                                        <input id="lastName" type="text" name="last_name" class="form-control required" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10" for="addressDetail">Address:</label>
                                                <input id="addressDetail" type="text" name="address" class="form-control required" value="">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10" for="cityName">city:</label>
                                                <select id="cityName" class="form-control required" name="country">
                                                    <option value="">Banglore</option>
                                                    <option value="">Pune</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10" for="stateName">state:</label>
                                                <select id="stateName" class="form-control required" name="country">
                                                    <option value="">Karnataka</option>
                                                    <option value="">Maharashtra</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10" for="postalCode">zip/postal code:</label>
                                                <input id="postalCode" type="text" name="zip_code" data-mask="99999-9999" class="form-control required" value="">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10" for="phoneNumber">phone number:</label>
                                                <input type="text" id="phoneNumber" data-mask="+40 999 999 999" name="phone_number" class="form-control required" value="">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10" for="emailAddress">email address:</label>
                                                <input id="emailAddress" type="text" name="email_address" class="form-control required" value="">
                                            </div>
                                            <div class="form-group mb-0">
                                                <div class="checkbox checkbox-success">
                                                    <input id="checkbox_1" type="checkbox">
                                                    <label for="checkbox_1">Billing address is same as shipping address.</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <h3>Payment</h3>
                            <fieldset id="example-advanced-form-p-2" role="tabpanel" aria-labelledby="example-advanced-form-h-2" class="body" aria-hidden="true" style="display: none;">
                                <!--CREDIT CART PAYMENT-->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="CreditCardType">card type:</label>
                                            <select id="CreditCardType" name="CreditCardType" class="form-control required">
                                                <option value="5">Visa</option>
                                                <option value="6">MasterCard</option>
                                                <option value="7">American Express</option>
                                                <option value="8">Discover</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="cardNo">Credit Card Number:</label>
                                            <input type="text" id="cardNo" data-mask="9999-9999-9999-9999" class="form-control required" name="car_number" value="">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="cvv">card cvv:</label>
                                            <input type="text" id="cvv" class="form-control  required" data-mask="999" name="car_code" value="">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10">expiration date:</label>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <select class="form-control required" name="month">
                                                        <option value="">Month</option>
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                        <option value="5">05</option>
                                                        <option value="6">06</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <select class="form-control required" name="year">
                                                        <option value="1">Year</option>
                                                        <option value="2">2001</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ul class="cards">
                                                        <li class="visa hand"><img src="{{ url('images/1-s.png') }}" alt="card"></li>
                                                        <li class="mastercard hand"><img src="{{ url('images/2-s.png') }}" alt="card"></li>
                                                        <li class="amex hand"><img src="{{ url('images/3-s.png') }}" alt="card"></li>
                                                        <li class="amex hand"><img src="{{ url('images/4-s.png') }}" alt="card"></li>
                                                    </ul>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!--CREDIT CART PAYMENT END-->
                            </fieldset>

                            <h3>Review Cart</h3>
                            <fieldset id="example-advanced-form-p-3" role="tabpanel" aria-labelledby="example-advanced-form-h-3" class="body" aria-hidden="true" style="display: none;">
                                <table class="table display product-overview" id="datable_1">
                                    <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>price</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th colspan="3">Subtotal:</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <img src="{{ url('images/chair.jpg') }}" alt="iMac" width="80">
                                        </td>
                                        <td>Rounded Chair</td>
                                        <td>
                                            <input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default" value="20" name="vertical-spin">
                                        </td>
                                        <td>$400</td>

                                        <td><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{ url('images/chair.jpg') }}" alt="iMac" width="80">
                                        </td>
                                        <td>Rounded Chair</td>
                                        <td>
                                            <input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default" value="10" name="vertical-spin">
                                        </td>
                                        <td>$450</td>
                                        <td><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{ url('images/chair.jpg') }}" alt="iMac" width="80">
                                        </td>
                                        <td>Rounded Chair</td>
                                        <td>
                                            <input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default" value="15" name="vertical-spin">
                                        </td>
                                        <td>$470</td>

                                        <td><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="{{ url('js/jquery.steps.min.js') }}"></script>
        <script src="{{ url('js/plugin_Forms.js') }}"></script>
        <script>
            $("#example-basic").steps({
                headerTag: "h3",
                bodyTag: "section",
                transitionEffect: "slideLeft",
                autoFocus: true
            });

            var form = $("#example-advanced-form").show();

            form.steps({
                headerTag: "h3",
                bodyTag: "fieldset",
                transitionEffect: "slideLeft",
                // onStepChanging: function (event, currentIndex, newIndex)
                // {
                //     // Allways allow previous action even if the current form is not valid!
                //     if (currentIndex > newIndex)
                //     {
                //         return true;
                //     }
                //     // Forbid next action on "Warning" step if the user is to young
                //     if (newIndex === 3 && Number($("#age-2").val()) < 18)
                //     {
                //         return false;
                //     }
                //     // Needed in some cases if the user went back (clean up)
                //     if (currentIndex < newIndex)
                //     {
                //         // To remove error styles
                //         form.find(".body:eq(" + newIndex + ") label.error").remove();
                //         form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
                //     }
                //     form.validate().settings.ignore = ":disabled,:hidden";
                //     return form.valid();
                // },
                // onStepChanged: function (event, currentIndex, priorIndex)
                // {
                //     // Used to skip the "Warning" step if the user is old enough.
                //     if (currentIndex === 2 && Number($("#age-2").val()) >= 18)
                //     {
                //         form.steps("next");
                //     }
                //     // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
                //     if (currentIndex === 2 && priorIndex === 3)
                //     {
                //         form.steps("previous");
                //     }
                // },
                // onFinishing: function (event, currentIndex)
                // {
                //     form.validate().settings.ignore = ":disabled";
                //     return form.valid();
                // },
                // onFinished: function (event, currentIndex)
                // {
                //     alert("Submitted!");
                // }
            }).validate({
                errorPlacement: function errorPlacement(error, element) { element.before(error); },
                rules: {
                    confirm: {
                        equalTo: "#password-2"
                    }
                }
            });
        </script>
    @endpush

@endsection
