<!DOCTYPE html>
<html lang="en">
<head>
	
</head>
<body >
    <script>
        i = 0;
        function hideForm() {
            var formpoint = document.getElementById('formdisp');
           
            
            if (i == 0){
                formpoint.style.display = 'none';
                i++;
            }
            else if (i == 1){
                formpoint.style.display = 'block';
                i--;
            } 


        }
    </script>
</body>
</html>