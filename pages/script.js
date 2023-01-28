
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
    // hide all sections
    var sections = document.querySelectorAll('.section');
    sections.forEach(function(section) {
      section.style.display = 'none';
    });
    // show selected section
    var section = document.getElementById(id);
    section.style.display = 'block';
    // history.pushState({}, id, '#' + id); // update URL
  }