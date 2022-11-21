let map;

function initMap() {
	map = new google.maps.Map(document.getElementById("map"), {
		center: { lat: 30.45381, lng: 30.31147 },
		zoom: 16,
	});
}

window.initMap = initMap;
