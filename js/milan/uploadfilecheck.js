<!-- display all file selected -->
 $(document).ready(function (){    
        $(".check-file-extention").change(function (){
            for (var i = 0; i < $(this).get(0).files.length; ++i) {
                var accepted_file=$(this).get(0).files[i].name;


                if(accepted_file){                        
                    var file_size=$(this).get(0).files[i].size;
                    if(file_size<2097152){
          var ext= accepted_file.substr(accepted_file.lastIndexOf('.')+1).toLowerCase();                          
                        if($.inArray(ext,['docx','doc','pdf','txt','ppt'])===-1){
                           $('.count_result').html("Wrong file selected ?");
                            $('.count_result').css("background-color", "red");
                           
                            return false;
                        }
                    }else{
                       $('.count_result').html("File size is too large.");
                       
                        return false;
                    }
                 $('.count_result').css("background-color", "#00a651");
         $('.count_result').html("Valid files.");   
                }else{
                    /*$('.count_result').html("File size is too large.");     
                     e.preventDefault();    
                    return false;*/
                }
            }
        });
    });

<!-- end of  display all file selected -->