import hotelLocations from '../assets/data/hotel-locations.json' assert { type: 'json' };
import coordinatesComunidades from '../assets/data/coordinatesComunidades.json' assert { type: 'json' };
import namesComunidades from '../assets/data/comunidadesAutonomas.json' assert { type: 'json' };

let geoPosition = null;
let locationsDistance = [];
let searchText = '';
let geocoder;
let regionSelected = '';
let coordinatesRendered;
let markerCluster;
let map;
let infoWindow;
let arrayOfLocations = hotelLocations;
let findNearestMarker;

function initMap() {
  const mapElement = document.getElementById('map');
  if (!mapElement) return;
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 5,
    center: { lat: 40.373906, lng: -3.65405 },
  });
  infoWindow = new google.maps.InfoWindow({
    content: '',
    disableAutoPan: true,
  });
  geocoder = new google.maps.Geocoder();

  renderMarkersHandler();

  const findNearestButton = document.createElement('button');
  findNearestButton.textContent = 'Find my nearest location';
  findNearestButton.addEventListener('click', async () => {
    await findNearestHandler();
  });

  const locationButton = document.createElement('button');
  locationButton.textContent = 'Pan to Current Location';

  const inputSearch = document.createElement('input');
  inputSearch.placeholder = 'Introduce a street...';
  inputSearch.setAttribute('type', 'text');
  inputSearch.setAttribute('id', 'search-street');
  inputSearch.addEventListener('input', (e) => {
    searchText = e.target.value;
  });

  const inputSelect = document.createElement('select');
  const optionDisabled = document.createElement('option');
  optionDisabled.value = 'No region selected';
  optionDisabled.text = 'No region selected';
  optionDisabled.selected = true;
  inputSelect.appendChild(optionDisabled);
  namesComunidades.forEach((community) => {
    const option = document.createElement('option');
    option.value = community;
    option.text = community;
    inputSelect.appendChild(option);
  });
  inputSelect.addEventListener('change', (e) => {
    regionSelected = e.target.value;
    if (e.target.value === 'No region selected') {
      regionSelected = '';
      coordinatesRendered && coordinatesRendered.setMap(null);
      renderMarkersHandler();
      return;
    }
    renderRegionPolygons({
      coordinates: gettingCoordinates({ region: e.target.value }),
    });
  });

  const divBtnsContainer = document.createElement('div');
  divBtnsContainer.appendChild(locationButton);
  divBtnsContainer.appendChild(findNearestButton);
  divBtnsContainer.appendChild(inputSearch);
  divBtnsContainer.appendChild(inputSelect);

  map.controls[google.maps.ControlPosition.TOP_CENTER].push(divBtnsContainer);
  locationButton.addEventListener('click', () => {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(
        (position) => {
          const pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude,
          };

          infoWindow.setPosition(pos);
          infoWindow.setContent('Current location');
          // infoWindow.open(map);
          map.setCenter(pos);
          geoPosition = pos;
          findNearestMarker && findNearestMarker.setMap(null);
          findNearestMarker = new google.maps.Marker({
            map: map,
            position: pos,
          });
        },
        () => {
          handleLocationError(true, infoWindow, map.getCenter());
        }
      );
    } else {
      handleLocationError(false, infoWindow, map.getCenter());
    }
  });
}

const getDistanceAndDuration = async ({ origin, destination, callbackFn }) => {
  if (!origin)
    return alert('First get your geolocation or introduce it manually');
  // if (alreadyFindedNearest) return alert('Already finded nearest locations!');

  const originCheck = Array.isArray(origin) ? origin : [origin];
  const destinationCheck = Array.isArray(destination)
    ? destination
    : [destination];

  const service = new google.maps.DistanceMatrixService();
  await service.getDistanceMatrix(
    {
      origins: originCheck,
      destinations: destinationCheck,
      travelMode: 'DRIVING',
    },
    callbackFn
  );
  // alreadyFindedNearest = true;
  renderLocationList();
};

function findNearestLocation(response, status) {
  if (status !== 'OK')
    return alert('There was a problem calculating the distance/duration');

  const origins = response.originAddresses;
  const destinations = response.destinationAddresses;
  const newLocationsArray = [];
  console.log('response', response);

  for (let i = 0; i < origins.length; i++) {
    const results = response.rows[i].elements;
    for (let j = 0; j < results.length; j++) {
      const element = results[j];
      const distance = element.distance.text;
      const duration = element.duration.text;
      const from = origins[i];
      const to = destinations[j];
      newLocationsArray.push({ from, to, distance, duration });
    }
  }
  newLocationsArray.sort(
    (a, b) => +a.distance.replace(/\D+/g, '') - +b.distance.replace(/\D+/g, '')
  );
  locationsDistance = newLocationsArray;
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(
    browserHasGeolocation
      ? 'Error: The Geolocation service failed.'
      : "Error: Your browser doesn't support geolocation."
  );
  infoWindow.open(map);
}

