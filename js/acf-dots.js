$=jQuery;

function doSomething(e) {
	var posx = 0;
	var posy = 0;
	if (!e) var e = window.event;
	if (e.pageX || e.pageY) 	{
		posx = e.pageX;
		posy = e.pageY;
	}
	else if (e.clientX || e.clientY) 	{
		posx = e.clientX + document.body.scrollLeft
			+ document.documentElement.scrollLeft;
		posy = e.clientY + document.body.scrollTop
			+ document.documentElement.scrollTop;
	}
	
	let cursor = [posx,posy];
	
	return(cursor);
}


acf.add_action('ready', function( ){

	let dots_html = '';
	let image_box = $('.hot-image .image-wrap');
	let image_box_width = $(image_box).width();
	let image_box_height = $(image_box).height();
	let image_box_position = $(image_box).position();
	let image_box_offset= $(image_box).offset();
		
	if (dots_data.length > 0) {
			
		for (let i = 0; i < dots_data.length; i++) {
		  let j = i+1;	
		  dots_html += '<div style="width: 18px; height: 18px; border-radius: 50%; background: red; color: white; font-size: 9px; text-align: center; border: 1px solid white; line-height: 18px; transform: translate(-50%,-50%); valign: middle; position: absolute; left: ' + dots_data[i]['x'] +'%; top: ' + dots_data[i]['y']  + '%;" title="' +  dots_data[i]['text'] +'">' + j +'</div>'
		}

	}

	image_box.append(dots_html);
	
	
	$(image_box).on("click", function (e) {
    	cursor = doSomething(e);
		
		let rect = e.target.getBoundingClientRect();
      	let x = e.clientX - rect.left; //x position within the element.
      	let y = e.clientY - rect.top;  //y position within the element.
		
		let relative_x = Math.round(x / image_box_width * 100);
		let relative_y = Math.round(y / image_box_height * 100);
		
		alert('Координаты точки X:' + relative_x + '%   Y:' + relative_y + '%');
	});
});
