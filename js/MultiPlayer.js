const music = document.querySelector("audio")
const play = document.getElementById("play");
const img = document.querySelector("img");
const artist = document.getElementById("artist");
const title = document.getElementById("title");
const prev = document.getElementById("prev");
const next = document.getElementById("next");

let progress = document.getElementById("progress");
let total_duration = document.getElementById("duration");
let current_time = document.getElementById("current_time");
const progress_div = document.getElementById("progress_div");





let playing = false;

//for play
const playMusic = () => {
    playing = true;
    music.play();
    play.classList.replace("fa-play" , "fa-pause")
};

//for pause
const pauseMusic =() => {
    playing = false;
    music.pause();
    play.classList.replace("fa-pause" , "fa-play")
};

play.addEventListener("click", () => {
    playing ? pauseMusic() : playMusic();
});

//const loadSongs = (songs) => {
//  title.textContent = songs.title;
//    artist.textContent = songs.artist;
//    music.src ="Songs/" + songs.name + ".mp3";
    //music.src ='music${song.name}.mp3';
  //  img.src = "Covers/" + songs.name + ".jpg";
//};


songIndex = 0;

//loadSongs(songs[0]);

const nextSong = () =>{
  songIndex = (songIndex + 1) % songs.length; 
  loadSongs(songs[songIndex]);
};

const prevSong = () =>{
 songIndex= (songIndex - 1 + songs.length) % songs.length; 
 loadSongs(songs[songIndex]);
};


//progress bar work
music.addEventListener("timeupdate", (event) => {
    
    const {currentTime, duration} = event.srcElement;
    let progress_time = (currentTime / duration) * 100;
    
    progress.style.width = `${progress_time}%`;
    
    //music duration update
    let min_duration = Math.floor(duration / 60);
    let sec_duration = Math.floor(duration % 60);

    if(sec_duration < 10){
        sec_duration = `0${sec_duration}`;
    }

    let tot_duration = `${min_duration}:${sec_duration}`;

    if(duration){
        total_duration.textContent = `${tot_duration}`;
    }
    
    //current duration update
    let min_current = Math.floor(currentTime / 60);
    let sec_current = Math.floor(currentTime % 60);

       if(sec_current < 10){
        sec_current = `0${sec_current}`;
    }
    
    let tot_current = `${min_current}:${sec_current}`;
    current_time.textContent = `${tot_current}`;
      
});

//progress bar function
progress_div.addEventListener('click',(event)=>{
    console.log(event);
    const { duration } = music;
    
    let move_progress = (event.offsetX / event.srcElement.clientWidth) * duration;
    
    music.currentTime = move_progress;
});

music.addEventListener("ended",nextSong);

next.addEventListener("click",nextSong);
prev.addEventListener("click",prevSong);

/*---------like------------*/
