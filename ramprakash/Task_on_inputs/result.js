window.addEventListener('load', ()=> {

    // Via Query parameters - GET
    /* const params = (new URL(document.location)).searchParams;
    const name = params.get('name');
    const surname = params.get('surname'); */

    // Via local Storage
    /* const name = localStorage.getItem('NAME');
    const surname = localStorage.getItem('SURNAME'); */
    
    const fname = sessionStorage.getItem('NAME');
    const lastname = sessionStorage.getItem('SURNAME');
    const email = sessionStorage.getItem('EMAIL');
    const phone = sessionStorage.getItem('PHONE');
    const age = sessionStorage.getItem('age');
    const gender = sessionStorage.getItem('Gender');
    const val = sessionStorage.getItem('Drop');
   var check =sessionStorage.getItem('checking');
//    var x=check;
//    document.write(x.join(''));
// console.log(typeof check);
//console.log(check.join(''));
    document.getElementById('result-name').innerHTML = fname;
    document.getElementById('result-surname').innerHTML =lastname;
    document.getElementById('emails').innerHTML = email;
    document.getElementById('phone').innerHTML = phone;
    document.getElementById('Age').innerHTML = age;
    document.getElementById('Gender').innerHTML = gender;
    document.getElementById('Drop').innerHTML = val;
    document.getElementById('check').innerHTML = check;
    
})