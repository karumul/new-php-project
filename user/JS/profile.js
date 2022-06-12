












//bigger and small the sidebar
var bar_icon  = document.getElementById("bar_icon");
bar_icon.onclick = function(){
    var side_bar = document.getElementById("side_bar");
    var menu_content = document.getElementById("menu_content");
    const home_txt = document.getElementById("home_txt");
    const service_txt = document.getElementById("service_txt");
    const product_txt = document.getElementById("product_txt");
    const appointment_txt = document.getElementById("appointment_txt");
    const consult_txt = document.getElementById("consult_txt");
    const contact_txt = document.getElementById("contact_txt");
    const dashboard_txt = document.getElementById("dashboard_txt");

    const home_icon = document.querySelector(".home_icon");
    
   
    //side_bar.setAttribute("class","sidebar smaller");
    const attr =  side_bar.getAttribute('class');
    if(attr=="sidebar bigger")
    {
        side_bar.setAttribute("class","sidebar smaller");
        // home_icon.style.transition="0.3s ease-in";
        // home_icon.style.marginLeft="5px";
        side_bar.style.transition="0.3s ease-in";
        menu_content.style.transition="0.3s ease-in";
        side_bar.style.width="3%";
        side_bar.style.float="left";
       // side_bar.style.marginRight="1%";
        menu_content.style.width="97%";
        menu_content.style.float="left";
        setTimeout(() => {
            home_txt.style.display="none";
            service_txt.style.display="none";
            product_txt.style.display="none";
            appointment_txt.style.display="none";
            consult_txt.style.display="none";
            contact_txt.style.display="none";
            dashboard_txt.style.display="none";
        },200);
        
    }
    else {
        side_bar.setAttribute("class","sidebar bigger");
        // home_icon.style.transition="0.3s ease-in";
        // home_icon.style.marginLeft="0px";
        side_bar.style.width="22%";
        side_bar.style.float="left";
        //side_bar.style.marginRight="3%";
        menu_content.style.width="78%";
        menu_content.style.float="left";
        setTimeout(() => {
            home_txt.style.display="block";
            service_txt.style.display="block";
            product_txt.style.display="block";
            appointment_txt.style.display="block";
            consult_txt.style.display="block";
            contact_txt.style.display="block";
            dashboard_txt.style.display="block";  
        }, 250);    
    }
} 


//navbar active coding
const active  = document.getElementsByClassName("active");
const a_arr = Array.from(active);
// console.log(a_arr);
a_arr.forEach((element, index, array)=>{
  element.addEventListener("click",()=>{
     getData();
     // console.log(element.getAttribute("id"));
    //   alert(index);
      for(let i = 0; i<array.length;i++)
      {
          if(i==index)
          {
            array[i].setAttribute("id","active"); 
            
          }
          else{
            array[i].removeAttribute("id");
          }     
      }
     
  });
});


//get page content 
const app =  ()=>{
  const url = new URL(window.location.href);
let show_content = "";
if(url.hash =="#home")
{
show_content =  "<h1>Home page !</h1>";
//return show_content;
}
else if(url.hash =="#services")
{
show_content = "<h1>Services page !</h1>";
//return show_content;
}
else if(url.hash =="#products")
{
show_content = "<h1>Products page !</h1>";
//return show_content;
}
return show_content;
}


function getData(){
  console.log(app());
}





//Start menu set coding
const select_input = document.querySelector("#set_select_menu");
var dynamic_input_div = document.querySelector("#dynamic_input_div");

