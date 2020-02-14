<?php

/**
 * @file
 * Template to display a view as a table.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $header: An array of header labels keyed by field id.
 * - $caption: The caption for this table. May be empty.
 * - $header_classes: An array of header classes keyed by field id.
 * - $fields: An array of CSS IDs to use for each field id.
 * - $classes: A class or classes to apply to the table, based on settings.
 * - $row_classes: An array of classes to apply to each row, indexed by row
 *   number. This matches the index in $rows.
 * - $rows: An array of row items. Each row is an array of content.
 *   $rows are keyed by row number, fields within rows are keyed by field ID.
 * - $field_classes: An array of classes to apply to each field, indexed by
 *   field id, then row number. This matches the index in $rows.
 * @ingroup views_templates
 */
?>

<table border="2">
<?php
$grid =array();
foreach($rows as $k => $v){
	$grid[$v["field_vt_grid_row"]][$v["field_vt_grid_column"]]=$v["title"]."<br/>".$v["name"];

}
//print_r($v);

for($i=0;$i<=9;$i++){
?>
<tr>

<?php
for($j=0;$j<=9;$j++){
if($j==0 && $i !=0)
	$grid[$i][$j]=$i;
if($j!=0 && $i == 0)
	$grid[$i][$j]=$j;

if(!isset($grid[$i][$j]))
	$grid[$i][$j]=" ";
?>
<td style="width: 15%;">
<?php
	print $grid[$i][$j]."  ";
?>
</td>
<?php
}
?>
</tr>
<?php
}
?>
</table>
