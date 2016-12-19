function mClick(cell){
        cell.children.tags('A')[0].click();
}

/*********************************************************************************************************/
function OpenWin(id,page,pic)
{
	if ( pic != null)
       	  var wnd = open("/pop.php?p="+page+"&id="+id+"&pic="+pic);
       	else
       	  var wnd = open("/pop.php?p="+page+"&id="+id);
}

