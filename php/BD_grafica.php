
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title><?php echo "Documento"; ?></title>
    <script src='..\dist\js\Chart.bundle.min.js'></script>   
    <script src='..\dist\js\jquery-3.2.1.js'></script>   
    <script type='text/ecmascript'>
    $(document).ready(function(){
        var datos = {
            type: 'pie',
            data : {
                datasets: [{ 
                data: [//datos iniciales de la grafica
                    <?php require 'datos.php'; ?>
                    
                ],
                    backgroundColor: [
                        '#FB744A',
                        '#46BFBD',
                        '#FDB45C',
                        '#949FB1',
                        '#37E115',
                        '#E115DD',
                        '#E1E015',                        
                    ],
                  
                }],
                labels : [
                    <?php require 'datos2.php'; ?>  
                
                    
                    
                ]
            },
            options : {
                responsive : true,
            }
            
        };
        var canvas = document.getElementById('chart').getContext('2d');
        window.pie = new Chart(canvas, datos);
        /*setInterval(function() {
            datos.data.datasets.splice(0);
            var newData= {
                backgroundColor: [
                        '#FB744A',
                        '#46BFBD',
                        '#FDB45C',
                        '#949FB1',
                        '#4D5360',
                        
                    
                ],
                data: [
                    getRandom(), getRandom(), getRandom(), getRandom(),getRandom()//aqui va la data de base de datos 
                ]//la cual se actualizara
            };
            datos.data.datasets.push(newData);
            window.pie.update();
        },5000);*/
        
       
    }); </script>
    </head>
<body>
   <div id='canvas-container' style='width: 50%;'>
    <canvas id='chart' width='500' height='350' ></canvas>
    </div>
</body>
</html>