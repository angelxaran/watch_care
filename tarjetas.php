
<!DOCTYPE html>
<html>
<head>
  <script src="js/dialogs.js"></script>
  <link rel="stylesheet" href="css/dialogs.css">
  <script src="js/jquery-1.10.2.min.js"></script>
  <script src="js/ej.web.all.min.js"></script>
<style>
    .card {
        box-shadow: 0 4px 8px 0 #C1C1C1;
        transition: 0.3s;
        width: 80%;
        border-radius: 5px;
        background-color: #19F265;
        padding: 10px;
        margin: 10px;
    }
    .amin{
      -webkit-animation-name: example; 
      -webkit-animation-duration: 4s; 
      animation-name: example;
      animation-duration: 10s;
      animation-iteration-count: infinite;
      animation-delay: 3s;
    }
    .amin2{
      -webkit-animation-name: example; 
      -webkit-animation-duration: 4s; 
      animation-name: example;
      animation-duration: 10s;
      animation-iteration-count: infinite;
      animation-delay: 5s;
    }
    .amin3{
      -webkit-animation-name: example; 
      -webkit-animation-duration: 4s; 
      animation-name: example;
      animation-duration: 10s;
      animation-iteration-count: infinite;
      animation-delay: 1s;
    }
    .amin4{
      -webkit-animation-name: example; 
      -webkit-animation-duration: 4s; 
      animation-name: example;
      animation-duration: 10s;
      animation-iteration-count: infinite;
      animation-delay: 8s;
    }
    @-webkit-keyframes example {
      0%   {background-color: red;}
      25%  {background-color: red;}
      50%  {background-color: red;}
      99% {background-color: #19F265;}
    }

    @keyframes example {
      0%   {background-color: red;}
      25%  {background-color: red;}
      50%  {background-color: red;}
      99% {background-color: #19F265;}
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 red;
    }

    .container {
        padding: 2px 16px;
    }
    .table{
        width: 100%
    }

  </style>
  <script type="text/javascript">
  var chartData = [
      { Hora: '15:10', Fecuencia: 64 },
      { Hora: '15:15', Fecuencia: 32 },
      { Hora: '15:20', Fecuencia: 40 },
      { Hora: '15:25', Fecuencia: 32 },
      { Hora: '15:30', Fecuencia: 35 },
      { Hora: '15:35', Fecuencia: 55 },
      { Hora: '15:40', Fecuencia: 38 },
      { Hora: '15:45', Fecuencia: 30 },
      { Hora: '15:50', Fecuencia: 38 },
      { Hora: '15:55', Fecuencia: 30 }];
      var hora = 16;
      var min = 0;
      var set;

  $(document).ready(function() { 
      
  });

    function Agregar() {
      chartData.shift();
      var number = Math.floor((Math.random() * 60) + 1);
      var tiempo; 
      if (min < 10 ) { tiempo = hora+':0'+ min; }
      else{ tiempo = hora+':'+ min; }


      if (min == 55 ) { hora += 1; min = -5; }
      

      chartData.push({ Hora: tiempo , Fecuencia: number });
      min += 5;
       grafica() ;
    }
    function Info() {
      clearTimeout(set);
      swal({
        title: "Nombre Apellido",
        text: '<div id="chartcontainer" style="width: 500px; height: 200px;"></div>',
        html: true
      });
      grafica() 
    }
    function grafica() {
      set = setTimeout('Agregar()',1000);
       $("#chartcontainer").ejChart({
        series: [{
          dataSource: chartData, 
          type: 'line',  
          xName: "Hora", 
          yName: "Fecuencia",
          fill: "#000000",
        }],
        legend: {
                visible: false
           },
      });
    }
    // clearTimeout(set);

  </script>

</head>
  <body>
    <table class="table">
      <tr>
        <td>
          <div class="card" onclick="Info()">
            <div class="container">
              <h4><b>Nombre Apelidos</b></h4> 
            </div>
          </div>
        </td>
        <td>
          <div class="card amin" onclick="Info()">
            <div class="container">
              <h4><b>Nombre Apelidos</b></h4> 
            </div>
          </div>
        </td>
        <td>
          <div class="card" onclick="Info()">
            <div class="container">
              <h4><b>Nombre Apelidos</b></h4> 
            </div>
          </div>
        </td>
        <td>
          <div class="card" onclick="Info()">
            <div class="container">
              <h4><b>Nombre Apelidos</b></h4> 
            </div>
          </div>
        </td>
        <td>
          <div class="card" onclick="Info()">
            <div class="container">
              <h4><b>Nombre Apelidos</b></h4> 
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="card" onclick="Info()">
            <div class="container">
              <h4><b>Nombre Apelidos</b></h4> 
            </div>
          </div>
        </td>
        <td>
          <div class="card" onclick="Info()">
            <div class="container">
              <h4><b>Nombre Apelidos</b></h4> 
            </div>
          </div>
        </td>
        <td>
          <div class="card" onclick="Info()">
            <div class="container">
              <h4><b>Nombre Apelidos</b></h4> 
            </div>
          </div>
        </td>
        <td>
          <div class="card amin3">
            <div class="container">
              <h4><b>Nombre Apelidos</b></h4> 
            </div>
          </div>
        </td>
        <td>
          <div class="card" onclick="Info()">
            <div class="container">
              <h4><b>Nombre Apelidos</b></h4> 
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="card" onclick="Info()">
            <div class="container">
              <h4><b>Nombre Apelidos</b></h4> 
            </div>
          </div>
        </td>
        <td>
          <div class="card" onclick="Info()">
            <div class="container">
              <h4><b>Nombre Apelidos</b></h4> 
            </div>
          </div>
        </td>
        <td>
          <div class="card" onclick="Info()">
            <div class="container">
              <h4><b>Nombre Apelidos</b></h4> 
            </div>
          </div>
        </td>
        <td>
          <div class="card ">
            <div class="container">
              <h4><b>Nombre Apelidos</b></h4> 
            </div>
          </div>
        </td>
        <td>
          <div class="card" onclick="Info()">
            <div class="container">
              <h4><b>Nombre Apelidos</b></h4> 
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="card" onclick="Info()">
            <div class="container">
              <h4><b>Nombre Apelidos</b></h4> 
            </div>
          </div>
        </td>
        <td>
          <div class="card" onclick="Info()">
            <div class="container">
              <h4><b>Nombre Apelidos</b></h4> 
            </div>
          </div>
        </td>
        <td>
          <div class="card" onclick="Info()">
            <div class="container">
              <h4><b>Nombre Apelidos</b></h4> 
            </div>
          </div>
        </td>
        <td>
          <div class="card" onclick="Info()">
            <div class="container">
              <h4><b>Nombre Apelidos</b></h4> 
            </div>
          </div>
        </td>
        <td>
          <div class="card" onclick="Info()">
            <div class="container">
              <h4><b>Nombre Apelidos</b></h4> 
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="card" onclick="Info()">
            <div class="container">
              <h4><b>Nombre Apelidos</b></h4> 
            </div>
          </div>
        </td>
        <td>
          <div class="card amin4" onclick="Info()">
            <div class="container">
              <h4><b>Nombre Apelidos</b></h4> 
            </div>
          </div>
        </td>
        <td>
          <div class="card" onclick="Info()">
            <div class="container">
              <h4><b>Nombre Apelidos</b></h4> 
            </div>
          </div>
        </td>
        <td>
          <div class="card amin2">
            <div class="container">
              <h4><b>Nombre Apelidos</b></h4> 
            </div>
          </div>
        </td>
        <td>
          <div class="card" onclick="Info()">
            <div class="container">
              <h4><b>Nombre Apelidos</b></h4> 
            </div>
          </div>
        </td>
      </tr>
    </table>
      <script>

         var  opciones=[];
         var metodos=[];
         opciones[0]='Más activos';
         metodos[0]='lobos.jpeg';

         opciones[1]='Menos activos';
         metodos[1]='lobos.jpeg';

         opciones[2]='Nuevos';
         metodos[2]='lobos.jpeg';

         opciones[3]='Fuera de línea';
         metodos[3]='lobos.jpeg';
           
           opciones[4]='Fuera de línea';
         metodos[4]='lobos.jpeg';

  parent.createMenu(opciones,metodos);

          function metodox(){

          }

           function opcion2(){
          alert('opcion2');
          }
           function opcion3(){
          alert('opcion3');
          }
           function opcion4(){
          alert('opcion4');
          }
           function opcion5(){
          alert('opcion5');
          }

          function opcion1(){
          alert('opcion1');
          }

      </script>
  </body>
  
</html> 