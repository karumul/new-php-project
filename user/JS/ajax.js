
$(document).ready(function(){
  $(".add-data").click(function(){
    $(".form-modal").modal("show");
    $(".submit-form").trigger('reset');
    $(".submit-form").removeClass("submit-form-update");
    $(".submit-form").addClass("submit-form-store");
    $(".submit-btn").html("submit");

//store data
    $(".submit-form-store").on("submit",function(e){
      e.preventDefault();
      $.ajax({
        type : "POST",
        url : "php/crud.php",
        data : new FormData(this),
        processData : false,
        contentType : false,
        success : function(response){
       const message =  JSON.parse(response);
       alert(message);
       if(message=="Data store !")
       {
        $(".form-modal").modal("hide");
           $(".submit-form").trigger('reset');
           //getDataAndDelete();  
       }
        }
      });
    });



  
  });
});




   
  

  //get data
    function getDataAndDelete(){
      $("table").html("");
      $.ajax({
        type : "GET",
        url : "php/crud.php",
        success : function(response){
        const message =  JSON.parse(response);
        
      const f_tr = `<tr>
      <th>Name</th>
      <th>Mobile</th>
      <th>Age</th>
      <th>Subject</th>
      <th>Edit</th>
      <th>DELETE</th>
   </tr>`;
   $("table").append(f_tr);
        for(let i=0;i<message.length;i++)
        {
          var tr = document.createElement("TR");

          const  td_name = document.createElement("TD");
          td_name.innerHTML =  message[i].namee;
          tr.append(td_name);
          
          const  td_mobile = document.createElement("TD");
          td_mobile.innerHTML =  message[i].mobile;
          tr.append(td_mobile);
          
          const  td_age = document.createElement("TD");
          td_age.innerHTML =  message[i].age;
          tr.append(td_age);
          
          
          const  td_subjectt = document.createElement("TD");
          td_subjectt.innerHTML =  message[i].subjectt;
          tr.append(td_subjectt);

          const  td_edit = document.createElement("TD");
          td_edit.innerHTML = '<button data-id="'+message[i].id+'" class="btn btn-primary edit-btn remove-focus mr-4"><i class="fa fa-edit"></i></button>';
          tr.append(td_edit);

          const  td_delete = document.createElement("TD");
          td_delete.innerHTML = '<button data-id="'+message[i].id+'" class="btn btn-warning remove-focus delete-btn"><i class="fa fa-trash"></i></button>';
          tr.append(td_delete);

          $("table").append(tr);
        }



       //delete request
        $(document).ready(function(){
          $(".delete-btn").each(function(index,element){
          $(this).click(function(){
            
            const id = $(this).data('id');
            $.ajax({
              type : "POST",
              url : "php/crud.php",
              data : {
                id : id
              },
              success : function(response){
            const msg = JSON.parse(response);
            if(msg=="Delete success !")
            {
              const d_btn = document.querySelector(".delete-btn");
              d_btn.parentElement.parentElement.remove();
               getDataAndDelete();
            }
              }
            });
          });
          });
        });

   update();

    
        



        }
      });
      
    }






       // edit item
        
     function update(){
      $(".edit-btn").each(function(index,element){
        $(this).click(function(){
         
          const e_btn = document.querySelector(".edit-btn");
          const row_data = e_btn.parentElement.parentElement.innerHTML.split("</td>");
          let len = row_data.length-3;
          let data =[];
          for(let i = 0;i<len;i++)
          {
             data[i] = row_data[i].split("<td>");
          }
           function setData(data){
            $("input",".submit-form").each(function(index,element){
              $(this).val();
              $(this).val(data[index][1]);
            });
          }

          $(".form-modal").modal("show");
          $(".submit-form").addClass("submit-form-update");
          $(".submit-form").removeClass("submit-form-store");
          $(".submit-btn").html("save");


          setData(data);
          const id = $(this).data('id');
          $(".submit-form-update").on("submit",function(e){
            e.preventDefault();
            let form_data =new FormData(this);
            form_data.append("id",id);
            form_data.append("update","update");
            $.ajax({
              type : "POST",
               url : "php/crud.php",
               data : form_data,
               processData : false,
               contentType : false,
               success : function(response){
            let update = JSON.parse(response);
             if(update=="Updated !")
             {
               //setData(data);
              $(".submit-form").trigger('reset');
              $(".form-modal").modal("hide");
             // getDataAndDelete();  
             }
               }

              
          
            });
          });
        });
        });
     };







    $(document).ready(function(){
      getDataAndDelete();
    });
  

    





    
        


