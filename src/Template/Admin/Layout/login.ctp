<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Junipurr | Admin Login</title>
<?php echo $this->Html->css('bootstrap.min');?>
<?php echo $this->Html->css('/font-awesome/css/font-awesome');?>
<?php echo $this->Html->css('animate.css');?>
<?php echo $this->Html->css('style.css');?>
</head>
<body class="gray-bg">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <!--<div>
                <h1 class="logo-name">IN+</h1>
            </div>-->
            <h3>Welcome to Admin Login</h3>
            <!--<p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                Continually expanded and constantly improved Inspinia Admin Them (IN+)
            </p>-->
            
            <p><?= $this->Flash->render();?></p>
            
            <p>Login in. To see it in action.</p>
            <?php echo $this->Form->create(null,['url'=>['controller'=>'login','action'=>'index'],'class'=>'m-t']);?>
                <div class="form-group">
                    <input type="email" name="username" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>               
            <?php echo $this->Form->end();?>
            <p class="m-t"> <small>Junipurr Admin Login &copy; <?php echo date("Y");?></small></p>
        </div>
    </div>
    <!-- Mainly scripts -->   
    <?php echo $this->Html->script('jquery-3.1.1.min');?>
    <?php echo $this->Html->script('popper.min');?>
    <?php echo $this->Html->script('bootstrap');?>  
</body>
</html>