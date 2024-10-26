<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
            <h1 class="display-6 mb-4">If You Have Any Query, Please Feel Free Contact Us</h1>
        </div>
        <div class="row g-0 justify-content-center">
            <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.5s">
                <p class="text-center mb-4">Have a question, comment, or need assistance? Feel free to reach out to our team at High Tech Network Solutions. We're committed to providing prompt and helpful responses to all inquiries. Simply fill out the form below, and we'll get back to you as soon as possible.</p>
                <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 200px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div id="sentmessage" class="col-12 text-center">
                            <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            @if (session('info'))
                            <br><br>
                            <div  class="alert alert-success">

                                {{ session('info') }}
                            </div>
                    @endif
        </div>
    </div>
</div>
<!-- Contact End -->


<!-- Google Map Start -->
<div class="container-xxl pt-5 px-0 wow fadeIn" data-wow-delay="0.1s">
    {{-- <iframe class="w-100 mb-n2" style="height: 450px;"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
        frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0">
    </iframe> --}}
    <iframe class="w-100 mb-n2" style="height: 450px;"
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3349.5109507345037!2d-96.88844692562645!3d32.91109617712422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c270017dcd47f%3A0x4a31ea28e07b500a!2sHitech%20Network%20Solutions!5e0!3m2!1sen!2s!4v1724952334076!5m2!1sen!2s" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0">
</iframe>
</div>
<!-- Google Map End -->
