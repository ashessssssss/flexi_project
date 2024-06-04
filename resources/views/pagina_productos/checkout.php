<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Productos</title>
  <link rel="x-icon" href="pagina_inicio/img/WhatsApp Image 2024-03-19 at 12.20.11 PM.jpeg" type="image/x-icon">
  <script src="https://www.paypal.com/sdk/js?client-id=AZsO7djRoRTqs-c6YdhFl4AqCHvsp0LDT67U0xANOt39PLuFT4Zu3BW6MSXZZCdAnP6bdJDXJZiT5JUL"></script></head>
<body>
  <div id="paypal-button-conteiner"></div>
  <script>
    paypal.Buttons({
      style:{
        color:'blue',
        shape:'pill',
        label: 'pay'
      },
      createOrder: function(data, actions){
       return actions.order.create({
       purchase_units: [{
       amount:{
       value: 100
    }
  }]
});
      },
      onApprove:function(data, actions){
        actions.order.capture().then(function(detalles){
          window.location.href="completado.html"

        });

      },

      onCancel:function(data){
        alert("Pago Cancelado");
        console.log(data);

      }
    }).render('#paypal-button-conteiner');
  </script>
</body>
</html>