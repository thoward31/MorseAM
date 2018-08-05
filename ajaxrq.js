$(document).ready(function(){
            $("#submit").click(function(e){
                // Prevent default posting of form - put here to work in case of errors
                e.preventDefault();
                
                
                
                if($("#message").val() != null) // TOOD chk syntax
                {
                    var msg = $("#message").val();
                    var messagetype = "plaintxt"; 
                }
                else
                {
                    var msg = $("#morse").val();
                    var messagetype = "morsetxt";
                }
                
                alert(msg);
                alert(messagetype);
                
                $.ajax({
                    
                    url : 'app.php', // The php script that deals with translating to morse and flashing the led
                    type : 'POST',
                    data: '{message: ' + msg + '&type: ' + messagetype + '}',  // get the input values to sens to LED.php
                    
                    success : function(data){ // Cette fonction ne fait rien encore, nous la mettrons à jour plus tard
                        if(data.status == 'Success'){
                             // Plain text message has been successfully sent
                             $("#return").html("<p>Message successfully sent !</p>");
                             $("#errorcode").html(data.errtxt);
                             $("#morse").val(data.morsetxt);
                        }
                        else if(data.status == "SuccessMorse"){
                            // Morse message successfully sent
                            $("#return").html("<p>Morse message successfully sent !</p>");
                            $("#errorcode").html(data.errtxt);
                            $("#message").val(data.plaintxt);
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