@extends('web.layout.master')

@section('content')

<section class="section wb">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-wrapper">
                    <div class="row">
                        @if(session('success'))
                        <div class="col-lg-12">
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        </div>
                        @endif

                         {{-- Hiển thị lỗi nếu có --}}
                        @if($errors->any())
                            <div class="col-lg-12">
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                        <div class="col-lg-5">
                            <h4>Who we are</h4>
                            <p>Tech Blog is a personal blog for handcrafted, cameramade photography content, fashion styles from independent creatives around the world.</p>
           
                            <h4>How we help?</h4>
                            <p>Contact us, we will help you resolve any questions about copyright, images and content.</p>
     
                            <h4>Pre-Sale Question</h4>
                            <p>Fusce dapibus nunc quis quam tempor vestibulum sit amet consequat enim. Pellentesque blandit hendrerit placerat. Integertis non.</p>
                        </div>
                        <div class="col-lg-7">
                            <form class="form-wrapper" action="{{ route('web.contact.store') }}" method="post">
                                @csrf
                                <input type="text" name="name" class="form-control" placeholder="Your name">
                                <input type="text" name="address" class="form-control" placeholder="Email address">
                                <input type="text" name="phone" class="form-control" placeholder="Phone">
                                <input type="text" name="subject" class="form-control" placeholder="Subject">
                                <textarea class="form-control" name= "message" placeholder="Your message"></textarea>
                                <button type="submit" class="btn btn-primary">Send <i class="fa fa-envelope-open-o"></i></button>
                            </form>
                        </div>
                    </div>
                </div><!-- end page-wrapper -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
@endsection