<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="template, tour template, city tours, city tour, tours tickets, transfers, travel, travel template" />
    <meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
    <meta name="author" content="Ansonika">
    <title>CITY TOURS - City tours and travel site template by Ansonika</title>
    
    <!-- Favicons-->    
    <link rel="shortcut icon" href="<?= Settings::WEB_HOST_URL ?>content/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="<?= Settings::WEB_HOST_URL ?>content/images/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?= Settings::WEB_HOST_URL ?>content/images/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?= Settings::WEB_HOST_URL ?>content/images/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?= Settings::WEB_HOST_URL ?>content/images/apple-touch-icon-144x144-precomposed.png">
    <!-- CSS -->
    <link href="<?= Settings::WEB_HOST_URL ?>content/stylesheets/base.css" rel="stylesheet" />
	
    <!-- Google web fonts -->
   <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    
	<style>
    .invoice-title h2, .invoice-title h3 {
        display: inline-block;
    }
    
    .table > tbody > tr > .no-line {
        border-top: none;
    }
    
    .table > thead > tr > .no-line {
        border-bottom: none;
    }
    
    .table > tbody > tr > .thick-line {
        border-top: 2px solid;
    }
    </style>
        
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
        
</head>
<body>
  <div class="container">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2><?= Label::comprobante ?></h2><h3 class="pull-right"><?= Label::orden ?> # 12345</h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong><?= Label::participante ?>:</strong><br>
    					John Smith<br>
    					1234 Main<br>
    					Apt. 4B<br>
    					Springfield, ST 54321
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong><?= Label::forma_pago ?></strong><br>
    					Visa ending **** 4242
    				</address>
    			</div>
    		</div>
    		<div class="row">
                    <div class="col-xs-6"></div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong><?= Label::fecha_compra ?>:</strong><br>
    					March 7, 2014<br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong><?= Label::resumen_compra ?></strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<tbody>
                        <tr>
                            <td><strong><?= Label::evento ?></strong></td>
                            <td>Evento de Prueba</td>
                        </tr>
                        <tr>
                            <td><strong><?= Label::fecha ?></strong></td>
                            <td>13/12/2015</td>
                        </tr>
                        <tr>
                            <td><strong><?= Label::hora ?></strong></td>
                            <td>20:00 - 02:00</td>
                        </tr>
                        <tr>
                            <td><strong><?= Label::lugar ?></strong></td>
                            <td>Barcelona, Anzoátegui </td>
                        </tr>
                        <tr>
                            <td><strong><?= Label::lugar_encuentro ?></strong></td>
                            <td>Puerto La Cruz, Anzoátegui</td>
                        </tr>
                        <tr>
                            <td><strong><?= Label::forma_pago ?></strong></td>
                            <td>Tarjeta de crédito</td>
                        </tr>
                        <tr>
                            <td><strong><?= Label::total ?></strong></td>
                            <td>$154</td>
                        </tr>
                    </tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>



  </body>
</html>
