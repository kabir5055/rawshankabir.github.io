<section id="fooder">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common_heading text-center ">
                    <h3 class="cont">Contract</h3>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="left">
                    <h3>Contract</h3>
                    <div class="phone">
                        <a><i class="fas fa-phone-square-alt"></i></a>
                    </div>
                    <div class="nmbr">
                        <p class="p1">+8801773-932800</p>
                        <p>+8801732-939329</p>
                    </div>
                    <div class="mail">
                        <a><i class="fas fa-envelope-open"></i></a>
                    </div>
                    <div class="mailadd">
                        <p class="p2">rawshankabir0@gmail.com</p>
                        <p>rawshankabir0@yahoo.com</p>
                    </div>
                    <div class="left_icon">
                        <ul>
                            <li><a href="https://www.facebook.com/rawshan.55/" target="blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/rawshan5055" target="blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://mail.google.com/mail/u/0/#inbox?compose=new" target="blank"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="middle">
                    <h3 class="mh3">Messages</h3>
                    <div class="contact_main">
                        <form action="{{ route('message') }}" method="post">
                            @csrf
                            <input class="name" type="text" name="name" placeholder="Full Name" >
                            <input class="email" type="email" name="email" placeholder="Email Address" >
                            <textarea name="message" id="msg" placeholder="Message"></textarea>
                            <div class="check">
                                <button type="submit">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="right">
                    <h3>Location</h3>
                    <p>F#A-1, H#4, R#1, B#D, Kaderabad Housing, Katasur, Mohammadpur, Dhaka-1207.</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.8198462644564!2d90.35780431534477!3d23.753802894562305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8e0191761775e615!2zMjPCsDQ1JzEzLjciTiA5MMKwMjEnMzYuMCJF!5e0!3m2!1sen!2sbd!4v1646163645786!5m2!1sen!2sbd" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="col-lg-12 copy">
                <p>Copyright © 2019 <a href="#">Mr.Kabir</a> All Rights Reserved</p>
            </div>
        </div>
    </div>
</section>
