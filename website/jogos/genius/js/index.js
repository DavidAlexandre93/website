// ==== MODEL ====
function MakeButton(btn, cls) {
  this.btn = btn; 
  this.cls = cls;
}

var btns = [new MakeButton(".green", "activeGreen"),
            new MakeButton(".red", "activeRed"),
            new MakeButton(".yellow", "activeYellow"),
            new MakeButton(".blue", "activeBlue")];

var sounds = ["sound1", "sound2", "sound3", "sound4", "error", "victory"];

var randomSequence = [],
    playerSequence = [],
    count = 0,
    strict = false,
    game = false;

function highlightBtn(id) {
  $(btns[id].btn).addClass(btns[id].cls);
      setTimeout(function(){ //wait some time and make background color as it was
      $(btns[id].btn).removeClass(btns[id].cls);
      }, 300);
}

function playSound(id) { 
  $("#" + sounds[id])[0].play(); 
}//.get(0).cloneNode().play();

function playSequence() {
  $(".square").css("pointer-events", "none"); //disable colored buttons
  $("#screen").text(count < 10 ? "0" + count : count); //add zero when necessary  
       var i = 0;
       var interval = setInterval(function() {
        playSound(randomSequence[i]);
        highlightBtn(randomSequence[i]); 
        i++;
        if (i >= randomSequence.length) {
            clearInterval(interval);
            $(".square").css("pointer-events", "auto"); //enable colored buttons
        }
     }, 600);     
  
  playerSequence = []; //clear player input  
}

function randomGenerator() {
    count++; // update current round    
    randomSequence.push(Math.floor(Math.random() * 4));  
    playSequence();
}

//===== MEDIATOR ====
function start() {
  game = game === false ? true : false;
  if (game) {
    randomGenerator(); 
  } else { //if pressed START when game is running
    reset(); //just    
  }
}

function strictHandler() {
  strict = strict === true ? false : true; 
  if (strict) {
     $("#bulb").css("background-color", "#f30a0a"); //light on
  } else {
     $("#bulb").css("background-color", "#32050c");  //light off
  }
}

function reset() {
    randomSequence = [];
    playerSequence = [];
    count = 0;
    strict = false;
    game = false;
    $("#screen").text("--");
}
  
function checkPlayerInput(id) {
  if(game) { //only if was pressed Start     
     playerSequence.push(parseInt(id, 10)); //string into number
     highlightBtn(id);
    
  for (var i = 0; i < playerSequence.length; i++) {
   if (randomSequence[i] !== playerSequence[i]) {
      $("#screen").text("!!");
      playSound(4); // error sound
           setTimeout(function() {// wait 2 sec, then reset or repeat seqence
            if (strict) {             
               reset();                            
            }
            else {
               playerSequence.pop(); //remove last wrong number           
               playSequence();                 
            }
          }, 2000);  
    } else {
       playSound(id); //if reached here, play good sound  
    }
   }
    if (playerSequence.length === 20) {
       setTimeout(function() { //if player repeated right 20 times in a row
          $("#screen").text("WIN");
          playSound(5);
          setTimeout(function(){ 
          reset();
          }, 4000);
       }, 1000);  
     }
    
     else if (randomSequence.length === playerSequence.length) {
       setTimeout(function() { //wait 1sec then repeat sequence and add new btn
       randomGenerator();
       }, 1000);  
     }
  } 
}
//===== MEDIATOR'S END ====

// ==== VIEW ====

$('div').on('click', function() {
  
  if ($(this).is(".start")) {
    start();
  }
  
  if ($(this).is( ".strict" )) {
   strictHandler();   
  }
  
  if ($(this).is(".green, .red, .yellow, .blue")) {
     checkPlayerInput(event.target.id);
  }
});


