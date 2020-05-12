$('input').on('click', LoadData);
 
function LoadData(){
    $('#curso').load("dados.txt", FadeIn);
};

function FadeIn() {
    $('#curso').fadeOut(1).show(1000);
    setTimeout(() => {alert('AJAX carregado!')}, 1100);  
};