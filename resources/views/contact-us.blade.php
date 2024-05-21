<!-- Header -->
@include('header')
        <div id="content">
            <section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div class="card box-shadow">
                                <div class="card-body">
                                    <div class="text-center">
                                        <h2>Contact Us</h2>
                                            <p>Please fill below form</p>
                                    </div>
                                    <form action="" class="form mb-0">
                                        <div class="form-group mb-4">
                                            <label class="form-label" for="name">Enter your full name</label>
                                            <input class="form-control" type="text" name="name" id="name">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="form-label" for="name">Enter your email address </label>
                                            <input class="form-control" type="email" name="email" id="email">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="form-label" for="name">Enter your subject</label>
                                            <input class="form-control" type="text" name="subject" id="subject">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="form-label" for="name">Enter your message</label>
                                            <textarea class="form-control" name="message" id="" cols="20"
                                                rows="10"></textarea>
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- /Content -->
    </div>
   @include('footer')
</body>

</html>