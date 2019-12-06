<?

?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Accesibilidad</title>
    <script>
        var fontSize = 1;
 
        // funcion para aumentar la fuente
        function zoomIn() {
            fontSize += 0.1;
            document.body.style.fontSize = fontSize + "em";
        }

        // funcion para disminuir la fuente
        function zoomOut() {
            fontSize -= 0.1;
            document.body.style.fontSize = fontSize + "em";
        }

        function claro(){
            document.body.style.backgroundColor = '#FFF';
            document.body.style.color = '#000';
            //alert("Blanco");
        }
        
        function obscuro(){
            document.body.style.backgroundColor = '#000';
            document.body.style.color = '#fff';
        }
    1
    </script>
</head>
<body>
    <button onclick="claro()">Claro</button>
    <br>
    <button onclick="obscuro()">Obscuro</button>
    <br>
    <button onclick="zoomIn()">Aumentar</button>
    <br>
    <button onclick="zoomOut()">Disminuir</button>
    <div >
        <h2>Fuente establecida con <strong>em</strong></h2>
        Esta fuente esta establecida con em, por lo que su tamaño sera modificado con javascript
    </div>
    
    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, obcaecati officiis fugiat vitae accusamus reprehenderit dolores architecto iste, et non ex, voluptate adipisci facilis suscipit quis nobis. Nemo numquam, quaerat.</span>
    
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus in facere sequi vel molestiae quasi, incidunt est commodi aliquid sunt possimus et rerum libero praesentium quae necessitatibus eaque recusandae veniam.</p>
    
     <header>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci consequatur accusamus, omnis, eveniet officia aliquam nam vero placeat possimus molestiae error excepturi voluptatum praesentium nostrum perspiciatis quo aliquid velit quas.</header>   
    
    
    <aside>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia asperiores, incidunt nam accusantium, quibusdam aperiam eum provident repellat quae animi tempora officiis nostrum. Quam fugit illum sit, labore debitis eligendi.</aside>
</body>
</html>