// function reloadEvent() {
//     $('.linkBerita').on('click', function(){
//         convertUrl(this.hash)
//     })
// }

function reloadEvent() {
    $('.linkBerita').on('click', function(){
        convertUrl(this.hash)
    })

    $('#formBaru').on('submit', function (e) {
        e.preventDefault()
        sendDataPost(this.action)
    })
}

function loadKonten(link) {
    $.ajax(link,{
        type: 'GET',
        success: function (data, status, xhr) {
            var objData = JSON.parse(data)

            $('#kontenHTML').html(objData.konten)
            $('title').html(objData.titel)
            reloadEvent()
        },
        error: function (jqXHR, textStatus, errorMsg) {
            $('#kontenHTML').html('Error: ' + errorMsg)
            $('title').html('Error')
        }
    })
}

var base_url = 'http://127.0.0.1:8000';

function convertUrl(hash) {
    var hashClean = hash.replace('#','')
    var url = base_url

    if (hashClean == 'home') {
        url = url + '/berita';
    } else if (hashClean == 'form_input') {
        url = url + '/form/berita';
    } else {
        url = url + '/berita/'+hashClean;
    }

    loadKonten(url)
}

convertUrl('#home')

$('.menu').on('click', function(){
    convertUrl(this.hash)
})

function sendDataPost(action) {
    var link = base_url + "/berita"

    var dataForm = {}
    var allInput = $(".form-user-input")

    $.each (allInput, function (i, val){
        dataForm[val['name']] = val['value']
    })

    $.ajax(link, {
        type: 'POST',
        data: dataForm,
        success: function (data, status, xhr) {
            var data_str = JSON.parse(data)

            alert(data_str['pesan'])
            convertUrl('#home')
        },
        error: function (jqXHR, textStatus, errorMessage) {
            alert('Error : ' + errorMessage)
        }
    })
}