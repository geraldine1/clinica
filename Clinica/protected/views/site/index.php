<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
  <?php $image_url = Yii::app()->baseUrl . '/slider/';
        $image_arr[] = array( 'image' => $image_url.'slider1.jpg');
        $image_arr[] = array( 'image' => $image_url.'slider2.jpg');
         $image_arr[] = array('image' => $image_url.'slider3.jpg');?>
     <?php $this->widget('application.extensions.wowslider.WowSlider', array(
            'sliderid' => 'wowslider-container1', // required slide unique Id
            'data_arr' => $image_arr, // required data array
            'effect' => 'basic', // optional stack_vertical|basic|blast|blinds|blur|fade|fly|kenburns|rotate|slices|squares|stack
            'duration' => 2000, // optional in milisecond (default 2000)
            'delay' => 2000, // optional in milisecond (default 2000)
            'width' => 100, // optional (default 960)
            'height' => 50, // optional (default 360)
            'autoPlay' => true, // optional true|false (default true)
            'stopOnHover' => false, // optional true|false (default false)
            'loop' => false, // optional true|false (default false)
            'bullets' => true, // optional true|false (default true)
            'caption' => true, // optional true|false (default true)
            'controls' => true, // optional true|false (default true)
            'loading' => '', // optional loading image url (default /images/loader.gif)
        ));
       
       ?>
<div id="footer"><strong>Lunes a Viernes de 9:30 a 13:00 hrs. 15:30 a 20:00 hrs. / Sábados 9:00 a 13:00 hrs.</strong><br />
informaciones@clinicadentalelroble.cl - (72) 2 23 25 75 - (72) 2 22 90 31</div>
