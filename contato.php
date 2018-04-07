<?php include_once 'header.php'; ?>
<link href="assets/css/style.inner.css" rel="stylesheet">










<section id="contato">

    <div class="address-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="contact-address"> <i class="fa fa-map-marker"></i>
                        <h6>House 06, Road 01, Katashur, Mohammadpur</h6>
                        <h6>Dhaka-1207, Bangladesh</h6>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="contact-address"> <i class="fa fa-phone"></i>
                        <h6>(44) 1945 0827</h6>
                        <h6>(44) 1945 0827</h6>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="contact-address"> <i class="fa fa-envelope-o"></i>
                        <h6>companyname@gmail.com</h6>
                        <h6>info@domainname.com</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="google-map-section">
        <div class="container-fluid">
            <section id="cd-google-map">
                <div id="google-container"></div>
                <div id="cd-zoom-in"></div>
                <div id="cd-zoom-out"></div>
            </section>
        </div>
    </div>
    <div class="message-box-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="message-box">
                        <form id="contact-form" action="" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="section-title">Fale Conosco</h4>
                                </div>
                                <div class="col-md-6">
                                    <input name="name" placeholder="Nome Completo" type="text"> </div>
                                <div class="col-md-6">
                                    <input name="email" placeholder="Email" type="text"> </div>
                                <div class="col-md-6">
                                    <input name="city" placeholder="Cidade" type="text"> </div>
                                <div class="col-md-6">
                                    <input name="phone" placeholder="Telefone" type="text"> </div>
                                <div class="col-md-12">
                                    <textarea class="custom-textarea" name="message" placeholder="Mensagem"></textarea>
                                    <button class="submit-btn" type="submit">Enviar</button>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
    jQuery(document).ready(function($) {
        var $latitude = -23.407035,
            $longitude = -51.903931,
            $map_zoom = 17;
        var is_internetExplorer11 = navigator.userAgent.toLowerCase().indexOf('trident') > -1;
        var $marker_url = (is_internetExplorer11) ? 'assets/img/icon-location.png' : 'assets/img/icon-location_.svg';
        var $main_color = '#2d313f',
            $saturation = -20,
            $brightness = 5;
        var style = [{
                elementType: "labels",
                stylers: [{
                    saturation: $saturation
                }]
            },
            {
                featureType: "poi",
                elementType: "labels",
                stylers: [{
                    visibility: "off"
                }]
            },
            {
                featureType: 'road.highway',
                elementType: 'labels',
                stylers: [{
                    visibility: "off"
                }]
            },
            {
                featureType: "road.local",
                elementType: "labels.icon",
                stylers: [{
                    visibility: "off"
                }]
            },
            {
                featureType: "road.arterial",
                elementType: "labels.icon",
                stylers: [{
                    visibility: "off"
                }]
            },
            {
                featureType: "road",
                elementType: "geometry.stroke",
                stylers: [{
                    visibility: "off"
                }]
            },
            {
                featureType: "transit",
                elementType: "geometry.fill",
                stylers: [{
                        hue: $main_color
                    },
                    {
                        visibility: "on"
                    },
                    {
                        lightness: $brightness
                    },
                    {
                        saturation: $saturation
                    }
                ]
            },
            {
                featureType: "poi",
                elementType: "geometry.fill",
                stylers: [{
                        hue: $main_color
                    },
                    {
                        visibility: "on"
                    },
                    {
                        lightness: $brightness
                    },
                    {
                        saturation: $saturation
                    }
                ]
            },
            {
                featureType: "poi.government",
                elementType: "geometry.fill",
                stylers: [{
                        hue: $main_color
                    },
                    {
                        visibility: "on"
                    },
                    {
                        lightness: $brightness
                    },
                    {
                        saturation: $saturation
                    }
                ]
            },
            {
                featureType: "poi.sport_complex",
                elementType: "geometry.fill",
                stylers: [{
                        hue: $main_color
                    },
                    {
                        visibility: "on"
                    },
                    {
                        lightness: $brightness
                    },
                    {
                        saturation: $saturation
                    }
                ]
            },
            {
                featureType: "poi.attraction",
                elementType: "geometry.fill",
                stylers: [{
                        hue: $main_color
                    },
                    {
                        visibility: "on"
                    },
                    {
                        lightness: $brightness
                    },
                    {
                        saturation: $saturation
                    }
                ]
            },
            {
                featureType: "poi.business",
                elementType: "geometry.fill",
                stylers: [{
                        hue: $main_color
                    },
                    {
                        visibility: "on"
                    },
                    {
                        lightness: $brightness
                    },
                    {
                        saturation: $saturation
                    }
                ]
            },
            {
                featureType: "transit",
                elementType: "geometry.fill",
                stylers: [{
                        hue: $main_color
                    },
                    {
                        visibility: "on"
                    },
                    {
                        lightness: $brightness
                    },
                    {
                        saturation: $saturation
                    }
                ]
            },
            {
                featureType: "transit.station",
                elementType: "geometry.fill",
                stylers: [{
                        hue: $main_color
                    },
                    {
                        visibility: "on"
                    },
                    {
                        lightness: $brightness
                    },
                    {
                        saturation: $saturation
                    }
                ]
            },
            {
                featureType: "landscape",
                stylers: [{
                        hue: $main_color
                    },
                    {
                        visibility: "on"
                    },
                    {
                        lightness: $brightness
                    },
                    {
                        saturation: $saturation
                    }
                ]

            },
            {
                featureType: "road",
                elementType: "geometry.fill",
                stylers: [{
                        hue: $main_color
                    },
                    {
                        visibility: "on"
                    },
                    {
                        lightness: $brightness
                    },
                    {
                        saturation: $saturation
                    }
                ]
            },
            {
                featureType: "road.highway",
                elementType: "geometry.fill",
                stylers: [{
                        hue: $main_color
                    },
                    {
                        visibility: "on"
                    },
                    {
                        lightness: $brightness
                    },
                    {
                        saturation: $saturation
                    }
                ]
            },
            {
                featureType: "water",
                elementType: "geometry",
                stylers: [{
                        hue: $main_color
                    },
                    {
                        visibility: "on"
                    },
                    {
                        lightness: $brightness
                    },
                    {
                        saturation: $saturation
                    }
                ]
            }
        ];

        //set google map options
        var map_options = {
            center: new google.maps.LatLng($latitude, $longitude),
            zoom: $map_zoom,
            panControl: false,
            zoomControl: false,
            mapTypeControl: false,
            streetViewControl: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false,
            styles: style,
        }
        //inizialize the map
        var map = new google.maps.Map(document.getElementById('google-container'), map_options);
        //add a custom marker to the map				
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng($latitude, $longitude),
            map: map,
            visible: true,
            icon: $marker_url,
        });

        //add custom buttons for the zoom-in/zoom-out on the map
        function CustomZoomControl(controlDiv, map) {
            //grap the zoom elements from the DOM and insert them in the map 
            var controlUIzoomIn = document.getElementById('cd-zoom-in'),
                controlUIzoomOut = document.getElementById('cd-zoom-out');
            controlDiv.appendChild(controlUIzoomIn);
            controlDiv.appendChild(controlUIzoomOut);

            // Setup the click event listeners and zoom-in or out according to the clicked element
            google.maps.event.addDomListener(controlUIzoomIn, 'click', function() {
                map.setZoom(map.getZoom() + 1)
            });
            google.maps.event.addDomListener(controlUIzoomOut, 'click', function() {
                map.setZoom(map.getZoom() - 1)
            });
        }

        var zoomControlDiv = document.createElement('div');
        var zoomControl = new CustomZoomControl(zoomControlDiv, map);

        //insert the zoom div on the top left of the map
        map.controls[google.maps.ControlPosition.LEFT_TOP].push(zoomControlDiv);
    });

</script>
<?php include_once 'footer.php'; ?>
