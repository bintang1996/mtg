<?php include "header.php";?>


<canvas class="mapboxgl-canvas" tabindex="0" aria-label="Map" width="3324" height="900" style="width: 1662px; height: 450px;"></canvas>
<script src="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js"></script>
<script>
    $(function(){
        $('.map-search-branch #loader').hide()
        $('input[name="keyword"]').on('keyup', function(e){
            $('.map-search-branch #loader').show()
            $.ajax({
                url: "https://www.tawadahealthcare.com/about/offices/search",
                type: "GET",
                dataType: "JSON",
                data: {
                    keyword: $(this).val()
                },
                success: function(s){
                    $('#office-list').html('')

                    if (s.status == 200) {

                        var html = ''
                        $.each(s.data, function(key, value){
                            html += '<div class="col-12 list mb-4">'+
                                        '<div class="row">'+
                                            '<div class="col-4 align-self-start">'+
                                                '<div style="background-image: url('+value.image+'); height: 100px; width: 100px;" class="background-image"></div>'+
                                            '</div>'+
                                            '<div class="col-8 align-self-start">'+
                                                '<div class="caption">'+
                                                    '<div class="clr-blue-1">'+value.name+'</div>'+
                                                    '<div class="clr-gray-2">'+value.description+'</div>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>';
                        })
                        $('#office-list').append(html)

                        $('.map-search-branch #loader').hide()
                    }
                }
            })
        })
    })

    var newsSwiper = new Swiper('.history-swiper-container', {
        slidesPerView: 1,
        spaceBetween: 10,
        centeredSlides: true,
        direction: "horizontal",
        mousewheel: {
            releaseOnEdges: true
        },
        // If we need pagination
        pagination: {
            el: '.history-swiper-pagination',
            clickable: true
        },

        // Navigation arrows
        navigation: {
            nextEl: '.history-swiper-button-next',
            prevEl: '.history-swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.history-swiper-scrollbar',
        },

        breakpoints: {
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 20,
            }
        }
    })

    var zoom = 2.4

    if($(window).width() > 768){
        zoom = 4.1
    }

    mapboxgl.accessToken = 'pk.eyJ1IjoiYWxhbmdraWJhciIsImEiOiJja2YzZ3FqOGEwMnlwMnp0a3hrdDhwODMzIn0.8PNBxBQQp0S8EgqUe4cpLw';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/alangkibar/cjo22fjzk0l4j2so8mduubz5m', // stylesheet location
        center: [115.765218, -2.166440], // starting position [lng, lat]
        zoom: zoom, // starting zoom
        interactive: false
    });

    var size = 70;
 
    // implementation of CustomLayerInterface to draw a pulsing dot icon on the map
    // see https://docs.mapbox.com/mapbox-gl-js/api/#customlayerinterface for more info
    var pulsingDotYellow = {
        width: size,
        height: size,
        data: new Uint8Array(size * size * 4),
        
        // get rendering context for the map canvas when layer is added to the map
        onAdd: function () {
            var canvas = document.createElement('canvas');
            canvas.width = this.width;
            canvas.height = this.height;
            this.context = canvas.getContext('2d');
        },
        
        // called once before every frame where the icon will be used
        render: function () {
            var duration = 1000;
            var t = (performance.now() % duration) / duration;
            
            var radius = (size / 2) * 0.3;
            var outerRadius = (size / 2) * 0.7 * t + radius;
            var context = this.context;
            
            // draw outer circle
            context.clearRect(0, 0, this.width, this.height);
            context.beginPath();
            context.arc(
                this.width / 2,
                this.height / 2,
                outerRadius,
                0,
                Math.PI * 2
            );
            context.fillStyle = 'rgba(255, 200, 200,' + (1 - t) + ')';
            context.fill();
            
            // draw inner circle
            context.beginPath();
            context.arc(
                this.width / 2,
                this.height / 2,
                radius,
                0,
                Math.PI * 2
            );
            context.fillStyle = 'rgba(249, 224, 1, 1)';
            context.strokeStyle = 'white';
            context.lineWidth = 2 + 4 * (1 - t);
            context.fill();
            context.stroke();
            
            // update this image's data with data from the canvas
            this.data = context.getImageData(
                0,
                0,
                this.width,
                this.height
            ).data;
            
            // continuously repaint the map, resulting in the smooth animation of the dot
            map.triggerRepaint();
            
            // return `true` to let the map know that the image was updated
            return true;
        }
    };

    var pulsingDotGreen = {
        width: size,
        height: size,
        data: new Uint8Array(size * size * 4),
        
        // get rendering context for the map canvas when layer is added to the map
        onAdd: function () {
            var canvas = document.createElement('canvas');
            canvas.width = this.width;
            canvas.height = this.height;
            this.context = canvas.getContext('2d');
        },
        
        // called once before every frame where the icon will be used
        render: function () {
            var duration = 1000;
            var t = (performance.now() % duration) / duration;
            
            var radius = (size / 2) * 0.3;
            var outerRadius = (size / 2) * 0.7 * t + radius;
            var context = this.context;
            
            // draw outer circle
            context.clearRect(0, 0, this.width, this.height);
            context.beginPath();
            context.arc(
                this.width / 2,
                this.height / 2,
                outerRadius,
                0,
                Math.PI * 2
            );
            context.fillStyle = 'rgba(255, 200, 200,' + (1 - t) + ')';
            context.fill();
            
            // draw inner circle
            context.beginPath();
            context.arc(
                this.width / 2,
                this.height / 2,
                radius,
                0,
                Math.PI * 2
            );
            context.fillStyle = 'rgba(72, 255, 47, 1)';
            context.strokeStyle = 'white';
            context.lineWidth = 2 + 4 * (1 - t);
            context.fill();
            context.stroke();
            
            // update this image's data with data from the canvas
            this.data = context.getImageData(
                0,
                0,
                this.width,
                this.height
            ).data;
            
            // continuously repaint the map, resulting in the smooth animation of the dot
            map.triggerRepaint();
            
            // return `true` to let the map know that the image was updated
            return true;
        }
    };

    var pulsingDotRed = {
        width: size,
        height: size,
        data: new Uint8Array(size * size * 4),
        
        // get rendering context for the map canvas when layer is added to the map
        onAdd: function () {
            var canvas = document.createElement('canvas');
            canvas.width = this.width;
            canvas.height = this.height;
            this.context = canvas.getContext('2d');
        },
        
        // called once before every frame where the icon will be used
        render: function () {
            var duration = 1000;
            var t = (performance.now() % duration) / duration;
            
            var radius = (size / 2) * 0.3;
            var outerRadius = (size / 2) * 0.7 * t + radius;
            var context = this.context;
            
            // draw outer circle
            context.clearRect(0, 0, this.width, this.height);
            context.beginPath();
            context.arc(
                this.width / 2,
                this.height / 2,
                outerRadius,
                0,
                Math.PI * 2
            );
            context.fillStyle = 'rgba(255, 200, 200,' + (1 - t) + ')';
            context.fill();
            
            // draw inner circle
            context.beginPath();
            context.arc(
                this.width / 2,
                this.height / 2,
                radius,
                0,
                Math.PI * 2
            );
            context.fillStyle = 'rgba(255, 100, 100, 1)';
            context.strokeStyle = 'white';
            context.lineWidth = 2 + 4 * (1 - t);
            context.fill();
            context.stroke();
            
            // update this image's data with data from the canvas
            this.data = context.getImageData(
                0,
                0,
                this.width,
                this.height
            ).data;
            
            // continuously repaint the map, resulting in the smooth animation of the dot
            map.triggerRepaint();
            
            // return `true` to let the map know that the image was updated
            return true;
        }
    };
    
    function mapClick(idmap){
        map.on('click', idmap, function (e) {
            $('.mapboxgl-popup').remove();

            if ($(window).width() < 992) {
                $('input[name="keyword"]').val('')

                $.ajax({
                    url: "https://www.tawadahealthcare.com/about/offices/search",
                    type: "GET",
                    dataType: "JSON",
                    data: {
                        id: e.features[0].properties.id
                    },
                    success: function(s){
                        $('#office-list').html('')

                        if (s.status == 200) {

                            var html = ''
                            $.each(s.data, function(key, value){
                                html += '<div class="col-12 list mb-4">'+
                                            '<div class="row">'+
                                                '<div class="col-4 align-self-start">'+
                                                    '<div style="background-image: url('+value.image+'); height: 100px; width: 100px;" class="background-image"></div>'+
                                                '</div>'+
                                                '<div class="col-8 align-self-start">'+
                                                    '<div class="caption">'+
                                                        '<div class="clr-blue-1">'+value.name+'</div>'+
                                                        '<div class="clr-gray-2">'+value.description+'</div>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>';
                            })
                            $('#office-list').append(html)
                        }
                    }
                })
            }else{
                var coordinates = e.features[0].geometry.coordinates.slice();
                var image = e.features[0].properties.image
                var description = "<div class='d-flex align-items-center popup-thc'><div class='image background-image' style='background-image: url("+image+")'></div><div class='d-flex flex-column'><div class='title clr-blue-1'>"+e.features[0].properties.name+"</div><div class='clr-gray-2 desc'>"+e.features[0].properties.description+'</div></div></div>';
                
                // Ensure that if the map is zoomed out such that multiple
                // copies of the feature are visible, the popup appears
                // over the copy being pointed to.
                while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
                    coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
                }
                
                new mapboxgl.Popup()
                .setLngLat(coordinates)
                .setHTML(description)
                .addTo(map);
            }
        });
            
        // Change the cursor to a pointer when the mouse is over theidmaplayer.
        map.on('mouseenter', idmap, function () {
            map.getCanvas().style.cursor = 'pointer';
        });
            
        // Change it back to a pointer when it leaves.
        map.on('mouseleave', idmap, function () {
            map.getCanvas().style.cursor = '';
        });
    }
    
    map.on('load', function () {
        map.addImage('pulsing-dot-red', pulsingDotRed, { pixelRatio: 2 });
        map.addImage('pulsing-dot-green', pulsingDotGreen, { pixelRatio: 2 });
        map.addImage('pulsing-dot-yellow', pulsingDotYellow, { pixelRatio: 2 });
        
        $.ajax({
            url: "https://www.tawadahealthcare.com/about/offices",
            type: "GET",
            dataType: "JSON",
            success: function(s){
                if (s.status == 200) {
                    map.addSource('head', s.data[0]);
                    map.addSource('branch', s.data[1]);
                    map.addSource('sub-branch', s.data[2]);

                    map.addLayer({
                        'id': 'head',
                        'type': 'symbol',
                        'source': 'head',
                        'layout': {
                            'icon-image': 'pulsing-dot-yellow',
                            "icon-allow-overlap": true
                        }
                    });

                    map.addLayer({
                        'id': 'branch',
                        'type': 'symbol',
                        'source': 'branch',
                        'layout': {
                            'icon-image': 'pulsing-dot-green',
                            "icon-allow-overlap": true
                        }
                    });

                    map.addLayer({
                        'id': 'sub-branch',
                        'type': 'symbol',
                        'source': 'sub-branch',
                        'layout': {
                            'icon-image': 'pulsing-dot-red',
                            "icon-allow-overlap": true
                        }
                    });

                    mapClick('head')
                    mapClick('branch')
                    mapClick('sub-branch')
                }
            }
        })
    });
</script>
<?php include "footer.php";?>