function licz() {
	let polak = document.getElementById('polak').value;
	let nowak = document.getElementById('nowak').value;
	let rysik = document.getElementById('rysik').value;
	let srednia = (parseInt(polak)+parseInt(nowak)+parseInt(rysik))/3
		if ( isNaN(srednia) || isNaN(polak || nowak || rysik) || polak  === "" || nowak  === "" || rysik  === "" ) {
				alert("wpisz poprawne dane");
			}
			else
			{	
	document.getElementById('result').innerHTML = srednia ;
	}
}