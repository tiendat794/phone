
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="?">Trang chủ</a></li>
                <li class="active">Liên hệ</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- Begin Contact Main Page Area -->
<div class="contact-main-page mt-60 mb-40 mb-md-40 mb-sm-40 mb-xs-40">
    <div class="container mb-60">
        <div id="google-map"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 offset-lg-1 col-md-12 order-1 order-lg-2">
                <div class="contact-page-side-content">
                    <h3 class="contact-page-title">Liên hệ</h3>
                    <p class="contact-page-message mb-25">Liên hệ với chúng tôi để được giải thích cận kẻ và nhiệt tình với các đội ngũ hỗ trợ 24/7</p>
                    <div class="single-contact-block">
                        <h4><i class="fa fa-fax"></i> Địa chỉ</h4>
                        <p>Quận 1.TP.HCM</p>
                    </div>
                    <div class="single-contact-block">
                        <h4><i class="fa fa-phone"></i> Điện thoại</h4>
                        <p>Mobile: (08) 123 456 789</p>
                        <p>Hotline: 1009 678 456</p>
                    </div>
                    <div class="single-contact-block last-child">
                        <h4><i class="fa fa-envelope-o"></i> Email</h4>
                        <p>yourmail@domain.com</p>
                        <p>support@hastech.company</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                <div class="contact-form-content pt-sm-55 pt-xs-55">
                    <h3 class="contact-page-title">Hãy gửi lời phản hồi cho chúng tôi</h3>
                    <div class="contact-form">
                        <form  action="?act=contact&lh=1" method="post">
                        
                        <div class="form-group">
                        <input type="text" id="tennd" name="tennd" placeholder="Họ và tên">
                        <span style="color:red"><?php if (isset($_GET['lh'])) {
                           echo $error_tennd;
                        } ?></span>
                        </div>
                        <div class="form-group">
                          <input type="email" name="email" placeholder="Email">
                          <span style="color:red"><?php if (isset($_GET['lh'])) {
                           echo $error_email;
                        } ?></span>
                        </div>
                        <div class="form-group">
                        <textarea row="3" type="text" name="noidung" placeholder="Nhập lời phản hồi"></textarea>
                        <span style="color:red"><?php if (isset($_GET['lh'])) {
                           echo $error_email;
                        } ?></span>
                        </div>
                        <div class="col-md-6">
                          <input class="gui" type="submit" value="Gửi" name="gui"  class="li-btn-3">                          
                          
                        </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Main Page Area End Here -->
<!-- Begin Footer Area -->

<!-- Main/Activator js -->
<script src="view/vendor/js/main.js"></script>
<!-- Google Map -->
<script src="https://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;v=3.22&amp;key=AIzaSyChs2QWiAhnzz0a4OEhzqCXwx_qA9ST_lE"></script>

<script>
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 12,
            scrollwheel: false,
            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(40.740610, -73.935242), // New York
            // How you would like to style the map. 
            // This is where you would paste any style found on
            styles: [{
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#e9e9e9"
                }, {
                    "lightness": 17
                }]
            }, {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#f5f5f5"
                }, {
                    "lightness": 20
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#ffffff"
                }, {
                    "lightness": 17
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#ffffff"
                }, {
                    "lightness": 29
                }, {
                    "weight": 0.2
                }]
            }, {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#ffffff"
                }, {
                    "lightness": 18
                }]
            }, {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#ffffff"
                }, {
                    "lightness": 16
                }]
            }, {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#f5f5f5"
                }, {
                    "lightness": 21
                }]
            }, {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#dedede"
                }, {
                    "lightness": 21
                }]
            }, {
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "visibility": "on"
                }, {
                    "color": "#ffffff"
                }, {
                    "lightness": 16
                }]
            }, {
                "elementType": "labels.text.fill",
                "stylers": [{
                    "saturation": 36
                }, {
                    "color": "#333333"
                }, {
                    "lightness": 40
                }]
            }, {
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#f2f2f2"
                }, {
                    "lightness": 19
                }]
            }, {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#fefefe"
                }, {
                    "lightness": 20
                }]
            }, {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#fefefe"
                }, {
                    "lightness": 17
                }, {
                    "weight": 1.2
                }]
            }]
        };
        // Get the HTML DOM element that will contain your map 
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('google-map');
        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);
        // Let's also add a marker while we're at it
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(40.740610, -73.935242),
            map: map,
            title: 'Limupa',
            animation: google.maps.Animation.BOUNCE
        });
    }
</script>
<?php 
    if (isset($_GET['lh']) && ($_GET['lh'])==1){
        date_default_timezone_set('Etc/UTC');
require './smtpmail/PHPMailerAutoload.php';
// Create a new PHPMailer instance
$mail = new PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "wixc8657@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "nguyenkhoavy12345";

//Set who the message is to be sent from
$mail->setFrom('wixc8657@gmail.com', 'Thảo Nguyên');

//Set an alternative reply-to address
$mail->addReplyTo('wixc8657@gmail.com', 'Thảo Nguyên');

//Set who the message is to be sent to
$mail->addAddress($email, $tennd);

//Set the subject line
$mail->Subject = 'Cảm ơn bạn đã gởi lời phản hồi ';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($noidung);

//Replace the plain text body with one created manually
// $mail->AltBody = 'This is a plain-text message body';

//Attach an image file
// $mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if ($mail->send()) {
    echo "Nhận ";
} 

    }
?>


  

  