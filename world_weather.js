$('#check').on('click',
    function GetWeather(e) {
        e.preventDefault();
        $('#results').html("");
        let city = $('#city').val();
        $.ajax({
            method: "GET",
            url: `http://api.openweathermap.org/data/2.5/find?q=${city}&units=metric&APPID=9988132bfa41c2e199b9f2eedeb37574&`,
            success: function (response) {
                console.log(response);
                $('#results').append(
                        `<h5> Weather forecast for: ${response.list[0].name} </h5><br>
                        <i class="fas fa-temperature-low"></i>: ${response.list[0].main.temp}C° <br>
                        <i class="fas fa-tint"></i> ${response.list[0].main.humidity}% <br>
                        <i class="fas fa-city"></i> ${response.list[0].weather[0].main}/${response.list[0].weather[0].description} <br>
                        <i class="fas fa-wind"></i> ${response.list[0].wind.speed}km/h <br>
                        <i class="far fa-compass"></i> ${response.list[0].wind.deg}°`
                    )
            }
        })
    }
);