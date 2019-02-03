 /**
 * Author: Abdelali Azhari
 * File:   main.js
 * 
 * Course: CS602 - Spring-2018
 * Project
 * 
 * Professor: Suresh Kalathur
 * Facilitator:  Laura Davis
 * 
 */

// Javascript that uses the ajax to add a product by an administrator
// 
var loadFile = function(event) {
        	var output = document.getElementById('show-picture');
            output.src = URL.createObjectURL(event.target.files[0]);
            var name = document.getElementById('picture_file');
           document.getElementById("product_picture").value = name.files.item(0).name;
            };

function showError(message, form) {
    $(".error").html(message);
    $('.error').show();
    $('.info_messager').hide();
}

function showSuccess(message, form) {
	$(".info_message").html(message);
    $('.info_message').show();
    $('.error').hide();
    $("form")[0].reset();
    $(form).find('input').each(function(){
   		$(this).val("");
   
});

}


$(document).ready(function(){
    $(".prevent-form").submit(function(e){
        e.preventDefault();
    });

	$("#a_search_by_name").submit(function(e){
        e.preventDefault();
    });

    $(".admin-submit-button").click(function(){
    	var form = $(this).closest("form");
    
		var url = $(form).attr("name") + ".php";
        $.ajax({url: "./ajax/admin/" + url, //"/ajax/admin/add_product_ajax.php", 
        	data: form.serialize(),
        	dataType: 'json',
        	type: "POST",
        	success: function(result){
        		if (result.success) {
        			showSuccess(result.message, form);
        		}
        		else {
        			
        			showError(result.message, form);
        		}
        		
        		
           // $("#div1").html(result);
        },
        error: function() {
        	showError("Error occured!! Please try again", form);
         // $('#notification-bar').text('An error occurred');
      }
    });
    });
});