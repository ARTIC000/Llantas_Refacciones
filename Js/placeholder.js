function checkInput(input) {
    if (input.value !== '') {
      input.classList.add('filled');
    } else {
      input.classList.remove('filled');
    }
  }
  