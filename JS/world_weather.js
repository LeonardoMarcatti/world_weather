$('#check').on('click',
    async function GetWeather(e) {
        e.preventDefault();
        let city = $('#city').val();
        var imagem;
        $('#data').html(' ');
        $.ajax({
            method: "get",
            url: `https://api.pexels.com/v1/search?query=${city}`,
            headers: {"Authorization": "563492ad6f91700001000001543dd7e9b70d4889849f4177cdab5355"},
            success: function(data) {
                console.log(data);                
            imagem = data.photos[0].src.large;
            return imagem;
           }
        })
        setTimeout(() => { $.ajax({
            method: "GET",
            url: `http://api.openweathermap.org/data/2.5/find?q=${city}&units=metric&APPID=9988132bfa41c2e199b9f2eedeb37574&`,
            success: function (response) {
                $('#data').append(
                    `<h3 style="text-align: center"> Weather forecast for: ${response.list[0].name}</h3><br>
                    <i class="fas fa-temperature-low fa-2x"> ${response.list[0].main.temp}C°</i>
                    <i class="fas fa-tint fa-2x"> ${response.list[0].main.humidity}%</i><br>
                    <i class="fas fa-city fa-2x"> ${response.list[0].weather[0].main}/${response.list[0].weather[0].description}</i><br>
                    <i class="fas fa-wind fa-2x"> ${response.list[0].wind.speed}km/h</i> 
                    <i class="far fa-compass fa-2x"> ${response.list[0].wind.deg}</i><br>`
                ).css('background-image', `url(${imagem})`);
            }
        })
    }, 500);
}
)

/*
<img src="${imagem}" />
async function getPhoto(place) { 
    await fetch(`https://api.pexels.com/v1/search?query=${place}`, {
    method:'get',
    headers: {"Authorization": "563492ad6f91700001000001543dd7e9b70d4889849f4177cdab5355",}
    })
    .then(result => result.json())
    .then(result => console.log(result))
    .catch(error => console.log(error))
}
getPhoto('Toronto');

$('#check').on('click', function() { 
let MyPhoto = new Promise((resolve, reject) =>{
    let place = $(city).val();
    fetch(`https://api.pexels.com/v1/search?query=${place}`, {
    method:'get',
    headers: {"Authorization": "563492ad6f91700001000001543dd7e9b70d4889849f4177cdab5355",}
    })
    .then(result => result.json())
    .then(result => console.log(result))
    .catch(error => console.log(error))
});
})
*/