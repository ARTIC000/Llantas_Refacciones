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