const renderLocationList = () => {
  if (locationsDistance.length === 0) return;

  const distanceLi = document.getElementById('distance-list-container');
  if (distanceLi) distanceLi.remove();

  const mapElement = document.getElementById('map');
  const divListContainer = document.createElement('div');
  divListContainer.setAttribute('id', 'distance-list-container');

  const listTitle = document.createElement('h3');
  listTitle.textContent = `Closest hotel locations from ${
    searchText ? searchText : 'your geoposition'
  }`;
  const distanceUl = document.createElement('ul');

  divListContainer.appendChild(listTitle);
  divListContainer.appendChild(distanceUl);

  locationsDistance.forEach((location) => {
    const locationLi = document.createElement('li');
    locationLi.innerHTML = `<b>${location.distance} (${location.duration})</b> from the hotel in <b>${location.to}</b>`;
    distanceUl.appendChild(locationLi);
  });
  mapElement.insertAdjacentElement('afterend', divListContainer);
};

async function codeAddress() {
  const address = document.getElementById('search-street').value;
  let searchedLat;
  let searchedLng;
  await geocoder.geocode({ address: address }, function (results, status) {
    if (status == 'OK') {
      findNearestMarker && findNearestMarker.setMap(null);
      searchedLat = results[0].geometry.location.lat();
      searchedLng = results[0].geometry.location.lng();
      map.setCenter(results[0].geometry.location);
      findNearestMarker = new google.maps.Marker({
        map: map,
        position: results[0].geometry.location,
      });
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });

  const newInputOrigin = { lat: searchedLat, lng: searchedLng };
  await getDistanceAndDuration({
    origin: newInputOrigin,
    destination: arrayOfLocations.map((location) => location),
    callbackFn: (response, status) => findNearestLocation(response, status),
  });
}

const findNearestHandler = async () => {
  searchText
    ? codeAddress()
    : await getDistanceAndDuration({
        origin: geoPosition,
        destination: arrayOfLocations.map((location) => location),
        callbackFn: (response, status) => findNearestLocation(response, status),
      });
};

const gettingCoordinates = ({ region }) => {
  const indexOfRegion = namesComunidades.indexOf(region);
  return coordinatesComunidades[indexOfRegion];
};

const renderRegionPolygons = ({ coordinates }) => {
  coordinatesRendered && coordinatesRendered.setMap(null);
  coordinatesRendered = new google.maps.Polygon({
    paths: coordinates,
    strokeColor: '#5a3b00',
    strokeOpacity: 0.7,
    strokeWeight: 2,
    fillColor: '#5a3b00',
    fillOpacity: 0.25,
  });

  coordinatesRendered.setMap(map);
  renderMarkersHandler();
};

const renderMarkersHandler = () => {
  const svgMarker = {
    path: 'M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z',
    fillColor: '#5a3b00',
    fillOpacity: 0.6,
    strokeWeight: 0,
    rotation: 0,
    scale: 2,
    anchor: new google.maps.Point(12, 22),
  };
  arrayOfLocations = hotelLocations;
  markerCluster && markerCluster.clearMarkers();

  if (coordinatesRendered && regionSelected) {
    arrayOfLocations = hotelLocations.filter((location) => {
      return google.maps.geometry.poly.containsLocation(
        location,
        coordinatesRendered
      );
    });
  }

  console.log('coordinatesRendered', coordinatesRendered);
  console.log('arrayOfLocations', arrayOfLocations);

  const labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  const markers = arrayOfLocations.map((position, i) => {
    const label = labels[i % labels.length];
    const marker = new google.maps.Marker({
      position,
      icon: svgMarker,
      map: null,
      draggable: false,
      animation: google.maps.Animation.DROP,
    });

    marker.addListener('click', () => {
      infoWindow.setContent(`Hotel ID ${label + i}`);
      infoWindow.open(map, marker);
    });

    return marker;
  });

  markerCluster = new markerClusterer.MarkerClusterer({ map, markers });
};

window.initMap = initMap;
