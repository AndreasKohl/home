

<div class="home">
		 <?php
         if($weathermap)
         { ?>

             <div class="row home-weather">
                 <div class="col-xs-3 weather_icon text-center">
                     <i class="owf owf-<?php echo $weather['weather_code'];?>"></i>
                 </div>
                 <div class="col-xs-5 col-sm-6 weather_text text-center">
                     <h3><?php echo $settings['city']; ?> <br/> <small> <b><?php echo $weather['title'];?></b> <?php echo $weather['description'];?> </small></h3>
                 </div>
                 <div class="col-xs-4 col-sm-3 weather_temp"><?php echo $temp." ".$tsign;?></div>
             </div>

         <?php
         }
         ?>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 lights">
            
            <ul id="devices"></ul>
            
        </div>   
        
    </div>
</div>