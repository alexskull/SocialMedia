
    $(function(){
    $('#collapseMap').on('shown.bs.collapse', function(e){
        
        var mapOptions = {
            zoom: 14,
            center: new google.maps.LatLng(Activity.latitud, Activity.longitud),
            mapTypeId: google.maps.MapTypeId.ROADMAP,

            mapTypeControl: false,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
                position: google.maps.ControlPosition.LEFT_CENTER
            },
            panControl: false,
            panControlOptions: {
                position: google.maps.ControlPosition.TOP_RIGHT
            },
            zoomControl: true,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.LARGE,
                position: google.maps.ControlPosition.TOP_RIGHT
            },
            scrollwheel: false,
            scaleControl: false,
            scaleControlOptions: {
                position: google.maps.ControlPosition.TOP_LEFT
            },
            streetViewControl: true,
            streetViewControlOptions: {
                position: google.maps.ControlPosition.LEFT_TOP
            },
            styles: [/*map styles*/]
        };
        var
        marker;
        var mapObject = new google.maps.Map(document.getElementById('map'), mapOptions);
        
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(Activity.latitud, Activity.longitud),
                    map: mapObject,
                    icon: Activity.icon,
                });
        $('body').animate({ scrollTop: $('#collapseMap').offset().top  - 61}, 'slow');        


    });
});