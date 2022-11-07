$('#check').on('click',
    async function GetWeather(e) {
        e.preventDefault();
        let city = $('#city').val();
        let imagem;
        let number;
        $('#data').html(' ');
        $.ajax({
            method: "get",
            url: `https://api.pexels.com/v1/search?query=${city}`,
            headers: {"Authorization": "563492ad6f91700001000001543dd7e9b70d4889849f4177cdab5355"},
            success: function(data) {
                number = Math.round(Math.random()*(data.photos.length));
                imagem = data.photos[number].src.large;
                return imagem;
           }
        })
        setTimeout(() => { $.ajax({
            method: "GET",
            url: `https://api.openweathermap.org/data/2.5/find?q=${city}&units=metric&APPID=9988132bfa41c2e199b9f2eedeb37574&`,
            success: function (response) {
                $('#data').append(
                    `<h3 style="text-align: center"> Weather forecast for: ${response.list[0].name}</h3><br>
                    <i class="fas fa-temperature-low fa-2x"> Temperature: ${response.list[0].main.temp}C°</i><br>
                    <i class="fas fa-tint fa-2x"> Humidity: ${response.list[0].main.humidity}%</i><br>
                    <i class="fas fa-city fa-2x"> ${response.list[0].weather[0].main}/${response.list[0].weather[0].description}</i><br>`                    
                ).css('background-image', `url(${imagem})`);
            }
        })
    }, 500);
}
);