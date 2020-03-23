
$.ajax({
    method: "get",
    url: "http://api.open-notify.org/astros.json",
    success: function (e) {
        let astronauts = e.number;
        for (let i = 0; i < astronauts; i++) {
            $('tbody').append('<tr>');
            $('tbody tr').eq(i).append(`<td> ${e.people[i].name}`);
            $('tbody tr').eq(i).append(`<td> ${e.people[i].craft}`);
        }
    }
});

async function image() {
    let astro = await fetch('http://api.open-notify.org/astros.json');
    astro = astro.json();
    return astro;
};
image()
.then(astro => {for(let i = 0; i < astro.people.length; i++){
    setTimeout(() => {
       console.log(astro.people[i]);
        
    }, 1000);
}})
.catch(error => console.log(error));