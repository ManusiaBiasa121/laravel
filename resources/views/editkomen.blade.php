@extends('layouts.main')
@section('contact')



<section class="page-section" id="contact">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center" data-aos="flip-left">
                <h2 class="mt-0">Mari Mengobrol!</h2>
                <hr class="divider" />
                <p class="text-muted mb-5">Apakah Anak Anda Ingin Masuk SMK? Mari Mengobrol Dengan Kami.</p>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
            <div class="col-lg-6">
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                
                <form method="post" action="{{ route('template.update', $contact->id) }}" >
                    @csrf
                    @method('PUT')
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" name="nama" type="text" placeholder="Enter your name..." data-sb-validations="required"/>
                        <label for="name">Nama</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">Butuh Nama</div>
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" name="pesan" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required">{{ old('message', $contact->message) }}</textarea>
                        <label for="message">Pesan</label>
                        <div class="invalid-feedback" data-sb-feedback="message:required">Pesan Dibutuhkan</div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Pengiriman Form Sukses</div>
                            
                            <br />
                            <a href="#">Oke!</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Ada eror saat mengirim</div></div>
                    <!-- Submit Button-->
                    <div class="d-grid"><button class="btn btn-primary btn-xl-" type="submit">Kirim</button></div>

                    
                </form>
                
            </div>
        </div>
        
        </div>
    </div>
</section>
@endsection