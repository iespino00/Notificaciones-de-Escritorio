const notifier = require('node-notifier');
// String
//notifier.notify('¡Vaciar la lavadora!');
// Object
notifier.notify({
  'title': 'Imaginanet Blog',
  'subtitle': 'Mantenimiento diario',
  'message': 'Acceder y aprobar los comentarios de los usuarios',
  'icon': 'logo.png',
  'contentImage': 'logo.png',
  'sound': 'sound.mp3',
  'wait': true


});