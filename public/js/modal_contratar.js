(() => {
  const openModal = document.querySelectorAll('.modal_active');
  const modal = document.querySelector('.modal');
  const closeModal = document.querySelector('.modal_close');
  
  openModal.forEach(item => {
    item.addEventListener('click', (e)=>{
      e.preventDefault();
      modal.classList.add('modal--show');
    });
  });

  closeModal.addEventListener('click', (e)=> {
    e.preventDefault();
    modal.classList.remove('modal--show');
  })

  modal.addEventListener('click', (e) => {
    e.preventDefault();
    modal.classList.remove('modal--show');
  })
  
})()