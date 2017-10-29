$(function () {
    var is_processing = false;
    var last_page = false;
    var add_more = false;
    var blockableElement = null;
    var xhr = null;
    var last_phrases = "";
    var first = true;
    var options = {
        target: '#offreList', // target element(s) to be updated with server response 
        beforeSubmit: showRequest, // pre-submit callback 
        success: showResponse, // post-submit callback 

        // other available options: 
        url: Routing.generate('eco_job_anonymous_offre_search_ajax_templated'),
        type: 'post', // 'get' or 'post', override for form's 'method' attribute 
        dataType: 'json'        // 'xml', 'script', or 'json' (expected server response type) 
                //clearForm: true        // clear all form fields after successful submit 
                //resetForm: true        // reset the form after successful submit 

                // $.ajax options can be used here too, for example: 
                //timeout:   3000 
    };

    $('#searchForm').submit(function () {
        $('#searchForm').ajaxSubmit(options);
        return false;
    })
    $("#searchBar").keyup($.debounce(flushSearch, 500));

    function flushSearch() {
        var val = $("#searchBar").val();
        if ((val.length >= 3) || (val.length == 0) && (last_phrases != val)) {
            //if((val.slice(-1) != " ")){
                console.log((val.slice(-1) != " "));
            xhr = performSearch();
            last_phrases = this.value;
        //}
        }

    }
    $("#exp").on('change', function () {
        xhr = performSearch();
    })
    $("#contrat").on('change', function () {
        xhr = performSearch();
    });
    $("#reset").click(function (e) {
        e.preventDefault();
        resetForm();
        resetDetails();
    });
    function resetDiv() {
        $('#offreList').children().remove();
        $('#offreList').empty();
    }
    function resetDetails() {
        $('#details').children().remove();
        $("#details").empty();
    }
    function showRequest(formData, jqForm, options) {

    }
    function showResponse(responseText, statusText, xhr, $form) {
        if (xhr.status == 200) {
            console.log("response");
            console.log(responseText.responseJSON);
            if (!add_more) {
                resetDetails();
                if (responseText.objects.length > 0) {
                    resetDiv();
                    $('#offreList').append(responseText.html);
                    
                } else {
                    if (!first) {
                        var html = "<div class='news1'><div class='txt2'>Aucune offre d'emploi trouvée</div><div class='txt3'></div></div>";
                        resetDiv();
                        $('#offreList').append(html);
                    }
                }
            } else {
                $(".loader").remove();
                $('#offreList').unblock();
                if (responseText.length > 0) {
                    $('#offreList').append(responseText.html);
                    $("#offreList").on('scroll', $.debounce(addMore, 500));                                
                    
                } else {
                    console.log("last_page");
                    console.log(responseText);
                    last_page = true;
                    $('#offreList').append("Fin de la correspondance");
                }            }
        } else
            $('#offreList').append("Echec de la connexion au serveur");
    }
    $(document).on('click', '.save', function () {
        $('#globModal').modal('show');
    });
    $("#limit").on('change', function () {
        xhr = performSearch();
    });
    function resetForm() {
        $("#offreList").append("<div class='loader'></div>");
        $("#exp").val("0");
        $("#contrat3").prop('checked', true);
        $("#searchBar").val("");
        xhr = performSearch();

    }
    function performSearch() {
        last_page = false;
        $("#offreList").children().remove().append("<div class='loader'></div>");
        $("#offreList").append("<div class='loader'></div>");
        add_more = false;
        is_processing = false;        
        first = false;
        $("#offset").val(0);
        if (xhr != null)
            xhr.abort();

        var form = $("#searchForm").submit();
        xhr = form.data('jqxhr');
        console.log("perf");
        console.log(last_page);  
        console.log(add_more);        
        
    }

    function showOffre(id) {
        $.ajax({
            url: Routing.generate('eco_job_anonymous_offre_details', {id: id}),
            type: 'GET',
            dataType: 'json',
            contentType: 'application/json',
            beforeSend: function () {
                resetDetails();
                $('#details').block({message: "<div class='loader'></div>", css: {border: 'none', backgroundColor: 'transparent', width: '66px'}});
            },
            contentType: false,
            statusCode: {
                200: function (response) {
                    resetDetails();
                    $('#details').append(response.html);
                    console.log(response);
                },
                412: function (response) {
                    resetDetails();
                    $('#details').append("Echec de la connexion au serveur");

                },
                500: function (response) {
                    resetDetails();
                    $('#details').append("Echec de la connexion au serveur");
                },
                complete: function () {
                    $('#details').unblock();
                }
            }
        });
    }
    ;
    $(document).on('click', '.offre', function () {
        showOffre($(this).attr('offreId'));
    });
    $(document).on('click', '.offre', function () {
        showOffre($(this).attr('offreid'));
    });
    $("#offreList").scroll($.debounce(addMore, 500));

    function addMore() {
        if ($(this).scrollTop() + $(this).innerHeight() == $(this)[0].scrollHeight) {
            if (!(is_processing && last_page)) {
                $("#offreList").off('scroll');
                $("#offreList").append("<div class='loader'></div>").scrollTop($(this)[0].scrollHeight);
                first = false
                add_more = true;
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
