/* === DOM === */
const btnTop = document.getElementById('btnTop');
const sections = document.querySelectorAll('section');
const zoneBtns = document.querySelectorAll('.zone-btn');
const zoneTables = document.querySelectorAll('.zone-table');
const teamsGrid = document.getElementById('teamsGrid');

const modal = document.getElementById('teamModal');
const modalTitle = document.getElementById('teamTitle');
const modalInfo = document.getElementById('teamInfo');
const modalLogo = document.getElementById('modalLogo');
const teamStatsList = document.getElementById('teamStats');

let modalClose = null;

/* === ESPERAR A QUE CARGUE EL DOM === */
document.addEventListener("DOMContentLoaded", () => {

  modalClose = modal ? modal.querySelector('.modal-close') : null;

  /* === BOTÓN ARRIBA === */
  window.addEventListener('scroll', () => {
    btnTop.classList.toggle('show', window.scrollY > 300);
  });

  btnTop.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

  /* === ANIMACIONES === */
  const observer = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('visible');
      }
    });
  });

  sections.forEach(s => {
    s.classList.add('fade');
    observer.observe(s);
  });

  /* === ZONAS === */
  zoneBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      zoneBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const zone = btn.dataset.zone;

      zoneTables.forEach(t => {
        t.classList.toggle('hidden', t.dataset.zone !== zone);
      });
    });
  });

  /* === EQUIPOS MODAL === */
  if (teamsGrid) {
    teamsGrid.addEventListener('click', e => {
      const card = e.target.closest('.team-card');
      if (!card) return;

      const info = JSON.parse(card.dataset.team);

      modalLogo.src = card.querySelector('img').src || "";
      modalTitle.textContent = info.name;
      modalInfo.textContent = `Estadio: ${info.stadium} · Fundado: ${info.founded}`;

      teamStatsList.innerHTML = `
        <li>Top goleador: ${info.topScorer}</li>
        <li>Posesión: ${50 + Math.floor(Math.random()*10)}%</li>
        <li>GF: ${Math.floor(Math.random()*25)}</li>
        <li>GC: ${Math.floor(Math.random()*20)}</li>
      `;

      modal.setAttribute("aria-hidden","false");
    });
  }

  /* === CERRAR MODAL === */
  if (modalClose) {
    modalClose.addEventListener("click", () => {
      modal.setAttribute("aria-hidden","true");
    });
  }

  if (modal) {
    modal.addEventListener("click", e => {
      if (e.target === modal) {
        modal.setAttribute("aria-hidden","true");
      }
    });
  }

  /* === ESC === */
  document.addEventListener("keydown", e => {
    if (e.key === "Escape") {
      modal.setAttribute("aria-hidden","true");
    }
  });


  /* === CARGAR PARTIDOS === */
  const tbody = document.getElementById("resultadosBody");

  fetch("obtener_partidos.php")
    .then(r => r.json())
    .then(lista => {
      tbody.innerHTML = "";
      lista.forEach(p => {
        tbody.innerHTML += `
          <tr>
            <td>${p.fecha}</td>
            <td>${p.local} vs ${p.visitante}</td>
            <td>${p.resultado}</td>
          </tr>`;
      });
    });
});
