function addToWorked(item,module,record){

				if(item.className=='on'){
					item.className='off';
					item.title='not worked';
				w=0;
				}
				else{
					item.className='on';
					w =1;
					item.title='worked';
				}
var url = 'index.php?module=Leads&action=SugarWorked&to_pdf=1&worked_id='+record+'&worked='+w;
YAHOO.util.Connect.asyncRequest('POST',url,false,false);
}

