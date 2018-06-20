/*
=================================================================================

                     ALL JQUERY FILE HERE 

=================================================================================
*/
(function($){
    
    
    // POST A JOB AVATER 
     $('#customfile').on('change',function(){
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    })
    
    
    // FOR SETTING AVATER IN SETTING PAGE
    $('#customfile2').on('change',function(){
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    })
    
    
    // CONVERSATION FILE UPLOAD
    
    $('#cfile').on('change',function(){
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    })


    
    // FOR NOTIFICATION CLICK OPTION
    $(document).on('click', '.notificationbell', function(e){
        $('.notificationDetails').slideToggle('slow');
        return false;
    });   
    
})(jQuery)



/*
=================================================================================

                     ALL JAVASCRIPT FILE HERE 

=================================================================================
*/


// avatar shows after select file
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#avatarupload')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}


// PRIVACY POLICY PAGE 

 var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight){
          panel.style.maxHeight = null;
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
        } 
      });
    }




