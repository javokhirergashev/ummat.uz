//[Custom Javascript]

//Project:	Travel - Onepage Html Responsive Template
//Version:	1.1
//Primary use:	Travel - Onepage Html Responsive Template

//add your script here

"use strict"

document.getElementById("submit").onclick = function (){
    var userName = document.getElementById("InputName").value;
    var userSurname = document.getElementById("InputSurname").value;
    var userTel = document.getElementById("InputPhone").value;
    var userEmail = document.getElementById("InputEmail").value;
    var userText = document.getElementById("InputMessage").value;
    var userCategory = document.getElementById("select").value;
    var my_text =  `Name is: ${userName} %0A Surname is: ${userSurname} %0A Number is: ${userTel} %0A E-mail is: ${userEmail}  %0A Category is: ${userCategory} %0A Message is: ${userText}`;
    var token = "5747901498:AAGsfVs_UP0DqJ02_tHoR1YjW0cnc_BESDw";
    var chat_id = -711089234;
    var url = `https://api.telegram.org/bot${token}/sendMessage?chat_id=${chat_id}&text=${my_text}`;
    // var url = `https://api.telegram.org/bot${token}/sendMessage?chat_id=${chat_id}&text=${userText}`;



    let api = new XMLHttpRequest();
    api.open("GET", url, true);
    api.send();
    alert("Buyurtmangiz qabul qilindi, tez orada mutahasislarimiz siz bilan bog'lanishadi!");
};
