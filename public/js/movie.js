 const SearchButton = document.querySelector('.search-button');
    
        SearchButton.addEventListener('click',async function(){
        const inputKeyword = document.querySelector('.input-keyword');
        const movies = await getMovies(inputKeyword.value);
        updateUI(movies);


        inputKeyword.value = null;

    });


    // ketika tombol diklick tetapi elemen sudah muncul diawal ketika di eksekusi menggunakan event binding
    document.addEventListener('click',async function(e){
        if(e.target.classList.contains('modal-detail-button')){
           const imdbid = e.target.dataset.imdbid;
           const detail = await getMoviesDetail(imdbid);
           updateUIDetail(detail);
        }
    });


function getMoviesDetail(imdbid){
      return  fetch('http://www.omdbapi.com/?apikey=713b2381&i='+imdbid)
            .then(response => response.json())
            .then(response => response
            );
    }

function updateUIDetail(m){
    const movieDetail = showMovieDetails(m);

    const modalBody = document.querySelector('.modal-body');
    modalBody.innerHTML = movieDetail;
}    

function getMovies(inputkeyword){
    return fetch('http://www.omdbapi.com/?apikey=713b2381&s=' + inputkeyword)
        .then(response => response.json())
        .then(response => response.Search)
}



function updateUI(movies){
    let cards = '';
        movies.forEach(m => cards += showCards(m))
            
        const container = document.querySelector('.movie-container');
        container.innerHTML = cards;
}



function showCards(m){
    return `<div class="col-md-4 my-3">
                            <div class="card rounded border border-primary">
                                <img src="${m.Poster}" height="480px" class="card-img-top">
                                <div class="card-body">
                                <center>
                                    <h5 class="card-title" style="font-size: 17px">${m.Title}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">${m.Year}</h6>
                                    <a href="#" class="btn btn-outline-primary modal-detail-button" data-bs-toggle="modal" data-bs-target="#movieDetailModal" data-imdbid="${m.imdbID}">Show Details</a>
                                </center>
                                </div>
                            </div>
            </div>`;
}

function showMovieDetails(m){
    return `<div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3">
                                    <img src="${m.Poster}" class="img-fluid">
                                    </div>
                                    <div class="col-md">
                                        <ul class="list-group" style="font-size: 17px">
                                            <li class="list-group-item"><h4>${m.Title} (${m.Year })</h4></li>
                                            <li class="list-group-item"><strong>Sutradara : </strong> ${m.Director}</li>
                                            <li class="list-group-item"><strong>Actors : </strong>${m.Actors}</li>
                                            <li class="list-group-item"><strong>Writer : </strong>${m.Writer}</li>
                                            <li class="list-group-item"><strong>Plot : </strong> <br> ${m.Plot}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>`;
}
        