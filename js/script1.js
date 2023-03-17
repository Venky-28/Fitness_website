
// image slider

var images = ["images/2.jpg","images/3.jpg","images/4.jpg",
"images/5.jpg","images/6.jpg","images/7.jpg","images/8.jpg",
"images/9.jpg","images/10.jpg","images/11.jpg","images/12.jpg","images/1.jpg"]

var num=0;

function next(){
    var slider = document.getElementById("slider-img");
    num++;
    if(num>=images.length)
    {
        num=0;
    }
    slider.src=images[num];
}

function prev(){
    var slider = document.getElementById("slider-img");
    num--;
    if(num<0)
    {
        num=images.length-1;
    }
    slider.src=images[num];
}





// image popup

document.querySelectorAll('.gallery img').forEach(images =>{
    images.onclick = () =>{
        document.querySelector('.popup').style.display = 'block'
        document.querySelector('.popup img').src = images.getAttribute('src');
    }

});


document.querySelector('.popup span').onclick = () =>{
    document.querySelector('.popup').style.display = 'none';
}