/* 
//==============================
//WARNING: THE SAME LOGIC BELOW
//==============================
//only ONE global variable, with some properties and methods


var SG = {
  btns: [{ color: ".green", active: "activeGreen" },
         { color: ".red", active: "activeRed" },
         { color: ".yellow", active: "activeYellow" },
         { color: ".blue", active: "activeBlue" }], 
  
  sounds: ["sound1", "sound2", "sound3", "sound4", "error", "victory"],
  
  randomSequence: [],
  playerSequence: [],
  count: 0,
  strict: false,
  game: false
};

SG.highlightBtn = function(id) {
  $(SG.btns[id].color).addClass(SG.btns[id].active);
      setTimeout(function(){ //wait some time and make background color as it was
      $(SG.btns[id].color).removeClass(SG.btns[id].active);
      }, 300);
}

SG.playSound = function(id) { 
  $("#" + SG.sounds[id])[0].play(); 
}

//here and down

SG.playSequence = function() {
  $(".square").css("pointer-events", "none"); //disable colored buttons
  $("#screen").text(SG.count < 10 ? "0" + SG.count : SG.count); //zeropad 
       var i = 0;
       var interval = setInterval(function() {
        SG.playSound(SG.randomSequence[i]);
        SG.highlightBtn(SG.randomSequence[i]); 
        i++;
        if (i >= SG.randomSequence.length) {
            clearInterval(interval);
            $(".square").css("pointer-events", "auto"); //enable colored buttons
        }
     }, 600);     
  
  SG.playerSequence = []; //clear player input  
}

SG.randomGenerator = function() {
    SG.count = SG.count + 1; // update current round    
    SG.randomSequence.push(Math.floor(Math.random() * 4));  
    SG.playSequence();
}

//===== MEDIATOR ====
SG.start = function() {
  if (SG.game === false) {
    SG.randomGenerator(); 
    SG.game = true;
  } else { //if pressed START when game is running
    SG.reset(); //just    
    SG.game = false;
  }
}

SG.strictHandler = function() {
  if (SG.strict === false) {
     $("#bulb").css("background-color", "#f30a0a"); //light on
     SG.strict = true;
  } else {
     $("#bulb").css("background-color", "#32050c");  //light off
     SG.strict = false;
  }
}

SG.reset = function() {
    SG.randomSequence = [];
    SG.playerSequence = [];
    SG.count = 0;
    SG.strict = false;
    SG.game = false;
    $("#screen").text("--");
}
  
SG.checkPlayerInput = function(id) {
  if(SG.game === true) { //only if was pressed Start     
     SG.playerSequence.push(parseInt(id, 10)); //string into number
     SG.highlightBtn(id);
    
  for (var i = 0; i < SG.playerSequence.length; i++) {
   if (SG.randomSequence[i] !== SG.playerSequence[i]) {
      $("#screen").text("!!");
      SG.playSound(4); // error sound
           setTimeout(function() {// wait 2 sec, then reset or repeat seqence
            if (SG.strict === true) {             
               SG.reset();                            
            }
            else {
               SG.playerSequence.pop(); //remove last wrong number           
               SG.playSequence();                 
            }
          }, 2000);  
    } else {
       SG.playSound(id); //if reached here, play good sound  
    }
   }
    if (SG.playerSequence.length === 20) {
       setTimeout(function() { //if player repeated right 20 times in a row
          $("#screen").text("WIN");
          SG.playSound(5);
          setTimeout(function(){ 
          SG.reset();
          }, 4000);
       }, 1000);  
     }
    
     else if (SG.randomSequence.length === SG.playerSequence.length) {
       setTimeout(function() { //wait 1sec then repeat sequence and add new btn
       SG.randomGenerator();
       }, 1000);  
     }
  } 
}
//===== MEDIATOR'S END ====

// ==== VIEW ====

$('div').on('click', function() {
  
  if ($(this).is(".start")) {
    SG.start();
  }
  
  if ($(this).is( ".strict" )) {
   SG.strictHandler();   
  }
  
  if ($(this).is(".green, .red, .yellow, .blue")) {
   SG.checkPlayerInput(event.target.id);
  }
});

*/