select_input.addEventListener('change',function(){
  dynamic_input_div.innerHTML="";
  const select_value = this.value;
  for(var i=1;i<=select_value;i++)
  {
   var div =  document.createElement("DIV");
   div.className="input-group mb-2";
   var input = document.createElement("INPUT");
   input.type="text";
   input.setAttribute("disabled","disabled");
   if(i==1)
   {
     input.removeAttribute("disabled","disabled");
   }
   input.placeholder="Menu name "+i;
   input.className="form-control "+i+"-input";
   div.append(input);
   dynamic_input_div.append(div);
   
  }

const input_element = dynamic_input_div.querySelectorAll("input");
// console.log(input_element[0]);
input_element[0].oninput = function(){
var reg_exp =   /^[a-zA-Z\s]+$/;
  if(reg_exp.exec(this.value) != null)
  {
    input_element[0].onkeydown = function(target){
      if(target.keyCode==13 && (this.value.length >=4 && this.value.length<=10))
      {
        if(input_element[input_element.length-1] ===input_element[0])
        {
         var btn_menu = document.createElement("BUTTON");
         btn_menu.className = "btn btn-primary m-2  ml-0 p-2";
         btn_menu.id= "save_menu_btn";
         btn_menu.type="button";
         var text_node  =  document.createTextNode("Save now");
         btn_menu.appendChild(text_node);
         dynamic_input_div.append(btn_menu);
         return false;
        }
        else
        {
         const input_element = dynamic_input_div.querySelectorAll("input");
        input_element[1].removeAttribute("disabled");
         input_element[1].focus();


  //Second menu 
  input_element[1].oninput = function(){
    var reg_exp =   /^[a-zA-Z\s]+$/;
      if(reg_exp.exec(this.value) != null)
      {
        input_element[1].onkeydown = function(target){
          if(target.keyCode==13 && (this.value.length >=4 && this.value.length<=10))
          {
            if(input_element[input_element.length-1] ===input_element[1])
            {
              var btn_menu = document.createElement("BUTTON");
              btn_menu.className = "btn btn-primary m-2  ml-0 p-2";
              btn_menu.id= "save_menu_btn";
              btn_menu.type="button";
              var text_node  =  document.createTextNode("Save now");
              btn_menu.appendChild(text_node);
              dynamic_input_div.append(btn_menu);
              
            }
            else
            {
             const input_element = dynamic_input_div.querySelectorAll("input");
            input_element[2].removeAttribute("disabled");
             input_element[2].focus();


    //Third menu
    input_element[2].oninput = function(){
      var reg_exp =   /^[a-zA-Z\s]+$/;
        if(reg_exp.exec(this.value) != null)
        {
          input_element[2].onkeydown = function(target){
            if(target.keyCode==13 && (this.value.length >=4 && this.value.length<=10))
            {
              if(input_element[input_element.length-1] ===input_element[2])
              {
                var btn_menu = document.createElement("BUTTON");
                btn_menu.className = "btn btn-primary m-2  ml-0 p-2";
                btn_menu.id= "save_menu_btn";
                btn_menu.type="button";
                var text_node  =  document.createTextNode("Save now");
                btn_menu.appendChild(text_node);
                dynamic_input_div.append(btn_menu);
              }
              else
              {
               const input_element = dynamic_input_div.querySelectorAll("input");
              input_element[3].removeAttribute("disabled");
               input_element[3].focus();


         //Fourth menu
      input_element[3].oninput = function(){
        var reg_exp =   /^[a-zA-Z\s]+$/;
          if(reg_exp.exec(this.value) != null)
          {
            input_element[3].onkeydown = function(target){
              if(target.keyCode==13 && (this.value.length >=4 && this.value.length<=10))
              {
                if(input_element[input_element.length-1] ===input_element[3])
                {
                  var btn_menu = document.createElement("BUTTON");
                  btn_menu.className = "btn btn-primary m-2  ml-0 p-2";
                  btn_menu.id= "save_menu_btn";
                  btn_menu.type="button";
                  var text_node  =  document.createTextNode("Save now");
                  btn_menu.appendChild(text_node);
                  dynamic_input_div.append(btn_menu);
                }
                else
                {
                 const input_element = dynamic_input_div.querySelectorAll("input");
                input_element[4].removeAttribute("disabled");
                 input_element[4].focus();

                  //Fifth menu
                 input_element[4].oninput = function(){
                  var reg_exp =   /^[a-zA-Z\s]+$/;
                    if(reg_exp.exec(this.value) != null)
                    {
                      input_element[4].onkeydown = function(target){
                        if(target.keyCode==13 && (this.value.length >=4 && this.value.length<=10))
                        {
                          if(input_element[input_element.length-1] ===input_element[4])
                          {
                            var btn_menu = document.createElement("BUTTON");
                            btn_menu.className = "btn btn-primary m-2  ml-0 p-2";
                            btn_menu.id= "save_menu_btn";
                            btn_menu.type="button";
                            var text_node  =  document.createTextNode("Save now");
                            btn_menu.appendChild(text_node);
                            dynamic_input_div.append(btn_menu);
                          }
                          else
                          {
                           const input_element = dynamic_input_div.querySelectorAll("input");
                          input_element[5].removeAttribute("disabled");
                           input_element[5].focus();


          //sixth menu
        input_element[5].oninput = function(){
          var reg_exp =   /^[a-zA-Z\s]+$/;
            if(reg_exp.exec(this.value) != null)
            {
              input_element[5].onkeydown = function(target){
                if(target.keyCode==13 && (this.value.length >=4 && this.value.length<=10))
                {
                  
                  if(input_element[input_element.length-1] ===input_element[5])
                  {
                  var btn_menu = document.createElement("BUTTON");
                  btn_menu.className = "btn btn-primary m-2  ml-0 p-2";
                  btn_menu.id= "save_menu_btn";
                  btn_menu.type="button";
                  var text_node  =  document.createTextNode("Save now");
                  btn_menu.appendChild(text_node);
                  dynamic_input_div.append(btn_menu);
                  return false;
                  }
                  else
                  {
                   const input_element = dynamic_input_div.querySelectorAll("input");
                  input_element[6].removeAttribute("disabled");
                   input_element[6].focus();
                  }
        
                 
                }
                else if(target.keyCode==13)
                {
                  alert("length should be greater than 4 and less than or equal to 10");
                 
                }
            }
            }
            else
            {
              alert("only alphabets are allowed !");
              var index = this.value.length-1;
              var char = this.value.charAt(index);
              // alert(char);
              var text = this.value;
             this.value =  text.replace(char,"");
            }
          }



                          }
                        }
                        else if(target.keyCode==13)
                        {
                          alert("length should be greater than 4 and less than or equal to 10");
                        }
                    }
                    }
                    else
                    {
                      alert("only alphabets are allowed !");
                      var index = this.value.length-1;
                      var char = this.value.charAt(index);
                      // alert(char);
                      var text = this.value;
                     this.value =  text.replace(char,"");
                    }
                  }


                }
              }
              else if(target.keyCode==13)
              {
                alert("length should be greater than 4 and less than or equal to 10");
              }
          }
          }
          else
          {
            alert("only alphabets are allowed !");
            var index = this.value.length-1;
            var char = this.value.charAt(index);
            // alert(char);
            var text = this.value;
           this.value =  text.replace(char,"");
          }
        }



              }
            }
            else if(target.keyCode==13)
            {
              alert("length should be greater than 4 and less than or equal to 10");
            }
        }
        }
        else
        {
          alert("only alphabets are allowed !");
          var index = this.value.length-1;
          var char = this.value.charAt(index);
          // alert(char);
          var text = this.value;
         this.value =  text.replace(char,"");
        }
      }


            }
          }
          else if(target.keyCode==13)
          {
            alert("length should be greater than 4 and less than or equal to 10");
          }
      }
      }
      else
      {
        alert("only alphabets are allowed !");
        var index = this.value.length-1;
        var char = this.value.charAt(index);
        // alert(char);
        var text = this.value;
       this.value =  text.replace(char,"");
      }
    }
        }
      }
      else if(target.keyCode==13){
        alert("length should be greater than 4 and less than or equal to 10");
        return false;
      }
  }
  }
  else
  {
    alert("only alphabets are allowed !");
    var index = this.value.length-1;
    var char = this.value.charAt(index);
    // alert(char);
    var text = this.value;
   this.value =  text.replace(char,"");
  }
}
});


















