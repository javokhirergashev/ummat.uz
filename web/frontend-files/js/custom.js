//[Custom Javascript]

//Project:	Travel - Onepage Html Responsive Template
//Version:	1.1
//Primary use:	Travel - Onepage Html Responsive Template

//add your script here

"use strict"

let clickc = document.querySelector('.click');
let list = document.querySelector(".listt");
clickc.addEventListener("click",()=>{
    list.classList.toggle('newlist');
});



document.getElementById("submit").onclick = function (){
    var userName = document.getElementById("InputName").value;
    var userSurname = document.getElementById("InputSurname").value;
    var userTel = document.getElementById("InputPhone").value;
    var userEmail = document.getElementById("InputEmail").value;
    var userText = document.getElementById("InputMessage").value;
    var userCategory = document.getElementById("select").value;
    var userData = document.getElementById("InputData").value;
    var my_text =  `Name is: ${userName} %0A Surname is: ${userSurname} %0A Number is: ${userTel} %0A E-mail is: ${userEmail}  %0A Category is: ${userCategory} %0A Data is: ${userData} %0A Message is: ${userText}`;
    var token = "5747901498:AAGsfVs_UP0DqJ02_tHoR1YjW0cnc_BESDw";
    var chat_id = -711089234;
    var url = `https://api.telegram.org/bot${token}/sendMessage?chat_id=${chat_id}&text=${my_text}`;
    // var url = `https://api.telegram.org/bot${token}/sendMessage?chat_id=${chat_id}&text=${userText}`;



    let api = new XMLHttpRequest();
    api.open("GET", url, true);
    api.send();
    alert("Buyurtmangiz qabul qilindi, tez orada mutahasislarimiz siz bilan bog'lanishadi!");
};



document.getElementById("submit1").onclick = function (){
    var userName1 = document.getElementById("InputName1").value;
    var userSurname1 = document.getElementById("InputSurname1").value;
    var userTel1 = document.getElementById("InputPhone1").value;
    var userEmail1 = document.getElementById("InputEmail1").value;
    var userText1 = document.getElementById("InputMessage1").value;
    var my_text1 = `Foydalanuvchidan habar: %0A` `Name is: ${userName1} %0A Surname is: ${userSurname1} %0A Number is: ${userTel1} %0A E-mail is: ${userEmail1}  %0A Message is: ${userText1}`;
    var token1 = "5747901498:AAGsfVs_UP0DqJ02_tHoR1YjW0cnc_BESDw";
    var chat_id1 = -711089234;
    var url1 = `https://api.telegram.org/bot${token1}/sendMessage?chat_id=${chat_id1}&text=${my_text1}`;
    // var url = `https://api.telegram.org/bot${token}/sendMessage?chat_id=${chat_id}&text=${userText}`;



    let api = new XMLHttpRequest();
    api.open("GET", url1, true);
    api.send();
    alert("Habaringiz qabul qilindi, tez orada mutahasislarimiz siz bilan bog'lanishadi!");
};



