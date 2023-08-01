<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mapping</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!-- jsFiddle will insert css and js -->
    <style>
        #map{
            height: 500px;
            width: 70%;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Data Mapping</h1>
    <div id="map"></div>

    <script>
        function initMap(){
            //map options
            var options = {
                zoom:13,
                center:{lat:15.709351225379201, lng: 120.36908566142336}
            }

            //new map
            var map = new 
            google.maps.Map(document.getElementById('map'), options);

            /*
            //add marker
            var marker = new google.maps.Marker({
                position:{lat:15.621418630734787, lng: 120.30419421728101},
                map:map,
                icon:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
            })

            var infoWindow = new google.maps.InfoWindow({
                content:'<h1>San Clemente</h1>'
            });

            marker.addListener('click', function(){
                infoWindow.open(map, marker);
            });
            */


            //array of markers
            var markers = [
            {
                coords:{lat:15.621418630734787, lng: 120.30419421728101},
                iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                content:'<h3>Mt. Damas</h3> <br> <p> pang hiking , minsan sumasabog</p>'
            
            
            },
            {
                coords:{lat:15.628565096130034, lng: 120.28884295848673},
                content:'<h3>Dueg Capya Kem Talna</h3> <br> <p>Madaming tinda na walis tabo at unggoy </p>'
            
            },
            {
                coords:{lat:15.722518553123889, lng: 120.3656608425448},  
                content:'<h3>Doclong 1st </h3> <br> <p>70% rice <br> 25% kamote HAHAHAH </p>'
            
            }
            ];

            //loop through markers
            for(var i = 0; i < markers.length; i++){
                //add marker
                addMarker(markers[i]);
            }

            /*
            addMarker({
                coords:{lat:15.621418630734787, lng: 120.30419421728101},
                iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                content:'<h3>Mt. Damas</h3>'
            
            
            }); 
            addMarker({
                coords:{lat:15.628565096130034, lng: 120.28884295848673},
                content:'<h3>Dueg Capya Kem Talna</h3>'
            
            });  
            */

            //add marker function
            function addMarker(props){
                var marker = new google.maps.Marker({
                    position:props.coords,
                    map:map,
                   // icon:props.iconImage
                })
                
                //check for custome icn
                if(props.iconImage){
                    //set icon image
                    marker.setIcon(props.iconImage);
                }

                //check content
                if(props.content){
                    var infoWindow = new google.maps.InfoWindow({
                        content:props.content
                    });

                    marker.addListener('click', function(){
                        infoWindow.open(map, marker);
                    });

                }
            }

        }
    </script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&libraries=places&v=weekly"
        defer>
    </script>
</body>
</html>