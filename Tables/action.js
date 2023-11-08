var summa = document.getElementById("myform");

var lal = document.getElementById("somebtn");

var hide = document.getElementById("hide");

lal.onclick = function()
{
    summa.style.display = "block";
}

function closeform(){
    document.getElementById("myform").style.display = "none";
}

function checkform(){
   var fname = document.forms["fcreate"]["fname"].value;
   var fnameone = /^[A-Za_z]+$/;

   if(fname == '')
   {
       alert(" first Name Is Empty");
   }
   else
   {
       if(fname.match(fnameone))
       {
           
       }
       else
       {
           alert("Use alphabets in first name");
       }
   }

   var lname = document.forms["fcreate"]["lname"].value;
   var lnameone = /^[A-Za-z]+$/;

   if(lname == '')
   {
       alert("Last Name Is Empty");
   }
   else{
       if(lname.match(lnameone))
       {
           
       }
       else
       {
           alert("Use alphabets in last name");
       }
   }


   var age = document.forms["fcreate"]["age"].value;
   if(age == '')
   {
       alert("Age is empty");
   }
   else
   {
       if((age>=1)&&(age<=90))
       {
           
       }
       else
       {
           alert("Use numbers in age");
       }
   }


   var email = document.forms["fcreate"]["email"].value;
   var emailone = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/;

   if(email == '')
   {
       alert("Email is empty");
   }
   else{
       if(email.match(emailone))
       {
           
       }
       else{
           alert("enter email correctly")
       }
   }

   var phone = document.forms["fcreate"]["phone"].value;
   var phoneone =  /^\d{10}$/;

   if(phone == '')
   {
       alert("phone is empty");
   }
   else
   {
       if(phone.match(phoneone))
       {
           
       }
       else
       {
           alert("Use numbers only");
       }
   }

   var delivery = document.forms["fcreate"]["delivery"].value;
   if(delivery == '')
   {
       alert("Address is empty");
   }
   else
   {
       
   }
}
window.onclick = function(event) {
    if (event.target == hide) {
        summa.style.display = "none";
    }
}

