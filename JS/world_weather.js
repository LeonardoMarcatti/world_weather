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


function image(place) {
    $.ajax({
        method: "get",
        url: `https://api.pexels.com/v1/search?query=${place}`,
        headers: {"Authorization": "563492ad6f91700001000001543dd7e9b70d4889849f4177cdab5355"},
        success: function (response) {
        console.log(response);        
        }
    });
}
image("berlin");


async function getPhoto() { 
    await fetch("https://api.pexels.com/v1/search?query=berlin", {
    method:'get',
    headers: {"Authorization": "563492ad6f91700001000001543dd7e9b70d4889849f4177cdab5355",}
    })
    .then(result => result.json())
    .then(result => console.log(result))
    .catch(error => console.log(error))
}
getPhoto();

let MyPhoto = new Promise((resolve, reject) =>{
    fetch("https://api.pexels.com/v1/search?query=berlin", {
    method:'get',
    headers: {"Authorization": "563492ad6f91700001000001543dd7e9b70d4889849f4177cdab5355",}
    })
    .then(result => result.json())
    .then(result => console.log(result))
    .catch(error => console.log(error))
});
