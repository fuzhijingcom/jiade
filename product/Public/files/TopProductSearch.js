function SubmitKeyClickCpSearch(evt) 
{    
   evt = evt?evt:window.event;   
   if (evt.keyCode == 13) 
   { 
	 //document.getElementById("imgBtnProductSearch").click();
	 return searchForm();
	 return false;
   }   
}