@extends('layouts.app')

@section('content')
    <!--Introduction-->
    <section id="about" class="introduction scrollto">
        <div class="row clearfix">
            <div class="col-3">
                <div class="section-heading">
                    <h3>About</h3>
                    <h2 class="section-title">Who are we?</h2>
                    <p class="section-subtitle">
                        Runjani is a passionate running community based in the beautiful island of Lombok. Dedicated to both
                        road and trail running, we welcome runners of all ages and backgrounds to join us.
                        <br>
                        Guided by our inspiring tagline, <strong>"Dong Ayok Lari"</strong>, meaning "Come on, Let’s Run,"
                        we aim to promote a healthy and active lifestyle while fostering unity and connection through the
                        love of running.
                    </p>
                </div>

            </div>

            <div class="col-2-3">

                <!--Icon Block-->
                <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.1s">
                    <!--Icon-->
                    <div class="icon">
                        <i class="fa fa-calendar fa-2x"></i>
                    </div>
                    <!--Icon Block Description-->
                    <div class="icon-block-description">
                        <h4>Born in 2016</h4>
                        <p>
                            We launched on July 29, 2016, during Rinjani100's debut event in Sembalun, Lombok. Our name,
                            RUNJANI, combines 'Run' and 'Rinjani,' reflecting our goal to positively impact the community.
                        </p>
                    </div>
                </div>
                <!--End of Icon Block-->

                <!--Icon Block-->
                <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.3s">
                    <!--Icon-->
                    <div class="icon">
                        <i class="fa fa-bolt fa-2x"></i>
                    </div>
                    <!--Icon Block Description-->
                    <div class="icon-block-description">
                        <h4>Mission</h4>
                        <p>
                            Our mission and goal are to spread the running spirit and make it embraced by the community. We
                            hope that running can become a part of a healthy lifestyle for everyone.
                        </p>
                    </div>
                </div>
                <!--End of Icon Block-->

                <!--Icon Block-->
                <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.5s">
                    <!--Icon-->
                    <div class="icon">
                        <i class="fa fa-users fa-2x"></i>
                    </div>
                    <!--Icon Block Description-->
                    <div class="icon-block-description">
                        <h4>Member</h4>
                        <p>
                            We currently have over 500+ active members through our WhatsApp group, comprising diverse
                            backgrounds and age groups. We warmly welcome new members without any requirements or
                            registration fees.
                        </p>
                    </div>
                </div>
                <!--End of Icon Block-->

                <!--Icon Block-->
                <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.5s">
                    <!--Icon-->
                    <div class="icon">
                        <i class="fa fa-rocket fa-2x"></i>
                    </div>
                    <!--Icon Block Description-->
                    <div class="icon-block-description">
                        <h4>Regular Session</h4>
                        <p>
                            We have two regular weekly running sessions: SAR (Saturday Morning Run) and WNR (Wednesday Night
                            Run). Additionally, we have a weekend long run session.
                            Beyond running, we also organize core training, drills, and interval sessions to enhance
                            performance and fitness.
                        </p>
                    </div>
                </div>
                <!--End of Icon Block-->
            </div>
        </div>
    </section>
    <!--End of Introduction-->

    <!--Gallery-->
    <aside id="gallery" class="row text-center scrollto clearfix" data-featherlight-gallery data-featherlight-filter="a">

        <a href="images/gallery-images/gallery-image-1.jpg" data-featherlight="image" class="col-3 wow fadeIn"
            data-wow-delay="0.1s"><img src="{{ asset('frontend/images/gallery-images/gallery-image-1.jpg') }}"
                alt="Landing Page" /></a>
        <a href="images/gallery-images/gallery-image-2.jpg" data-featherlight="image" class="col-3 wow fadeIn"
            data-wow-delay="0.3s"><img src="{{ asset('frontend/images/gallery-images/gallery-image-2.jpg') }}"
                alt="Landing Page" /></a>
        <a href="images/gallery-images/gallery-image-3.jpg" data-featherlight="image" class="col-3 wow fadeIn"
            data-wow-delay="0.5s"><img src="{{ asset('frontend/images/gallery-images/gallery-image-3.jpg') }}"
                alt="Landing Page" /></a>
        <a href="images/gallery-images/gallery-image-4.jpg" data-featherlight="image" class="col-3 wow fadeIn"
            data-wow-delay="1.1s"><img src="{{ asset('frontend/images/gallery-images/gallery-image-4.jpg') }}"
                alt="Landing Page" /></a>
        <a href="images/gallery-images/gallery-image-5.jpg" data-featherlight="image" class="col-3 wow fadeIn"
            data-wow-delay="0.9s"><img src="{{ asset('frontend/images/gallery-images/gallery-image-5.jpg') }}"
                alt="Landing Page" /></a>
        <a href="images/gallery-images/gallery-image-6.jpg" data-featherlight="image" class="col-3 wow fadeIn"
            data-wow-delay="0.7s"><img src="{{ asset('frontend/images/gallery-images/gallery-image-6.jpg') }}"
                alt="Landing Page" /></a>

    </aside>
    <!--End of Gallery-->

    <!--Content Section-->
    <div id="services" class="scrollto clearfix">
        <div class="row no-padding-bottom clearfix">
            <!--Content Left Side-->
            <div class="col-3">
                <!--User Testimonial-->
                <blockquote class="testimonial text-right bigtest">
                    <q>
                        A running community serves as a platform to invite and gather people, helping them to better
                        understand and appreciate the sport of running.
                        We want you to not only run but also grow and make a positive impact on those around you.
                    </q>
                    <footer>— Imam Ahmad, Captain</footer>
                </blockquote>
                <!-- End of Testimonial-->
            </div>
            <!--End Content Left Side-->

            <!--Content of the Right Side-->
            <div class="col-3">
                <div class="section-heading">
                    <h3>Just run, but not only run</h3>
                    <h2 class="section-title">Focusing On What Matters Most</h2>
                    <p class="section-subtitle">
                        Running is a simple and enjoyable activity that doesn’t require complicated rules or equipment. It
                        should be a source of joy and relaxation, not something stressful or overwhelming. By focusing on
                        the fun aspect, running becomes an activity that anyone can enjoy, regardless of their skill level
                        or experience.
                    </p>
                </div>
                <p>
                    Running isn’t just about physical exercise; it’s also a way to radiate positivity. Whether it’s through
                    the energy and motivation you exude during a run or the inspiration you provide to others, running can
                    uplift not only yourself but also the people in your community. It’s a ripple effect of positivity that
                    starts with one step and spreads far beyond.
                </p>
                <p>
                    Being part of a running community provides an opportunity to meet people who share similar interests.
                    These gatherings often lead to meaningful friendships and connections that extend beyond running.
                    Sharing stories, goals, and achievements during group runs creates a sense of camaraderie and belonging,
                    enriching both your social life and your running journey.
                </p>
                <!-- Just replace the Video ID "UYJ5IjBRlW8" with the ID of your video on YouTube (Found within the URL) -->
                <a href="#" data-videoid="UYJ5IjBRlW8" data-videosite="youtube" class="button video link-lightbox">
                    WATCH VIDEO <i class="fa fa-play" aria-hidden="true"></i>
                </a>
            </div>
            <!--End Content Right Side-->

            <div class="col-3">
                <img src="{{ asset('frontend/images/dancer.jpg') }}" alt="Dancer" />
            </div>

        </div>
    </div>
    <!--End of Content Section-->

    <!--Testimonials-->
    <aside id="testimonials" class="scrollto text-center" data-enllax-ratio=".2">
        <div class="row clearfix">
            <div class="section-heading">
                <h3>FEEDBACK</h3>
                <h2 class="section-title">What our customers are saying</h2>
            </div>

            <!--User Testimonial-->
            <blockquote class="col-3 testimonial classic">
                <img src="{{ asset('frontend/images/user-images/user-1.jpg') }}" alt="User" />
                <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore
                    et dolore magna aliqua</q>
                <footer>John Doe - Happy Customer</footer>
            </blockquote>
            <!-- End of Testimonial-->

            <!--User Testimonial-->
            <blockquote class="col-3 testimonial classic">
                <img src="{{ asset('frontend/images/user-images/user-2.jpg') }}" alt="User" />
                <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore
                    et dolore magna aliqua</q>
                <footer>Roslyn Doe - Happy Customer</footer>
            </blockquote>
            <!-- End of Testimonial-->

            <!--User Testimonial-->
            <blockquote class="col-3 testimonial classic">
                <img src="{{ asset('frontend/images/user-images/user-3.jpg') }}" alt="User" />
                <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore
                    et dolore magna aliqua</q>
                <footer>Thomas Doe - Happy Customer</footer>
            </blockquote>
            <!-- End of Testimonial-->
        </div>
    </aside>
    <!--End of Testimonials-->

    <!--Clients-->
    <section id="clients" class="scrollto clearfix">
        <div class="row clearfix">
            <div class="col-3">
                <div class="section-heading">
                    <h3>TRUST</h3>
                    <h2 class="section-title">Companies who use our services</h2>
                    <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam!</p>
                </div>
            </div>

            <div class="col-2-3">
                <a href="#" class="col-3">
                    <img src="{{ asset('frontend/images/company-images/company-logo1.png') }}" alt="Company" />
                    <div class="client-overlay"><span>Tree</span></div>
                </a>
                <a href="#" class="col-3">
                    <img src="{{ asset('frontend/images/company-images/company-logo2.png') }}" alt="Company" />
                    <div class="client-overlay"><span>Fingerprint</span></div>
                </a>
                <a href="#" class="col-3">
                    <img src="{{ asset('frontend/images/company-images/company-logo3.png') }}" alt="Company" />
                    <div class="client-overlay"><span>The Man</span></div>
                </a>
                <a href="#" class="col-3">
                    <img src="{{ asset('frontend/images/company-images/company-logo4.png') }}" alt="Company" />
                    <div class="client-overlay"><span>Mustache</span></div>
                </a>
                <a href="#" class="col-3">
                    <img src="{{ asset('frontend/images/company-images/company-logo5.png') }}" alt="Company" />
                    <div class="client-overlay"><span>Goat</span></div>
                </a>
                <a href="#" class="col-3">
                    <img src="{{ asset('frontend/images/company-images/company-logo6.png') }}" alt="Company" />
                    <div class="client-overlay"><span>Justice</span></div>
                </a>
                <a href="#" class="col-3">
                    <img src="{{ asset('frontend/images/company-images/company-logo7.png') }}" alt="Company" />
                    <div class="client-overlay"><span>Ball</span></div>
                </a>
                <a href="#" class="col-3">
                    <img src="{{ asset('frontend/images/company-images/company-logo8.png') }}" alt="Company" />
                    <div class="client-overlay"><span>Cold</span></div>
                </a>
                <a href="#" class="col-3">
                    <img src="{{ asset('frontend/images/company-images/company-logo9.png') }}" alt="Company" />
                    <div class="client-overlay"><span>Cold</span></div>
                </a>
            </div>
        </div>
    </section>
    <!--End of Clients-->

    <!--Pricing Tables-->
    <section id="pricing" class="secondary-color text-center scrollto clearfix ">
        <div class="row clearfix">
            <div class="section-heading">
                <h3>YOUR CHOICE</h3>
                <h2 class="section-title">We have the right package for you</h2>
            </div>

            <!--Pricing Block-->
            <div class="pricing-block col-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="pricing-block-content">
                    <h3>Personal</h3>
                    <p class="pricing-sub">The standard version</p>
                    <div class="pricing">
                        <div class="price"><span>$</span>19</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                    <ul>
                        <li>5 Downloads</li>
                        <li>2 Extensions</li>
                        <li>Tutorials</li>
                        <li>Forum Support</li>
                        <li>1 year free updates</li>
                    </ul>
                    <a href="#" class="button">BUY TODAY</a>
                </div>
            </div>
            <!--End Pricing Block-->

            <!--Pricing Block-->
            <div class="pricing-block featured col-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="pricing-block-content">
                    <h3>Student</h3>
                    <p class="pricing-sub">Most popular choice</p>
                    <div class="pricing">
                        <div class="price"><span>$</span>29</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                    <ul>
                        <li>15 Downloads</li>
                        <li>5 Extensions</li>
                        <li>Tutorials with Files</li>
                        <li>Forum Support</li>
                        <li>2 years free updates</li>
                    </ul>
                    <a href="#" class="button">BUY TODAY</a>
                </div>
            </div>
            <!--End Pricing Block-->

            <!--Pricing Block-->
            <div class="pricing-block col-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="pricing-block-content">
                    <h3>Business</h3>
                    <p class="pricing-sub">For the whole team</p>
                    <div class="pricing">
                        <div class="price"><span>$</span>49</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                    <ul>
                        <li>Unlimited Downloads</li>
                        <li>Unlimited Extensions</li>
                        <li>HD Video Tutorials</li>
                        <li>Chat Support</li>
                        <li>Lifetime free updates</li>
                    </ul>
                    <a href="#" class="button">BUY TODAY</a>
                </div>
            </div>
            <!--End Pricing Block-->

        </div>
    </section>
    <!--End of Pricing Tables-->
@endsection
