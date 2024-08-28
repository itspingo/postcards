	
	

		let fabcanvas = new fabric.Canvas();
		let fabcanvasfront = new fabric.Canvas('upper_canvas');
		// let fabcanvasback = new fabric.Canvas('lower_canvas');
		// alert('hi...2');

		update_working_convas(fabcanvasfront);
		// alert('hi...3');
			
		function update_working_convas(fabcanvasname){
		
			fabcanvas = fabcanvasname;
			// alert('update_working_convas func is called');
			// document.getElementById('div_canvas_front').style.display="none";
			// document.getElementById('div_canvas_back').style.display="none";
			// document.getElementById('div_canvas_right').style.display="none";
			// document.getElementById('div_canvas_left').style.display="none";
			
			// document.getElementById(divname).style.display="block";
			
			// if(divname=='div_canvas_front'){
			// 	fabcanvas = fabcanvasfront;
			// }else if(divname=='div_canvas_back'){
			// 	fabcanvas = fabcanvasback;
			// }else {
			// 	fabcanvas = fabcanvasfront;
			// }
			
		}



		// /* --------------- start: image upload ------------------ */
		// document.getElementById('imgLoader').addEventListener("change", function (e) {
		//   var file = e.target.files[0];
		//   var reader = new FileReader();
		//   reader.onload = function (f) {
		// 	var data = f.target.result;                    
		// 	fabric.Image.fromURL(data, function (img) {
		// 	  var oImg = img.set({left: 0, top: 0, angle: 0}).scale(0.9);
		// 	  fabcanvas.add(oImg).renderAll();
		// 	  var a = fabcanvas.setActiveObject(oImg);
		// 	  var dataURL = fabcanvas.toDataURL({format: 'png', quality: 0.8});
		// 	});
		//   };
		//   reader.readAsDataURL(file);
		// });
		
		
		/* --------------- end: image upload ------------------ */



		/* --------------- start: change image object properties ------------------ 

		document.getElementById('image-color').onchange = function() {
			fabcanvas.getActiveObject().set("fill", this.value);
            fabcanvas.renderAll();
        };
		
		
		document.getElementById('image-bg-color').onchange = function() {
            fabcanvas.getActiveObject().set('backgroundColor',this.value);
            fabcanvas.renderAll();
        };
		

		document.getElementById('image-stroke-color').onchange = function() {
		   fabcanvas.getActiveObject().set('stroke',this.value);
            fabcanvas.renderAll();
        };	

		document.getElementById('image-stroke-width').onchange = function() {
            fabcanvas.getActiveObject().set('strokeWidth',this.value);
            fabcanvas.renderAll();
        };				
	
	/* --------------- end: change image object properties ------------------ */
		
    /* --------------- start: change text object properties ------------------ */
		
		// document.getElementById('text-color').onchange = function() {
		// 	fabcanvas.getActiveObject().set("fill", this.value);
        //     fabcanvas.renderAll();
        // };
		
		
		// document.getElementById('text-bg-color').onchange = function() {
		// 	fabcanvas.getActiveObject().set('backgroundColor',this.value);
        //     fabcanvas.renderAll();
        // };
		

		// document.getElementById('text-stroke-color').onchange = function() {
		//    fabcanvas.getActiveObject().set('stroke',this.value);
        //     fabcanvas.renderAll();
        // };	

		// document.getElementById('text-stroke-width').onchange = function() {
        //     fabcanvas.getActiveObject().set('strokeWidth',this.value);
        //     fabcanvas.renderAll();
        // };				
	
		// document.getElementById('font-family').onchange = function() {
        //     fabcanvas.getActiveObject().set('fontFamily',this.value);
        //     fabcanvas.renderAll();
        // };
		
		// document.getElementById('text-font-size').onchange = function() {
        //     fabcanvas.getActiveObject().set('fontSize',this.value);
        //     fabcanvas.renderAll();
        // };
		
		/* document.getElementById('text-line-height').onchange = function() {
            fabcanvas.getActiveObject().set('lineHeight',this.value);
            fabcanvas.renderAll();
        }; */
		
		/* document.getElementById('text-align').onchange = function() {
            fabcanvas.getActiveObject().setTextAlign(this.value);
            fabcanvas.renderAll();
        }; */
		
	
		// radios5 = document.getElementsByName("fonttype");  // wijzig naar button
		// for(var i = 0, max = radios5.length; i < max; i++) {
		// 	radios5[i].onclick = function() {
				
		// 		if(document.getElementById(this.id).checked == true) {
		// 			if(this.id == "text-cmd-bold") {
		// 				fabcanvas.getActiveObject().set("fontWeight", "bold");
		// 			}
		// 			if(this.id == "text-cmd-italic") {
		// 				fabcanvas.getActiveObject().set("fontStyle", "italic");
		// 			}
		// 			if(this.id == "text-cmd-underline") {
		// 				fabcanvas.getActiveObject().set("underline", true);
		// 			}
		// 			if(this.id == "text-cmd-linethrough") {
		// 				fabcanvas.getActiveObject().set("linethrough", true);
		// 			}
		// 			if(this.id == "text-cmd-overline") {
		// 				fabcanvas.getActiveObject().set("overline", true);
		// 			}
					
					
					
		// 		} else {
		// 			if(this.id == "text-cmd-bold") {
		// 				fabcanvas.getActiveObject().set("fontWeight", "");
		// 			}
		// 			if(this.id == "text-cmd-italic") {
		// 				fabcanvas.getActiveObject().set("fontStyle", "");
		// 			}  
		// 			if(this.id == "text-cmd-underline") {
		// 				fabcanvas.getActiveObject().set("underline", false);
		// 			}
		// 			if(this.id == "text-cmd-linethrough") {
		// 				fabcanvas.getActiveObject().set("linethrough", false);
		// 			}  
		// 			if(this.id == "text-cmd-overline") {
		// 				fabcanvas.getActiveObject().set("overline", false);
		// 			}
		// 		}
				
				
		// 		fabcanvas.renderAll();
		// 	}
		// }
		/* --------------- end: change text object properties ------------------ */
		
		
		
		
		function addcCanvasImage(imageURL){
			// alert(imageURL);
			var imageURL2 = 'http://127.0.0.1:8001/website/assets/images/'+imageURL;

			// If the user doesn't pick an option of the select, clear the canvas
			// if(imageURL == 'none'){
			// 	fabcanvas.clear();
			// 	return;
			// }

			// Create a new image that can be used in Fabric with the URL
			fabric.Image.fromURL(imageURL2, function(img) {                   
				img.scaleToHeight(300);
				img.scaleToWidth(300); 
				fabcanvas.centerObject(img);
				fabcanvas.add(img);
				fabcanvas.renderAll();
			});
		}
		
		function change_product_color(color){
			//alert('color: '+color);
			document.getElementById("canvas-div").style.backgroundColor = color;
			document.getElementById("div_mini_front").style.backgroundColor = color;
			document.getElementById("div_mini_back").style.backgroundColor = color;
			document.getElementById("div_mini_right").style.backgroundColor = color;
			document.getElementById("div_mini_left").style.backgroundColor = color;
			
		}
		
		
		
		function add_text(){
			let usrtxt = document.getElementById('user_text').value; 
			//alert(usrtxt);
			var text = new fabric.Text(usrtxt, {
			 /* left: 100,
			  top: 100, */
			  fill: 'black'
			});
			fabcanvas.add(text);
			fabcanvas.centerObject(text);
			fabcanvas.renderAll();
					
		}
		
		function load_team_sample(){
			let vsamplename = document.getElementById('sample_name').value; 
			let vsamplenumber = document.getElementById('sample_number').value; 
			
			var textname = new fabric.Text(vsamplename, {
			  left: 10,
			  top: 10,
			  //originX: 'center',
			  fill: 'black'
			});
			fabcanvas.add(textname);

			
			var textnumber = new fabric.Text(vsamplenumber, {
			  left: 10,
			  top: 50, 
			  fontSize: 150,
			  //originX: 'center',
			  fill: 'black'
			});
			fabcanvas.add(textnumber);
			
			fabcanvas.renderAll();
			
		} 
		
		function object_duplicate(){
			activeObject = fabcanvas.getActiveObject();
			activeObject.clone(function(clone) {
				fabcanvas.add(clone.set({
					left: activeObject.left + 10, 
					top: activeObject.top + 10
				}));
			});
		}
					
		function object_delete(){
			var delit = confirm('Are you sure?');
			if(delit){
				fabcanvas.remove(fabcanvas.getActiveObject());
			}
		}		
		
		function object_center_horizontal(){
			activeObject = fabcanvas.getActiveObject();
			
			activeObject.set({
				left: (fabcanvas.width / 2) - ((activeObject.width * activeObject.scaleX) / 2)
			  });
			activeObject.setCoords();
			fabcanvas.renderAll();
		}
		
		
		function object_flip_horizontal(){
			activeObject = fabcanvas.getActiveObject();
			activeObject.toggle('flipX',true);
			fabcanvas.renderAll();
		}
		
		function object_flip_vertical(){
			activeObject = fabcanvas.getActiveObject();
			activeObject.toggle('flipY',true);
			fabcanvas.renderAll();
		}
		
		function object_center_vertical(){
			activeObject = fabcanvas.getActiveObject();
			
			activeObject.set({
				top: (fabcanvas.height / 2) - ((activeObject.height * activeObject.scaleY) / 2)
			  });
			activeObject.setCoords();
			fabcanvas.renderAll();
		}
		
		 
		function object_copy(){
			fabcanvas.getActiveObject().clone(function(cloned) {
				_clipboard = cloned;
			});
		}
		
		function object_paste(){
			_clipboard.clone(function(clonedObj) {
			fabcanvas.discardActiveObject();
				clonedObj.set({
					left: clonedObj.left + 10,
					top: clonedObj.top + 10,
					evented: true,
				});
				_clipboard.top += 10;
				_clipboard.left += 10;
				fabcanvas.add(clonedObj);
				fabcanvas.setActiveObject(clonedObj);
				fabcanvas.renderAll(); 
			});
		}
		
		
		function send_toback(){
			activeObject = fabcanvas.getActiveObject();
			fabcanvas.sendToBack(activeObject,true);
		}
		
		function bring_tofront(){
			activeObject = fabcanvas.getActiveObject();
			fabcanvas.bringToFront(activeObject,true);
		}
		
		function step_up(){
			 var activeObject = fabcanvas.getActiveObject();
			  if (activeObject) {
				fabcanvas.bringForward(activeObject);
			  }
		}
		
		function step_down(){
			 var activeObject = fabcanvas.getActiveObject();
			  if (activeObject) {
				fabcanvas.sendBackwards(activeObject);
			  }
		}
		
		
		function onObjectSelected(o){
			//activeObject = fabcanvas.getActiveObject()
			activeObject = o.target;

			if(activeObject.isType('text')){
			   //alert('text is selected');
			   //show_option_window('text');
			   openWindow(event,'div_text_options');
			   
			   let fontname =  activeObject.fontFamily;
			   document.getElementById('font-family').value=fontname;
			   
			   let fontsize =  activeObject.fontSize;
			   document.getElementById('text-font-size').value=fontsize;
			   
			   let fontcolor =  activeObject.fill;
			   document.getElementById('text-color').value=fontcolor;
			   
			   let strokecolor =  activeObject.stroke;
			   document.getElementById('text-stroke-color').value=strokecolor;
			   
			   let vstrokewidth =  activeObject.strokeWidth;
			   document.getElementById('text-stroke-width').value=vstrokewidth;
			   
			   let vbgcolor =  activeObject.backgroundColor;
			   document.getElementById('text-bg-color').value=vbgcolor;
			   
			   
			   let isitalic =  activeObject.fontStyle;
			   //alert('font style: '+isitalic);
			   if(isitalic=='italic'){
				 document.getElementById('text-cmd-italic').checked = true  ;
			   }else{
				   document.getElementById('text-cmd-italic').checked = false  ;
			   }
			   
			    let isbold =  activeObject.fontWeight;
			   //alert('font style: '+isbold);
			   if(isbold=='bold'){
				 document.getElementById('text-cmd-bold').checked = true  ;
			   }else{
				   document.getElementById('text-cmd-bold').checked = false  ;
			   }
				  
			    let isunderline =  activeObject.underline;
			   //alert('font style: '+isbold);
			   if(isunderline){
				 document.getElementById('text-cmd-underline').checked = true  ;
			   }else{
				   document.getElementById('text-cmd-underline').checked = false  ;
			   }
			   
			   let islinethrough =  activeObject.linethrough;
			   //alert('font style: '+isbold);
			   if(islinethrough){
				 document.getElementById('text-cmd-linethrough').checked = true  ;
			   }else{
				   document.getElementById('text-cmd-linethrough').checked = false  ;
			   }
			   
			   
			   let isoverline =  activeObject.overline;
			   //alert('font style: '+isbold);
			   if(isoverline){
				 document.getElementById('text-cmd-overline').checked = true  ;
			   }else{
				   document.getElementById('text-cmd-overline').checked = false  ;
			   }
			}else if(activeObject.isType('image')){
			  //alert('image is selected');
			  //show_option_window('image');
			  openWindow(event,'div_image_options');
			  
			  // let imagecolor =  activeObject.fill;
			  // document.getElementById('image-color').value=imagecolor;
			   
			}
			else if( activeObject.isType('xyz')){
			  //display shape logic
			}
		}

		fabcanvas.on('object:selected', onObjectSelected);
		
		
		
		function openWindow(evt, menu) {
		  var i, tabcontent, tablinks;
		  tabcontent = document.getElementsByClassName("tabcontent");
		  for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
		  }
		  tablinks = document.getElementsByClassName("tablinks");
		  for (i = 0; i < tablinks.length; i++) {
			tablinks[i].className = tablinks[i].className.replace(" active", "");
		  }
		  document.getElementById(menu).style.display = "block";
		  evt.currentTarget.className += " active";
		}

		// document.getElementById("defaultOpen").click();
		
		// When the user selects a picture that has been added and press the DEL key
		// The object will be removed !
		document.addEventListener('keydown', function(e) {
			var keyCode = e.keyCode;
			alert('key: ' + keyCode);
			if (keyCode == 46) { // 46 is the key code for DELETE
			  console.log("Removing selected element on Fabric.js on DELETE key !");
			  var activeObject = fabcanvas.getActiveObject();
			  if (activeObject) {
				fabcanvas.remove(activeObject);
				fabcanvas.discardActiveObject(); // Deselect the object
				fabcanvas.renderAll(); // Re-render the canvas to reflect changes
			  } else {
				console.log("No active object to remove.");
			  }
			}
		  }, true);
		  
		
		
		
		
	
