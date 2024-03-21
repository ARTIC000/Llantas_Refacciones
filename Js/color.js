  let colorActual = "oscuro"; 

  function cambiarColor() {
    const body = document.body;

    // Actualiza el icono
    const icono = document.getElementById('icono-color');
    if (colorActual === "claro") {
      icono.classList.remove('fa-sun');
      icono.classList.add('fa-moon');
    } else {
      icono.classList.remove('fa-moon');
      icono.classList.add('fa-sun');
    }

    if (colorActual === "claro") {
      body.style.backgroundColor = "black";
      body.style.color = "white";

      document.querySelectorAll('.info-panel').forEach(item => {
          item.classList.remove('custom-info-panel');
      });

      document.querySelectorAll('.info-text').forEach(item => {
          item.classList.remove('custom-info-text');
      });

      document.querySelector('.btn').classList.remove('btn-light');
      document.querySelector('.btn').classList.add('btn-dark');

      const iframeDoc = document.querySelector('.table-content').contentDocument;
      const iframeBody = iframeDoc.querySelector('body');
      iframeBody.style.backgroundColor = "black";
      iframeBody.style.color = "white";

      const indexes = iframeDoc.querySelectorAll('.indexes li');
      indexes.forEach(index => {
          index.style.color = "aliceblue";
      });

      const tabContents = iframeDoc.querySelectorAll('.tab-content');
      tabContents.forEach(tab => {
          tab.querySelector('h3').style.color = "white";
          const paragraphs = tab.querySelectorAll('p');
          paragraphs.forEach(paragraph => {
              paragraph.style.color = "rgba(255, 255, 255, 0.7)";
          });
          tab.style.borderBottom = "1px solid white";
      });

      const readMoreButtons = iframeDoc.querySelectorAll('.tab-content button');
      readMoreButtons.forEach(button => {
          button.style.color = "white";
          button.style.borderColor = "white";
      });

      colorActual = "oscuro";
    } else {
      body.style.backgroundColor = "white";
      body.style.color = "black";

      document.querySelectorAll('.info-panel').forEach(item => {
          item.classList.add('custom-info-panel');
      });

      document.querySelectorAll('.info-text').forEach(item => {
          item.classList.add('custom-info-text');
      });

      document.querySelector('.btn').classList.remove('btn-dark');
      document.querySelector('.btn').classList.add('btn-light');

      const iframeDoc = document.querySelector('.table-content').contentDocument;
      const iframeBody = iframeDoc.querySelector('body');
      iframeBody.style.backgroundColor = "white";
      iframeBody.style.color = "black";

      const indexes = iframeDoc.querySelectorAll('.indexes li');
      indexes.forEach(index => {
          index.style.color = "black";
      });

      const tabContents = iframeDoc.querySelectorAll('.tab-content');
      tabContents.forEach(tab => {
          tab.querySelector('h3').style.color = "rgb(106, 4, 19)";
          const paragraphs = tab.querySelectorAll('p');
          paragraphs.forEach(paragraph => {
              paragraph.style.color = "black";
          });
          tab.style.borderBottom = "1px solid transparent";
      });

      const readMoreButtons = iframeDoc.querySelectorAll('.tab-content button');
      readMoreButtons.forEach(button => {
          button.style.color = "black";
          button.style.borderColor = "black";
      });

      colorActual = "claro";
    }
  }
