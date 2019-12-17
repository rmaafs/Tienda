<a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <i class="fas fa-blind" style="font-size:150%;"></i>
</a>


<ul class="dropdown-menu" style="border:3px solid lightblue;">
    <input type="hidden">
    <li class="header" style="text-align:center;">Introducir Modificaciones</li>
    <li>
        <ul class="menu">
            <li>
                <br>
                <div>
                    <p style="text-align:center;">Tipo:
                        <button onclick="Light('red');" value="Light">Claro</button>
                        <button onclick="Dark('black');" value="Dark">Oscuro</button>
                </div>
                <br>
                <div>
                    <p style="text-align:center;">Tamaño de Letra:
                        <button onclick="Big();" value="big">Grande</button>
                        <button onclick="Small();" value="small">Chico</button>
                </div>

            </li>
        </ul>
    </li>
    <hr>
    <li class="footer"><a>Opciones Especiales</a></li>
</ul>

<script>
    function Dark(color){
        document.body.style.background = color;
    }
</script>