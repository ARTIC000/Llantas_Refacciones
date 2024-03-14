document.addEventListener('DOMContentLoaded', function() {
  window.addEventListener('scroll', revealOnScroll);

  function revealOnScroll() {
    var infoPanels = document.querySelectorAll('.info-panel');

    infoPanels.forEach(function(infoPanel) {
      var bounding = infoPanel.getBoundingClientRect();
      
      if (bounding.top <= window.innerHeight - 100) {
        infoPanel.classList.add('show');
      }
    });
  }
});

document.addEventListener('DOMContentLoaded', function() {
  window.addEventListener('scroll', revealOnScroll);

  function revealOnScroll() {
    var workingspace = document.querySelector('.workingspace');

    var bounding = workingspace.getBoundingClientRect();
    
    if (bounding.top <= window.innerHeight - 100) {
      workingspace.classList.add('show');
    }
  }
});

document.addEventListener('DOMContentLoaded', function() {
    window.addEventListener('scroll', revealOnScroll);
  
    function revealOnScroll() {
      var workingspace = document.querySelector('.table-content');
  
      var bounding = workingspace.getBoundingClientRect();
      
      if (bounding.top <= window.innerHeight - 100) {
        workingspace.classList.add('show');
      }
    }
  });



//   Circle
const circles = document.querySelectorAll('.circle');
const infoContainer = document.querySelector('.info-container');
const infoTexts = document.querySelectorAll('.info-text');

circles.forEach((circle, index) => {
  circle.addEventListener('click', () => {
    infoContainer.style.display = 'block';
    infoTexts.forEach((text, i) => {
      if (i === index) {
        text.style.display = 'block';
      } else {
        text.style.display = 'none';
      }
    });
  });
});

document.addEventListener('DOMContentLoaded', function() {
    window.addEventListener('scroll', revealOnScroll);
  
    function revealOnScroll() {
      var workingspace = document.querySelector('.circle-container');
  
      var bounding = workingspace.getBoundingClientRect();
      
      if (bounding.top <= window.innerHeight - 100) {
        workingspace.classList.add('show');
      }
    }
  });