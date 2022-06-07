

//Next functionality by enter button 

let form = document.querySelector(".signup_form");
var one = document.getElementsByName("one");
var two = document.getElementsByName("two");
var three = document.getElementsByName("three");
var four = document.getElementsByName("four");
one.onclick = function(){
    alert("click");
    this.onkeydown = function(target){
     if(target.keyCode ==13)
     {
     two.focus();
     return false;
     }
    }
    two.onkeydown = function(target){
        if(target.keyCode==13)
        {
        three.focus();
        return false;
        }
    }
    three.onkeydown = function(target){
        if(target.keyCode==13)
        {
            four.focus();
            return false;
        }
    }
}



let log_signup = document.getElementById("login_signup");
let form_cont = document.getElementById("dynamic_form_cont");
log_signup.onclick = function (){
    var c_text = this.innerHTML;
   alert(c_text);
    if(c_text==="Signup"){
     //   alert("yes");
        this.innerHTML="Login";
        form_cont.innerText="";
        var form = document.createElement("form");
        form.className="signup_form";
        var input_email = document.createElement("input");
        input_email.type="email";
        input_email.placeholder ="Enter your email";
        input_email.id = "email";
        input_email.name="one";
        var input_name = document.createElement("input");
        input_name.type ="text";
        input_name.placeholder="Full name";
        input_name.id="full_name";
        input_name.name="two";
        var input_password = document.createElement("input");
        input_password.type = "password";
        input_password.placeholder="Password";
        input_password.id="password";
        input_password.name="three";
        var input_con_password = document.createElement("input");
        input_con_password.type = "password";
        input_con_password.placeholder = "Con password";
        input_con_password.id="con_password";
        input_con_password.name="four";
        var signup_btn = document.createElement("input");
        signup_btn.type = "submit";
        signup_btn.id="signup_btn";
        var hr = document.createElement("HR");
        hr.style.backgroundColor="#ddd";
        hr.style.marginBottom="4px";
        var h5 = document.createElement("H6");
        h5.align="center";
        h5.style.fontFamily="roboto";
        h5.style.wordSpacing="2px";
        h5.style.letterSpacing="2px";
        h5.style.fontSize="12px";
        var text  = document.createTextNode("let's create your resume !");
        h5.appendChild(text);
        var h4 = document.createElement("h4");
        h4.className="signup_txt";
        var s_text = document.createTextNode("Signup");
        h4.appendChild(s_text);

        //social Login (facebook)
        var social_div = document.createElement("DIV");
        social_div.classNam="social_login";
        social_div.style.display="flex";
        social_div.style.justifyContent="space-between";
        social_div.style.alignItems="center";
       

    


        var f_signup = document.createElement("DIV");
        f_signup.className="facebook_signup";
        f_signup.style.cursor="pointer";
        f_signup.style.width="320px";
        f_signup.style.height="32px";
        f_signup.style.backgroundColor="#1976CC";
        f_signup.style.textAlign="center";
        f_signup.style.position="relatve";
        f_signup.style.padding="5px 0px";
        f_signup.style.marginBottom="10px";



        var f_span_text = document.createElement("SPAN");
        var facebook = document.createTextNode("f");
        f_span_text.appendChild(facebook);
        f_span_text.className="f";
         f_span_text.style.fontSize="30px";
         f_span_text.style.float="left";
         f_span_text.style.position="relative";
         f_span_text.style.top="-11px";
         f_span_text.style.left="50px";
         f_span_text.style.fontWeight="bold";
         f_span_text.style.color="#FFFFFF";
         f_span_text.style.fontFamily='Zen Kaku Gothic Antique, sans-serif';
    
        var f_s_txt = document.createElement("SPAN");
        f_s_txt.className="f_s_txt";
        f_s_txt.style.fontSize="16px";
        f_s_txt.style.fontFamily="roboto";
        f_s_txt.style.color="#FFFFFF";


      


        f_signup.append(f_span_text);
        f_signup.append(f_s_txt);
        social_div.append(f_signup);




        //social login google
        
        var g_signup = document.createElement("DIV");
        g_signup.className="google_signup";
        g_signup.style.cursor="pointer";
        g_signup.style.width="320px";
        g_signup.style.height="32px";
        g_signup.style.backgroundColor="rgb(200,0,0)";
        g_signup.style.textAlign="center";
        g_signup.style.position="relative";
        g_signup.style.padding="5px 0px";
        g_signup.style.marginBottom="10px";

    

        var g_span_text = document.createElement("SPAN");
        var google =   document.createTextNode("g");
        g_span_text.appendChild(google);
        g_span_text.className="g";
        g_span_text.style.fontSize="30px";
        g_span_text.style.float="left";
        g_span_text.style.position="absolute";
        g_span_text.style.top="-9px";
        g_span_text.style.left="60px";
        g_span_text.style.fontWeight="normal";
        g_span_text.style.color="#FFFFFF";
        g_span_text.style.fontFamily='Mukta, sans-serif';

      

        var g_s_txt = document.createElement("SPAN");
        g_s_txt.className="g_s_txt";
        g_s_txt.style.fontSize="16px";
        g_s_txt.style.fontFamily='Mukta, sans-serif';
        g_s_txt.style.color="#FFFFFF";
        g_s_txt.style.textDecoration="none";
        g_s_txt.style.fontWeight="bold";
      
        
        g_signup.append(g_span_text);
        g_signup.append(g_s_txt);
        social_div.append(g_signup);







       // <h4 class="signup_txt">Login</h4>
        //<h5 align="center" style="font-family:roboto;word-spacing:2px;letter-spacing:2px;">let's create you resume !</h5>
//         <div class="social_login">
//     <div class="facebook_signup">
//         <span class="f">f</span>
//         <span class="f_s_txt"><?php 
        
//         // echo $google_login_btn;
        
//         ?></span>
//     </div>

//     <div class="google_signup">
//         <span class="g">G</span>
//         <span class="g_s_txt">
//             <?php
//         // echo $google_login_btn;
//             ?>
//         </span>
//     </div>
// </div>






        form.append(h4);
        form.append(input_email);
        form.append(input_name);
        form.append(input_password);
        form.append(input_con_password);
        form.append(signup_btn);
        form_cont.prepend(form);
        // form.append(hr);
        // form.append(h5);
        form_cont.append(social_div);
        form_cont.append(hr);
        form_cont.append(h5);


        var signup_btn = document.getElementById("signup_btn");
        signup_btn.onclick = function(){
        var email = document.getElementById("email");
        var full_name = document.getElementById("full_name");
        var password = document.getElementById("password");
        var con_password = document.getElementById("con_password");
        alert(password.value,888888);
        alert(con_password.value,888888);

          
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
             if(this.readyState==4 && this.status==200)
             {
                 console.log(this.response);
                 var response = JSON.parse(this.response);
                var i;

               
                var notice_cont = document.querySelector("#toast_notice");
                notice_cont.innerHTML="";
                for(i=0;i<response.length;i++)
                {
                 for(var j =0; j<response[i].length;j++)
                 {  
                    var toast_span = document.createElement("p");
                    toast_span.style.width="300px";
                    toast_span.style.height="33px";
                    toast_span.style.color="#000";
                    toast_span.style.padding="5px 8px";
                    toast_span.style.borderRadius="4px";
                    toast_span.style.margin="4px 4px";
                    toast_span.style.borderBottom="2px groove ";
                    var c_notice = response[i][j];
                    var toast_span_text = document.createTextNode(c_notice);
                    toast_span.appendChild(toast_span_text);
                    notice_cont.append(toast_span);
                    $(".toast").toast({delay:20000});
                    $('.toast').toast('show');
                  }  
                 }
                 if(c_notice=="Signup success !")
                 {
                     $(".signup_form").reset('reset');
                 }
                

                  //Close the validation toast
                 var toast_close = document.getElementById("close_toast");
                 toast_close.onclick = function(){
                 $('.toast').toast('hide');
      }
                
             }
            }
            xhttp.open("POST","./signup.php",true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("email="+email.value+"&password="+password.value+"&full_name="+full_name.value+"&con_password="+con_password.value);
            return false;  
        }


     
    }
    else{
      
        this.innerHTML="Signup";
        form_cont.innerText="";
        form_cont.innerHTML = `<form class="signup_form"  autocomplete="off">
        <h4 class="login_txt">Login</h4>
            <input type="email" placeholder="Enter your email" name="email" id="email">
            <input type="password" placeholder="Password" name="password" id="password">
            <input type="password" placeholder="Con password" name="con_password" id="con_password">
            <input  type="submit" id="login_btn">
        </form>
        <hr style="background-color:#ddd;margin-bottom:4px;">
        <h6 align="center" style="font-family:roboto;word-spacing:2px;letter-spacing:2px;font-size:12px;">let's create your resume !</h6>
        `;

        

var login_btn =  document.getElementById("login_btn");
var email = document.getElementById("email");
var password = document.getElementById("password");
var con_password = document.getElementById("con_password");
login_btn.onclick = function(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200)
        {
    //alert(this.status);
    console.log(this.response);
    const response = JSON.parse(this.responseText);
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
        
        var toast_span = document.createElement("p");
        toast_span.style.width="300px";
       toast_span.style.height="33px";
        toast_span.style.padding="5px 8px";
        toast_span.style.borderRadius="4px";
        toast_span.style.margin="4px 4px";
        toast_span.style.color="#000";
        toast_span.style.borderBottom="2px groove red";
        var c_notice = response[i][j];
        var toast_span_text = document.createTextNode(c_notice);
        toast_span.appendChild(toast_span_text);
        notice_cont.append(toast_span);
        $(".toast").toast({delay:20000});
        $('.toast').toast('show');
      
    }
   }
      //Close the validation toast
      var toast_close = document.getElementById("close_toast");
      toast_close.onclick = function(){
        $('.toast').toast('hide');
}


    }
}
}





