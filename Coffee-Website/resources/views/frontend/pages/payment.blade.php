@extends("frontend.master")
@section("content")
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/menu.css') }}">

    <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:300);

        .body {
        // custom fonts, etcetera can go here
        }

        .jumbotron-flat {
            background-color: solid #4DB8FFF;
            height: 100%;
            border: 1px solid #4DB8FF;
            background: white;
            width: 100%;
            text-align: center;
            overflow: auto;
        }

        .paymentAmt {
            font-size: 80px;
        }

        .centered {
            text-align: center;
        }

        .title {
            padding-top: 15px;
        }
    </style>
    <section class="item_product">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                        <form action="{{ route('post_payment') }}" style="margin-top: 20px" method="POST" style="margin-top: 138px">
                            @csrf
                                <div class='form-group' style="margin-top: 150px">
                                    <label class='control-label' style="margin-top: 20px">Name</label>
                                    <input autocomplete='off' class='form-control' type='text' name="name" placeholder="name" required>
                                </div>

                                <div class='form-group'>
                                    <label class='control-label' style="margin-top: 20px">Email</label>
                                    <input  class='form-control' type='text' name="email" placeholder="Email" required>
                                </div>
                            <div class='form-group'>
                                <label class='control-label' style="margin-top: 20px">Phone</label>
                                <input  class='form-control' type='text' name="phone" placeholder="Phone" required>
                            </div>

                            <div class='form-group'>
                                <label class='control-label' style="margin-top: 20px">Address</label>
                                <input  class='form-control' type='text' name="address" placeholder="Address" required>
                            </div>

                            <div class='form-group'>
                                <label class='control-label' style="margin-top: 20px">Note</label>
                                <textarea name="note"  class='form-control' placeholder="Note"></textarea>
                            </div>

                            <div class='form-group'>
                                <button type="submit" class="btn btn-primary" style="color: #FFFFFF !important;padding: 0px 10px">Done</button>
                            </div>

                        </form>
                </div>
            </div>

        </div>
    </section>
@endsection
