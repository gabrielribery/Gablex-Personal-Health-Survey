const header = document.querySelector('header');
const startEffectBtn = document.getElementById('start-effect-btn');

startEffectBtn.addEventListener('click', () => {
  header.classList.toggle('rainbow-effect');
  // Hier können Sie den Sound in einer Dauerschleife abspielen
});
