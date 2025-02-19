function mouseOver() {
	Album1.style.width = '250px';
	Album1.style.height = '250px';
	Album1logo.style.height = '250px';
	Album1logo.style.width = '250px';
	Album1.style.margin = '0';
}
function mouseOut() {
	Album1.style.width = '200px';
	Album1.style.height = '200px';
	Album1.style.margin = '25px';
	Album1logo.style.height = '200px';
	Album1logo.style.width = '200px';
}
function album1Click() {
	Album1.remove();
	document.getElementById('gallery').innerHTML = `Galeria splashart'ów`;
	document.getElementById('albumsOrPhotos').innerHTML = `Zdjęcia`;

	let pic1 = document.createElement('div');
	pic1.id = `a1a`;
	pic1.innerHTML = `<img id='i1' src='Aphelios.webp'>`;
	pic1.style.width = '30%';
	pic1.style.height = '25%';
	// pic1.style.position = 'Absolute';
	pic1.style.zIndex = '2';
	// pic1.style.marginTop = '50px';
	// pic1.style.marginLeft = '50px';
	pic1.onmouseover = function mouseOverPic() {
		pic1.style.zIndex = '3';
		i1.style.width = '500px';
		i1.style.height = '295px';
		// pic1.style.marginTop = '25px';
		// pic1.style.marginLeft = '25px';
	};
	pic1.onmouseout = function mouseOutPic() {
		pic1.style.zIndex = '2';
		i1.style.width = '300px';
		i1.style.height = '200px';
		// pic1.style.marginTop = '50px';
		// pic1.style.marginLeft = '50px';
	};
	pic1.onclick = function clickPic() {
		i1.style.width = '1000px';
		i1.style.height = '590px';
		pic1.style.marginTop = '50px';
		pic1.style.marginLeft = '50px';
		pic1.onmouseover = function () { };
		pic1.onmouseout = function () { };
	};
	pic1.ondblclick = function dblclickPic() {
		i1.style.width = '300px';
		i1.style.height = '200px';
		pic1.style.marginTop = '50px';
		pic1.style.marginLeft = '50px';
		pic1.onmouseover = function mouseOverPic() {
			pic1.style.zIndex = '3';
			i1.style.width = '500px';
			i1.style.height = '295px';
			// pic1.style.marginTop = '25px';
			// pic1.style.marginLeft = '25px';
		};
		pic1.onmouseout = function mouseOutPic() {
			pic1.style.zIndex = '2';
			i1.style.width = '300px';
			i1.style.height = '200px';
			// pic1.style.marginTop = '50px';
			// pic1.style.marginLeft = '50px';
		};
	};
	document.getElementById('content').appendChild(pic1);

	let pic2 = document.createElement('div');
	pic2.id = `a2a`;
	pic2.innerHTML = `<img id='i2' src='Caitlyn.webp'>`;
	pic2.style.width = '30%';
	pic2.style.height = '25%';
	// pic2.style.position = 'Absolute';
	pic2.style.zIndex = '2';
	// pic2.style.marginTop = '50px';
	// pic2.style.marginLeft = '400px';
	pic2.onmouseover = function mouseOverPic() {
		pic2.style.zIndex = '3';
		i2.style.width = '500px';
		i2.style.height = '295px';
		// pic2.style.marginTop = '25px';
		// pic2.style.marginLeft = '300px';
	};
	pic2.onmouseout = function mouseOutPic() {
		pic2.style.zIndex = '2';
		i2.style.width = '300px';
		i2.style.height = '200px';
		// pic2.style.marginTop = '50px';
		// pic2.style.marginLeft = '400px';
	};
	pic2.onclick = function clickPic() {
		i2.style.width = '1000px';
		i2.style.height = '590px';
		pic2.style.marginTop = '50px';
		pic2.style.marginLeft = '50px';
		pic2.onmouseover = function () { };
		pic2.onmouseout = function () { };
	};
	pic2.ondblclick = function dblclickPic() {
		i2.style.width = '300px';
		i2.style.height = '200px';
		pic2.style.marginTop = '50px';
		pic2.style.marginLeft = '400px';
		pic2.onmouseover = function mouseOverPic() {
			pic2.style.zIndex = '3';
			i2.style.width = '500px';
			i2.style.height = '295px';
			// pic2.style.marginTop = '25px';
			// pic2.style.marginLeft = '300px';
		};
		pic2.onmouseout = function mouseOutPic() {
			pic2.style.zIndex = '2';
			i2.style.width = '300px';
			i2.style.height = '200px';
			// pic2.style.marginTop = '50px';
			// pic2.style.marginLeft = '400px';
		};
	};
	document.getElementById('content').appendChild(pic2);

	let pic3 = document.createElement('div');
	pic3.id = `a3a`;
	pic3.innerHTML = `<img id='i3' src='Ekko.webp'>`;
	pic3.style.width = '30%';
	pic3.style.height = '25%';
	// pic3.style.position = 'Absolute';
	pic3.style.zIndex = '2';
	// pic3.style.marginTop = '50px';
	// pic3.style.marginLeft = '750px';
	pic3.onmouseover = function mouseOverPic() {
		pic3.style.zIndex = '3';
		i3.style.width = '500px';
		i3.style.height = '295px';
		// pic3.style.marginTop = '25px';
		// pic3.style.marginLeft = '650px';
	};
	pic3.onmouseout = function mouseOutPic() {
		pic3.style.zIndex = '2';
		i3.style.width = '300px';
		i3.style.height = '200px';
		// pic3.style.marginTop = '50px';
		// pic3.style.marginLeft = '750px';
	};
	pic3.onclick = function clickPic() {
		i3.style.width = '1000px';
		i3.style.height = '590px';
		pic3.style.marginTop = '50px';
		pic3.style.marginLeft = '50px';
		pic3.onmouseover = function () { };
		pic3.onmouseout = function () { };
	};
	pic3.ondblclick = function dblclickPic() {
		i3.style.width = '300px';
		i3.style.height = '200px';
		pic3.style.marginTop = '50px';
		pic3.style.marginLeft = '750px';
		pic3.onmouseover = function mouseOverPic() {
			pic3.style.zIndex = '3';
			i3.style.width = '500px';
			i3.style.height = '295px';
			// pic3.style.marginTop = '25px';
			// pic3.style.marginLeft = '650px';
		};
		pic3.onmouseout = function mouseOutPic() {
			pic3.style.zIndex = '2';
			i3.style.width = '300px';
			i3.style.height = '200px';
			// pic3.style.marginTop = '50px';
			// pic3.style.marginLeft = '750px';
		};
	};
	document.getElementById('content').appendChild(pic3);

	let pic4 = document.createElement('div');
	pic4.id = `a4a`;
	pic4.innerHTML = `<img id='i4' src='Rammus.webp'>`;
	pic4.style.width = '30%';
	pic4.style.height = '25%';
	// pic4.style.position = 'Absolute';
	pic4.style.zIndex = '2';
	// pic4.style.marginTop = '300px';
	// pic4.style.marginLeft = '50px';
	pic4.onmouseover = function mouseOverPic() {
		pic4.style.zIndex = '3';
		i4.style.width = '500px';
		i4.style.height = '295px';
		// pic4.style.marginTop = '253px';
		// pic4.style.marginLeft = '25px';
	};
	pic4.onmouseout = function mouseOutPic() {
		pic4.style.zIndex = '2';
		i4.style.width = '300px';
		i4.style.height = '200px';
		// pic4.style.marginTop = '300px';
		// pic4.style.marginLeft = '50px';
	};
	pic4.onclick = function clickPic() {
		i4.style.width = '1000px';
		i4.style.height = '590px';
		pic4.style.marginTop = '50px';
		pic4.style.marginLeft = '50px';
		pic4.onmouseover = function () { };
		pic4.onmouseout = function () { };
	};
	pic4.ondblclick = function dblclickPic() {
		i4.style.width = '300px';
		i4.style.height = '200px';
		pic4.style.marginTop = '300px';
		pic4.style.marginLeft = '50px';
		pic4.onmouseover = function mouseOverPic() {
			pic4.style.zIndex = '3';
			i4.style.width = '500px';
			i4.style.height = '295px';
			// pic4.style.marginTop = '253px';
			// pic4.style.marginLeft = '25px';
		};
		pic4.onmouseout = function mouseOutPic() {
			pic4.style.zIndex = '2';
			i4.style.width = '300px';
			i4.style.height = '200px';
			// pic4.style.marginTop = '300px';
			// pic4.style.marginLeft = '50px';
		};
	};
	document.getElementById('content').appendChild(pic4);

	let pic5 = document.createElement('div');
	pic5.id = `a5a`;
	pic5.innerHTML = `<img id='i5' src='Swain.webp'>`;
	pic5.style.width = '30%';
	pic5.style.height = '25%';
	// pic5.style.position = 'Absolute';
	pic5.style.zIndex = '2';
	// pic5.style.marginTop = '300px';
	// pic5.style.marginLeft = '400px';
	pic5.onmouseover = function mouseOverPic() {
		pic5.style.zIndex = '3';
		i5.style.width = '500px';
		i5.style.height = '295px';
		// pic5.style.marginTop = '253px';
		// pic5.style.marginLeft = '300px';
	};
	pic5.onmouseout = function mouseOutPic() {
		pic5.style.zIndex = '2';
		i5.style.width = '300px';
		i5.style.height = '200px';
		// pic5.style.marginTop = '300px';
		// pic5.style.marginLeft = '400px';
	};
	pic5.onclick = function clickPic() {
		i5.style.width = '1000px';
		i5.style.height = '590px';
		pic5.style.marginTop = '50px';
		pic5.style.marginLeft = '50px';
		pic5.onmouseover = function () { };
		pic5.onmouseout = function () { };
	};
	pic5.ondblclick = function dblclickPic() {
		i5.style.width = '300px';
		i5.style.height = '200px';
		pic5.style.marginTop = '300px';
		pic5.style.marginLeft = '400px';
		pic5.onmouseover = function mouseOverPic() {
			pic5.style.zIndex = '3';
			i5.style.width = '500px';
			i5.style.height = '295px';
			// pic5.style.marginTop = '253px';
			// pic5.style.marginLeft = '300px';
		};
		pic5.onmouseout = function mouseOutPic() {
			pic5.style.zIndex = '2';
			i5.style.width = '300px';
			i5.style.height = '200px';
			// pic5.style.marginTop = '300px';
			// pic5.style.marginLeft = '400px';
		};
	};
	document.getElementById('content').appendChild(pic5);

	let pic6 = document.createElement('div');
	pic6.id = `a6a`;
	pic6.innerHTML = `<img id='i6' src='Urgot.webp'>`;
	pic6.style.width = '30%';
	pic6.style.height = '25%';
	// pic6.style.position = 'Absolute';
	pic6.style.zIndex = '2';
	// pic6.style.marginTop = '300px';
	// pic6.style.marginLeft = '750px';
	pic6.onmouseover = function mouseOverPic() {
		pic6.style.zIndex = '3';
		i6.style.width = '500px';
		i6.style.height = '295px';
		// pic6.style.marginTop = '253px';
		// pic6.style.marginLeft = '650px';
	};
	pic6.onmouseout = function mouseOutPic() {
		pic6.style.zIndex = '2';
		i6.style.width = '300px';
		i6.style.height = '200px';
		// pic6.style.marginTop = '300px';
		// pic6.style.marginLeft = '750px';
	};
	pic6.onclick = function clickPic() {
		i6.style.width = '1000px';
		i6.style.height = '590px';
		pic6.style.marginTop = '50px';
		pic6.style.marginLeft = '50px';
		pic6.onmouseover = function () { };
		pic6.onmouseout = function () { };
	};
	pic6.ondblclick = function dblclickPic() {
		i6.style.width = '300px';
		i6.style.height = '200px';
		pic6.style.marginTop = '300px';
		pic6.style.marginLeft = '750px';
		pic6.onmouseover = function mouseOverPic() {
			pic6.style.zIndex = '3';
			i6.style.width = '500px';
			i6.style.height = '295px';
			// pic6.style.marginTop = '253px';
			// pic6.style.marginLeft = '650px';
		};
		pic6.onmouseout = function mouseOutPic() {
			pic6.style.zIndex = '2';
			i6.style.width = '300px';
			i6.style.height = '200px';
			// pic6.style.marginTop = '300px';
			// pic6.style.marginLeft = '750px';
		};
	};
	document.getElementById('content').appendChild(pic6);

	let pic7 = document.createElement('div');
	pic7.id = `a7a`;
	pic7.innerHTML = `<img id='i7' src='Xayah.jpeg'>`;
	pic7.style.width = '30%';
	pic7.style.height = '25%';
	// pic7.style.position = 'Absolute';
	pic7.style.zIndex = '2';
	// pic7.style.marginTop = '550px';
	// pic7.style.marginLeft = '50px';
	pic7.onmouseover = function mouseOverPic() {
		pic7.style.zIndex = '3';
		i7.style.width = '500px';
		i7.style.height = '295px';
		// pic7.style.marginTop = '503px';
		// pic7.style.marginLeft = '25px';
	};
	pic7.onmouseout = function mouseOutPic() {
		pic7.style.zIndex = '2';
		i7.style.width = '300px';
		i7.style.height = '200px';
		// pic7.style.marginTop = '550px';
		// pic7.style.marginLeft = '50px';
	};
	pic7.onclick = function clickPic() {
		i7.style.width = '1000px';
		i7.style.height = '590px';
		pic7.style.marginTop = '50px';
		pic7.onmouseover = function () { };
		pic7.onmouseout = function () { };
	};
	pic7.ondblclick = function dblclickPic() {
		i7.style.width = '300px';
		i7.style.height = '200px';
		pic7.style.marginTop = '550px';
		pic7.style.marginLeft = '50px';
		pic7.style.marginLeft = '50px';
		pic7.onmouseover = function mouseOverPic() {
			pic7.style.zIndex = '3';
			i7.style.width = '500px';
			i7.style.height = '295px';
			// pic7.style.marginTop = '503px';
			// pic7.style.marginLeft = '25px';
		};
		pic7.onmouseout = function mouseOutPic() {
			pic7.style.zIndex = '2';
			i7.style.width = '300px';
			i7.style.height = '200px';
			// pic7.style.marginTop = '550px';
			// pic7.style.marginLeft = '50px';
		};
	};
	document.getElementById('content').appendChild(pic7);

	let pic8 = document.createElement('div');
	pic8.id = `a8a`;
	pic8.innerHTML = `<img id='i8' src='Yuumi.webp'>`;
	pic8.style.width = '30%';
	pic8.style.height = '25%';
	// pic8.style.position = 'Absolute';
	pic8.style.zIndex = '2';
	// pic8.style.marginTop = '550px';
	// pic8.style.marginLeft = '400px';
	pic8.onmouseover = function mouseOverPic() {
		pic8.style.zIndex = '3';
		i8.style.width = '500px';
		i8.style.height = '295px';
		// pic8.style.marginTop = '503px';
		// pic8.style.marginLeft = '300px';
	};
	pic8.onmouseout = function mouseOutPic() {
		pic8.style.zIndex = '2';
		i8.style.width = '300px';
		i8.style.height = '200px';
		// pic8.style.marginTop = '550px';
		// pic8.style.marginLeft = '400px';
	};
	pic8.onclick = function clickPic() {
		i8.style.width = '1000px';
		i8.style.height = '590px';
		pic8.style.marginTop = '50px';
		pic8.style.marginLeft = '50px';
		pic8.onmouseover = function () { };
		pic8.onmouseout = function () { };
	};
	pic8.ondblclick = function dblclickPic() {
		i8.style.width = '300px';
		i8.style.height = '200px';
		pic8.style.marginTop = '550px';
		pic8.style.marginLeft = '400px';
		pic8.onmouseover = function mouseOverPic() {
			pic8.style.zIndex = '3';
			i8.style.width = '500px';
			i8.style.height = '295px';
			// pic8.style.marginTop = '503px';
			// pic8.style.marginLeft = '300px';
		};
		pic8.onmouseout = function mouseOutPic() {
			pic8.style.zIndex = '2';
			i8.style.width = '300px';
			i8.style.height = '200px';
			// pic8.style.marginTop = '550px';
			// pic8.style.marginLeft = '400px';
		};
	};
	document.getElementById('content').appendChild(pic8);
}

let title = document.getElementById('title');
title.style.width = '100%';
title.style.height = '120px';
title.style.textAlign = 'center';
title.style.backgroundColor = '#379683'
title.style.position = 'Absolute';
title.style.zIndex = '1';
title.style.color = '#EDF5E1';

let content = document.getElementById('content');
content.style.backgroundColor = '#5CDB95';
content.style.width = '100%';
content.style.height = '800px';
content.style.position = 'Absolute';
content.style.marginTop = '120px';
content.style.zIndex = '1';

let copyright = document.getElementById('copyright');
copyright.style.textAlign = 'center';
copyright.style.width = '100%';
copyright.style.height = '90px';
copyright.style.backgroundColor = '#05386B';
copyright.style.position = 'Absolute';
copyright.style.marginTop = '920px';
copyright.style.zIndex = '1';
copyright.style.color = '#EDF5E1';

let Album1 = document.getElementById('Album1');
let Album1logo = document.getElementById('Album1logo');
Album1.style.width = '200px';
Album1.style.height = '200px';
Album1.style.zIndex = '2';
Album1.style.margin = '25px';
Album1.onmouseover = function () { mouseOver() };
Album1.onmouseout = function () { mouseOut() };
Album1.onclick = function () { album1Click() };