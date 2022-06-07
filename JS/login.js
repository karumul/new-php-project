

var login_btn =  document.getElementById("login_btn");
var email = document.getElementById("email");
var password = document.getElementById("password");
var con_password = document.getElementById("con_password");
login_btn.onclick = function(){
 
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200)
        {
    alert(this.status);
    console.log(this.responseText);
     var response = JSON.parse(this.responseText);
     login_validate(response);
        }
    }

    xhttp.open("POST",'./login.php',true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("email="+email.value+"&password="+password.value+"&con_password="+con_password.value);
    return false;
}

function login_validate(response){
   var i;
   var notice_cont = document.querySelector("#toast_notice");
      notice_cont.innerHTML="";
   for(i=0;i<response.length;i++)
   {
    for(var j =0;j<response[i].length;j++)
    {
     // alert(response[i][j]);
        if(response[i][j]=="User login !,")
        {
           alert("54");
        window.location = "user/profile.php";
        }
         else
         {
           
         
        var toast_span = document.createElement("p");
        toast_span.style.width="300px";
       toast_span.style.height="33px";
        toast_span.style.padding="5px 8px";
        toast_span.style.color="#000";
        toast_span.style.borderRadius="4px";
        toast_span.style.margin="4px 4px";
        toast_span.style.borderBottom="2px groove red";
        var c_notice = response[i][j];
        var toast_span_text = document.createTextNode(c_notice);
        toast_span.appendChild(toast_span_text);
        notice_cont.append(toast_span);
        $(".toast").toast({delay:20000});
        $('.toast').toast('show');
         }
        
    }
   }
      //Close the validation toast
      var toast_close = document.getElementById("close_toast");
      toast_close.onclick = function(){
        $('.toast').toast('hide');
      }
}