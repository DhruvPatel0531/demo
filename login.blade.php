<x-header />

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 mx-auto">
                    <div class="contact__form">
                        @if(session()->has('sucess'))
                        <div class ="alert alert-success">
                                <p>{{session()->get('success')}}</p>
                                @endif
                        </div>
                        <form action="{{URL::to('loginuser')}}" method="POST" enstype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="col-lg-12">
                                    <input type="password" name="password"  placeholder="Password" required>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" name="register" class="site-btn">Login</button>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

<x-footer />
