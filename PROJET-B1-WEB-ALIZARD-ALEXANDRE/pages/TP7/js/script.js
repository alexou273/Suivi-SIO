// Date de l'événement particulier
const eventDate = new Date("2023-09-08T00:00:00Z");

// Fonction pour mettre à jour l'affichage du compte à rebours
function updateCountdown() {
  const now = new Date();
  const distance = eventDate.getTime() - now.getTime();

  // Calcul des jours, heures, minutes et secondes restantes
  const days = Math.floor(distance / (1000 * 60 * 60 * 24));
  const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Mise à jour de l'affichage
  const countdownElement = document.getElementById("countdown");
  countdownElement.innerHTML = `J-${days} ${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

  // Si l'événement est passé, arrêter le compte à rebours
  if (distance < 0) {
    clearInterval(countdownInterval);
    countdownElement.innerHTML = "L'événement est en cours !";
  }
}

// Mettre à jour le compte à rebours toutes les secondes
const countdownInterval = setInterval(updateCountdown, 1000);