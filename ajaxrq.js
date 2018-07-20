$(document).ready(function(){
            $("#submit").click(function(e){
                // Prevent default posting of form - put here to work in case of errors
                e.preventDefault();
                
                $.ajax({
                    
                    url : 'LED.php', // The php script that deals with translating to morse and flashing the led
                    type : 'POST',
                    data: {"message" : $("#message").val()},  // get the input values to sens to LED.php
                    
                    success : function(data){ // Cette fonction ne fait rien encore, nous la mettrons à jour plus tard
                        if(data.status == 'Success'){
                             // The message has been successfully sent
                             $("#return").html("<p>Message successfully sent !</p>");
                             $("#errorcode").html(data.errtxt);
                             $("#morse").val(data.morsetxt);
                        }

                        else{
                             // Error
                             $("#return").html("<p>Error in php...<p>");
                             $("#errorcode").html(data.errtxt);
                        }
                    },
                    error: function(){
                        $("#return").html("<p>Ajax request failed<p>");
                    },

                    dataType : 'json' // We want to return "Success" ou "Failed", so we specify text !

                });
            });
        });