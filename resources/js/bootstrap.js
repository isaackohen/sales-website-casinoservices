import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();


const player = new Plyr('#player', {
  title: 'UPGames',
  muted: true,
  controls: false,
  loop: true,
});

const player2 = new Plyr('#player2', {
  title: 'UPGames',
  muted: true,
  loop: true,
  controls: false,
});


