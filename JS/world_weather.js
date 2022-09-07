$('#check').on('click',
    async function GetWeather(e) {
        e.preventDefault();
        let city = $('#city').val();
<<<<<<< HEAD
        let imagem;
        let number;
=======
        var imagem;
>>>>>>> b4448e593b18160d2bbee7b64165015177f7ef1c
        $('#data').html(' ');
        $.ajax({
            method: "get",
            url: `https://api.pexels.com/v1/search?query=${city}`,
            headers: {"Authorization": "563492ad6f91700001000001543dd7e9b70d4889849f4177cdab5355"},
            success: function(data) {
<<<<<<< HEAD
                number = Math.round(Math.random()*(data.photos.length));
                imagem = data.photos[number].src.large;
                return imagem;
=======
                console.log(data);                
            imagem = data.photos[0].src.large;
            return imagem;
>>>>>>> b4448e593b18160d2bbee7b64165015177f7ef1c
           }
        })
        setTimeout(() => { $.ajax({
            method: "GET",
<<<<<<< HEAD
            url: `https://api.openweathermap.org/data/2.5/find?q=${city}&units=metric&APPID=9988132bfa41c2e199b9f2eedeb37574&`,
            success: function (response) {
                $('#data').append(
                    `<h3 style="text-align: center"> Weather forecast for: ${response.list[0].name}</h3><br>
                    <i class="fas fa-temperature-low fa-2x"> Temperature: ${response.list[0].main.temp}C°</i><br>
                    <i class="fas fa-tint fa-2x"> Humidity: ${response.list[0].main.humidity}%</i><br>
                    <i class="fas fa-city fa-2x"> ${response.list[0].weather[0].main}/${response.list[0].weather[0].description}</i><br>`                    
                ).css('background-image', `url(${imagem})`).css('display', 'inline-block');
                $('#data i').css('font-size', '18px').css('text-shadow', '0px 0px 10px black');
                $('#data h3').css('text-shadow', '0px 0px 10px black');
=======
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
>>>>>>> b4448e593b18160d2bbee7b64165015177f7ef1c
            }
        })
    }, 500);
}
<<<<<<< HEAD
);
=======
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
>>>>>>> b4448e593b18160d2bbee7b64165015177f7ef1c
