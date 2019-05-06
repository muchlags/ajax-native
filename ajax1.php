<script type="text/javascript">

	var req = new XMLHttpRequest();

    req.onreadystatechange = function() {
        if (req.readyState == XMLHttpRequest.DONE) {   // XMLHttpRequest.DONE == 4
           var wew = JSON.parse(req.responseText);
           console.log(wew);

        }
    };

    req.open("POST", "ajax2.php", true);
    req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded'); //required for POST method
    
    req.send('data={"num1":9,"num2":3}'); //data to be sent to ajax2.php

</script>
