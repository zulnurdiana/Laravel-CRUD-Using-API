let tombolklick = document.querySelector('#tombol');
        let inputan = document.querySelector('#cari');


        function tampilmap(a){
            const latlong = a;
            mapboxgl.accessToken = 'pk.eyJ1IjoienVsbnVyZGlhbmEiLCJhIjoiY2w0ZXZ4NHB1MDdtODNjbG4wZ2djamIwNiJ9.0zrlgu_E8NshFlLHc5o8fg';
                var map = new mapboxgl.Map({
                    container: 'map',
                    style: 'mapbox://styles/mapbox/streets-v11',
                    center: [latlong[1], latlong[0]],
                    zoom: 10
                });

                const marker = new mapboxgl.Marker()
                    .setLngLat([latlong[1], latlong[0]])
                    .addTo(map);

        }

        tombolklick.addEventListener('click',function(){
            fetch("https://api.openweathermap.org/data/2.5/weather?q="+inputan.value+
            "&appid=847f39350c692fbbe0eb13e2051fa106&units=metric&lang=id")
            .then(response => response.json())
            .then(response => {
                
                tampilmap([response.coord.lat, response.coord.lon]);

                // convert unix to tanggal dan jam
                let unix_timestamp = response.dt;
                const milliseconds = unix_timestamp * 1000
                const dateObject = new Date(milliseconds)
                const humanDateFormat = dateObject.toLocaleString()

                const el = document.querySelector('#hasil');
                const time = document.querySelector('#waktu');
                el.innerHTML = `
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><h3>${response.name}, ${response.sys.country}</h3></li>
                                <li class="list-group-item"><h4><span class="badge badge-pill badge-warning">${response.main.temp}°С </span> <span class="badge badge-pill badge-warning">${response.weather[0].description}</span></h4></li>
                                <li class="list-group-item"><h5>Temperature Min : <span class="badge badge-pill badge-success">${response.main.temp_min}°С</span></h5></li>
                                <li class="list-group-item"><h5>Temperature Max : <span class="badge badge-pill badge-danger">${response.main.temp_max}°С</span></h5></li>
                                <li class="list-group-item"><h5>Kecepatan Angin : <span class="badge badge-pill badge-secondary">${response.wind.speed} m/s</span></h5></li>
                                <li class="list-group-item"><h5>Intensitas Awan : <span class="badge badge-pill badge-info">${response.clouds.all}%</span></h5></li>
                                <li class="list-group-item"><h5>Coordinates : <span class="badge  badge-primary">[${response.coord.lat}, ${response.coord.lon}]</span></h5></li>
                            </ul>

                `
                time.innerHTML = `
                <h3 class="text-center mb-3"><span class="badge badge-pill  badge-primary text-dark">${humanDateFormat}</span></h3>
                <hr>`
                
            }).catch(err => {
                alert("Kota atau negara tidak ada!");
            });

            inputan.value = null;
        })
      