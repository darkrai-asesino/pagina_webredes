<?php
// Iniciamos la sesión y la conexión
session_start();
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Resultados Liga Profesional Argentina 2025</title>
  <link rel="stylesheet" href="Resultados.css" />
  <script defer src="Resultados.js"></script>
</head>
<body>

  <!-- ENCABEZADO -->
  <header class="header">
    <div class="container">
      <h1>Resultados Liga Profesional Argentina ⚽</h1>
      <p>Temporada 2025 — Zonas A &amp; B</p>

      <nav class="main-nav" aria-label="Navegación principal">
        <ul>
          <li><a href="#resultados">Resultados</a></li>
          <li><a href="#posiciones">Posiciones</a></li>
          <li><a href="#equipos">Equipos</a></li>
          <li><a href="#noticias">Noticias</a></li>
          <li><a href="#estadisticas">Estadísticas</a></li>
          <li><a href="#disciplinas">Tarjetas</a></li>

          <?php if (isset($_SESSION['user_id'])): ?>
            <?php if ($_SESSION['rol'] == 'admin'): ?>
              <li><a href="admin/adminindex.php" style="background:var(--accent);color:black;">PANEL ADMIN</a></li>
            <?php endif; ?>
            <li><a href="logout.php">Cerrar Sesión (<?php echo htmlspecialchars($_SESSION['usuario']); ?>)</a></li>
          <?php else: ?>
            <li><a href="login.php">Iniciar Sesión</a></li>
            <li><a href="registro.php">Registrarse</a></li>
          <?php endif; ?>
        </ul>
      </nav>
    </div>
  </header>

  <!-- CONTENIDO PRINCIPAL -->
  <main class="container">

    <!-- SECCIÓN RESULTADOS -->
    <section id="resultados" class="results-section fade">
      <h2>Resultados y Calendario</h2>
      <div class="table-container">
        <table>
          <thead>
            <tr><th>Fecha</th><th>Partido</th><th>Resultado</th></tr>
          </thead>
          <tbody>
            <?php
            $sql_partidos = "SELECT * FROM partidos ORDER BY fecha DESC LIMIT 8";
            $resultado_partidos = $conn->query($sql_partidos);

            if ($resultado_partidos && $resultado_partidos->num_rows > 0) {
              while($partido = $resultado_partidos->fetch_assoc()) {
                $fecha_formateada = date("d/m/Y", strtotime($partido['fecha']));
                echo "<tr>";
                echo "<td>" . htmlspecialchars($fecha_formateada) . "</td>";
                echo "<td>";
                echo "<img src='" . htmlspecialchars($partido['logo_local']) . "' class='team-logo'>" . htmlspecialchars($partido['equipo_local']);
                echo " vs ";
                echo "<img src='" . htmlspecialchars($partido['logo_visitante']) . "' class='team-logo'>" . htmlspecialchars($partido['equipo_visitante']);
                echo "</td>";
                echo "<td class='score'>" . htmlspecialchars($partido['goles_local']) . " - " . htmlspecialchars($partido['goles_visitante']) . "</td>";
                echo "</tr>";
              }
            } else {
              echo "<tr><td colspan='3'>No hay partidos cargados todavía.</td></tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </section>

    <!-- SECCIÓN POSICIONES -->
    <section id="posiciones" class="standings-section fade">
      <h2>Tabla de Posiciones — Zonas</h2>
      <div class="zone-tabs" role="tablist">
        <button class="zone-btn active" data-zone="A">Zona A</button>
        <button class="zone-btn" data-zone="B">Zona B</button>
      </div>
      <div class="table-container zone-table" data-zone="A">
        <table>
          <thead><tr><th>#</th><th>Equipo</th><th>PJ</th><th>G</th><th>E</th><th>P</th><th>GF</th><th>GC</th><th>PTS</th></tr></thead>
          <tbody>
            <tr><td>1</td><td><img src="river.png" class="team-logo">River Plate</td><td>12</td><td>8</td><td>3</td><td>1</td><td>24</td><td>9</td><td>27</td></tr>
            <tr><td>2</td><td><img src="racing.png" class="team-logo">Racing Club</td><td>12</td><td>7</td><td>3</td><td>2</td><td>22</td><td>11</td><td>24</td></tr>
            <tr><td>3</td><td><img class="team-logo">Talleres</td><td>14</td><td>7</td><td>4</td><td>3</td><td>20</td><td>12</td><td>25</td></tr>
        <tr><td>4</td><td><img class="team-logo">Vélez</td><td>14</td><td>7</td><td>3</td><td>4</td><td>19</td><td>13</td><td>24</td></tr>
        <tr><td>5</td><td><img class="team-logo">Estudiantes</td><td>14</td><td>6</td><td>5</td><td>3</td><td>18</td><td>14</td><td>23</td></tr>
        <tr><td>6</td><td><img class="team-logo">Gimnasia</td><td>14</td><td>6</td><td>4</td><td>4</td><td>17</td><td>15</td><td>22</td></tr>
        <tr><td>7</td><td><img class="team-logo">Unión</td><td>14</td><td>5</td><td>5</td><td>4</td><td>15</td><td>14</td><td>20</td></tr>
        <tr><td>8</td><td><img class="team-logo">Tigre</td><td>14</td><td>5</td><td>4</td><td>5</td><td>14</td><td>15</td><td>19</td></tr>
        <tr><td>9</td><td><img class="team-logo">Colón</td><td>14</td><td>4</td><td>5</td><td>5</td><td>12</td><td>14</td><td>17</td></tr>
        <tr><td>10</td><td><img class="team-logo">Instituto</td><td>14</td><td>4</td><td>4</td><td>6</td><td>11</td><td>16</td><td>16</td></tr>
        <tr><td>11</td><td><img class="team-logo">Atl. Tucumán</td><td>14</td><td>3</td><td>6</td><td>5</td><td>12</td><td>17</td><td>15</td></tr>
        <tr><td>12</td><td><img class="team-logo">Defensa y Justicia</td><td>14</td><td>3</td><td>5</td><td>6</td><td>10</td><td>18</td><td>14</td></tr>
        <tr><td>13</td><td><img class="team-logo">Arsenal</td><td>14</td><td>2</td><td>5</td><td>7</td><td>9</td><td>20</td><td>11</td></tr>
        <tr><td>14</td><td><img class="team-logo">Rosario (alt)</td><td>14</td><td>2</td><td>3</td><td>9</td><td>8</td><td>22</td><td>9</td></tr>
          </tbody>
        </table>
      </div>
      <div class="table-container zone-table hidden" data-zone="B">
        <table>
          <thead><tr><th>#</th><th>Equipo</th><th>PJ</th><th>G</th><th>E</th><th>P</th><th>GF</th><th>GC</th><th>PTS</th></tr></thead>
          <tbody>
               <tr><td>1</td><td><img class="team-logo">Boca Juniors</td><td>14</td><td>9</td><td>3</td><td>2</td><td>28</td><td>12</td><td>30</td></tr>
        <tr><td>2</td><td><img class="team-logo">Argentinos Juniors</td><td>14</td><td>8</td><td>4</td><td>2</td><td>24</td><td>10</td><td>28</td></tr>
        <tr><td>3</td><td><img class="team-logo">Independiente</td><td>14</td><td>7</td><td>4</td><td>3</td><td>20</td><td>14</td><td>25</td></tr>
        <tr><td>4</td><td><img class="team-logo">Rosario Central</td><td>14</td><td>7</td><td>3</td><td>4</td><td>19</td><td>13</td><td>24</td></tr>
        <tr><td>5</td><td><img class="team-logo">Newell's</td><td>14</td><td>6</td><td>5</td><td>3</td><td>18</td><td>13</td><td>23</td></tr>
        <tr><td>6</td><td><img class="team-logo">Godoy Cruz</td><td>14</td><td>5</td><td>6</td><td>3</td><td>15</td><td>14</td><td>21</td></tr>
        <tr><td>7</td><td><img class="team-logo">Ind. Rivadavia</td><td>14</td><td>5</td><td>5</td><td>4</td><td>14</td><td>13</td><td>20</td></tr>
        <tr><td>8</td><td><img class="team-logo">Banfield</td><td>14</td><td>5</td><td>4</td><td>5</td><td>13</td><td>15</td><td>19</td></tr>
        <tr><td>9</td><td><img class="team-logo">Lanús</td><td>14</td><td>4</td><td>6</td><td>4</td><td>14</td><td>14</td><td>18</td></tr>
        <tr><td>10</td><td><img class="team-logo">Belgrano</td><td>14</td><td>4</td><td>5</td><td>5</td><td>13</td><td>15</td><td>17</td></tr>
        <tr><td>11</td><td><img class="team-logo">Platense</td><td>14</td><td>3</td><td>6</td><td>5</td><td>12</td><td>16</td><td>15</td></tr>
        <tr><td>12</td><td><img class="team-logo">Barracas Central</td><td>14</td><td>3</td><td>5</td><td>6</td><td>11</td><td>17</td><td>14</td></tr>
        <tr><td>13</td><td><img class="team-logo">Sarmiento</td><td>14</td><td>2</td><td>5</td><td>7</td><td>10</td><td>18</td><td>11</td></tr>
        <tr><td>14</td><td><img class="team-logo">Central Córdoba</td><td>14</td><td>1</td><td>3</td><td>10</td><td>8</td><td>24</td><td>6</td></tr> 
          </tbody>
        </table>
      </div>
    </section>

    <!-- SECCIÓN EQUIPOS -->
    <section id="equipos" class="standings-section fade">
      <h2>Equipos</h2>
      <div class="standings-grid" id="teamsGrid">
        <div class="team-card" data-team='{"name":"River Plate","stadium":"Monumental","zone":"A"}'>
          <img src="river.png" class="team-logo large"><h3>River Plate</h3><p>Zona A — Monumental</p>
        </div>
        <div class="team-card" data-team='{"name":"Boca Juniors","stadium":"La Bombonera","zone":"A"}'>
          <img src="boca.png" class="team-logo large"><h3>Boca Juniors</h3><p>Zona A — La Bombonera</p>
        </div>
      </div>
    </section>

    <!-- SECCIÓN NOTICIAS -->
    <section id="noticias" class="results-section fade">
      <h2>Noticias Destacadas</h2>
      <div class="news-grid">
        <article class="news-card">
          <img src="noticia1.jpg" alt="Noticia 1">
          <h3>River se impone en el superclásico</h3>
          <p>River ganó 2-1 contra Boca con un gol en el final.</p>
        </article>
        <article class="news-card">
          <img src="noticia2.jpg" alt="Noticia 2">
          <h3>Racing mantiene la racha</h3>
          <p>Racing derrotó a Independiente y suma puntos clave.</p>
        </article>
      </div>
    </section>

    <!-- SECCIÓN ESTADÍSTICAS -->
    <section id="estadisticas" class="standings-section fade">
      <h2>Estadísticas Generales</h2>
      <ul class="stats-list">
        <li>⚽ Promedio de goles por partido: <strong>2.45</strong></li>
        <li>🟨 Tarjetas amarillas: <strong>258</strong></li>
        <li>🟥 Tarjetas rojas: <strong>31</strong></li>
      </ul>
    </section>

    <!-- SECCIÓN TARJETAS -->
    <section id="disciplinas" class="standings-section fade">
      <h2>Tarjetas — Top</h2>
      <div class="table-container">
        <table>
          <thead><tr><th>Jugador</th><th>Equipo</th><th>🟨</th><th>🟥</th></tr></thead>
          <tbody>
            <tr><td>Gómez</td><td><img src="huracan.png" class="team-logo">Huracán</td><td>8</td><td>1</td></tr>
          </tbody>
        </table>
      </div>
    </section>

  </main>

  <!-- BOTÓN ARRIBA -->
  <button id="btnTop" title="Volver arriba">⬆</button>

  <!-- PIE DE PÁGINA -->
  <footer class="footer">
    <div class="container">
      <p>&copy; 2025 Liga Argentina.</p>
    </div>
  </footer>

</body>
</html>
