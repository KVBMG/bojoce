$(function () {

    var locations = [];
    firstTime();
    //setTimeout(function(){initialize()},5000);
    var map;
    var markers = [];
    var infowindow;
    var markerCluster;
    var currentRequest = null;
    var xhr = null;
    var blockableElement = null;
    var perform = false;
    var last_phrases = "";
    var is_processing = false;
    var last_page = false;
    var add_more = false;
    var first = true;
    var show_offre = true;

    function fillMap() {
        var marker, i;

        for (i = 0; i < locations.length; i++) {

            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i].latitude, locations[i].longitude),
                map: map,
                scaledSize: new google.maps.Size(22, 32),
                icon: assetsBaseDir + 'm2m.png'
            });
            attachSecretMessage(marker, locations[i]);
            markers.push(marker);

        }


        markerCluster = new MarkerClusterer(map, markers,
                {imagePath: assetsBaseDir + 'm'});
    }
    function attachSecretMessage(marker, secretMessage) {
        //var infowindow = new google.maps.InfoWindow({
        //    content: secretMessage.contenu
        //});

        marker.addListener('click', function () {
            showOffre(secretMessage.id);
        });
    }
    function firstTime() {
        infowindow = new google.maps.InfoWindow();
        $.ajax({
            url: Routing.generate('eco_job_anonymous_offres_json'),
            type: 'GET',
            contentType: 'application/json',
            contentType: false,
            success: function (response) {
                response = $.parseJSON(response);
                locations = response;
            },
            error: function () {
                alert("Echec lors de la connexion au serveur. Veuillez réessayer ou contacter l'administrateur");
            },
        }).done(function (response) {
            initialize();
        });
    }


    function initialize() {
        var mapOptions = {
            center: new google.maps.LatLng(46.9, 1.56),
            zoom: 6,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            zoomControl: true,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.SMALL
            },
            gestureHandling: 'greedy',
            styles: [{"featureType": "administrative", "elementType": "labels.text.fill", "stylers": [{"color": "#444444"}]}, {"featureType": "landscape", "elementType": "all", "stylers": [{"color": "#f2f2f2"}]}, {"featureType": "poi", "elementType": "all", "stylers": [{"visibility": "off"}]}, {"featureType": "road", "elementType": "all", "stylers": [{"saturation": -100}, {"lightness": 45}]}, {"featureType": "road.highway", "elementType": "all", "stylers": [{"visibility": "simplified"}]}, {"featureType": "road.arterial", "elementType": "labels.icon", "stylers": [{"visibility": "off"}]}, {"featureType": "transit", "elementType": "all", "stylers": [{"visibility": "off"}]}, {"featureType": "water", "elementType": "all", "stylers": [{"color": "#01a2a6"}, {"visibility": "on"}]}]

        };
        map = new google.maps.Map(document.getElementById('google_map'),
                mapOptions);
        fillMap();
    }
    function removeMarkers() {
        for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(null);
        }
        markers.length = 0;
        markerCluster.clearMarkers();
    }


    function showOffre(id) {
        $.ajax({
            url: Routing.generate('eco_job_anonymous_offre_details', {id: id}),
            type: 'GET',
            dataType: 'json',
            contentType: 'application/json',
            beforeSend: function () {
                resetDiv();
                $("#details").append("<div class='loader'></div>");
            },
            beforeSend: function () {
                if (blockableElement == null)
                    blockableElement = $('#google_map').block({message: "<div class='loader'></div>", css: {border: 'none', backgroundColor: 'transparent', width: '66px'}});
                else {
                    if (!(blockableElement.data('blockUI.isBlocked')))
                        blockableElement = $('#google_map').block({message: "<div class='loader'></div>", css: {border: 'none', backgroundColor: 'transparent', width: '66px'}});
                }

                if (xhr != null)
                    xhr.abort();
            },
            contentType: false,
            statusCode: {
                200: function (response) {
                    resetDiv();
                    $('#details').append(response.html);
                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(response.lat, response.long),
                        map: map,
                        scaledSize: new google.maps.Size(22, 32),
                        icon: assetsBaseDir + 'm2m.png'
                    });
                    map.setZoom(17);
                    map.panTo(new google.maps.LatLng(response.lat, response.long));
                    google.maps.event.addListener(marker, 'click', function () {
                        return function () {
                            infowindow.setContent(response.titre);
                            showOffre(response.id);
                        }
                    });
                    //markerCluster = new MarkerClusterer(map, markers,{imagePath: assetsBaseDir + 'm'});

                },
                412: function (response) {
                    resetDiv();
                    $('#details').append("Echec de la connexion au serveur");

                },
                500: function (response) {
                    resetDiv();
                    $('#details').append("Echec de la connexion au serveur");
                }
            },
            complete: function () {
                $('#google_map').unblock();
            }
        });
    }
    ;
    $(document).on('click', '.offre', function () {
        showOffre($(this).attr('offreId'));
        show_offre = true;
    });
    $(document).on('click', '.save', function () {
        $('#globModal').modal('show');
    });
    function getOffres() {
        $.ajax({
            url: Routing.generate('eco_job_anonymous_offres_json'),
            type: 'GET',
            contentType: 'application/json',
            contentType: false,
            success: function (response) {
                response = $.parseJSON(response);
                locations = response;
            },
            error: function () {
                alert("Echec lors de la connexion au serveur. Veuillez réessayer ou contacter l'administrateur");
            }
        });
    }
    ;
    function resetDiv() {
        $('#details').children().remove();
        $('#details').empty();
    }
    function resetList() {
        $('#offreList').children().remove();
        $('#offreList').empty();
    }

    var options = {
        target: '#details',
        async: false,
        cache: false,
        beforeSubmit: showRequest,
        success: showResponse,
        url: Routing.generate('eco_job_anonymous_offre_search_ajax'),
        type: 'post',
        dataType: 'json'
    };

    $('#searchForm').submit(function () {
        $('#searchForm').ajaxSubmit(options);
        return false;
    })
    $("#searchBar").keyup($.debounce(flushSearch, 500));

    function flushSearch() {
        var val = $("#searchBar").val();
        if ((val.length >= 3) || (val.length == 0) && (last_phrases != val)) {
            currentRequest = performSearch();
            last_phrases = this.value;
        }
    }
    $("#exp").on('change', function () {
        currentRequest = performSearch();
        console.log("exp ato");
    });
    $("#contrat").on('change', function () {
        currentRequest = performSearch();
        console.log("contrat ato");
    });
    $("#limit").on('change', function () {
        currentRequest = performSearch();
    });
    $("#reset").click(function (e) {
        e.preventDefault();
        resetDiv();
        removeMarkers();
        locations = [];
        var mapOptions = {
            center: new google.maps.LatLng(46.9, 1.56),
            zoom: 6,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            zoomControl: true,
            gestureHandling: 'greedy',            
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.SMALL
            },
            styles: [{"featureType": "administrative", "elementType": "labels.text.fill", "stylers": [{"color": "#444444"}]}, {"featureType": "landscape", "elementType": "all", "stylers": [{"color": "#f2f2f2"}]}, {"featureType": "poi", "elementType": "all", "stylers": [{"visibility": "off"}]}, {"featureType": "road", "elementType": "all", "stylers": [{"saturation": -100}, {"lightness": 45}]}, {"featureType": "road.highway", "elementType": "all", "stylers": [{"visibility": "simplified"}]}, {"featureType": "road.arterial", "elementType": "labels.icon", "stylers": [{"visibility": "off"}]}, {"featureType": "transit", "elementType": "all", "stylers": [{"visibility": "off"}]}, {"featureType": "water", "elementType": "all", "stylers": [{"color": "#01a2a6"}, {"visibility": "on"}]}]


        };
        map = new google.maps.Map(document.getElementById('google_map'),
                mapOptions);
        markerCluster = new MarkerClusterer(map, markers,
                {imagePath: '../../../images/m'});
        resetForm();
    });

    function showRequest(formData, jqForm, options) {
        perform = true;
    }
    function showResponse(responseText, statusText, xhr, $form) {
        xhr = null;
        perform = false;
        if (!show_offre)
            removeMarkers();

        if (add_more) {
            console.log(locations);
            if (responseText.length > 0) {
                for (var i = 0; i < responseText.length; i++) {
                    locations.push(responseText[i]);
                }
            }
            console.log(locations);
        } else {
            locations = [];
            locations = responseText;
            resetList();
            resetDiv();
        }
        fillMap();
        $('#google_map').unblock();
        if (!add_more) {
            if (responseText.length > 0) {

                for (var i = 0; i < responseText.length; i++) {
                    var html = "<div class='news1 offre' offreId=" + responseText[i].id + "><div class='txt1'>Ajoutée le "+ new Date(responseText[i].created_at).toDateString() +"</div><div class='txt2'><a href='#details'>" + responseText[i].titre + "</a></div><div class='txt3'>" + responseText[i].localisation + "</div></div>";
                    $('#offreList').append(html);
                }
            } else {
                if (!first) {
                    var html = "<div class='news1'><div class='txt2'>Aucune offre d'emploi trouvée</div><div class='txt3'></div></div>";
                    $('#offreList').append(html);
                }
            }
        } else {
            $(".loader").remove();
            $('#offreList').unblock();

            if (responseText.length > 0) {
                for (var i = 0; i < responseText.length; i++) {
                    var html = "<div class='news1 offre' offreId=" + responseText[i].id + "><div class='txt2'><a href='#details'>" + responseText[i].titre + "</a></div><div class='txt3'>" + responseText[i].localisation + "</div></div>";
                    $('#offreList').append(html);
                }
            } else {
                last_page = true;
                $('#offreList').append("Fin de la correspondance");
            }

        }
    }
    function resetForm() {
        $("#exp").val("0");
        $("#contrat").val("0");
        $("#searchBar").val("");
        currentRequest = performSearch();
        console.log("Reset ato");
    }
    function performSearch() {
        $("#offreList").children().remove().append("<div class='loader'></div>");
        $("#offreList").append("<div class='loader'></div>");        
        add_more = false;
        is_processing = false;
        last_page = false;
        show_offre = false;
        first = false;
        $("#offset").val(0);
        $('#offreList').scrollTop(0);
        if (blockableElement == null)
            blockableElement = $('#google_map').block({message: "<div class='loader'></div>", css: {border: 'none', backgroundColor: 'transparent', width: '66px'}});
        else {
            if (!(blockableElement.data('blockUI.isBlocked')))
                blockableElement = $('#google_map').block({message: "<div class='loader'></div>", css: {border: 'none', backgroundColor: 'transparent', width: '66px'}});
        }

        if (xhr != null)
            xhr.abort();
        removeMarkers();
        locations = [];

        var form = $("#searchForm").submit();
        xhr = form.data('jqxhr');
    }

    $("#offreList").scroll($.debounce(addMore, 500));

    $(document).on('click', '.save', function () {
        $('#globModal').modal('show');
    });

    function addMore() {
        if ($(this).scrollTop() + $(this).innerHeight() == $(this)[0].scrollHeight) {
            if (!(is_processing && last_page)) {
                $("#offreList").append("<div class='loader'>Chargement</div>").scrollTop($(this)[0].scrollHeight);
                $("#offreList").block();
                first = false;
                add_more = true;
                show_offre = false;
                is_processing = true;
                var currOffset = parseInt($("#offset").val());
                var limit = parseInt($("#limit").val());
                $("#offset").val(currOffset + limit);
                if (xhr != null)
                    xhr.abort();
                var form = $("#searchForm").submit();
                xhr = form.data('jqxhr');
            }
        }
    }
    ;
});
