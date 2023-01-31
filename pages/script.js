projects.style.display = 'none';

about.style.display = 'block';


const video = document.querySelector('video');
const section = document.querySelector('#experience');

section.addEventListener('mousemove', function(){
   video.play() ;
document.querySelector('video').playbackRate = 0.2;

   
  } )
  
  section.addEventListener('mouseout', function(){
   
   video.pause() ;

 } )



document.addEventListener('DOMContentLoaded',function(){

       
})



//open the 

function showSection(id) {
 
      //starting animation
      gsap.from('#M-plateforme', {
        duration:2.12 , x:'-40',easein:'power4',delay: 0.4
        
        })
        gsap.from('#M-poolstar', {
          duration:1.9 , x:'-40%',easein:'power4',delay: 0.4
          
          })
          gsap.from('#M-level', {
            duration:1.6 , x:'-40%',easein:'power4',delay:0.4
            
            })
            gsap.from('#M-taga', {
              duration:1.3 , x:'-40%',easein:'power4',delay:0.4
              
              })
              gsap.from('#M-ron', {
                duration:1 , x:'-40%',easein:'power4',delay: 0.4
                
                })
    // hide all sections
    let plateforme = document.getElementById('plateforme');

    var sections = document.querySelectorAll('.section');
    sections.forEach(function(section) {
      section.style.display = 'none';
    });
    // show selected section
    var section = document.getElementById(id);
    section.style.display = 'flex';
    // history.pushState({}, id, '#' + id); // update URL
    plateforme.style.display = 'block';

  }
  
  function showExperience(id) {

    // hide all sections
    var experience = document.querySelectorAll('.experience');
    experience.forEach(function(experience) {
      experience.style.display = 'none';
    });
    
    // show selected section
    var experience = document.getElementById(id);
    experience.style.display = 'flex';
    // history.pushState({}, id, '#' + id); // update URL

  }