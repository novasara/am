<html>
    <style>
        div {
            background: #86592d;
        }
      
        p {
            font-size: 16px;
            font-weight: bold;
            font-family: verdana;
            color: yellow;
        }
      
        label {
            color: yellow
        }
    </style>
    <center>
    <div>
    <p>#Utiliti Pengguna#</p>
    <center>
    <label>Tukar warna Font</label><br>
    <button id="color">Warna Font</button><br><br>
    <label>Tukar warna latar</label>
    <?php include("tukar_warna.php") ?>
    </center><br>
    </div>
      
    <script>
        document.getElementById('color').onclick = changeColor;
        var currentColor = "blue";
      
        function changeColor(){
            if (currentColor == "red") {
                document.body.style.color = "blue";
                currentColor = "blue";
            } else {
                document.body.style.color = "red";
                currentColor = "red";
            }
        }
    </script>
</html> 
      
