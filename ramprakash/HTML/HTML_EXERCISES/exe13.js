function validate()
 {           
    if( document.myForm.Firstname.value == "")
     {
       alert( "Please provide your Firstname!" );
       document.myForm.Firstname.focus() ;
       return false;
    }
    var  a=document.getElementById("fname").value;
    var s=a.length;
    if(s >25 || s<10)
     {
      alert( "aleast  10 charaters and Max 20 character allowed" );
      document.myForm.Firstname.focus();
      return false;
   }
   var fnum= /^[a-zA-Z]+$/;
  if((!document.myForm.Firstname.value.match(fnum)))
  {
    alert("please check only charaters you can use in FirstName");
    return false;
  }
var fnum1= /^[a-zA-Z]+$/;
  if((!document.myForm.state.value.match(fnum1)))
  {
    alert("please check only charaters are allowed");
    return false;
  }
  if( document.myForm.state.value == "" || document.myForm.state.value.length!=2)
  {
    alert( "Please provide your state in 2 characters!" );
    document.myForm.state.focus() ;
    return false;
 }
  if( document.myForm.zip.value == "" || isNaN( document.myForm.zip.value ) ||document.myForm.zip.value.length != 6 ) {

    alert( "Please provide your Zip code allowed 6 numbers!" );
    document.myForm.zip.focus() ;
    return false;
 } 
 if( document.myForm.email.value == "")
 {
   alert( "Please provide your Email!" );
   document.myForm.email.focus() ;
   return false;
}
var x=document.myForm.email.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");
if (atposition<1)
{
  alert("Please enter a valid e-mail address missing.. @ ");  
  return false;  
  } 
if (dotposition<atposition+2 || dotposition+2>=x.length)
{  
      alert("Please enter a valid e-mail address missing position .dot");  
      return false;  
} 

if( (document.myForm.phone_number.value =="") || (document.myForm.phone_number.value.length !=10))
 {
   alert( "Please provide your phone number properly!");
   document.myForm.phone_number.focus() ;
   return false;
}
if (document.myForm.Dropdown.value !="0") 
{
   alert( "Please provide your phone number properly!");
   document.myForm.Dropdown.focus() ;
   return false;
}
if (document.myForm.sub.value !="6") 
{
   alert( "Please provide your subscription properly!");
   document.myForm.sub.focus() ;
   return false;
}



 }