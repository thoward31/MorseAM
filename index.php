<!DOCTYPE html>
<html>
<body>

    Text to encode in morse : <br>
    <input type="text" id="message" /> </p>
    
    Morse text : <br>
    <input type="text" id="morse"/> </p>
    
    <input type="button" id="submit" value="Send me a message" />

    
    <div id="return">
        <!-- Here we return the jQuery ajax request output -->
    </div>
    <div id="errorcode">
        <!-- Here we return the jQuery ajax request output -->
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="ajaxrq.js"></script>

</body>
</html>