


		// let fabcanvas = new fabric.Canvas();
		let fabcanvas = new fabric.Canvas('upper_canvas');

		initCenteringGuidelines(fabcanvas);
		initAligningGuidelines(fabcanvas);
		var rect = new fabric.Rect({
		width: 100,
		height: 100,
		fill: 'green',
		originX:'center',
		originY:'center',
		left:fabcanvas.width/2,
		top:fabcanvas.height/2,
		});
		var rect2 = new fabric.Rect({
		width: 100,
		height: 100,
		fill: 'green',
		originX:'center',
		originY:'center',
		left:fabcanvas.width/2,
		top:fabcanvas.height/2,
		});
		// fabcanvas.add(rect,rect2);

		// let fabcanvasback = new fabric.Canvas('lower_canvas');
		// alert('hi...2');
		// let website_url = 'https://snoobix.com/demo/postcards/';
		// let website_storage = website_url+'storage/';
		//let website_storage = 'http://127.0.0.1:8001/storage/';

		// update_working_convas(fabcanvasfront);
		// alert('hi...3');
		fabcanvas.on('object:selected', onObjectSelected);
		fabcanvas.on('selection:cleared', function() {
			showCardToolbar();
		  });










		/* --------------- start: image upload ------------------ */



		document.getElementById('upload_image').addEventListener("change", function (e) {
			var file = e.target.files[0];
			var reader = new FileReader();
			reader.readAsDataURL(file);

			reader.onload = function (f) {
				var data = f.target.result;
				var img = new Image();
				img.src = data;

				img.onload = function() {
					var containerWidth = 1183;
					var containerHeight = 458;
					var imgWidth = img.width;
					var imgHeight = img.height;

					var newWidth, newHeight;

					if (imgWidth / imgHeight > containerWidth / containerHeight) {
						// Image is wider relative to the container
						newWidth = containerWidth;
						newHeight = (imgHeight / imgWidth) * containerWidth;
					} else {
						// Image is taller relative to the container
						newHeight = containerHeight;
						newWidth = (imgWidth / imgHeight) * containerHeight;
					}

					// Create a canvas to draw the resized image
					var canvas = document.createElement('canvas');
					canvas.width = newWidth;
					canvas.height = newHeight;
					var ctx = canvas.getContext('2d');
					ctx.drawImage(img, 0, 0, newWidth, newHeight);

					// Get the resized image as data URL
					var resizedDataUrl = canvas.toDataURL();

					// Clear the previous image and initialize the new one
					var imageToCrop = $('#image_to_crop');
					imageToCrop.removeAttr('src').removeAttr('style').removeClass('jcrop-active');
					if (imageToCrop.data('Jcrop')) {
						imageToCrop.data('Jcrop').destroy(); // Ensure Jcrop is destroyed before re-initializing
					}

					// Set the image dimensions to fit within the container while maintaining aspect ratio
					imageToCrop.css({
						width: newWidth + 'px',
						height: newHeight + 'px'
					}).attr('src', resizedDataUrl).on('load', function() {
						showhide('div_crop_image', ['div_upload_image']);

						// Initialize Jcrop with updated settings
						imageToCrop.Jcrop({
							// aspectRatio: 1, // Optional: enforce aspect ratio
							allowSelect: true, // Allow cropper to be selected
							setSelect: [50, 50, 200, 200], // Default selection
							onSelect: function(c) {
								size = {x: c.x, y: c.y, w: c.w, h: c.h};
							},
							onChange: function(c) {
								size = {x: c.x, y: c.y, w: c.w, h: c.h};
							}
						});
					});
				};
			};
		});





		document.getElementById('crop_button').addEventListener("click", function() {
			var jcrop_api = $('#image_to_crop').data('Jcrop');
			var bounds = jcrop_api.getBounds();
			var newWidth = $('#image_to_crop').width();
			var newHeight = $('#image_to_crop').height();
			var origWidth = bounds[0];
			var origHeight = bounds[1];

			// Calculate the scaled selection coordinates
			var scaledX = size.x * (newWidth / origWidth);
			var scaledY = size.y * (newHeight / origHeight);
			var scaledW = size.w * (newWidth / origWidth);
			var scaledH = size.h * (newHeight / origHeight);

			// Set the selection on the jcrop instance
			jcrop_api.setSelect([scaledX, scaledY, scaledX + scaledW, scaledY + scaledH]);

			// Create a canvas to draw the cropped image
			var canvas = document.createElement('canvas');
			canvas.width = scaledW;
			canvas.height = scaledH;
			var context = canvas.getContext('2d');

			// Draw the cropped image onto the canvas
			var image = document.getElementById('image_to_crop');
			context.drawImage(image, scaledX, scaledY, scaledW, scaledH, 0, 0, scaledW, scaledH);

			// Get the data URL of the cropped image
			var croppedDataUrl = canvas.toDataURL();

			// Add cropped image to fabric canvas
			fabric.Image.fromURL(croppedDataUrl, function (img) {
				var oImg = img.set({left: 0, top: 0, angle: 0}).scale(0.9);
				fabcanvas.add(oImg).renderAll();
			});


			hide_div('div_crop_image');
		});



		document.getElementById('crop_button_context').addEventListener("click", function() {
			var jcrop_api = $('#image_to_crop_context').data('Jcrop');

			var bounds = jcrop_api.getBounds();
			var newWidth = $('#image_to_crop_context').width();
			var newHeight = $('#image_to_crop_context').height();
			var origWidth = bounds[0];
			var origHeight = bounds[1];

			// Calculate the scaled selection coordinates
			var scaledX = size.x * (newWidth / origWidth);
			var scaledY = size.y * (newHeight / origHeight);
			var scaledW = size.w * (newWidth / origWidth);
			var scaledH = size.h * (newHeight / origHeight);

			// Create a canvas to draw the cropped image
			var canvas = document.createElement('canvas');
			canvas.width = scaledW;
			canvas.height = scaledH;
			var context = canvas.getContext('2d');

			// Draw the cropped image onto the canvas
			var image = document.getElementById('image_to_crop_context');
			context.drawImage(image, scaledX, scaledY, scaledW, scaledH, 0, 0, scaledW, scaledH);

			// Get the data URL of the cropped image
			var croppedDataUrl = canvas.toDataURL('image/png');

			// Create an image element to load the cropped image
			var croppedImage = new Image();
			croppedImage.onload = function() {
				// Create a temporary canvas to resize the cropped image to fit fabcanvas
				var resizedCanvas = document.createElement('canvas');
				resizedCanvas.width = fabcanvas.width;
				resizedCanvas.height = fabcanvas.height;
				var ctx = resizedCanvas.getContext('2d');

				// Calculate the scale factors for fitting cropped image into fabcanvas
				var scaleX = fabcanvas.width / croppedImage.width;
				var scaleY = fabcanvas.height / croppedImage.height;
				var scaleToFit = Math.max(scaleX, scaleY);

				// Calculate the dimensions for the resized image
				var resizedWidth = croppedImage.width * scaleToFit;
				var resizedHeight = croppedImage.height * scaleToFit;

				// Calculate the positioning to center the resized image on fabcanvas
				var offsetX = (fabcanvas.width - resizedWidth) / 2;
				var offsetY = (fabcanvas.height - resizedHeight) / 2;

				// Draw the resized image onto the resized canvas
				ctx.drawImage(croppedImage, offsetX, offsetY, resizedWidth, resizedHeight);

				// Get the data URL of the resized image
				var resizedDataUrl = resizedCanvas.toDataURL('image/png');

				// Set the background image of div_canvas_container
				document.getElementById('div_canvas_container').style.backgroundImage = 'url(' + resizedDataUrl + ')';
				document.getElementById('div_canvas_container').style.backgroundSize = 'cover'; // optional: to cover the entire div
				document.getElementById('div_canvas_container').style.backgroundPosition = 'center'; // optional: to center the image

				// Optionally hide the crop context
				// hide_div('div_crop_image_context');
			};

			// Load the cropped image data URL into the image element
			croppedImage.src = croppedDataUrl;

			// Optionally add cropped image to fabric canvas
			// fabric.Image.fromURL(croppedDataUrl, function (img) {
			// 	var oImg = img.set({ left: 0, top: 0, angle: 0 }).scale(0.9);
			// 	fabcanvas.add(oImg).renderAll();
			// });

			hide_div('div_crop_image_context');
		});



		 /* ------------------------ replace selected object with new one ------------------------ */
		 function replace_object() {
			var file = imageInput.files[0];
			if (!file) {
			  alert('Please select an image file first.');
			  return;
			}

			var reader = new FileReader();
			reader.onload = function(f) {
			  var data = f.target.result;
			  fabric.Image.fromURL(data, function(img) {
				var activeObject = canvas.getActiveObject();
				if (activeObject) {
				  var oldLeft = activeObject.left;
				  var oldTop = activeObject.top;
				  var oldAngle = activeObject.angle;
				  var oldScaleX = activeObject.scaleX;
				  var oldScaleY = activeObject.scaleY;

				  canvas.remove(activeObject);
				  img.set({
					left: oldLeft,
					top: oldTop,
					angle: oldAngle,
					scaleX: oldScaleX,
					scaleY: oldScaleY
				  });
				  canvas.add(img);
				  canvas.setActiveObject(img);
				  canvas.renderAll();
				  hideToolbar();
				} else {
				  alert('No object selected to replace.');
				}
			  });
			};
			reader.readAsDataURL(file);
		  };



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










		function showmorebackgrounds(recid, moreimage) {
			// alert(moreimage);
			var armoreimages = moreimage.split(',');
			var list_backgrounds = '';
			var bg_image;

			armoreimages.forEach(function(bgimage) {
				bg_image = website_storage +  bgimage.replace('public/', '');
				list_backgrounds += '<span class="item sticker"><img class="lazy entered loaded" onclick="addcBackgroundImage(\'' + recid + '\',\'' + bg_image + '\',\'div_more_stickers\')" data-src="' + bg_image + '" data-ll-status="loaded" src="' + bg_image + '"></span>';
			});

			document.getElementById('more_backgrounds').innerHTML = list_backgrounds;
			showhide('div_more_backgrounds', ['div_backgrounds']);
		}






		function showmoreinsideimages(recid, moreimage) {
			// alert(moreimage);
			var armoreimages = moreimage.split(',');
			var list_inside_images = '';
			var inside_image;
			var inside_image_url;

			armoreimages.forEach(function(insideimage) {
				// inside_image_url = "{{url('storage/'.'" + insideimage.replace('public/', '') + "')}}";
				inside_image = website_storage +  insideimage.replace('public/', '');
				list_inside_images += '<span class="item sticker"><img class="lazy entered loaded" onclick="addcInsideImage(\'' + recid + '\',\'' + inside_image + '\')" data-src="' + inside_image + '" data-ll-status="loaded" src="' + inside_image + '"></span>';
			});

			document.getElementById('more_inside_images').innerHTML = list_inside_images;
			showhide('div_more_inside_images', ['div_inside_images']);
		}


		function showmorestampimages(recid, moreimage) {
			// alert(moreimage);
			var armoreimages = moreimage.split(',');
			var list_stamp_images = '';
			var stamp_image;

			armoreimages.forEach(function(stampimage) {
				stamp_image = website_storage +  stampimage.replace('public/', '');
				list_stamp_images += '<span class="item sticker"><img class="lazy entered loaded" onclick="addStampImage(\'' + recid + '\',\'' + stamp_image + '\')" data-src="' + stamp_image + '" data-ll-status="loaded" src="' + stamp_image + '"></span>';
			});

			document.getElementById('more_stamp_images').innerHTML = list_stamp_images;
			showhide('div_more_stamp_images', ['div_stamp_images']);
		}





		function showmorestampdesigns(recid, moreimage) {
			// alert(moreimage);
			var armoreimages = moreimage.split(',');
			var list_stamp_designs = '';
			var stamp_design;

			armoreimages.forEach(function(stampdesign) {
				stamp_design = website_storage +  stampdesign.replace('public/', '');
				list_stamp_designs += '<span class="item sticker"><img class="lazy entered loaded" onclick="addstampdesign(\'' + recid + '\',\'' + stamp_design + '\')" data-src="' + stamp_design + '" data-ll-status="loaded" src="' + stamp_design + '"></span>';
			});

			document.getElementById('more_stamp_designs').innerHTML = list_stamp_designs;
			showhide('div_more_stamp_designs', ['div_stamp_designs']);
		}





		function showmoresealdesigns(recid, moreimage) {
			// alert(moreimage);
			var armoreimages = moreimage.split(',');
			var list_seal_designs = '';
			var seal_design;

			armoreimages.forEach(function(sealdesign) {
				seal_design = website_storage +  sealdesign.replace('public/', '');
				list_seal_designs += '<span class="item sticker"><img class="lazy entered loaded" onclick="addsealdesign(\'' + recid + '\',\'' + seal_design + '\')" data-src="' + seal_design + '" data-ll-status="loaded" src="' + seal_design + '"></span>';
			});

			document.getElementById('more_seal_designs').innerHTML = list_seal_designs;
			showhide('div_more_seal_designs', ['div_seal_designs']);
		}




		/*
		function showmorecardmusic(musicfiles) {
			// Parse the JSON input
			var parsedMusicFiles = JSON.parse(musicfiles);
			console.log(parsedMusicFiles);
			var card_music_files = '';

			parsedMusicFiles.forEach(function(musicfile) {
				// Construct the URL for the music file
				var vmuscfile = {{url()}} + musicfile.music_file;
				var music_file = vmuscfile.replace('public/','');
				// var music_file = '{{url("storage/".musicfile.music_file'; //'http://127.0.0.1:8001/storage/Ethan_Sturock_Summer_Time.mp3';  //website_storage.''; // + musicfile.replace('public/', '');
				var recno = musicfile.id;
				// Add HTML for each music file
				card_music_files += '<div class="item"> \
					<div class="title no-wrap"> \
						<span id="span_play_icon'+recno+'" ><i class="fas fa-play" style="margin-right: 8px; cursor: pointer;" onclick="playMusic(\'' + music_file + '\',\'' + recno + '\',\''+'Ethan Sturock - Summer Time'+'\')"></i> </span>\
						<span id="span_stop_icon'+recno+'" style="display:none;" ><i class="fas fa-stop" style="margin-right: 8px; cursor: pointer;" onclick="stopMusic(\'' + recno + '\')"></i> </span>\
						<span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:\'Sahl Naskh\';">' + musicfile.title + '</span> \
					</div> \
				</div>';
			});

			// Insert the constructed HTML into the DOM
			document.getElementById('more_cardmusic').innerHTML = card_music_files;
			showhide('div_more_cardmusic', ['div_cardmusic']);
		}
		*/



		function stopMusic(event, recno) {

            if (typeof event != 'undefined' && event != null)
                event.stopPropagation();
			// alert('stop button is pressed');
			// if (currentAudio) {
				// var audio = currentAudio;
				currentAudio.pause();
				currentAudio.currentTime = 0;
				document.getElementById('span_play_icon'+recno).style.display = 'inline';
				document.getElementById('span_stop_icon'+recno).style.display = 'none';
			// }
		}

		function playCurrentMusic(){
			currentAudio.play();

			document.getElementById('span_current_play_icon').style.display = 'none';
			document.getElementById('span_current_stop_icon').style.display = 'block';

		}
		function stopCurrentMusic(){
			currentAudio.pause();
			currentAudio.currentTime = 0;
			document.getElementById('span_current_play_icon').style.display = 'inline';
			document.getElementById('span_current_stop_icon').style.display = 'none';
		}



		function showmoreenvelopdesigns(recid, moreimage) {
			// alert(moreimage);
			const jsonObject = JSON.parse(moreimage);
			var list_envelop_designs = '';
			var thumbnail1 = '';var thumbnail_path = '';
			jsonObject.forEach(design_part => {
				thumbnail_path = design_part.thumbnail;
				thumbnail1 = website_storage + thumbnail_path.replace('public/', '');

				frontImage_path = design_part.front_image;
				backtImage_path = design_part.back_image;
				flapImage_path = design_part.flap_image;

				frontImage = website_storage + frontImage_path.replace('public/', '');
				backImage = website_storage + backtImage_path.replace('public/', '');
				flapImage = website_storage + flapImage_path.replace('public/', '');

				threeImages = "'"+frontImage+"','"+backImage+"','"+flapImage+"'";

				// console.log(`ID: ${design_part.id}, thumbnail: ${design_part.thumbnail}, thumbnail_file: ${thumbnail1}`);
				// thumbnail1 = website_storage +  thumbnail_path.replace('public/', '');

				list_envelop_designs += '<span class="item sticker"><img class="lazy entered loaded" onclick="addenvelopdesign(\'' + recid + '\',' + threeImages + ')" data-src="' + thumbnail1 + '" data-ll-status="loaded" src="' + thumbnail1 + '"></span>';
			  });

			// var armoreimages = moreimage.split(',');

			document.getElementById('more_envelop_designs').innerHTML = list_envelop_designs;
			showhide('div_more_envelop_designs', ['div_envelop_designs']);
		}



		function change_product_color(color){
			//alert('color: '+color);
			document.getElementById("canvas-div").style.backgroundColor = color;
			document.getElementById("div_mini_front").style.backgroundColor = color;
			document.getElementById("div_mini_back").style.backgroundColor = color;
			document.getElementById("div_mini_right").style.backgroundColor = color;
			document.getElementById("div_mini_left").style.backgroundColor = color;

		}




		/* function add_text() {
			// Get the HTML content from CKEditor
			let usrtxt = CKEDITOR.instances.card_text.getData();

			// Create a temporary div to hold the HTML content
			var tempDiv = document.createElement('div');
			tempDiv.innerHTML = usrtxt;
			tempDiv.style.position = 'absolute';
			tempDiv.style.left = '-9999px';
			tempDiv.style.backgroundColor = 'transparent'; // Ensure the background is transparent
			document.body.appendChild(tempDiv);

			// Use html2canvas to convert the HTML content to an image
			html2canvas(tempDiv, { backgroundColor: null }).then(canvas => {
			  var dataUrl = canvas.toDataURL('image/png');

			  fabric.Image.fromURL(dataUrl, function(img) {
				var oImg = img.set({
				  left: 100, // Adjust these values as needed
				  top: 100   // Adjust these values as needed
				});

				fabcanvas.add(oImg);
				fabcanvas.centerObject(oImg);
				fabcanvas.renderAll();
			  });

			  // Remove the temporary div
			  document.body.removeChild(tempDiv);
			});
			hide_div('div_add_text');
		} */


		/* function add_text() {
			// Get the user input text
			let usrtxt = document.getElementById('card_text').value;

			// Get the selected font and color
			let selectedFont = document.getElementById('card_text_font').value; //'ArialCustom'; // Replace with your default or selected font
			let selectedColor = document.getElementById('card_text_color').value;

			// Create a temporary div to hold the text content
			var tempDiv = document.createElement('div');
			tempDiv.innerText = usrtxt;
			tempDiv.style.position = 'absolute';
			tempDiv.style.left = '-9999px';
			tempDiv.style.fontFamily = selectedFont;
			tempDiv.style.color = selectedColor;
			tempDiv.style.backgroundColor = 'transparent'; // Ensure the background is transparent
			document.body.appendChild(tempDiv);

			// Use html2canvas to convert the HTML content to an image
			html2canvas(tempDiv, { backgroundColor: null }).then(canvas => {
				var dataUrl = canvas.toDataURL('image/png');

				fabric.Image.fromURL(dataUrl, function(img) {
					var oImg = img.set({
						left: 100, // Adjust these values as needed
						top: 100   // Adjust these values as needed
					});

					fabcanvas.add(oImg);
					fabcanvas.centerObject(oImg);
					fabcanvas.renderAll();
				});

				// Remove the temporary div
				document.body.removeChild(tempDiv);
			});

			hide_div('div_add_text');
		} */

		function add_text() {
			// Get the user input text
			let usrtxt = document.getElementById('card_text').value;

			// Get the selected font and color
			let selectedFont = document.getElementById('card_text_font').value; //'ArialCustom'; // Replace with your default or selected font
			let selectedColor = document.getElementById('card_text_color').value;
			let alignmentState = document.getElementById('card_text_alignment').value;

			// Create a Fabric text object
			let fabricText = new fabric.IText(usrtxt, {
				left: 100, // Adjust these values as needed
				top: 100,  // Adjust these values as needed
				fontFamily: selectedFont,
				fill: selectedColor,
				textAlign: alignmentState
			});

			// Add the text object to the canvas
			fabcanvas.add(fabricText);
			fabcanvas.centerObject(fabricText);
			fabcanvas.renderAll();

			// Hide the text input div
			hide_div('div_add_text');
		}


		function load_team_sample(){
			let vsamplename = document.getElementById('sample_name').value;
			let vsamplenumber = document.getElementById('sample_number').value;

			var textname = new fabric.IText(vsamplename, {
			  left: 10,
			  top: 10,
			  //originX: 'center',
			  fill: 'black'
			});
			fabcanvas.add(textname);


			var textnumber = new fabric.IText(vsamplenumber, {
			  left: 10,
			  top: 50,
			  fontSize: 150,
			  //originX: 'center',
			  fill: 'black'
			});
			fabcanvas.add(textnumber);

			fabcanvas.renderAll();

		}

		function object_edit() {
			fabcanvas.add(fabcanvas.getActiveObject());

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


		function object_duplicate(){
			activeObject = fabcanvas.getActiveObject();
			activeObject.clone(function(clone) {
				fabcanvas.add(clone.set({
					left: activeObject.left + 10,
					top: activeObject.top + 10
				}));
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

			document.getElementById('selected_toolbar').style.display = 'flex';
			document.getElementById('toolbar_card').style.display = 'none';

		}


		function showCardToolbar(){

			document.getElementById('selected_toolbar').style.display = 'none';
			document.getElementById('toolbar_card').style.display = 'flex';

		}


        function hide_div(divname) {
            document.getElementById(divname).style.display = "none";
        }

        function show_div(divname) {
            document.getElementById(divname).style.display = "flex";
        }

		function show_div_block(divname) {
            document.getElementById(divname).style.display = "block";
        }

        function showhide(divshow, ardivshide) {
            document.getElementById(divshow).style.display = 'flex';
            ardivshide.forEach(function(divhide) {
                document.getElementById(divhide).style.display = 'none';
            });
        }

		function show_hide_block(divshow, ardivshide) {
            document.getElementById(divshow).style.display = 'block';
            ardivshide.forEach(function(divhide) {
                document.getElementById(divhide).style.display = 'none';
            });
        }

		function showmoreimages(divshow, ardivshide) {
            document.getElementById(divshow).style.display = 'block';
            ardivshide.forEach(function(divhide) {
                document.getElementById(divhide).style.display = 'none';
            });
        }

		function showmorestickers(moreimage) {
			var armorstickers = moreimage.split(',');
			var list_stickers = '';
			var sticker_image;

			armorstickers.forEach(function(sticker) {
				sticker_image = website_storage +  sticker.replace('public/', '');
				console.log(sticker_image);
				list_stickers += '<span class="item sticker"><img class="lazy entered loaded" onclick="addcCanvasImage(\'' + sticker_image + '\',\'div_more_stickers\')" data-src="' + sticker_image + '" data-ll-status="loaded" src="' + sticker_image + '"></span>';
				// list_stickers += '<span class="item sticker"><img class="lazy entered loaded"' + sticker_image + '" data-ll-status="loaded" src="' + sticker_image + '"></span>';
			});
			// console.log(list_stickers);
			document.getElementById('more_stickers').innerHTML = list_stickers;
			showmoreimages('div_more_stickers', ['div_stickers']);
		}







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
		if (document.getElementById("defaultOpen")){
			document.getElementById("defaultOpen").click();
		}
		// When the user selects a picture that has been added and press the DEL key
		// The object will be removed !
		document.addEventListener('keydown', function(e) {
			var keyCode = e.keyCode;
			// alert('key: ' + keyCode);
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
