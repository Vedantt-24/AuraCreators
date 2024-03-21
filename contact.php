
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Contact - Aura Creators</title>
</head>
<body>
    <div class="contactUs">

        <div class="title">
            <h2>Get In Touch</h2>
        </div>

        <div class="box">
            
            <!-- Form -->
            <div class="contact form">
                <h3>Send a Message</h3>

                <form action="connect.php" method="post">

                    <div class="formbox">

                        <div class="row50">

                            <div class="inputbox">
                                <span>First Name</span>
                                <input type="text" placeholder="john" id="firstName" name="firstName">
                            </div>
                            <div class="inputbox">
                                <span>Last Name</span>
                                <input type="text" placeholder="doe" id="lastName" name="lastName">
                            </div>
                        </div>

                        <div class="row50">
                            <div class="inputbox">
                                <span>Email</span>
                                <input type="text" placeholder="johndoe@gmail.com" id="email" name="email">
                            </div>
                            <div class="inputbox">
                                <span>Phone Number</span>
                                <input type="text" placeholder="+91 808 085 0046" id="number" name="number">
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputbox">
                                <span>Message</span>
                                <textarea placeholder="Write your message here.." id="message" name="message"></textarea>
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputbox">
                                <input type="submit" value="Send" id="submit">
                            </div>
                        </div>

                    </div>
                </form>
            </div>
  
            <!-- Info -->
            <div class="contact info">
                <h3>Contact Info</h3>
                <div class="infoBox">
                    <div>
                        <span><ion-icon name="location-outline"></ion-icon></span>
                        <p>45, Kakad Ind Estate, Matunga (W), Mumbai 400016 <br>INDIA</p>
                    </div>
                    <div>
                        <span><ion-icon name="mail-outline"></ion-icon></span>
                        <a href="mailto:socialauracreators@gmail.com">socialauracreators@gmail.com</a>
                    </div>
                    <div>
                        <span><ion-icon name="call-outline"></ion-icon></span>
                        <a href="tel:+91 8080850046">+91 8080850046</a>
                    </div>
                </div>

                <!-- Social Media -->
                <ul class="sci">
                    <li><a href="https://www.linkedin.com/company/aura-creators/?viewAsMember=true"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                    <li><a href="https://www.instagram.com/aura_creators15/"><ion-icon name="logo-instagram"></ion-icon></a></li>
                    <li><a href="https://www.facebook.com/people/Aura-Creators/61556614435677/"><ion-icon name="logo-facebook"></ion-icon></a></li>
                    <li><a href="https://www.youtube.com/channel/UC8T-j-BRr46DDC3ygsJ3Ffg"><ion-icon name="logo-youtube"></ion-icon></a></li>
                </ul>
            </div>

            <!-- Map -->
            <div class="contact map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d993.750770138386!2d72.84166434376888!3d19.032319524131733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ced25681a2f9%3A0x40825b64356c1a74!2sKakad%20Udyog%20Bhavan!5e0!3m2!1sen!2sin!4v1709806126221!5m2!1sen!2sin"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
             </div>

        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
