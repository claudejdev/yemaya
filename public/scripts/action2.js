// alert("Hello JS World !");
let btn1 = document.querySelector("#btn1");
let btn2 = document.querySelector("#btn2");


// Sur click, va basculer la classe p_invisible
btn1.addEventListener("click",function(){
    document.querySelector("#div1").classList.toggle("p_invisible")
});
btn2.addEventListener("click",function(){
    document.querySelector("#div2").classList.toggle("p_invisible")
});