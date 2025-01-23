var counterElement = document.getElementById("counter");
// Définir la durée en secondes
var duration = 5 * 60;

// Fonction pour mettre à jour le compteur
function updateCounter() {
  // Calculer les minutes et les secondes restantes
  var minutes = Math.floor(duration / 60);
  var seconds = duration % 60;

  // Ajouter un zéro devant les chiffres si nécessaire
  var minutesStr = minutes < 10 ? "0" + minutes : minutes;
  var secondsStr = seconds < 10 ? "0" + seconds : seconds;

  // Mettre à jour le contenu du compteur
  counterElement.innerHTML = minutesStr + ":" + secondsStr;

  // Réduire la durée de 1 seconde
  duration--;

  // Vérifier si le compteur est terminé
  if (duration < 0) {
    clearInterval(counterInterval);
    counterElement.innerHTML = "Temps écoulé";
  }
}
updateCounter();
// Appeler la fonction updateCounter toutes les secondes
var counterInterval = setInterval(updateCounter, 1000);

setTimeout(() => {
  window.location.href = "./?action=defaut&status=PaiementAccepted";
}, 4000);
