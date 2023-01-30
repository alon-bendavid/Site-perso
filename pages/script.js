
document.addEventListener('DOMContentLoaded',function(){
    // ---------------------------------------working
    // const cv = document.querySelector('.cv');
    // const content = document.querySelector('.TextContent');
    // console.log(content);
    // function present(){
    //     content.innerHTML.style.display = 'block';
    //     // document.getElementById("TextContent").style.display = "block";

    // }
    // document.querySelector('.cv').onclick = present;
    // ------------------------------------------working
       
})





function showSection(id) {
      //starting animation
      gsap.from('#M-plateforme', {
        duration:5 , x:'-30%',ease:'back',delay: 0.5
        
        })
        gsap.from('#M-poolstar', {
          duration:5 , x:'-30%',ease:'back',delay: 0.4
          
          })
          gsap.from('#M-level', {
            duration:5 , x:'-30%',ease:'back',delay: 0.3
            
            })
            gsap.from('#M-taga', {
              duration:5 , x:'-30%',ease:'back',delay: 0.2
              
              })
              gsap.from('#M-ron', {
                duration:5 , x:'-30%',ease:'back',delay: 0.1
                
                })
    // hide all sections
    var sections = document.querySelectorAll('.section');
    sections.forEach(function(section) {
      section.style.display = 'none';
    });
    // show selected section
    var section = document.getElementById(id);
    section.style.display = 'flex';
    // history.pushState({}, id, '#' + id); // update URL
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