<?php 

$bags = array();
if($errors)  {
    $bags = $errors->all();
}
    
?>

@if(count($bags) > 0 ) 

    <div class="alert alert-danger">
        <?php echo  implode('<br />', $bags); ?>
    </div>
   
@endif




@if(session('success')) 
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
@if(session('error')) 
    <div class="alert alert-error">
        {{session('error')}}
    </div>
@endif


