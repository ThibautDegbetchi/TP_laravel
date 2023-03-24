<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <script language="JavaScript">
        function click() {
            var phone = document.getElementById('phone').value;
            if(phone == ''){
                alert('Champ obligatoire');
                return false;
            }else{

            }

        }
        function onSub(element) {
            alert("Clique sur "+element.name);
            return false;
        }
    </script>
</head>


<body>
    <div>
        <form  name="f" method="post" onsubmit="return onSub(this);">
            Phone : <input id="phone" type="tel" name="phone"/>
            <input type="reset" value="Annuler"/> <input type="button" id="valid" name="valider" value="Valider";">
        </form>
    </div>
</body>
</html>

