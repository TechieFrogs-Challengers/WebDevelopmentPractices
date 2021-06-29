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
    if(s >20)
     {
      alert( "Max 20 character allowed" );
      document.myForm.Firstname.focus();
      return false;
   }
   var fnum= /^[a-zA-Z]+$/;
  if((!document.myForm.Firstname.value.match(fnum)))
  {
    alert("please check only charaters you can use in FirstName");
    return false;
  }
  
    if( document.myForm.Lastname.value == "" )
     {
       alert( "Please provide your Lastname!" );
       document.myForm.Lastname.focus() ;
       return false;
    }
    var  x=document.getElementById("lname").value;
    var s=x.length;
    if(s >20)
     {
      alert( "Max 20 character allowed" );
      document.myForm.Lastname.focus();
      return false;
   }
    var lnum= /^[a-zA-Z]+$/;
  if((!document.myForm.Lastname.value.match(lnum)))
  {
    alert("please check only charaters you can use in LastName");
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

    if( document.myForm.address.value == "" )
     {
       alert( "Please provide your address!" );
       document.myForm.address.focus() ;
       return false;
    }
    if( document.myForm.city.value == "" )
     {
       alert( "Please provide your City!" );
       document.myForm.city.focus() ;
       return false;
    }
    if( document.myForm.state.value == "" )
     {
       alert( "Please provide your State!" );
       document.myForm.state.focus() ;
       return false;
    }
    
     if( document.myForm.zip.value == "" || isNaN( document.myForm.zip.value ) ||document.myForm.zip.value.length != 6 ) {

       alert( "Please provide your Zip code allowed 6 numbers!" );
       document.myForm.zip.focus() ;
       return false;
    }  

if( document.myForm.Username.value == "")
{
  alert( "Please provide your Firstname!" );
  document.myForm.Username.focus() ;
  return false;
}
var  a=document.getElementById("nameuser").value;
var s=a.length;
if(s >10)
{
 alert( "Max 20 character allowed !!" );
 document.myForm.Username.focus();
 return false;
}
var fnum= /^[a-zA-Z]+$/;
if((!document.myForm.Username.value.match(fnum)))
{
alert("please check only charaters you can use in FirstName");
return false;
}

if( document.myForm.password.value == "")
{
  alert( "Please provide your Firstname!" );
  document.myForm.password.focus() ;
  return false;
}
var  a=document.getElementById("namepass").value;
var s=a.length;
if(s <8)
{
 alert( " password should be minimum 8 charaters allowed !!" );
 document.myForm.password.focus();
 return false;
}
var fnum= /^[0-9a-zA-Z]+$/;
if((!document.myForm.password.value.match(fnum)))
{
alert("please check only charaters you can use in FirstName");
return false;
}         
  
if( document.myForm.qualification1.value == "none" ) 
    {
      alert( "Please provide qualification field!" );
      document.myForm.qualification1.focus() ;
      return false;
   }
   if( document.myForm.specialization1.value == "" ) 
   {
     alert( "Please provide  specialization field!" );
     document.myForm.specialization1.focus() ;
     return false;
   }
  if( document.myForm.year1.value =="" ) 
  {
    alert( "Please provide year field!" );
    document.myForm.year1.focus() ;
    return false;
 }
 if(isNaN( document.myForm.year1.value)) 
 {
  alert( "Please provide number formate!! ok " );
  document.myForm.year1.focus() ;
  return false;
 }
 if(document.myForm.year1.value.length >4)
 {
  alert( "Please provide number ex@:1999 ok " );
  document.myForm.year1.focus() ;
  return false;
 }
 if( document.myForm.college1.value =="" ) 
  {
    alert( "Please provide college field!" );
    document.myForm.college1.focus() ;
    return false;
 }


   if( document.myForm.qualification2.value == "none" ) 
    {
      alert( "Please provide field!" );
      document.myForm.qualification2.focus() ;
      return false;
   }
   if( document.myForm.specialization2.value == "" ) 
   {
     alert( "Please provide field!" );
     document.myForm.specialization2.focus() ;
     return false;
   }
  if( document.myForm.year2.value =="" ) 
  {
    alert( "Please provide year field!" );
    document.myForm.year2.focus() ;
    return false;
 }
 if( document.myForm.college2.value =="" ) 
  {
    alert( "Please provide field!" );
    document.myForm.college2.focus() ;
    return false;
 }


   if( document.myForm.qualification3.value == "none" ) 
    {
      alert( "Please provide qualification field!" );
      document.myForm.qualification3.focus() ;
      return false;
   }
   if( document.myForm.specialization3.value == "" ) 
   {
     alert( "Please provide specialization field!" );
     document.myForm.specialization3.focus() ;
     return false;
   }
  if( document.myForm.year3.value =="" ) 
  {
    alert( "Please provide year field!" );
    document.myForm.year3.focus() ;
    return false;
 }
 if( document.myForm.college3.value =="" ) 
  {
    alert( "Please provide college field!" );
    document.myForm.college3.focus() ;
    return false;
 }

   if( document.myForm.qualification4.value == "none" ) 
    {
      alert( "Please provide qualification field!" );
      document.myForm.qualification4.focus() ;
      return false;
   }
   if( document.myForm.specialization4.value == "" ) 
   {
     alert( "Please provide specialization field!" );
     document.myForm.specialization4.focus() ;
     return false;
   }
  if( document.myForm.year4.value =="" ) 
  {
    alert( "Please provide year field!" );
    document.myForm.year4.focus() ;
    return false;
 }
 if( document.myForm.college4.value =="" ) 
  {
    alert( "Please provide college field!" );
    document.myForm.college4.focus() ;
    return false;
  }

  if( document.myForm.notesection.value == "") 
  {
    alert( "Please provide Note field!" );
    document.myForm.notesection.focus();
    return false;
  }
  var  a=document.getElementById("note").value;
  var s=a.length;
  if(s >20)
   {
    alert( "Max 20 character allowed" );
    document.myForm.notesection.focus();
    return false;
 }
 else
 {
   alert( "Submitted sucessfully!!" );
   return true;
 }
 
   
}