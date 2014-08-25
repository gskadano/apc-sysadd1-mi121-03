<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>


<!--<img src="http://directory.ucanews.com/uploads/images/1357896339.jpg" alt="Smiley face" style="float: left">-->

<table style="float: right"> 
    <!--<tr> <td><h2 style="float: right">Calendar: </h2> </td> </tr>
    <tr><td><input type="date" style="float: right"> </td></tr>-->
	<?php /*$this->widget('application.extensions.fullcalendar.FullcalendarGraphWidget', 
    array(
        'data'=>array(
                'title'=> 'All Day Event',
                'start'=> date('Y-m-j'),
                'color'=>'#000000',
 
        ),
        'options'=>array(
            'editable'=>true,
            'defaultView'=>'agendaWeek',
            'eventClick'=>'js:function(event, eventElement){
                                                                            alert("hello");
                                                                        }',
        ),
 
        'htmlOptions'=>array(
               'style'=>'width:800px;margin: 0 auto;'
        ),
    )
);*/
//------------------------------------------------------------------------------------
/*$this->widget('application.extensions.EFullCalendar.EFullCalendar', array(
    // polish version available, uncomment to use it
    // 'lang'=>'pl',
    // you can create your own translation by copying locale/pl.php
    // and customizing it
 
    // remove to use without theme
    // this is relative path to:
    // themes/<path>
    //'themeCssFile'=>'cupertino/theme.css',
 
    // raw html tags
    'htmlOptions'=>array(
        // you can scale it down as well, try 80%
        'style'=>'width:100%'
    ),
    // FullCalendar's options.
    // Documentation available at
    // http://arshaw.com/fullcalendar/docs/
    'options'=>array(
        'header'=>array(
            'left'=>'prev,next',
            'center'=>'title',
            'right'=>'today'
        ),
        'lazyFetching'=>true,
        'events'=>$calendarEventsUrl, // action URL for dynamic events, or
        'events'=>array(), // pass array of events directly
 
        // event handling
        // mouseover for example
        'eventMouseover'=>new CJavaScriptExpression("js_function_callback"),
    )
));*/
//-------------------------------------------------------------------------------------------------------------
	//$this->widget('ext.calendar-advance.AdvanceCalendarWidget',array('month'=>$month, 'year'=>$year, 'events'=>$events));?>
</table>

<head>

<style>
body {font-family:Arial, Helvetica, sans-serif; font-size:12px;}
 
.fadein { 
position:relative; height:332px; width:500px; margin:0 auto;
background: url("slideshow-bg.png") repeat-x scroll left top transparent;
padding: 10px;
 }
.fadein img { position:absolute; left:50px; top:80px; }




</style>
 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
$(function(){
	$('.fadein img:gt(0)').hide();
	setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 3000);
});
</script>
 
</head>
<body>

<div class="fadein">
<img src="https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-xpa1/t1.0-9/10347545_4456510787838_5598134013676143985_n.jpg">
<img src="https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xpa1/t1.0-9/10537363_4456510227824_3020636130644429675_n.jpg">
<img src="https://scontent-a-lax.xx.fbcdn.net/hphotos-xpf1/t1.0-9/10550938_4456511747862_5425212068525909161_n.jpg">
<img src="https://fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-xap1/t1.0-9/10411989_4456512627884_6604271508412173389_n.jpg">
</div>
    
    
     
</body>



