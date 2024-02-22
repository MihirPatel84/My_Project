<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container py-3">
        <header>
            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal" style="color: #008cdd; ">Stripe</h1>
            </div>
        </header>

        {{-- <main class="d-flex justify-content-center" style="font-size: 18px">
        <form class="needs-validation" novalidate="" action="http://127.0.0.1:8000/api/stripeCharge" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6 col-lg-6 order-md-last">
                    <div class="col-12">
                        <label for="" class="form-label">First Name</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text">#</span>
                            <input type="text" class="form-control" id="" placeholder="First Name"
                                name="first_name" required="">
                            <div class="invalid-feedback">
                                Your first-name is required.
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="" class="form-label">Last Name</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text">#</span>
                            <input type="text" class="form-control" id="" placeholder="Last Name"
                                name="last_name" required="">
                            <div class="invalid-feedback">
                                Your last-name is required.
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="" class="form-label">Email</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text">@</span>
                            <input type="email" class="form-control" id="" placeholder="email" name="email"
                                required="">
                            <div class="invalid-feedback">
                                Your Email is required.
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="" class="form-label">Amount</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text">$</span>
                            <input type="number" class="form-control" id="" placeholder="Amount"
                                name="amount" required="">
                            <div class="invalid-feedback">
                                Amount is required.
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="mb-3 mt-3">Payment</h2>
                <div class="col-md-6 col-lg-6">

                    <div class="col-12">
                        <label for="cc-name" class="form-label">Name on card</label>
                        <input type="text" class="form-control" id="cc-name" placeholder="card holder name"
                            name="name_on_card" required="">
                        <small class="text-body-secondary">Full name as displayed on card</small>
                        <div class="invalid-feedback">
                            Name on card is required
                        </div>
                    </div>


                    <div class="col-12">
                        <label for="cc-number" class="form-label">Credit card number</label>
                        <input type="text" class="form-control" id="cc-number" placeholder="4242 4242 4242 4242"
                            name="number" required="">
                        <div class="invalid-feedback">
                            Credit card number is required
                        </div>
                    </div>


                    <div class="col-4">
                        <label for="cc-expiration" class="form-label">Exp Month</label>
                        <input type="text" class="form-control" id="cc-expiration" placeholder="month"
                            name="exp_month" required="">
                        <div class="invalid-feedback">
                            Expiration date required
                        </div>
                    </div>

                    <div class="col-4">
                        <label for="cc-expiration" class="form-label">Exp Year</label>
                        <input type="text" class="form-control" id="cc-expiration" placeholder="year"
                            name="exp_year" required="">
                        <div class="invalid-feedback">
                            Expiration date required
                        </div>
                    </div>


                    <div class="col-4">
                        <label for="cc-cvv" class="form-label">CVC</label>
                        <input type="text" class="form-control" id="cc-cvv" placeholder="123" name="cvc"
                            required="">
                        <div class="invalid-feedback">
                            Security code required
                        </div>
                    </div>

                </div>
                <hr class="my-4">

                <button class="w-100 btn btn-primary btn-lg" type="submit" value="submit">Pay</button>
        </form>
    </div>
    </main> --}}

        <main class="d-flex justify-content-center" style="background-color: #d6eaf6">
            <form class="needs-validation" novalidate="" action="http://127.0.0.1:8000/api/stripeCharge"
                method="POST">
                <div class="row">
                    <div class="col-md-6 col-lg-6 order-md-last">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-primary">Payment</span>
                            <span class="badge bg-primary rounded-pill">$</span>
                        </h4>
                        <div class="col-12">
                            <label for="cc-name" class="form-label">Name on card</label>
                            <input type="text" class="form-control" id="cc-name" placeholder="card holder name"
                                name="name_on_card" required="">
                            <small class="text-body-secondary">Full name as displayed on card</small>
                            <div class="invalid-feedback">
                                Name on card is required
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="cc-number" class="form-label">Credit card number</label>
                            <input type="text" class="form-control" id="cc-number" placeholder="4242 4242 4242 4242"
                                name="number" required="">
                            <div class="invalid-feedback">
                                Credit card number is required
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="cc-expiration" class="form-label">Exp Month</label>
                                <input type="text" class="form-control" id="cc-expiration" placeholder="month"
                                    name="exp_month" required="">
                                <div class="invalid-feedback">
                                    Expiration date required
                                </div>
                            </div>
                            <div class="col-4">
                                <label for="cc-expiration" class="form-label">Exp Year</label>
                                <input type="text" class="form-control" id="cc-expiration" placeholder="year"
                                    name="exp_year" required="">
                                <div class="invalid-feedback">
                                    Expiration date required
                                </div>
                            </div>
                            <div class="col-4">
                                <label for="cc-cvv" class="form-label">CVC</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder="123"
                                    name="cvc" required="">
                                <div class="invalid-feedback">
                                    Security code required
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <button class="w-100 btn btn-primary btn-lg" type="submit" value="submit">Pay</button>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-primary">Details</span>
                        </h4>
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="" class="form-label">First Name</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">#</span>
                                    <input type="text" class="form-control" id="" placeholder="First Name"
                                        name="first_name" required="">
                                    <div class="invalid-feedback">
                                        Your first-name is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="" class="form-label">Last Name</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">#</span>
                                    <input type="text" class="form-control" id=""
                                        placeholder="Last Name" name="last_name" required="">
                                    <div class="invalid-feedback">
                                        Your last-name is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="" class="form-label">Email</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">@</span>
                                    <input type="email" class="form-control" id="" placeholder="email"
                                        name="email" required="">
                                    <div class="invalid-feedback">
                                        Your Email is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="" class="form-label">Amount</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">$</span>
                                    <input type="number" class="form-control" id="" placeholder="Amount"
                                        name="amount" required="">
                                    <div class="invalid-feedback">
                                        Amount is required.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </main>
    </div>
</body>

</html>
