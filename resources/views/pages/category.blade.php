@extends('master')
@section('category')
<h4>Categories</h4>

<?php
    foreach ($all_category_info as $category) {

?>
<ul class="templatemo_list">
    <li><a href="index.html"><?php echo $category->category_name; ?></a></li>
    
</ul>
    <?php } ?>
@endsection
