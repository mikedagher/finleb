<?php
extract($_POST);
if(isset($submit)){
echo '<label for="tm" id="toggle-menu">Navigation <span class="drop-icon">▾</span></label>';
echo '<input type="checkbox" id="tm">';
echo '<ul class="main-menu clearfix">';
echo '<li><a href="#">Sample</a></li>';
echo '<li><a href="#">2-level DD';
echo '<span class="drop-icon">▾</span>';
echo '<label title="Toggle Drop-down" class="drop-icon" for="sm1">▾</label>';
echo '</a>';
echo '<input type="checkbox" id="sm1">';
echo '<ul class="sub-menu">';
echo '<li><a href="#">Item 2.1</a></li>';
echo '<li><a href="#">Item 2.2';
echo '<span class="drop-icon">▾</span>';
echo '<label title="Toggle Drop-down" class="drop-icon" for="sm2">▾</label>';
echo '</a>';
echo '<input type="checkbox" id="sm2">';
echo '<ul class="sub-menu">';
echo '<li><a href="#">Item 2.2.1</a></li>';
echo '<li><a href="#">Item 2.2.2</a></li>';
echo '<li><a href="#">Item 2.2.3</a></li>';
echo '</ul>';
echo '</li>';
echo '<li><a href="#">Item 3.4</a></li>';
echo '</ul>';
echo '</li>';
echo '<li><a href="#">Another Sample</a></li>';
echo '</ul>';
}
?>