let dragged;
//let  vsidepanel;

/* events fired on the draggable target */
document.addEventListener("drag", event => {
  //console.log("dragging");
  //vsidepanel = document.getElementById('sidepanel').innerHTML;
});

document.addEventListener("dragstart", event => {
	
  // store a ref. on the dragged elem
  event.dataTransfer.effectAllowed = "move";
  dragged = event.target;
  
   
  // make it half transparent
  event.target.classList.add("dragging");
  
});
 
document.addEventListener("dragend", event => {
  // reset the transparency
  //event.target.classList.remove("dragging");
  
});

/* events fired on the drop targets */
document.addEventListener("dragover", event => {
  // prevent default to allow drop
  event.preventDefault();
}, false);

document.addEventListener("dragenter", event => {
  // highlight potential drop target when the draggable element enters it
  if (event.target.classList.contains("dropzone")) {
    event.target.classList.add("dragover");
  }
});

document.addEventListener("dragleave", event => {
  // reset background of potential drop target when the draggable element leaves it
  //if (event.target.classList.contains("dropzone")) {
    //event.target.classList.remove("dragover");
  //}
});

document.addEventListener("drop", event => {
  // prevent default action (open as link for some elements)
  event.preventDefault();
  // move dragged element to the selected drop target
  if (event.target.classList.contains("dropzone")) {
    //event.target.classList.remove("dragover");
    //dragged.parentNode.removeChild(dragged);
	event.target.appendChild(dragged);
	//alert('you are here .. 0');
	 
	//handleDrop(event);
    get_item(dragged);
	//console.log(dragged);
	show_controls(dragged);
	//event.target.appendChild(itm)
	//console.log(dragged.id);
	//console.log(event.target.id);
  }
  
  //alert('refresh side panel here');
  //$('#sidepanel').load('#sidepanel')
  //document.getElementById("sidepanel").innerHTML = vsidepanel;
  
});





function get_item(item){
	//alert('item id: '+item.id);
	       
        $.ajax({
            type: 'GET',
            data: {
                
            },
            url: 'show_sidepanel',
            success: function(result) {
                //ret_max_bid = result;
                //console.log(result);
                //localStorage.setItem(recid, ret_max_bid);
                 $('#sidepanel').html(result);
                //$('#hfields_list').html(result);
                //alert('new list: '+result);
            }
        });
		
	//document.getElementById("sidepanel").innerHTML.reload;
	//console.log(document.getElementById('sortablelist').innerHTML);
}

function show_controls(dropedItem){
	//alert(dropedItem.id);
	document.getElementById('controls_'+dropedItem.id).style.display='block';
}

 function handleDrop(e) {
	//  console.log('handleDrop: ');
	//  console.log(e);
	 //e.innerHTML = '<input type="text" />';
    // if (e.stopPropagation) {
      // e.stopPropagation(); // stops the browser from redirecting.
    // }

    return false;
  }
  
  
  function remove_item(itmid){
	  //alert('you are here .. 1: '+itmid);
	  //console.log(itmid);
	  if(confirm("Are you sure !")){
	   $("#"+itmid).remove();
	  }
	  
  }
  
  function showattribs(itemtype, divid){
			var datastring;
			datastring = "itemtype="+itemtype+"&divid="+divid;
			//alert(datastring);
			$("body").toggleClass("right-bar-enabled");
			
			$.ajax({    //create an ajax request to load_page.php
				type: "GET",
				data : datastring,
				url: "ajax_item_properties",             
				dataType: "html",   //expect html to be returned                
				cache : false,
				success: function(response){  
					console.log(response);                  
					//$("#right_bar_item_properties").html(response); 
					document.getElementById('right_bar_item_properties').innerHTML = response
					//alert(response);
					
				}
			});
			
		}


		
			
			