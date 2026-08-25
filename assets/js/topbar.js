function updateDateTime() {
  const now = new Date();
  const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
  const tanggal = now.toLocaleDateString('id-ID', options);
  const jam = now.toLocaleTimeString('id-ID');
  const elTanggal = document.getElementById("tanggal");
  const elJam = document.getElementById("jam");
  if (elTanggal) elTanggal.innerText = tanggal;
  if (elJam) elJam.innerText = jam;
}
setInterval(updateDateTime, 1000);
updateDateTime();
